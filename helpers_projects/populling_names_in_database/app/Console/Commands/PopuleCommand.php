<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
use App\Models\User;
use DateTime;

class PopuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'popule {count? : Counting how much to populate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public $fp;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $usersInDatabase = User::all()->count();
        if ($usersInDatabase > 0) {
            print(
                "The database already have users. Please, clean the users table before execute the command.\n"
            );
        } else {
            $this->populeIfArgumentProvided(
                $this->argument('count')
            );
        }
    }

    private function populeIfArgumentProvided($howMuch) : void
    {
        if ($howMuch) {
            $this->popule($howMuch);
        } else {
            print("You forget to set an amount. Type \"php artisan popule {number_to_popule}\".\n");
        }
    }

    private function popule(int $howMuch) : void
    {
        $this->fp = fopen(
            "populling-output-" . (new DateTime())->format('Ymd-H\hi\ms\s.u') . ".txt", 
            "w"
        );
        
        $this->output(
            "Will try to fill the database with " . $howMuch . " users."
        );
        
        config(['popule.count' => $howMuch]);
        
        $startDateTime = new DateTime();
        $this->output(
            "Starting filling at " . $this->formatDateTime($startDateTime) . "."
        );
        $this->output(
            "Filling..."
        );
        
        Artisan::call('db:seed');
        
        $endDateTime = new DateTime();

        $this->output(
            "Finished at " . $this->formatDateTime($endDateTime) . "."
        );

        $this->output(
            "It tooks " . $this->amountTimeInString($startDateTime, $endDateTime) . " to complete."
        );

        fclose($this->fp);
    }

    private function output(string $string) : void
    {
        $stringWithNewLine = $string . "\n";
        print($stringWithNewLine);
        fwrite($this->fp, $stringWithNewLine);
    }

    private function formatDateTime(DateTime $dateTime) : string
    {
        return $dateTime->format('Y-m-d H:i:s.u');
    }

    private function amountTimeInString(DateTime $dateTimeStart, DateTime $dateTimeEnd) : string
    {
        $interval = $dateTimeStart->diff($dateTimeEnd);

        $hours = $interval->format('%H');
        $minutes = $interval->format('%I');
        $seconds = $interval->format('%S');
        $miliseconds = $interval->format('%f');

        return "${hours} hours, ${minutes} minutes, ${seconds} seconds and ${miliseconds} milssenconds";
    }
}

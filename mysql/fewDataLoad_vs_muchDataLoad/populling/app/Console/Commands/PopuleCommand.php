<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Exception;

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
        $howMuch = $this->argument('count');
        if ($howMuch) {
            print("Will populate with " . $howMuch);
        } else {
            print("You forget to set an amount");
        }
        print("\n");
    }
}

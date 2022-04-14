<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Person;

class PopuleCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'popule {count}';

    /**
     * @var string
     */
    protected $description = 'Populates the database with dummy data';

    /**
     * @return int
     */
    public function handle()
    {
        $peopleCount = $this->argument('count');
        
        print("Will popule database with $peopleCount people.\n");
        Person::factory()->count($peopleCount)->create();
        
        return 0;
    }
}

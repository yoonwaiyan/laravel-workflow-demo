<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Demo\Runner;

class App extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:workflow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the workflow';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $runner = new Runner;
        $runner->execute();
    }
}

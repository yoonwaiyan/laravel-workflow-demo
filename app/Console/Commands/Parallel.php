<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Workflow\WorkflowStub;
use App\Workflows\ParallelWorkflow;

class Parallel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parallel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $workflow = WorkflowStub::make(ParallelWorkflow::class);
        $workflow->start();
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Workflow\WorkflowStub;
use App\Workflows\SerialWorkflow;

class Serial extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'app:serial';

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
    $workflow = WorkflowStub::make(SerialWorkflow::class);
    $workflow->start();
  }
}

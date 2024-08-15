<?php

namespace App\Demo;

use Workflow\WorkflowStub;
use App\Workflows\MyWorkflow;

class Runner
{
  public static function execute()
  {
    $workflow = WorkflowStub::make(MyWorkflow::class);
    $workflow->start();
  }
}

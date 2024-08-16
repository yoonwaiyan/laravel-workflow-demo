<?php

namespace App\Workflows;

use Workflow\ActivityStub;
use Workflow\Workflow;

class SerialWorkflow extends Workflow
{
  public function execute()
  {
    $arr = [1, 2, 3, 4, 5, 6];
    $processes = array_map(
      fn($item) => ActivityStub::make(MyActivity::class, $item),
      $arr
    );

    $result = yield ActivityStub::make(ConsolidationActivity::class, $processes);

    return $result;
  }
}

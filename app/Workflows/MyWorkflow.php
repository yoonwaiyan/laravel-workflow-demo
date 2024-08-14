<?php

namespace App\Workflows;

use Workflow\ActivityStub;
use Workflow\Workflow;
use Illuminate\Support\Facades\Log;

class MyWorkflow extends Workflow
{
    public function execute()
    {
        Log::info("MyWorkflow executed");
        $result = yield ActivityStub::make(MyActivity::class);

        return $result;
    }
}

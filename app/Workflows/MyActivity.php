<?php

namespace App\Workflows;

use Workflow\Activity;
use Illuminate\Support\Facades\Log;

class MyActivity extends Activity
{
    public function execute($args)
    {
        Log::info("MyActivity executed");

        sleep(1);

        $result = $args;
        return $result;
    }
}

<?php

namespace App\Workflows;

use Workflow\Activity;
use Illuminate\Support\Facades\Log;

class MyActivity extends Activity
{
    public function execute()
    {
        Log::info("MyActivity executed");

        sleep(10);

        $result = 'Hello, World!';
        return $result;
    }
}

<?php

namespace App\Workflows;

use Workflow\Activity;
use Illuminate\Support\Facades\Log;

class ConsolidationActivity extends Activity
{
    public function execute($results)
    {
        Log::info("Consolidation activity called");

        return $results;
    }
}

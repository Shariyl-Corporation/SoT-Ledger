<?php

namespace App\Http\Controllers;

use App\Models\CloudflareHitLog;
use Illuminate\Http\Request;

class CloudflareHitController extends Controller
{
    public function listen(Request $request) {
        $hitLog = $request->json()->all();

        CloudflareHitLog::factory()->create([$hitLog]);
    }
}

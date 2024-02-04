<?php

namespace App\Http\Controllers;

use App\Models\CloudflareHitLog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CloudflareHitController extends Controller
{
    public function listen(Request $request) {
        $hitLog = $request->json()->all();
        
        CloudflareHitLog::factory()->create($hitLog);
        return response("SUCCESS");
    }

    public function index() {
        return Inertia::render('Cloudflare/index', [
            'paginatedData' => CloudflareHitLog::paginate(10)
        ]);
    }
}

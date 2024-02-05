<?php

use App\Http\Controllers\CloudflareHitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\RestaurantController;
use App\Models\CloudflareHitLog;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/ledger', [LedgerController::class, 'index'])->name('ledger');

    Route::get('/order', [LedgerController::class, 'index'])->name('order');

    Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
    Route::get('/restaurant/view/{id}', [RestaurantController::class, 'view'])->name('restaurant.view');
    Route::get('/restaurant/delete/{id}', [RestaurantController::class, 'delete'])->name('restaurant.delete');
    
    Route::get('/cloudflare', [CloudflareHitController::class, 'index'])->name('cloudflare.index');
});

require __DIR__.'/auth.php';

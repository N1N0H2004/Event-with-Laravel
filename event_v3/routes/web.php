<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("events", \App\Http\Controllers\EventController::class)->names([
    'index' => 'events.index',
    'show' => 'events.show',
    'edit' => 'events.edit',
    'create' => 'events.create',
    'destroy' => 'events.destroy',
    'update' => 'events.update',
]);

Route::resource("locations", \App\Http\Controllers\LocationController::class)->names([
    'index' => 'locations.index',
    'show' => 'locations.show',
    'edit' => 'locations.edit',
    'create' => 'locations.create',
    'destroy' => 'locations.destroy',
    'update' => 'locations.update',
]);

Route::resource("testings", \App\Http\Controllers\TestingController::class)->names([
    'index' => 'testings.index',
    'show' => 'testings.show',
    'edit' => 'testings.edit',
    'create' => 'testings.create',
    'destroy' => 'testings.destroy',
    'update' => 'testings.update',
]);

require __DIR__.'/auth.php';

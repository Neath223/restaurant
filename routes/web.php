<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function(){
    return view('home');
})->middleware(['auth'])->name('home');

Route::resource('customers', CustomerController::class)->middleware('auth');
Route::resource('items', ItemController::class)->middleware('auth');
Route::resource('orders', OrderController::class)->middleware('auth');

require __DIR__.'/auth.php';

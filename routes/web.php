<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SubscriptionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('welcome');

Route::get('/subscription', function() { 
    return view('subscription'); 
})->name('subscription');

Route::get('/create', function() { 
    return view('subscription.create'); 
})->name('subscribe');

Route::get('/subscribe', [SubscriptionController::class, 'index'])
    ->name('subscription.index');
Route::post('/subscribe', [SubscriptionController::class, 'store'])
    ->name('subscription.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'otp.verified', 'password.change'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('profile/change-password', [ProfileController::class, 'forceChangeIndex'])
        ->name('profile.change-password');
        
    Route::put('profile/change-password', [ProfileController::class, 'forceChangeUpdate'])
        ->name('profile.change-password.update');

    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');
});

require __DIR__.'/auth.php';

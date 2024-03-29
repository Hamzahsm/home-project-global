<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NotificationController;
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
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// login OAuth Google
// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

// Login OAuth Facebook
Route::get('auth/facebook', [SocialiteController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialiteController::class, 'loginWithFacebook']);

// form order
Route::post('/order', [ProfileController::class, 'order'])->name('order');

// client order
Route::resource('clients', ClientController::class);

// Test Email Notification
Route::get('/test', [NotificationController::class, 'test'])->name('email.notification');

require __DIR__ . '/auth.php';

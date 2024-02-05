<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('contact-us', [FrontendController::class, 'contact_us'])->name('contact.us');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('google/callback', [GoogleController::class, 'callback'])->name('google.callback');

Route::get('faq/status/toggle/{faq}', [FaqController::class, 'faq_status_toggle'])->name('faq.status.toggle');
Route::resource('faq', FaqController::class);

require __DIR__ . '/auth.php';

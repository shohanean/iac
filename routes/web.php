<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MiscController;
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
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('blogs/{slug}', [FrontendController::class, 'blogs_details'])->name('blogs.details');
Route::post('blogs/comment/{blog_id}', [FrontendController::class, 'blogs_comment'])->name('blogs.comment');
Route::get('contact-us', [FrontendController::class, 'contact_us'])->name('contact.us');
Route::post('contact-us', [FrontendController::class, 'contact_us_post'])->name('contact.us.post');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('role', [DashboardController::class, 'role'])->middleware(['auth', 'verified'])->name('role');
Route::post('role', [DashboardController::class, 'role_store'])->middleware(['auth', 'verified'])->name('role.store');
Route::put('role/change/{id}', [DashboardController::class, 'role_change'])->middleware(['auth', 'verified'])->name('role.change');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('google/callback', [GoogleController::class, 'callback'])->name('google.callback');

Route::get('faq/status/toggle/{faq}', [FaqController::class, 'faq_status_toggle'])->name('faq.status.toggle');

Route::middleware('auth')->group(function () {
    Route::resource('banner', BannerController::class)->middleware('can:banner operation');
    Route::resource('faq', FaqController::class)->middleware('can:faq operation');
    Route::resource('country', CountryController::class)->middleware('can:country operation');
    Route::resource('visa', VisaController::class)->middleware('can:visa operation');
    Route::resource('blog', BlogController::class)->middleware('can:blog operation');
});

Route::get('settings', [SettingController::class, 'index'])->name('settings');
Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

Route::get('contacts', [MiscController::class, 'contacts_index'])->name('contacts')->middleware('auth');
Route::get('contacts/read/{id}', [MiscController::class, 'contacts_read'])->name('contacts.read');
Route::get('contacts/delete/{id}', [MiscController::class, 'contacts_delete'])->name('contacts.delete');
Route::get('contacts/all/read', [MiscController::class, 'contacts_all_read'])->name('contacts.all.read');
Route::get('eligibility/test', [MiscController::class, 'eligibility_test'])->name('eligibility.test');

require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ContactpageController;

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

Route::get('/', [HomepageController::class, 'homePage'])->name('homepage');
Route::get('/contact-us', [ContactpageController::class, 'index'])->name('contactpage');
Route::get('/test', [HomepageController::class, 'test'])->name('test');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// contact us
Route::get('/contact',[ContactController::class, 'contactMail'])->name('contact-us');
Route::post('/send-message',[ContactController::class, 'sendMail'])->name('contact.send');

Route::get('/about-us',[ContactController::class, 'aboutUs'])->name('aboutus');

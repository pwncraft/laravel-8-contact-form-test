<?php

use App\Http\Controllers\EmailContactController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

Route::get('contact-us', [EmailContactController::class, 'index'])->name('contact-us');
Route::post('contact-us', [EmailContactController::class, 'sendEmail'])->name('contact-us-post');

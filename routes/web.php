<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\news\NewslettersController;
use App\Http\Controllers\text\TextsController;

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
})->name('ggggg');

Route::get('/a','\App\Http\Controllers\MailController@MyMail');

// Route::resource('newsletters',NewslettersController::class);
Route::resource('texts',TextsController::class);
// Route::view('email.mail', 'viewName');

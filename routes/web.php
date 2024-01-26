<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmailResetPassword;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EmailIsVerified;
use App\Mail\EmailVerify;
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
    return redirect('/books');
});

Route::resource('/login', LoginController::class);
Route::resource('/users', UserController::class);
Route::resource('/books', BookController::class);

Route::get('/logout',[LoginController::class, 'destroy'])->name('logout');
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/Email/Verify/{token}/{id}',[EmailController::class,'verify'])->name('verify');
Route::get('/Email/EmailVerify',[EmailController::class,'index'])->name('email');
Route::get('/Email/EmailVerified', [EmailController::class,'verified'])->name('verified');
Route::resource('/forgot', EmailResetPassword::class);
Route::get('/forgot/{token}/{id}',[EmailResetPassword::class,'verify'])->name('resetPassword');

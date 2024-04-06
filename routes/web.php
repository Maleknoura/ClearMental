<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ForgotPasswordLinkController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\videocallController;
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
    return view('index');
});
Route::get('/actuality', function () {
    return view('actuality');
});

Route::get('/dashboard', [dashboardController::class, 'index']);
Route::post('/dashboard/create', [TagController::class, 'store'])->name('tags.store');
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
Route::put('/tags/edit/{tag}', [TagController::class, 'update']);
Route::patch('/dashboard/{user}', [dashboardController::class, 'toggleStatus'])->name('users.update');
Route::post('/dashboard/update/{id}', [PublicationController::class, 'publication'])->name('update.pub');
Route::patch('/dashboard/tags/{tag}', [TagController::class, 'update'])->name('tags.update');


Route::get('/start-meeting', [videocallController::class, 'startMeeting']);




Route::post('/chat/send', [ChatController::class, 'sendMessage']);



Route::get('/library', function () {
    return view('library');
});


Route::middleware(['guest'])->group(function () {

    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'store']);
});
// Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');
// });

// Route::get('/sign-up', [RegisterController::class, 'register']);
// Route::post('/sign-up', [RegisterController::class, 'store']);

// Route::get('/sign-in', [LoginController::class, 'login']);
// Route::post('/sign-in', [LoginController::class, 'store']);

// Route::post('/logout', [LogoutController::class, 'destroy']);


Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password');

Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);

Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

// Password Reset
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset');

Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\TagController;
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

Route::get('/dashboard',[dashboardController::class,'index']);
Route::post('/dashboard/create', [TagController::class, 'store'])->name('tags.store');
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
Route::put('/tags/edit/{tag}', [TagController::class, 'update'])->name('tags.update');
Route::patch('/dashboard/{user}', [dashboardController::class, 'toggleStatus'])->name('users.update');





Route::get('/library', function () {
    return view('library');
});
Route::get('/register', function () {
    return view('register');
});

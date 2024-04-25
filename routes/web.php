<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ForgotPasswordLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\videocallController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/favoris', [HomeController::class, 'favoris'])->name('toggle.coach');

    Route::get('/library', [BookController::class, 'index']);
    Route::get('/actuality', [PublicationController::class, 'index'])->name('publications.index');
    Route::get('/start-meeting', [videocallController::class, 'startMeeting'])->name('meet');
    Route::post('/chat/send', [ChatController::class, 'sendMessage']);
    Route::post('/publication/{id}/like', [LikeController::class, 'like'])->name('publication.like');
    Route::post('/publication/{id}/dislike', [LikeController::class, 'dislike'])->name('publication.dislike');
    Route::put('/comments/{comment}', [CommentaireController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentaireController::class, 'destroy'])->name('comments.destroy');
    Route::get("comments/{id}", [CommentaireController::class, "postComments"]);
    Route::post('/comments', [CommentaireController::class, 'store'])->name('comments.store');
    Route::get('/coach/{id}', [ReservationController::class, 'show'])->name('profile');
    Route::post('/coach/book', [ReservationController::class, 'store'])->name('reservation.store');
    Route::post('/search', [BookController::class, 'search'])->name('searchbook');
    Route::get('/books/{id}', [BookController::class, 'detailofbook'])->name('book.details');
});


Route::middleware([CheckRole::class, 'coach'])->group(function () {
    Route::get('/DashboardCoach', [BookController::class, 'show'])->name('books.index');
    Route::get('/publication', [PublicationController::class, 'show'])->name('publication.approuver');
    Route::post('/publication/create', [PublicationController::class, 'store'])->name('publication.store');
    Route::delete('/publication/delete/{id}', [PublicationController::class, 'destroy'])->name('publication.destroy');
    Route::put('/publication/update/{id}', [PublicationController::class, 'update'])->name('publication.update');
    Route::post('/books/create', [BookController::class, 'store'])->name('books.store');
    Route::delete('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');
    Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books.update');
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');

    Route::patch('/reservations/{id}/accept', [ReservationController::class, 'update'])->name('reservations.accept');
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


Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password');

Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);


// Password Reset







Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index']);
    Route::post('/dashboard/create', [TagController::class, 'store'])->name('tags.store');
    Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
    Route::put('/tags/edit/{tag}', [TagController::class, 'update']);
    Route::patch('/dashboard/{user}', [dashboardController::class, 'toggleStatus'])->name('users.update');
    Route::post('/dashboard/update/{id}', [PublicationController::class, 'publication'])->name('update.pub');
    Route::patch('/dashboard/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
});

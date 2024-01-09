<?php
use App\Http\Controllers\AudioController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use  App\Http\Controllers\Auth\AuthRegisterController;

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
    return view('pages.index');
});





Auth::routes();
Route::resource('audio', AudioController::class);
Route::resource('video', VideoController::class);
// Route::resource('video', VideoController::class);
// Signup routes
Route::get('/auth/signup', [AuthRegisterController::class, 'showRegistrationForm'])->name('signup.form');
Route::post('/auth/signup', [AuthRegisterController::class, 'register'])->name('signup');
Route::get('/auth/signup', [AuthRegisterController::class, 'showRegistrationForm'])->name('signup.form');
Route::post('/auth/login', [AuthRegisterController::class, 'login'])->name('signup');

Route::post('/like/{audio}', [LikeController::class, 'likeAudio'])->name('like.audio');
Route::post('/like/{video}', [LikeController::class, 'likeVideo'])->name('like.video');
Route::post('/comment/{audio}', [CommentController::class, 'commentAudio'])->name('comment.audio');
Route::post('/comment/{video}', [CommentController::class, 'commentVideo'])->name('comment.video');


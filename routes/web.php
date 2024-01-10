<?php

use App\Http\Controllers\UsersController;
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
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/login', function () {
    return view('pages.login');
});

Route::post('/register', [UsersController::class, 'createUser']);
Route::any('/loginUser', [UsersController::class, 'loginUser']);


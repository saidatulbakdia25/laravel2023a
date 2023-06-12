<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NovelsController;
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
    return view('layout.home');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::prefix('/login')->group(function() {
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'loginPost'])->name('login');
});

Route::prefix('/')->middleware('auth')->group(function() {
Route::get('/home', function () {
    return view('layout.home');
});
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/novels/add', function () {
    return view('novels.formadd');
});

Route::resource('novels', NovelsController::class);
});
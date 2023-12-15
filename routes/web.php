<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
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
    return view('home');
})->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/doLogin', [AuthController::class, 'login'])->name('dologin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/regist', [RegisterController::class, 'index'])->name('regist');
Route::get('/doregist', [RegisterController::class, 'register'])->name('doregist');
Route::get('/Admin', [AdminController::class, 'index'])->name('admin')->middleware(AuthenticateMiddleware::class);
Route::post('/Admin', [AdminController::class, 'page'])->name('logic');
Route::get('/Admin/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::get('/Admin/remove/{id}', [AdminController::class, 'remove'])->name('remove');
Route::match(['post', 'put'], '/update/{id}', [UserController::class, 'update'])->name('update');
Route::get('/detail', [DetailController::class, 'detail'])->name('detail');
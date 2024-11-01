<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObiavleniaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ObiavleniaController::class,'index'])->name('index');

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::get('/register', [AuthController::class,'register'])->name('register');

Route::post('/registerOut', [AuthController::class,'registerOut'])->name('registerOut');

Route::post('/loginOut', [AuthController::class,'loginOut'])->name('loginOut');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::post('/', [ObiavleniaController::class,'store'])->name('posts');

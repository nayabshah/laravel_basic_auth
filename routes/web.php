<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Authenticate;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register/seeker',[UserController::class,'createSeeker'])->name('create.seeker');
Route::post('/register/seeker',[UserController::class,'storeSeeker'])->name('store.seeker');
Route::get('/register/employer',[UserController::class,'createEmployer'])->name('create.employer');


Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'postLogin'])->name('login.post');
Route::post('/logout',[UserController::class,'logout'])->name('logout');


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware(Authenticate::class);


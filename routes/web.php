<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;



use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'index'])->name('index');



Route::get('/profile/{id}', [UsersController::class,'show'])->name('profile.show');
Route::put('/profile/update', [UsersController::class, 'update'])->name('profile.update');
Route::put('/profile/update-password', [UsersController::class, 'updatePassword'])->name('profile.update-password');


Route::get('/news/{id}', [NewsController::class,'index'])->name('news.index');


Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/create', [PlayerController::class,'create'])->name('players.create');
Route::post('/players/store', [PlayerController::class,'store'])->name('players.store');

Route::get('/print/{id}', [PlayerController::class,'print'])->name('players.print');


Route::get('/coach', [CoachController::class,'index'])->name('coach.index');

Route::get('/payment', [PaymentController::class,'create'])->name('payment.create');
Route::post('/payment/store', [PaymentController::class,'store'])->name('payment.store');


Route::get('/registration', [UsersController::class,'create'])->name('create');
Route::post('/store', [UsersController::class,'store'])->name('store');


Route::get('/admin', [PageController::class,'indexAdmin'])->name('admin.index');
Route::get('/admin/players/{id}', [PlayerController::class,'edit'])->name('admin.players.edit');
Route::put('/admin/players/update/{id}', [PlayerController::class,'update'])->name('admin.players.update');
Route::delete('/admin/players/delete/{id}', [PlayerController::class,'destroy'])->name('admin.players.delete');

Route::get('/admin/coach', [CoachController::class,'indexAdmin'])->name('admin.coach');
Route::get('/admin/coach/create', [CoachController::class,'create'])->name('admin.coach.create');
Route::post('/admin/coach/store', [CoachController::class,'store'])->name('admin.coach.store');
Route::get('/admin/coach/{id}', [CoachController::class,'edit'])->name('admin.coach.edit');
Route::put('/admin/coach/update/{id}', [CoachController::class,'update'])->name('admin.coach.update');
Route::delete('/admin/coach/delete/{id}', [CoachController::class,'destroy'])->name('admin.coach.delete');

Route::get('/admin/payment', [PaymentController::class,'indexAdmin'])->name('admin.payment');
Route::delete('/admin/payment/delete/{id}', [PaymentController::class,'destroy'])->name('admin.payment.delete');

Route::get('/admin/news', [NewsController::class,'indexAdmin'])->name('admin.news');
Route::get('/admin/news/create', [NewsController::class,'create'])->name('admin.news.create');
Route::post('/admin/news/store', [NewsController::class,'store'])->name('admin.news.store');
Route::get('/admin/news/{id}', [NewsController::class,'edit'])->name('admin.news.edit');
Route::put('/admin/news/update/{id}', [NewsController::class,'update'])->name('admin.news.update');
Route::delete('/admin/news/delete/{id}', [NewsController::class,'destroy'])->name('admin.news.delete');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class,'logout'])->name('logout');





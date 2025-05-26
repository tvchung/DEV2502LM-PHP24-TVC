<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonHocController;
use App\Http\Controllers\SessionController;
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
Route::get('/home', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});

#Login
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

#Session
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/del',[SessionController::class,'deleteSessionData'])->name('session.del');

#Monhoc
Route::get('/mon-hoc',[MonHocController::class,'getMonHocs'])->name('monhoc.getMonHocs');
Route::get('/mon-hoc/detail/{mamh}',[MonHocController::class,'getMonHocById'])->name('monhoc.getMonHocById');
Route::get('/mon-hoc/create',[MonHocController::class,'create'])->name('monhoc.create');
Route::post('/mon-hoc/create',[MonHocController::class,'createSubmit'])->name('monhoc.createSubmit');


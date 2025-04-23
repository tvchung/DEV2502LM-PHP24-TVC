<?php

use App\Http\Controllers\NamedProfileController;
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
    return view('welcome');
});
# Route view
Route::get('/devmaster', function () {
    return view('devmaster');
});

Route::get('/greeting', function () {
    return '<h1> Hello World';
});
#Redirect Routes
Route::redirect('/here','/there');
Route::get('/there',function(){
    return '<h1>Redirect: here to there</h1>';
});
# Route Parameter
Route::get('/devmaster/{id}',function($id){
    return '<h1> Devmaster '.$id;
});
Route::get('/post/{id}/content/{content}',function($id, $cont){
    return "<h1> Post: $id ; content: $cont" ;
});
Route::get('/post/{id}-{content}/content',function($id, $cont){
    return "<h1> Post: $id ; content: $cont" ;
});

Route::get('/post-{id}-{content}',function($id,$content){
    return "<h1> Post: $id; $content";
});

#Optional Parameters
Route::get('/dev/{name?}',function($name="Devmaster"){
    return "<h1> Welcome to, $name";
});

#Regular Expression Constraints
Route::get('/user/{name?}',function($name=null){
     return "<h1> Welcome, $name";   
})->where('name','[A-Z ]+');
// Route::get('/user-num/{num}',function($number){
//     return "<h1> Welcome, $number";   
// })->where('num','[0-9]+');

Route::get('/user-num/{num}',function($number){
    return "<h1> Welcome, $number";   
})->whereNumber('num');

#Named Routes
// Route::get('/named/profile', function () {
//     return "<h1> Đặt tên Route </h1>";
// })->name('named.profile');

Route::get('/named/profile', 
    [NamedProfileController::class,'display']
)->name('named.profile');
Route::get('/named/show',[NamedProfileController::class,'show']);

#Lab 4: Routes Group prefix

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){return "<h1> Route Admin";});
    Route::get('/account',function(){return "<h1> Route Admin Account";});
    Route::get('/product',function(){return "<h1> Route Admin product";});
});
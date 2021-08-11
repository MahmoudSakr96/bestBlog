<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\postcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return view('pages.Hello');
});
Route::get('/about',[pagescontroller::class,'about']);
Route::get('/posts',[postcontroller::class,'index']);
Route::get('/posts/create',[postcontroller::class,'create']);
Route::post('/posts',[postcontroller::class,'store']);
Route::get('/posts/{id}',[postcontroller::class,'show']);
Route::get('/posts/{id}/edit',[postcontroller::class,'edit']);
Route::put('/posts/{id}',[postcontroller::class,'update']);
Route::delete('/posts/{id}',[postcontroller::class,'destroy'])->name('posts.destroy');


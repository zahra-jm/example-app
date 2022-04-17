<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[Article::class,'index']);

Route::get('/articles',[Article::class,'articles']);

Route::get('/articles/{id}',[Article::class,'articles_name']);

Route::get('/articles/create',[Article::class,'create']);

Route::get('/articles/edit/{id}',[Article::class,'articles_edit']);

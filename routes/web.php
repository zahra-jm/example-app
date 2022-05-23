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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/',[Article::class,'index']);

/*Route::get('/articles',[Article::class,'articles']);

Route::get('/articles/{id}',[Article::class,'articles_name']);

Route::get('/articles/create',[Article::class,'create']);

Route::get('/articles/edit/{id}',[Article::class,'articles_edit']);
*/

Route::get('/contact',function() {
    return view('home.contact');
})->name('home.contact');

$posts = [
    1 => [
        'title' => 'Intro to laravel',
        'content' => 'This is a short intro to laravel',
        'is_new' => true,
        'has_comments' => true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => false
    ]

    ];

Route::get('/posts',function() use($posts) {
    return view('posts.index',['posts' => $posts]);
});    

Route::get('/posts/{id}',function($id) use($posts) {
   
    abort_if(!isset($posts[$id]), 404);    

    return view('posts.show',['post' => $posts[$id]]);
})->name('posts.show');

Route::get('/recent-posts/{days_ago?}',function($daysAgo = 20){
    return 'posts from '.$daysAgo.' days ago';
})->where([
    'days_ago'=>'[1-9]+'
])->name('posts.recent.index');

Route::get('/fun/responses',function() use($posts){
    return response($posts,201)
     -> header('content_type','application/json') 
     ->cookie('MY_COOKIE','aaaa',3600);
});

Route::get('/fun/redirect',function(){
    return back();
});
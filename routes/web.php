<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
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

/* simple type ko route 

Route::get('/', function () {
    $blog = Post::all();
    return view ('welcome',['welcome' => $blog]);
});
*/
//index
Route::get('/', function () {
    $p1 = Post::take(1)->get();
    $p2 = Post::skip(1)->take(2)->get();
    $p3 = Post::skip(3)->take(10)->get();
    $cat = Category::all();
    return view('index',['p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'cat'=>$cat]);
});

//blogpost
Route::get('/blogpost/{blogid}', function (Post $blogid) {
     return view('blogpost',['blogpost' => $blogid]);
 });


 /*
//trying
Route::get('/try', function () {
    $p1 = Post::take(1)->get();
    $p2 = Post::skip(1)->take(2)->get();
    $p3 = Post::skip(3)->take(10)->get();
    // return $posts;
    return view('try',['p1'=>$p1,'p2'=>$p2,'p3'=>$p3]);
});

//blog post

Route::get('/blogpost', function () {
    return view('blogpost');
});
*/
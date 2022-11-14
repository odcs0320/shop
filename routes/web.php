<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {   //Closure Function
    return view('welcome');
});

Route::get('/hello','App\Http\Controllers\SiteController@hello');

Route::get('/users/{id?}','App\Http\Controllers\UserController@show');

/*
Route::get('posts/{post}/comments/{comment}', function($post,$comment){
    return "posts $post , comments $comment";
});
*/

Route::get('posts/{post?}/comments/{comment?}', 'App\Http\Controllers\PostCommentTest@pctest');

Route::get('login/{id?}','App\Http\Controllers\SiteController@login');

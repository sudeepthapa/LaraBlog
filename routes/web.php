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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'CategoryController@index')->name('home');
Route::get('/post/home', function () {
    return view('post.home');
});
Route::resource('post', 'PostController');
Route::resource('category', 'CategoryController');
// Route::get('post', 'PostController@store')->name('store');
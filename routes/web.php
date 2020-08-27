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

Route::get('/','PageController@index')->middleware('auth');

Auth::routes();

Route::redirect('/home','/home/profile');
Route::get('/home/profile', 'AuthenticatedController@profile')->name('home.profile')->middleware('auth');

Route::resource('post', 'PostController')->middleware('auth');


Route::resource('category', 'CategoryController')->middleware('auth');



<?php

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::get('items/create', 'Admin\ItemsController@add');
    Route::get('items/edit', 'Admin\ItemsController@edit');
});

Route::get('/', 'TopController@index');
Route::get('news', 'Common\NewsController@index');
Route::get('item', 'Common\ItemController@index');
Route::get('items', 'Common\ItemsController@index');
Route::get('timeline', 'Common\TimelineController@index');
Route::get('contact', 'Common\ContactController@index');
Route::get('about', 'Common\AboutController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
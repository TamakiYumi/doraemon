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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::get('profile', 'Admin\ProfileController@index')->name('profile');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::get('items/create', 'Admin\ItemsController@add');
    Route::get('items/edit', 'Admin\ItemsController@edit');
});

Route::get('/', 'TopController@index');
Route::get('news', 'Common\NewsController@index')->name('news');
Route::get('item/{id}', 'Common\ItemController@index')->name('item');
Route::get('items', 'Common\ItemsController@index')->name('items');
Route::get('timeline', 'Common\TimelineController@index')->name('timeline');
Route::get('contact', 'Common\ContactController@index')->name('contact');
Route::get('about', 'Common\AboutController@index')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete');
    Route::get('profile', 'Admin\ProfileController@index')->name('profile');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::get('items/create', 'Admin\ItemsController@add');
    Route::post('items/create', 'Admin\ItemsController@create');
    Route::get('items/edit', 'Admin\ItemsController@edit');
});

Route::get('/', 'TopController@index')->name('top');
Route::get('news', 'Common\NewsController@index')->name('news');
Route::get('item/{id}', 'Common\ItemController@index')->name('item');
Route::get('items', 'Common\ItemsController@index')->name('items');
Route::get('timeline', 'Common\TimelineController@index')->name('timeline');
Route::get('contact', 'Common\ContactController@index')->name('contact');
Route::get('about', 'Common\AboutController@index')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ログイン状態
Route::group(['middleware' => 'auth'], function() {

    // ユーザ関連
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'edit', 'update']]);

    // フォロー/フォロー解除を追加
    Route::post('users/{user}/follow', 'UsersController@follow')->name('follow');
    Route::delete('users/{user}/unfollow', 'UsersController@unfollow')->name('unfollow');

    // ツイート関連
    Route::resource('tweets', 'TweetsController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);

});
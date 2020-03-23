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
    return view('NavigationPage');
})->name('navigation');

//Routes to article pages
Route::get('articles/statistics', 'ArticleController@statistics')->name('stats');
Route::get('articles/sorted', 'ArticleController@sorted')->name('sortedByDate');
Route::get('articles/index', 'ArticleController@index')->name('mainList');
Route::get('articles/create', 'ArticleController@create')->name('newsUpload')->middleware('auth');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('/articles/store', 'ArticleController@store');

//dinamikus url feloldás
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

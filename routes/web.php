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

 Route::get('/', 'BooksController@books');
 
 
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
 
   Route::get('favorite_books/{id}', 'UsersController@favorite_books')->name('users.favorite_books');
   
   Route::resource('users','UsersController',['only' => ['show','edit','update']]);
   
   Route::group(['prefix' => 'books/{id}'],function () {
       Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
       Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
   });
   
   Route::resource('comments','CommentsController',['only' => ['store','destroy']]);
   
   Route::get('books','BooksController@books')->name('books.get');
   Route::get('books/{id}', 'BooksController@show')->name('books.show');
   
   
   Route::group(['prefix' => 'evaluations/{id}'], function () {
       Route::post('add_good','EvaluationsController@add_good')->name('evaluations.add_good');
       Route::delete('remove_good','EvaluationsController@remove_good')->name('evaluations.remove_good');
       Route::post('add_bad','EvaluationsController@add_bad')->name('evaluations.add_bad');
       Route::delete('remove_bad','EvaluationsController@remove_bad')->name('evaluations.remove_bad');
   });
   
});

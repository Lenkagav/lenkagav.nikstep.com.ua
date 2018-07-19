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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::group([
//     'prefix' =>'admin/book',
//     'namespace' => 'Book',
//     'middleware' =>['auth']
//  ],
//  function () {
//      Route::get('/', 'BookController@index')->name('book.book.index');
//      Route::get('/author', 'AuthorController@index')->name('book.author.index');
//      Route::get('/janre', 'JanreController@index')->name('book.janre.index');
//  });

Route::group([
    'prefix' =>'admin/book',
    'namespace' => 'Book',
    'middleware' =>['auth']
 ],
 function () {
     Route::resource('/book', 'BookController', ['as' => 'book']);
     Route::resource('/author', 'AuthorController', ['as' => 'book']);
     Route::resource('/janre', 'JanreController', ['as' => 'book']);
 });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

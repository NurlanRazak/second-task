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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LibraryController@index');
Route::get('/book/{id}', 'LibraryController@getBookById');
Route::get('/books/authors/{author}', 'LibraryController@getBooksByAuthor');
Route::get('/books/names/{name}', 'LibraryController@getBooksByName');
Route::get('/books/year/{year}', 'LibraryController@getBooksByYear');
Route::get('/books/manufacture/{man}', 'LibraryController@getBooksByManufacture');

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/profile', 'ProfileController@index');
Route::resource('profile', 'ProfileController');

//country
Route::get('/country', 'CountryController@showAllCountry');
Route::get('/country/create', 'CountryController@create');
Route::get('/country/{id}', 'CountryController@showContryDetail');
Route::post('/country/create', 'CountryController@saveToDatabase');
Route::get('/country/{id}/edit', 'CountryController@edit');
Route::patch('/country/{id}/edit', 'CountryController@update');
Route::delete('/country/{id}/delete', 'CountryController@destroy');

// Person
Route::get('/persons', 'PersonController@index');
Route::get('/persons/create', 'PersonController@create');
Route::post('/persons/create', 'PersonController@store');

//authors
Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/create', 'AuthorsController@create');
Route::post('/authors/create', 'AuthorsController@store');

//books
Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::post('/books/create', 'BooksController@store');
Route::get('/books/{id}/edit', 'BooksController@edit');
Route::patch('/books/{id}/edit', 'BooksController@update');

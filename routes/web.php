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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/repository/create', 'RepositoryController@create')->name('repository.create');
Route::post('/repository/store', 'RepositoryController@store')->name('repository.store');

Route::get('/repository/open/{repositoryName}', 'RepositoryController@open')->name('repository.open');
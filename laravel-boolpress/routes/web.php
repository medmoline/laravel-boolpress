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

Route::get('/', 'HomeController@index');

Auth::routes();

//gruppo per gestire le rotte riservate all'admin -> prefix per l'url (admin) , namespace per la cartella del controller(Admin) , name per impostare il nome della rotta con admin.
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('/posts', 'PostController');
});

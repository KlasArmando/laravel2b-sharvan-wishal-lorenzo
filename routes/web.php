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

Route::get('/', function (){
    return view('welcome');
});
Route::get('/about', function (){
    return view('pages.about');
});
Route::get('/contact', function (){
    return view('pages.contact');
});

//route::get('/yo/create', 'Formcontroller@create');
Route::resource('yo','FormController');

Route::get('/form/create', 'FormController@create');
Route::post('/form/store', 'FormController@store');
Route::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
route::post('/contact/submit', 'VraagController@submit');
route::resource('post', 'Postcontroller');

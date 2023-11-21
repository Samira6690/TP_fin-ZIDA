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



Route::get('/accueil', function () {
    return view('accueil');

});
Route::get('/homme', function () {
    return view('homme');

});
Route::get('/femme', function () {
    return view('femme');

});
Route::get('/emperor', function () {
    return view('emperor');

});
Route::get('/ciseaux', function () {
    return view('ciseaux');

});
Route::get('/nav', function () {
    return view('nav');

});
Route::get('/footer', function () {
    return view('footer');

});
Route::get('/enfant', function () {
    return view('enfant');

});
Route::get('/doigt', function () {
    return view('doigt');

});
Route::get('/profil', 'Admin\StylisteController@profil')->name('styliste');
Route::get('/create', 'Admin\StylisteController@create')->name('create.profil');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->group (function() {
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'Admin\AdminController@index')->name('admin.home');
});

$this->post('logout', 'Auth\LoginController@logout')->name('logout');

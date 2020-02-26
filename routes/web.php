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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/tentang', function () {
    return view('frontend.about');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});
Route::get('/search', function () {
    return view('frontend.search');
});
Route::get('/single-property', function () {
    return view('frontend.single-property');
});

Route::get('/kategori', function () {
    return view('admin.kategori');
});

Route::get('/tag', function () {
    return view('admin.tag');
});

Route::get('/artikel', function () {
    return view('admin.artikel');
});

Route::resource('/kategori', 'KategoriController');
Route::resource('/tag', 'TagController');
Route::resource('/artikel', 'ArtikelController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

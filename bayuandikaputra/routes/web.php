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

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::resource('kategori_artikel', 'kategoriArtikelcontroller');
Route::get('kategori_artikel.trash','kategoriArtikelcontroller@trash')->name('kategori_artikel.trash');


Route::resource('kategori_berita', 'kategoriBeritacontroller');
Route::get('kategori_berita.trash','kategoriBeritacontroller@trash')->name('kategori_berita.trash');


Route::resource('kategori_galeri', 'kategoriGalericontroller');
Route::get('kategori_galeri.trash','kategoriGalericontroller@trash')->name('kategori_galeri.trash');


Route::resource('kategori_pengumuman', 'kategoriPengumumancontroller');
Route::get('kategori_pengumuman.trash','kategoriPengumumancontroller@trash')->name('kategori_pengumuman.trash');


Route::resource('artikel', 'Artikelcontroller');
Route::get('artikel.trash','Artikelcontroller@trash')->name('artikel.trash');


Route::resource('berita', 'Beritacontroller');
Route::get('berita.trash','Beritacontroller@trash')->name('berita.trash');


Route::resource('galeri', 'Galericontroller');
Route::get('galeri.trash','Galericontroller@trash')->name('galeri.trash');


Route::resource('pengumuman', 'pengumumancontroller');
Route::get('pengumuman.trash','pengumumancontroller@trash')->name('pengumuman.trash');
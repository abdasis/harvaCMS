<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.index');
    Route::post('ckeditor/upload', 'Backend\DashboardController@upload')->name('ckeditor.upload');
    Route::resource('artikel', 'Backend\PostController', [
        'as' => 'admin'
    ]);
    Route::resource('user', 'Backend\UserController', [
        'as' => 'admin'
    ]);
    Route::resource('kategori', 'Backend\CategoryController', [
        'as' => 'admin'
    ]);
});
Route::get('/artikel/{kategori}', 'Frontend\FrontendController@kategoriArtikel')->name('artikel.kategori');
Route::get('berita/{artikel}', 'Frontend\FrontendController@singleArtikel')->name('frontend.single-artikel');
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.index');
Auth::routes([
    'register' => false
]);
Route::get('/home', 'HomeController@index')->name('home');

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
    return view('front.home');
});
Route::get('/about', function()
{
    return view('front.about') ;
});
Route::get('/contact', function()
{
    return view('front.contact') ;
});
Route::get('/names', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/categorys','CategoryController');
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
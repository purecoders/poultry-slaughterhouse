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
    return view('app');
})->name('app');

Route::get('/human-resource',function (){
  return view('humanResource');
})->name('human-resource');

Route::get('/products',function (){
  $test = 10000;
  return view('products',compact('test'));
})->name('products');

Route::get('/gallery',function (){
  return view('gallery');
})->name('gallery');

Route::get('/chain-set',function (){
  return view('chainSet');
})->name('chain-set');

Route::get('/about-us',function (){
  return view('aboutUs');
})->name('about-us');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

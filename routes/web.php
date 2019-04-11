<?php



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');




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


Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home',function (){
//  return view('home');
//})->name('home')->middleware('auth');
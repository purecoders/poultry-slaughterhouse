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




Route::get('/', 'SiteController@index')->name('app');
Route::get('/human-resource', 'SiteController@humanResource')->name('human-resource');
Route::get('/products', 'SiteController@products')->name('products');
Route::get('/gallery', 'SiteController@gallery')->name('gallery');
Route::get('/chain-set', 'SiteController@chainSet')->name('chain-set');
Route::get('/about-us', 'SiteController@aboutUs')->name('about-us');
Route::post('/message-send', 'SiteController@messageSend')->name('message-send');




//dashboard routes
Route::get('/home', 'AdminController@dashboard')->name('home');
Route::post('/category-add', 'AdminController@categoryAdd')->name('category-add');
Route::post('/category-delete', 'AdminController@categoryDelete')->name('category-delete');
Route::post('/product-add', 'AdminController@productAdd')->name('product-add');
Route::post('/product-delete', 'AdminController@productDelete')->name('product-delete');
Route::post('/product-insert-price', 'AdminController@productInsertPrice')->name('product-insert-price');
Route::post('/media-add', 'AdminController@mediaAdd')->name('media-add');
Route::post('/media-delete', 'AdminController@mediaDelete')->name('media-delete');


// route for testing ajax request product price by timestamp
Route::get('price-by-date/{timestamp}',function ($timestamp){
  $timestamp = substr($timestamp, 0, -3);

  // timestamp to date
  $date =  date("Y-m-d",(int)$timestamp);

  $result = 1500;
  $result = number_format($result);
  return $result;

});


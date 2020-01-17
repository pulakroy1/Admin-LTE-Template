<?php


// Auth (Passport)
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Voyager routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
// Welcome landing page
Route::get('/', 'StaticPagesController@welcome')->name('welcome');
// All authenticated routes
Route::group(['middleware' => 'auth'], function() {

});


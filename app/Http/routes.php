<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$classifiedsBaseUrl = ltrim( env('CLASSFIEDS_ADD_URL'), '/'); 

// // // PRELOGIN VIEWS
Route::get('/', 'preLogin\HomePage@index');
Route::get('/contact-us', 'preLogin\HomePage@contactUs');
Route::get('/accessibility-statement', 'preLogin\HomePage@accessibilityStatement');
Route::get('/food-delivery', 'preLogin\HomePage@foodDelivery');
Route::get('/how-it-works', 'preLogin\HomePage@howItWorks');
Route::get('/privacy-policy', 'preLogin\HomePage@privacyPolicy');
Route::get('/signup', 'preLogin\HomePage@signup');
Route::get('/support', 'preLogin\HomePage@support');
Route::get('/terms', 'preLogin\HomePage@terms');
Route::get('/logout', 'preLogin\HomePage@logout');
Route::get('/verifyEmail/{token}', 'preLogin\HomePage@verifyEmail');
Route::get('/forgetPassword/{token}', 'preLogin\HomePage@forgetPassword');

// // // PRELOGIN APIS
Route::post('/register', 'preLogin\HomePage@register');
Route::post('/login', 'preLogin\HomePage@login');
Route::post('/resetPassword', 'preLogin\HomePage@resetPassword');
Route::post('/forgetPassword', 'preLogin\HomePage@requestToForgetPassword');

// // // AFTERLOGIN VIEWS
Route::get('/profile', 'afterLogin\AllPages@profile');

// // // // // // Classifieds 

// // // PRELOGIN VIEWS
Route::get($classifiedsBaseUrl, 'preLogin\classifieds\HomePage@index');
Route::get($classifiedsBaseUrl.'signup', 'preLogin\classifieds\HomePage@signup');
Route::get($classifiedsBaseUrl.'prePostAd', 'preLogin\classifieds\HomePage@prePostAd');
Route::get($classifiedsBaseUrl.'cars', 'preLogin\classifieds\HomePage@cars');
Route::get($classifiedsBaseUrl.'addProfile', 'preLogin\classifieds\HomePage@addProfile');
Route::get($classifiedsBaseUrl.'flatHouses', 'preLogin\classifieds\HomePage@flatHouses');
Route::get($classifiedsBaseUrl.'forSale', 'preLogin\classifieds\HomePage@forSale');
Route::get($classifiedsBaseUrl.'helpDesk', 'preLogin\classifieds\HomePage@helpDesk');
Route::get($classifiedsBaseUrl.'productDetails', 'preLogin\classifieds\HomePage@productDetails');

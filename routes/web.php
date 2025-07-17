<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'fnhome')->name('fnhome');
Route::view('about', 'fnabout')->name('fnabout');
Route::view('customization', 'fncustomization')->name('fncustomization');
Route::view('works', 'fnworks')->name('fnworks');
// Route::view('works/{id}', 'fnworks')->name('fnworks');
Route::view('workmore/{id}', 'fnworkmore')->name('fnworkmore');
Route::view('service', 'fnservice')->name('fnservice');
Route::view('contact', 'fncontact')->name('fncontact');

// Route::get('/about', function () {
//   return view('about');
// });
// Route::get('/customization', function () {
//   return view('customization');
// });
// Route::get('/works', function () {
//   return view('works');
// });
// Route::get('/works/{id}', function () {
//   return view('worksmore');
// });
// Route::get('/service', function () {
//   return view('service');
// });
// Route::get('/contact', function () {
//   return view('contact');
// });
// Route::view('hello', 'hello');
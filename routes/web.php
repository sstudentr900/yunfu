<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});
Route::get('/about', function () {
  return view('about');
});
Route::get('/customization', function () {
  return view('customization');
});
Route::get('/works', function () {
  return view('works');
});
Route::get('/works/{id}', function () {
  return view('worksmore');
});
Route::get('/service', function () {
  return view('service');
});
Route::get('/contact', function () {
  return view('contact');
});
// Route::view('hello', 'hello');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  BamanagerController,
};

//前台
Route::view('/', 'fnhome')->name('fnhome');
Route::view('about', 'fnabout')->name('fnabout');
Route::view('customization', 'fncustomization')->name('fncustomization');
Route::view('works', 'fnworks')->name('fnworks');
// Route::view('works/{id}', 'fnworks')->name('fnworks');
Route::view('workmore', 'fnworkmore')->name('fnworkmore');
Route::view('service', 'fnservice')->name('fnservice');
Route::view('contact', 'fncontact')->name('fncontact');


//後台
Route::view('balogin', 'balogin')->name('balogin');
//後台管員 首頁
// Route::view('bamanager', 'bamanager')->name('bamanager');
Route::get('bamanager/{id?}', [BamanagerController::class, 'bamanager_search'])->name('bamanager');
Route::view('bamanager_add', 'bamanager_add')->name('bamanager_add');
Route::view('bamanager_update', 'bamanager_update')->name('bamanager_update');
Route::view('bamanager_passord', 'bamanager_passord')->name('bamanager_passord');
Route::view('bamanager_delete', 'bamanager_delete')->name('bamanager_delete');
//作品
Route::view('baworks', 'baworks')->name('baworks');
Route::view('baworks_add', 'baworks_add')->name('baworks_add');
Route::view('baworks_update', 'baworks_update')->name('baworks_update');
Route::view('baworks_passord', 'baworks_passord')->name('baworks_passord');
Route::view('baworks_delete', 'baworks_delete')->name('baworks_delete');
//登出
Route::view('basignout', 'basignout')->name('basignout');


// 404 回首頁
Route::fallback(function () {
  return redirect()->route('fnhome');
});
//測試
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
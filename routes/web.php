<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  BamanagerController,
  BaloginController,
  BaworkController,
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


//後台登入
// Route::view('balogin', 'balogin')->name('balogin');
Route::get('balogin', [BaloginController::class, 'balogin_get'])->name('balogin');
Route::post('balogin', [BaloginController::class, 'balogin_post'])->name('balogin');
//後台登出
Route::get('basignout', [BaloginController::class, 'basignout']);
//後台管員 首頁
// Route::view('bamanager', 'bamanager')->name('bamanager');
Route::get('bamanager/{id?}', [BamanagerController::class, 'bamanager_search'])->name('bamanager');
Route::get('bamanager_add',  [BamanagerController::class, 'bamanager_add'])->name('bamanager_add');
Route::post('bamanager_add',  [BamanagerController::class, 'bamanager_addpost'])->name('bamanager_addpost');
Route::get('bamanager_update/{id?}/{pageId?}', [BamanagerController::class, 'bamanager_update'])->name('bamanager_update');
Route::post('bamanager_update/{id?}/{pageId?}', [BamanagerController::class, 'bamanager_updatepost'])->name('bamanager_update');
Route::get('bamanager_passord/{id?}/{pageId?}/{value?}', [BamanagerController::class, 'bamanager_password'])->name('bamanager_passord');
Route::get('bamanager_delete/{id?}/{pageId?}', [BamanagerController::class, 'bamanager_delete'])->name('bamanager_delete');
//作品
// Route::view('baworks', 'baworks')->name('baworks');
Route::get('baworks/{id?}', [BaworkController::class, 'baworks_search'])->name('baworks');
Route::get('baworks_add',  [BaworkController::class, 'baworks_add'])->name('baworks_add');
Route::post('baworks_add',  [BaworkController::class, 'baworks_addpost'])->name('baworks_addpost');
Route::get('baworks_update/{id?}/{pageId?}', [BaworkController::class, 'baworks_update'])->name('baworks_update');
Route::post('baworks_update/{id?}/{pageId?}', [BaworkController::class, 'baworks_updatepost'])->name('baworks_update');
Route::get('baworks_delete/{id?}/{pageId?}', [BaworkController::class, 'baworks_delete'])->name('baworks_delete');


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
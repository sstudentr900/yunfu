<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  BamanagerController,
  BaloginController,
  BaworkController,
  BacontactController,
  FnhomeController,
  FnworksController,
  FnworkmoreController,
  FncontactController,
  //驗證碼測試
  // MyFormController
};
//發送郵件測試
// use Illuminate\Support\Facades\Mail;
// use App\Mail\DemoMail;


//前台
// Route::view('/', 'fnhome')->name('fnhome');
// Route::get('/', function () {
//   return redirect()->route('fnhome');
// });
//首頁
Route::get('/', [FnhomeController::class, 'fnhome'])->name('fnhome');
Route::view('about', 'fnabout')->name('fnabout');
Route::view('customization', 'fncustomization')->name('fncustomization');
Route::get('works/{class?}', [FnworksController::class, 'fnworks'])->name('fnworks');
Route::get('workmore/{id}', [FnworkmoreController::class, 'fnworkmore'])->name('fnworkmore');
Route::view('service', 'fnservice')->name('fnservice');
//聯絡我們
Route::view('contact', 'fncontact')->name('fncontact');
// Route::get('contact', [FncontactController::class, 'fncontact'])->name('fncontact');
Route::post('contact', [FncontactController::class, 'fncontact_post'])->name('fncontact_post');
//驗證碼測試
// Route::get('/form', [MyFormController::class, 'showForm'])->name('form.show');
// Route::post('/form', [MyFormController::class, 'submitForm'])->name('form.submit');
//發送郵件測試
// Route::get('/send-mail', function () {
//   $mailData = [
//     'name' => '測試用戶'
//   ];
//   Mail::to('recipient@example.com')->send(new DemoMail($mailData));
//   return '郵件已發送！';
// });



//後台登入
Route::get('balogin', [BaloginController::class, 'balogin_get'])->name('balogin');
Route::post('balogin', [BaloginController::class, 'balogin_post'])->name('balogin');
Route::middleware('auth.custom')->group(function () {
  //後台登出
  Route::get('basignout', [BaloginController::class, 'basignout']);
  //後台管員/首頁
  Route::get('bamanager/{id?}', [BamanagerController::class, 'bamanager_search'])->name('bamanager');
  Route::get('bamanager_add',  [BamanagerController::class, 'bamanager_add'])->name('bamanager_add');
  Route::post('bamanager_add',  [BamanagerController::class, 'bamanager_addpost'])->name('bamanager_addpost');
  Route::get('bamanager_update/{id?}/{pageId?}', [BamanagerController::class, 'bamanager_update'])->name('bamanager_update');
  Route::post('bamanager_update/{id?}/{pageId?}', [BamanagerController::class, 'bamanager_updatepost'])->name('bamanager_update');
  Route::get('bamanager_passord/{id?}/{pageId?}/{value?}', [BamanagerController::class, 'bamanager_password'])->name('bamanager_passord');
  Route::get('bamanager_delete/{id?}/{pageId?}', [BamanagerController::class, 'bamanager_delete'])->name('bamanager_delete');
  //作品
  Route::get('baworks/{id?}', [BaworkController::class, 'baworks_search'])->name('baworks');
  Route::get('baworks_add',  [BaworkController::class, 'baworks_add'])->name('baworks_add');
  Route::post('baworks_add',  [BaworkController::class, 'baworks_addpost'])->name('baworks_addpost');
  Route::get('baworks_update/{id?}/{pageId?}', [BaworkController::class, 'baworks_update'])->name('baworks_update');
  Route::post('baworks_update/{id?}/{pageId?}', [BaworkController::class, 'baworks_updatepost'])->name('baworks_update');
  Route::get('baworks_delete/{id?}/{pageId?}', [BaworkController::class, 'baworks_delete'])->name('baworks_delete');
  //聯絡我們
  Route::get('bacontact/{id?}', [BacontactController::class, 'bacontact_search'])->name('bacontact');
});



// 404 回首頁
Route::fallback(function () {
  return redirect()->route('fnhome');
});



//測試test
// Route::get('/test', function () {
//   // 前台特效
//   return 'test';
// });
Route::view('/test', 'test')->name('test');
//測試Flights
// use App\Models\Flights;
// Route::get('/Flights', function () {
//   //取資料
//   $Flights = Flights::with('posts')->get();
//   return compact('Flights');
// });
// Route::get('/FlightsCreate', function () {
//   //存資料
//   $Flights = Flights::find(71);
//   $Flights->posts()->create([
//     'title' => 'title71',
//     'content' => 'content71',
//   ]);
// });

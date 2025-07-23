<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;//加密
use App\Http\Controllers\CustomFn; //自訂函數
use Illuminate\Support\Facades\Mail; //寄信
use Illuminate\Support\Facades\Validator; //驗證資料
//db
use App\Models\Work as data_work;
use App\Models\Workmore as data_workmore;

class FnhomeController extends Controller
{
  // 首頁---------------------------------------
  public function fnhome()
  {
    $work = data_work::where('release', 'y')->orderBy('id', 'asc')->limit(6)->get();
    // $workmore = data_workmore::where('release', 'y')->orderBy('id', 'asc')->limit(6)->get();
    
    return view('fnhome', [
      'active' => 'fnhome',
      'datas' => $work, 
    ]);
  }
}

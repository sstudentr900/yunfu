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

class FnworkmoreController extends Controller
{
  // 首頁---------------------------------------
  public function fnworkmore($id = 0)
  {
    $work = data_workmore::where([
      'work_id'=>$id
    ])->get();
    return view('fnworkmore', [
      'active' => 'fnworkmore',
      'datas' => $work, 
    ]);
  }
}

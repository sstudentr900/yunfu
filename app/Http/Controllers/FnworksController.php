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

class FnworksController extends Controller
{
  // 首頁---------------------------------------
  public function fnworks($class = 0)
  {
    $work = data_work::where('release', 'y');
    if ($class == 1) {
      $work->where('class', 1);
    }else if($class == 2){
      $work->where('class', 2);
    }

    $work = $work->get();

    return view('fnworks', [
      'active' => 'fnworks',
      'class' => $class,
      'datas' => $work, 
    ]);
  }
}

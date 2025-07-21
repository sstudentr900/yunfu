<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//加密
use Illuminate\Support\Facades\Hash;
//自訂函數
use App\Http\Controllers\CustomFn;
//db
use App\Models\Manager as data_bamanager;

class BaloginController extends Controller
{
  //登入balogin
  public function balogin_get()
  {
    return view('balogin');
  }
  public function balogin_post(Request $request)
  {
    $input = $request->validate([
      'account' => 'required',
      'password' => 'required',
    ]);

    //驗證帳號
    $User = data_bamanager::where('account', $input['account'])->first();
    //dd('$User',$User->password,Hash::check($input['password'], $User->password));
    if (!$User || $User && !Hash::check($input['password'], $User->password)) {
      return CustomFn::errorFn('balogin', [
        'account' => [
          '帳號或密碼錯誤',
        ],
        'password' => [
          '帳號或密碼錯誤',
        ],
      ]);
    }
    //dd($User->id);
    //session紀錄會員編號
    session()->put('bauser_id', $User->id);
    // return redirect('/bamenu');
    return redirect()->route('bamanager');
  }
  //登出 basignout
  public function basignout()
  {
    //清除Session
    session()->forget('user_id');
    // Cache::flush();
    //重新導向回首頁
    return redirect('/balogin');
  }
}

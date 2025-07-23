<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//加密
use Illuminate\Support\Facades\Hash;
//自訂函數
use App\Http\Controllers\CustomFn;
//db
use App\Models\Manager as data_bamanager;
//
use Illuminate\Support\Facades\Auth;

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

    // 簡化寫法
    if (Auth::guard('manager')->attempt($input)) {
      $request->session()->regenerate();
      // 驗證成功，已登入
      return redirect()->intended('bamanager');
    } else {
      // 驗證失敗
      return CustomFn::errorFn('balogin', [
        'account' => [
          '帳號或密碼錯誤',
        ],
        'password' => [
          '帳號或密碼錯誤',
        ],
      ]);
    }

    //驗證帳號
    // $User = data_bamanager::where('account', $input['account'])->first();
    // if (!$User || $User && !Hash::check($input['password'], $User->password)) {
    //   return CustomFn::errorFn('balogin', [
    //     'account' => [
    //       '帳號或密碼錯誤',
    //     ],
    //     'password' => [
    //       '帳號或密碼錯誤',
    //     ],
    //   ]);
    // }else{
    //   // dd('驗證帳號');
    //   Auth::guard('manager')->login($User); // 驗證成功後登入
    //   $request->session()->regenerate();
    //   //訪問 /bamanager 但未登入，會被重到 /login，登入成功後則導向 /bamanager
    //   return redirect()->intended('bamanager');
    //   // return redirect()->route('bamanager');
    // }
  }
  //登出 basignout
  public function basignout(Request $request)
  {
    //登出目前的使用者
    Auth::guard('manager')->logout();
    //防止舊會話被重用
    $request->session()->invalidate();
    //確保登出後的表單提交使用新的 CSRF 令牌
    $request->session()->regenerateToken();
    //重新導向回首頁
    return redirect('/balogin');
  }
}

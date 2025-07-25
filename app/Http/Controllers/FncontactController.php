<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//加密
use Illuminate\Support\Facades\Hash;
//自訂函數
use App\Http\Controllers\CustomFn;
//db
use App\Models\Contact as DB;
//Captcha
use Mews\Captcha\Facades\Captcha;
//email
use Illuminate\Support\Facades\Mail;

class FncontactController extends Controller
{
  public function fncontact()
  {
    return view('fncontact');
  }
  public function fncontact_post(Request $request)
  {
    //表單驗證
    $input = $request->validate([
      'name' => 'required|string|max:20',
      'phone' => ['required', 'string', 'min:8', 'max:15', 'regex:/^[0-9\s\-\+\(\)]+$/'],
      'email' => 'required|email|max:100',
      'source' => 'required',
      'tinymce' => 'required|string|max:500',
      'captcha' => 'required|captcha',
    ]);

    // save
    DB::create([
      'name' => $input['name'],
      'phone' => $input['phone'],
      'email' => $input['email'],
      'source' => $input['source'],
      'tinymce' => $input['tinymce'],
    ]);

    //寄信
    Mail::send('layouts.email2', ['input' => $input], function ($mail) use ($input) {
      $mail->from($input['email'], $input['name']); //寄件人
      $mail->to(config('mail.to'));   //收件人
      // $mail->cc('sstudentr900@gmail.com'); //副本,傳給其他人
      //信箱標題
      $mail->subject('耘馥設計客戶詢問!!');
    });

    //通知
    return redirect()->route('fncontact')->with('success', '表單提交成功！');
  }
}

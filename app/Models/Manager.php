<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
  //資料表名稱
  protected $table = 'manager';

  //主鍵名稱
  protected $promaryKey = 'id';

  //可變動欄位
  protected $fillable = [
    'cover',
    'account',
    'password',
    'name',
    'phone',
    'release',
  ];
  protected $hidden = [
      'password',
  ];

  protected $casts = [
      'password' => 'hashed', // 自動處理密碼雜湊
  ];

  // 自定義身份驗證標識欄位
  public function getAuthIdentifierName()
  {
      return 'account'; // 使用 account 進行驗證
  }
}

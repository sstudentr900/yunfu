<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  //資料表名稱
  protected $table = 'contact';

  //主鍵名稱
  protected $promaryKey = 'id';

  //可變動欄位
  protected $fillable = [
    'name',
    'phone',
    'email',
    'source',
    'tinymce',
    'release',
  ];
}

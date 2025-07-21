<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  //資料表名稱
  protected $table = 'work';

  //主鍵名稱
  protected $promaryKey = 'id';

  //可變動欄位
  protected $fillable = [
    'cover',
    'title',
    'name',
    'release',
  ];
}

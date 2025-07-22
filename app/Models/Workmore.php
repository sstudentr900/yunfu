<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workmore extends Model
{
  //資料表名稱
  protected $table = 'workmore';

  //主鍵名稱
  protected $promaryKey = 'id';

  //可變動欄位
  protected $fillable = [
    'work_id',
    'cover',
  ];
}

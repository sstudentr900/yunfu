<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    /** @use HasFactory<\Database\Factories\FlightFactory> */
    use HasFactory;

    //資料表名稱
    protected $table = 'flights';

    //主鍵名稱
    protected $promaryKey = 'id';

    protected $fillable = [
      'name',
    ];

    //hasMany：Eloquent 提供的一個方法，用來定義「一對多」關聯，表示當前 Model 的記錄可以關聯到多個另一個 Model 的記錄。
    public function posts()
    {
        return $this->hasMany(Post::class, 'flights_id');
    }
}

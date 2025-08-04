<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Flights;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('name','20')->comment('名稱');
            $table->timestamps();
        });

        //$table->foreignId('flights_id')
        //作用：定義一個名為 flights_id 的欄位，該欄位是一個無符號整數（unsigned big integer），通常用來作為外鍵，指向另一個資料表的 id 欄位。

        //->constrained()
        //自動為 flights_id 欄位建立外鍵約束（foreign key constraint），並指定它參考的資料表和欄位。定義外鍵

        //->onDelete('cascade') 
        //'cascade' 表示級聯刪除。當 users 表中的某個記錄（例如某個使用者的 id）被刪除時，所有與該 flights_id 相關的 posts 記錄也會自動被刪除。
        Schema::create('posts', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('flights_id'); // 改用 unsignedInteger 確保型別一致
          $table->foreign('flights_id')->references('id')->on('flights')->onDelete('cascade');
          // $table->foreignIdFor(Flights::class)->constrained()->onDelete('cascade');
          $table->string('title','20')->comment('標題');
          $table->string('content','100')->comment('內容');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};

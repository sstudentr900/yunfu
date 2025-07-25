<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->increments('id');
            $table->string('cover','100')->comment('圖片')->default('error.jpg');
            $table->string('account','50')->comment('帳號');
            $table->string('password','100')->comment('密碼');
            $table->string('name','20')->comment('名稱');
            $table->string('phone','20')->comment('電話');
            $table->enum('release', ['y', 'n'])->default('y')->comment('狀態');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manager');
    }
};

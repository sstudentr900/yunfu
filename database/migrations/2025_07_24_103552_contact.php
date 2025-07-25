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
        Schema::create('contact', function (Blueprint $table) {
          $table->charset = 'utf8mb4';
          $table->collation = 'utf8mb4_general_ci';
          $table->increments('id');
          $table->string('name','20')->comment('名稱');
          $table->string('phone','15')->comment('電話');
          $table->string('email','100')->comment('信箱');
          $table->string('source','10')->comment('出處');
          $table->string('tinymce','500')->comment('敘述');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};

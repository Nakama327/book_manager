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
        Schema::create('userinfos', function (Blueprint $table) {
            $table->id(); // ユーザーID (自動生成)
            $table->integer('se'); // 管理者権限
            $table->string('username')->unique(); // ユーザー名はユニーク
            $table->string('email')->unique(); // メールアドレスはユニーク
            $table->string('password'); // パスワード（
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfos');
    }
};

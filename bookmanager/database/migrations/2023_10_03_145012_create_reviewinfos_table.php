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
        Schema::create('reviewinfos', function (Blueprint $table) {
            $table->id(); // レビューID (自動生成)
            $table->unsignedBigInteger('user_id'); // ユーザーID
            $table->unsignedBigInteger('book_id'); // 書籍ID
            $table->integer('recommend'); // 評価値
            $table->text('comment'); // レビューコメント
            $table->timestamps();

            // 外部キー制約を追加
            $table->foreign('user_id')->references('id')->on('userinfos');
            $table->foreign('book_id')->references('id')->on('bookinfos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviewinfos');
    }
};

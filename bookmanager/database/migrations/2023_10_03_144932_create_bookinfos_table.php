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
        Schema::create('bookinfos', function (Blueprint $table) {
            $table->id(); // 書籍ID (自動生成)
            $table->string('image_path')->nullable(); // 画像ファイルパス（NULL許容）
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->date('date');
            $table->string('isbn')->unique(); // ISBNはユニーク
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookinfos');
    }
};

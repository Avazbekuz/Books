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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name',500);
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('genres_id')->constrained()->cascadeOnDelete();
            $table->foreignId('author_id')->constrained()->cascadeOnDelete();
            $table->string('text',500);
            $table->string('photo',500);
            $table->string('book_pdf',500);
            $table->date('year');
            $table->bigInteger('show_count')->nullable();
            $table->bigInteger('download_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

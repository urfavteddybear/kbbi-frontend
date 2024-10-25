<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dictionary', function (Blueprint $table) {
            $table->id();  // Primary key, auto increment
            $table->text('word');  // Kata yang dicari
            $table->text('arti');  // Arti atau penjelasan
            $table->integer('type');  // Tipe atau kategori
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dictionary');
    }
};

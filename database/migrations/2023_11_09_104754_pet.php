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
        Schema::create('pet', function (Blueprint $table) {
            $table->id('pid');
            $table->foreignId('uid');
            $table->foreignId('sid');
            $table->string('name');
            $table->string('breed');
            $table->string('gender');
            $table->string('color');
            $table->string('birthday');
            $table->smallInteger('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet');
    }
};

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
        Schema::create('pet_status', function (Blueprint $table) {
            $table->foreignId('pid')->nullable();
            $table->Id('sid');
            $table->smallInteger('bpm');
            $table->smallInteger('temp');
            $table->smallInteger('movement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_status');
    }
};

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
        Schema::create('reccomendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_intelligence');
            $table->unsignedBigInteger('id_study');
            $table->foreign('id_intelligence')->references('id')->on('intelligences')->onDelete('cascade');
            $table->foreign('id_study')->references('id')->on('studies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reccomendations');
    }
};

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
        Schema::create('final_result', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_consul');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_intelligence');
            $table->foreign('id_consul')->references('id')->on('consuls')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_intelligence')->references('id')->on('intelligences')->onDelete('cascade');
            $table->unsignedBigInteger('skor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_result');
    }
};

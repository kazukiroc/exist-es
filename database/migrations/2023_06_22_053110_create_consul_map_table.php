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
        Schema::create('consul_map', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_consul');
            $table->unsignedBigInteger('id_character');
            $table->foreign('id_consul')->references('id')->on('consuls')->onDelete('cascade');
            $table->foreign('id_character')->references('id')->on('characteristics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consul_map');
    }
};

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
        Schema::create('pengisian_berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('indikator_id')->references('id')->on('indikators');
            $table->foreignId('pegawai_id')->references('id')->on('pegawais');
            $table->integer('program_studi');
            $table->integer('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengisian_berkas');
    }
};

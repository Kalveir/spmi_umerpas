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
        Schema::create('bookstandards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('standard_id')->references('id')->on('standards');
            $table->foreignId('pegawai_id')->references('id')->on('pegawais');
            $table->text('visi_msisi');
            $table->text('tujuan');
            $table->text('rasional');
            $table->text('subjek');
            $table->text('definisi_istilah');
            $table->boolean('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookstandards');
    }
};

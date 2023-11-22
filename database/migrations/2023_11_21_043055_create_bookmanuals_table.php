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
        Schema::create('bookmanuals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->references('id')->on('pegawais');
            $table->foreignId('standard_id')->references('id')->on('standards');
            $table->string('jenis');
            $table->text('visi_misi');
            $table->text('tujuan');
            $table->text('ruang_lingkup');
            $table->text('definisi_istilah');
            $table->text('tahapan');
            $table->boolean('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmanuals');
    }
};

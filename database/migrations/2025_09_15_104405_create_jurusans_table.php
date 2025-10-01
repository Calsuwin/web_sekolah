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
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama_jurusan');
            $table->string('kode_jurusan');
            $table->string('deskripsi');
            $table->string('kaprog')->nullable();
            $table->string('akreditasi', 5)->nullable();
            $table->integer('jumlah_siswa')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};

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
        Schema::create('eskuls', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // logo/foto ekskul
            $table->string('nama_eskul');        // nama ekskul, misal "Futsal"
            $table->string('kode_eskul')->unique(); // kode singkat, misal "FTSL"
            $table->text('deskripsi');           // deskripsi singkat ekskul
            $table->string('pembina')->nullable();   // nama pembina/penanggung jawab
            $table->string('ketua')->nullable();     // ketua ekskul
            $table->string('jadwal')->nullable();    // hari/jam latihan, misal "Sabtu, 15:00"
            $table->integer('jumlah_anggota')->default(0); // total anggota
            $table->string('lokasi_latihan')->nullable();  // tempat kegiatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eskuls');
    }
};

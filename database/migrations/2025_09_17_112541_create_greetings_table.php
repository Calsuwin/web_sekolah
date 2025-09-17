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
        Schema::create('greetings', function (Blueprint $table) {
            $table->id();
            $table->string('name');        // nama kepala sekolah
            $table->string('title');       // gelar, misal "S.Pd, M.Pd"
            $table->string('photo');       // path foto
            $table->longText('content');   // isi sambutan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('greetings');
    }
};

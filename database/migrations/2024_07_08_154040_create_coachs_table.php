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
        Schema::create('coachs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_psad');
            $table->string('nama');
            $table->string('kewarganegaraan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachs');
    }
};

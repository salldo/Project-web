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
        Schema::create('pinjam_buku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_anggota')->references('id')->on('anggota')->onDelete('cascade');
            $table->string('kode_nuku');
            $table->string('tgl_pinjam');
            $table->date('batas_pinjam');
            $table->date('tahun_terbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_buku');
    }
};

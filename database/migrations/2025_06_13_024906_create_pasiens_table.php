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
        Schema::create('pasiens', function (Blueprint $table) {
               
                $table->bigInteger('id_pasien');
                $table->string('id_dokter');
                $table->integer('no_urut');
                $table->string('nama');
                $table->string('usia');
                $table->date('tanggal_kunjungan');
                $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
                $table->string('nomor_hp');
                $table->string('keluhan');
                $table->string('nama_obat');
                $table->decimal('harga', 8, 2);
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};

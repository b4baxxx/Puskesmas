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
        Schema::create('kunjungans', function (Blueprint $table) {
            
            $table->bigInteger('id_pasien');
            $table->string('id_dokter');
            $table->integer('no_urut');
            $table->date('tanggal_kunjungan');
            $table->text('keluhan');
            $table->text('diagnosa');
            $table->string('nama_obat');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};

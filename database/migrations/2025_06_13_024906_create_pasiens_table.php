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
                $table->id();
                $table->string('no_urut',20);
                $table->string('nama',20);
                $table->string('kelamin',20);
                $table->string('no_hp',20);
                $table->date('tanggal_lahir',20);
                $table->string('alamat',20);
                $table->string('obat_id',20);
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

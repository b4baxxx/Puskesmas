<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ['id_pasien', 'nama', 'usia', 'kelamin','nomor_hp'];
    protected $table = 'pasiens';
    protected $primaryKey = 'id_pasien';
    protected $guarded = [];

    // public function dokter(){
    //     return $this->belongsTo(dokter::class, 'dokter_id');
    // }

    // public function kunjungan(){
    //     return $this->belongsTo(kunjungan::class, 'kunjungan_id');
    // }

    // public function obat(){
    //     return $this->belongsTo(obat::class, 'obat_id');
    // }
}

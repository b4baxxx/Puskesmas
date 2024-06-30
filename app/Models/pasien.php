<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ['id_pasien','id_dokter','no_urut','nama', 'usia','tanggal_kunjungann','kelamin','nomor_hp','keluhan','nama_obat','harga'];
    protected $table = 'pasiens';
    protected $primaryKey = 'id_pasien';
    protected $guarded = [];
    public $incrementing = false; 
    protected $keyType = 'string';
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

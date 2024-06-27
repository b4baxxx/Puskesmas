<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ['no_urut', 'nama', 'kelamin', 'no_hp', 'tanggal_lahir', 'alamat','obat_id'];

    public function dokter(){
        return $this->belongsTo(dokter::class, 'dokter_id');
    }

    public function kunjungan(){
        return $this->belongsTo(kunjungan::class, 'kunjungan_id');
    }

    public function obat(){
        return $this->belongsTo(obat::class, 'obat_id');
    }
}

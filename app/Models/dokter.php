<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    
    protected $fillable = ['kode','nama', 'spesialis', 'jadwal_praktek'];

    public function pasiens(){
        return $this->belongsTo(pasien::class, 'dokter_id');
    }
}

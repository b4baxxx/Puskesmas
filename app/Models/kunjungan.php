<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kunjungan extends Model
{
    use HasFactory;
    protected $fillable = ['id_pasien','id_dokter','no_urut','nama','no_urut','tanggal_kunjungan','keluhan','diagnosa','nama_obat',];
    protected $table = 'kunjungans';
    protected $primaryKey = 'id_pasien';
    protected $guarded = [];

    }


<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_obat = obat::count();
        $pasienobat = array($jumlah_obat);
        $namaobat = obat::select('nama_obat')->get();
        // $pasienobat= obat::select(" SELECT obats.nama_obat,COUNT(*) as jumlah FROM obats
        // GROUP BY obats.nama_obat");
        return view('dashboard')->with('pasienobat',$pasienobat)->with('namaobat',$namaobat);
        
    }
}

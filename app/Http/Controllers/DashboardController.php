<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // $data = DB::table('pasiens')
        //     ->select('nama_obat', DB::raw('count(*) as jumlah'))
        //     ->groupBy('nama_obat')
        //     ->get();
        $data = Obat::select('nama_obat', 'stok')->get();
            return view('dashboard', [
                'data' => $data
            ]);
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\kunjungan;
use App\Models\obat;
use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien=pasien::all();
        return view('pasien.index')
            ->with('pasien',$pasien);
    }

    public function create()
    {
        $dokter = dokter::all();
        $kunjungan = kunjungan::all();
        $obat = obat::all();
        return view('pasien.create', compact('id_pasien', 'id_dokter','no_urut','nama','usia','tanggal_kunjungan','kelamin','nomor_hp','keluhan','nama_obat','harga'));
    }

    public function store(Request $request)
    {
        $val = $request->validate([
        'id_pasien' => 'required',
        'id_dokter' => 'required',
        'no_urut'  => 'required',
        'nama' => 'required',
        'usia' => 'required',
        'tanggal_kunjungan' => 'required',
        'kelamin' => 'required',
        'no_hp'  => 'required',
        'keluhan'  => 'required',
        'nama_obat'  => 'required',
        'harga'  => 'required|numeric',

        
        ]);
        pasien::create($val);
        return redirect()->route('pasien.index')->with('success', $val['nama'] . ' berhasil disimpan');
    }

/**
 * Display the specified resource.
 */
    public function show(pasien $pasien)
    {
        
    }

/**
 * Show the form for editing the specified resource.
 */
public function edit(pasien $pasien)
{
    // $pasien=pasien::all();
    return view('pasien.edit')
    ->with('pasien',$pasien);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, pasien $pasien)
{
    $val = $request->validate([
        'id_pasien' => 'required',
        'id_dokter' => 'required',
        'no_urut'  => 'required',
        'nama' => 'required',
        'usia' => 'required',
        'tanggal_kunjungan' => 'required',
        'kelamin' => 'required',
        'no_hp'  => 'required',
        'keluhan'  => 'required',
        'nama_obat'  => 'required',
        'harga'  => 'required',


    ]);
    pasien::where('id', $pasien['id'])->update($val);
    
    return redirect()->route('pasien.index')->with('Success', $val['nama'] . ' berhasil disimpan');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(pasien $pasien)
{
    $pasien->delete();
    return redirect()->route('pasien.index');
}
}

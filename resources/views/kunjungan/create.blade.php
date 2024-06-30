@extends('layout.main')

@section('title','Kunjungan')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kunjungan</h4>
                <p class="card-description">Data Kunjungan    
                </p>
                <form method="POST" action="{{ route('kunjungan.store') }}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="id_pasien">ID Pasien</label>
                        <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="{{ old('id_pasien') }}" placeholder="Masukkan ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="id_dokter">ID Dokter</label>
                        <input type="text" class="form-control" id="id_dokter" name="id_dokter" value="{{ old('id_dokter') }}" placeholder="Masukkan ID Dokter">
                    </div>
                    <div class="form-group">
                        <label for="no_urut">No Urut</label>
                        <input type="text" class="form-control" id="no_urut" name="no_urut" value="{{ old('no_urut') }}" placeholder="Masukkan No Urut">
                   </div>
                    <div class="form-group">
                      <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                      <input type="date" class="form-control" name="tanggal_kunjungan" value="{{ old('tanggal_kunjungan') }}" required>
                   </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" id="keluhan" name="keluhan" value="{{ old('keluhan') }}" placeholder="Masukkan Keluhan">
                    </div>
                    <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="{{ old('diagnosa') }}" placeholder="Masukkan Diagnosa">
                    </div>
                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ old('nama_obat') }}" placeholder="Masukkan Nama Obat">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('kunjungan') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
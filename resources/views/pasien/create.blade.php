@extends('layout.main')

@section('title','Tambah Pasien')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Pasien</h4>
                <p class="card-description">Data Tambah Pasien</p>
                <form action="{{ route('pasien.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_pasien">Id Pasien</label>
                        <input type="text" class="form-control" name="id_pasien" value="{{ old('id_pasien') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_dokter">Id Dokter</label>
                        <input type="text" class="form-control" name="id_dokter" value="{{ old('id_dokter') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_urut">No Urut</label>
                        <input type="text" class="form-control" name="no_urut" value="{{ old('no_urut') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="text" class="form-control" name="usia" value="{{ old('usia') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tanggal_kunjungan" value="{{ old('tanggal_kunjungan') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelamin" id="kelaminL" value="Laki-laki" required>
                            <label class="form-check-label" for="kelaminL">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelamin" id="kelaminP" value="Perempuan" required>
                            <label class="form-check-label" for="kelaminP">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">No Telpon</label>
                        <input type="text" class="form-control" name="nomor_hp" value="{{ old('nomor_hp') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" name="keluhan" value="{{ old('keluhan') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" name="nama_obat" value="{{ old('nama_obat') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{ old('harga') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ url('pasien')}}" class="btn btn-light">Batal</a>
                </form>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
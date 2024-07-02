@extends('layout.main')

@section('title', 'Tambah Dokter')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Dokter</h4>
                <p class="card-description">Data Tambah Dokter</p>
                <form method="POST" action="{{ route('dokter.store') }}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode Dokter</label>
                        <input type="text" class="form-control" id="kode" name="kode" value="{{ old('kode') }}">
                        @error('kode')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="spesialis">Spesialis Dokter</label>
                        <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{ old('spesialis') }}" placeholder="Specialis saraf, bedah, ...">
                    </div>
                    <div class="form-group">
                        <label for="jadwal_praktek">Jadwal Praktek</label>
                        <input type="text" class="form-control" id="jadwal_praktek" name="jadwal_praktek" value="{{ old('jadwal_praktek') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ route('dokter.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

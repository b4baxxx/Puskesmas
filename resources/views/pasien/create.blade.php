@extends('layout.main')

@section('title','Tambah Pasien')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Pasien</h4>
                  <p class="card-description">
                    Data Tambah Pasien
                  <form method="POST"action="{{route('pasien.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="id_pasien">Id Pasien</label>
                      <input type="text" class="form-control" name="id_pasien" value="{{old('id_pasien')}}">
                    </div>
                    <div class="form-group">
                      <label for="id_pasien">Id Pasien</label>
                      <input type="text" class="form-control" name="id_pasien" value="{{old('id_pasien')}}">
                    </div>
                    <div class="form-group">
                      <label for="id_dokter">Id Dokter</label>
                      <input type="text" class="form-control" name="id_dokter" value="{{old('id_dokter')}}">
                    </div>
                    <div class="form-group">
                      <label for="no_urut">No Urut</label>
                      <input type="text" class="form-control" name="no_urut" value="{{old('no_urut')}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                      <label for="usia">Umur Pasien</label>
                      <input type="text" class="form-control" name="usia" value="{{old('usia')}}">
                    </div>
                    <div class="form-group">
                      <label for="kelamin">Jenis Kelamin</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelaminL" value="Laki-laki" required>
                        <label class="form-check-label" for="kelaminL">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelaminP" value="Perempuan" required>
                        <label class="form-check-label" for="kelaminP">
                            Perempuan
                        </label>
                    </div>
                </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">No Telpon</label>
                        <input type="text" class="form-control" name="nomor_hp" value="{{old('nomor_hp')}}">
                      </div>
                      <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" name="keluhan" value="{{old('keluhan')}}">
                      </div>
                      <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" name="nama_obat" value="{{old('nama_obat')}}">
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{old('harga')}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection
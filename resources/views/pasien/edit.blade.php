@extends('layout.main')

@section('title','Ubah Pasien')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Pasien</h4>
                  <p class="card-description">
                    Data Ubah Pasien </p>
                  <form method="POST" action="{{route('pasien.update', $pasien["id_pasien"])}}" class="forms-sample">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="id_pasien">Id Pasien</label>
                      <input type="text" class="form-control" name="id_pasien" value="{{old('id_pasien') ? old('id_pasien') : $pasien['id_pasien']}}">
                    </div>
                    <div class="form-group">
                      <label for="id_dokter">Id Dokter</label>
                      <input type="text" class="form-control" name="id_dokter" value="{{old('id_dokter') ? old('id_dokter') : $pasien['id_dokter']}}">
                    </div>
                    <div class="form-group">
                      <label for="no_urut">No Urut</label>
                      <input type="text" class="form-control" name="no_urut" value="{{old('no_urut') ? old('no_urut') : $pasien['no_urut']}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama') ? old('nama') : $pasien['nama']}}">
                    </div>
                    <div class="form-group">
                      <label for="usia">Umur Pasien</label>
                      <input type="text" class="form-control" name="usia" value="{{old('usia') ? old('usia') : $pasien['usia']}}">
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
                        <input type="text" class="form-control" name="nomor_hp" value="{{old('nomor_hp') ? old('nomor_hp') : $pasien['nomor_hp']}}">
                      </div>
                      <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" name="keluhan" value="{{old('keluhan') ? old('keluhan') : $pasien['keluhan']}}">
                      </div>
                      <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" name="nama_obat" value="{{old('nama_obat') ? old('nama_obat') : $pasien['nama_obat']}}">
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{old('harga') ? old('harga') : $pasien['harga']}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('pasien')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection


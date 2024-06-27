@extends('layout.main')

@section('title','Tambah Pasien')
@section('content')

<div class="tabel-kita">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Pasien</h4>
                  <p class="card-description">
                    Data Tambah Pasien
                  <form method="POST"action="{{route('pasien.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">No Urut</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    
                    
                    <div class="form-group">
                        <label for="kelamin">Kelamin</label>
                        <input type="text" class="form-control" name="kelamin" value="{{old('kelamin')}}">
                      </div>
                      <div class="form-group">
                        <label for="no_hp">Nomor Hp</label>
                        <input type="text" class="form-control" name="no_hp" value="{{old('no_hp')}}">
                      </div>
                     
                      
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">

                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                        <div class="form-group">
                          <label for="obat_id">Id Obat</label>
                          <select name="obat_id"
                          class="form-control">
                                @foreach($dokter as $item)
                                    <option value="{{ $item['id']}}">
                                        {{ $item['obat_id']}}
                                    </option>
                                @endforeach
                          </select>
                        </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection
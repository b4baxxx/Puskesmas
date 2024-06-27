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
                      <label for="nama">No Urut</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    
                    </div>
                </div>
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Kelamin</label>
                        <input type="text" class="form-control" name="kelamin" value="{{old('kelamin')}}">
                      </div>
                      <div class="form-group">
                        <label for="no_hp">Nomor Hp</label>
                        <input type="date" class="form-control" name="no_hp" value="{{old('no_hp')}}">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
                      </div>    
                    </div>
                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      
                        <input class="form-check-input" type="radio" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                        </label>
                    </div>
                      <div class="form-group">
                        <label for="nomor">Nomor</label>
                        <input type="text" class="form-control" name="nomor" value="{{old('nomor')}}">
                      </div>  

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection
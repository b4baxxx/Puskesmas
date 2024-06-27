@extends('layout.main')

@section('title','Ubah Pasien')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Pasien</h4>
                  <p class="card-description">
                    Data Ubah Pasien
                  <form method="POST"action="{{route('pasien.update', $pasien["id"])}}" class="forms-sample">
                    @method('Put')
                    @csrf
                    <div class="form-group">
                      <label for="no_urut">No_Urut</label>
                      <input type="text" class="form-control" name="no_urut" value="{{old('no_urut')}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                      <label for="kelamin">Kelamin</label>
                      <input type="text" class="form-control" name="kelamin" value="{{old('kelamin')}}">
                    </div>
                    <div class="form-group">
                      <label for="no_hp">Nomor Hp</label>
                      <input type="text" class="form-control" name="no_hp" value="{{old('no_hp')}}">
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat Pasien</label>
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
                      </div>    
                      <div class="form-group">
                        <label for="obat_id">Id Obat</label>
                        <select name="obat_id"
                        class="form-control">
                              @foreach($obat as $item)
                                  <option value="{{ $item['id']}}">
                                      {{ $item['obat_id']}} 

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('pasien')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection
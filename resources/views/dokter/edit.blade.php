@extends('layout.main')

@section('title','Ubah Dokter')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Dokter</h4>
                  <p class="card-description">
                    Data Ubah Dokter
                  </p>
                  <form method="POST"action="{{route('dokter.update', $dokter["id"])}}" class="forms-sample">
                    @method('Put')
                    @csrf
                    <div class="form-group">
                      <label for="kode">Kode Dokter</label>
                      <input type="text" class="form-control" name="kode" value="{{old('kode')}}">
                      @error('nama')
                            <span class="text-danger"> {{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Dokter</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="spesialis">Specialis Dokter</label>
                        <input type="text" class="form-control" name="spesialis" value="{{old('spesialis')}}" placeholder="specialis saraf, specialis bedah, ....">
                      </div>
                      <div class="form-group">
                        <label for="jadwal_praktek">Jadwal Praktek</label>
                        <input type="text" class="form-control" name="jadwal_praktek" value="{{old('jadwal_praktek')}}" placeholder="specialis saraf, specialis bedah, ....">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection


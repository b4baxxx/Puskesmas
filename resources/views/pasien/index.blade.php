@extends('layout.main')

@section('title','Pasien')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pasien</h4>
                  <p class="card-description">
                    List data pasien
                  </p>
                  @can('create',App\pasien::class)
                  <a href="{{ route('pasien.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id Pasien</th>
                          <th>Id Dokter</th>
                          <th>No Urut</th>
                          <th>Nama</th>
                          <th>Umur Pasien</th>
                          <th>Kelamin</th>
                          <th>No Telepon</th>
                          <th>Keluhan</th>
                          <th>Nama Obat</th>
                          <th>Harga</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pasien as $item)
                        <tr>
                            <td>{{$item["id_pasien"]}}</td>
                            <td>{{$item["id_dokter"]}}</td>
                            <td>{{$item["no_urut"]}}</td>
                            <td>{{$item["nama"]}}</td>
                            <td>{{$item["usia"]}}</td>
                            <td>{{$item["tanggal_kunjungan"]}}</td>
                            <td>{{$item["kelamin"]}}</td>
                            <td>{{$item["no_hp"]}}</td>
                            <td>{{$item["keluhan"]}}</td>
                            <td>{{$item["nama_obat"]}}</td>
                            <td>{{$item["harga"]}}</td>
                            
                            <td>
                              @can('delete',$item)
                              <form action="{{ route('pasien.destroy', $item->id_pasien) }}" method="post" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item->nama}}">Hapus</button>
                              </form>
                              @endcan
                            </td>
                            <td>
                              @can('update',$item)
                              <a href="{{ route('pasien.edit', $item->id_pasien)}}"
                                class="btn btn-sm btn-rounded btn-warning">Edit</a>
                                @endcan
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection
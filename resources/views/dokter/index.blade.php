@extends('layout.main')

@section('title','Dokter')

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dokter</h4>
                  <p class="card-description">
                    List data Dokter
                  </p>
                  @can('create',App\dokter::class)
                  <a href="{{ route('dokter.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Kode Dokter</th>
                          <th>Nama Dokter</th>
                          <th>No Telepon</th>
                          <th>Spesialis</th>
                          <th>Jadwal Praktek</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dokter as $item)
                        <tr>
                            <td>{{$item["kode"]}}</td>
                            <td>{{$item["nama"]}}</td>
                            <td>{{$item["spesialis"]}}</td>
                            <td>{{$item["jadwal_praktek"]}}</td>
                            <td>
                              @can('delete',$item)
                              <form action="{{ route('dokter.destroy', $item["id"]) }}" method="post" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item["nama"]}}">Hapus</button>
                              </form>
                              @endcan
                            </td>
                            <td>
                              @can('update',$item)
                            <a href="{{ route('dokter.edit', $item["id"])}}"
                              class="btn btn-sm btn-rounded btn-warning">Edit</a>
                              @endcan
                            </td>
                            </tr>
                        @endforeach
                        @if (session('success'))
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
           Swal.fire({
              title: "Good job!",
              text: "{{ session('success') }}",
              icon: "success"
            });
        </script>
        @endif
          {{-- confirm dialog --}}
        <script type="text/javascript">
          $('.show_confirm').click(function(event) {
            let form =  $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
              title: "Yakin Dekk?"+name,
              text: "Setelah dihapus tidak bisa dikembalikan",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Ya, Hapus"
            })
          
            .then((willDelete) => {
              if (willDelete.isConfirmed) {
                form.submit();
              }
            });
          });
        </script>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection

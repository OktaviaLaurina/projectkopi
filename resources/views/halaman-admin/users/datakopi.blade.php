@extends('halaman-admin.tamplate.default')

@section('content')
    
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kopi</th>
        <th scope="col">Ketersediaan</th>
        <th scope="col">Harga</th>
        <th scope="col">Gambar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

      <a  href="{{route('admin.tambahdata')}}"
        class="btn btn-success my-3" type="button">Tambah Data</a>
      
        <?php $i = 0; ?>
          @foreach ($data as $datas)
        <?php $i++; ?>

      <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{$datas->namakopi}}</td>
        <td>{{$datas->ketersediaan}}</td>
        <td> {{$datas->harga}}</td>
        <td>
            <img src="{{asset(''. $datas->gambar)}}" width="100" height="100">
        </td>
        <td>
            <div class="d-grid gap-2 d-md-block">
                <a href="edit/{{$datas->id}}" class="btn btn-warning" >edit</a>
                <!-- Button trigger modal -->
                <form action="delete/{{$datas->id}}" method="post">
                  @csrf
                  @method('delete')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    delete
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Yakin ingin hapus..??
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                

            </div>
        </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection
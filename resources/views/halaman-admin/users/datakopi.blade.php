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
        <td>{{$datas->NamaKopi}}</td>
        <td>{{$datas->Ketersediaan}}</td>
        <td> {{$datas->Harga}}</td>
        <td>
            <img src="{{asset('img/'. $datas->Gambar)}}" width="100" height="100">
        </td>
        <td>
            <div class="d-grid gap-2 d-md-block">
                <a href="edit/{{$datas->id}}" class="btn btn-warning" type="button">edit</a>
                <button class="btn btn-danger" type="button">hapus</button>
              </div>
          
        </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection
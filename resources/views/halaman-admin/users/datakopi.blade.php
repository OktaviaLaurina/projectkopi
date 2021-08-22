@extends('halaman-admin.tamplate.index')

@section('content')

@include('sweetalert::alert')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kopi</th>
        <th scope="col">Ketersediaan</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Jenis</th>
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
        <td>{{$datas->keterangan}}</td>
        <td>{{$datas->jenis}}</td>
        <td> {{$datas->harga}}</td>
        <td>
            <img src="{{asset(''. $datas->gambar)}}" width="100" height="100">
        </td>
        <td>
            <div class="d-grid gap-2 d-md-block">
              <a href="{{ route('admin.forcast', $datas->id) }}" class="btn btn-warning" >Forecast</a>
                <a href="edit/{{$datas->id}}" class="btn btn-warning" >edit</a>
                <a href="{{route('admin.datadelete', $datas->id)}}">
                  <button type="button" onClick="return konfirmasi()" class="btn btn-danger btn-sm">
                    Hapus
                  </button>
                </a>
                

            </div>
        </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection

<script>
  function konfirmasi () {
    var pilihan = confirm('Apakah Anda Yakin?')
    if (pilihan) {
      return true
    } else{
      return false
    }
  }
</script>
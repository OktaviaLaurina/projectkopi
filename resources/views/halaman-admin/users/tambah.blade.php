@extends('halaman-admin.tamplate.default')

@section('title', 'tambahdata ')
    
@section('content')
    
    <form action="{{route('admin.datacreate')}}" method="post" enctype="multipart/form-data">
        @csrf('POST')
        <div class="form-group my-4">
            <label for="namakopi">Nama Kopi</label>
            <input type="text" name="namakopi" class="form-control" id="namakopi">

            <label for="ketersediaan">Ketersediaan</label>
            <input type="text" name="ketersediaan" class="form-control" id="ketersediaan">

            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan">

            <label for="jenis">Jenis</label>
            <input type="text" name="jenis" class="form-control" id="jenis">
            
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga">

            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar">

        </div>

        <button type="submit" class ="btn btn-primary">Submit</button>

    </form>

@endsection
@extends('halaman-admin.tamplate.default')

@section('title', 'edit ')
    
@section('content')
    
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group my-4">
            <label for="namakopi">Nama Kopi</label>
            <input type="text" name="namakopi" class="form-control" id="namakopi" value="{{$datas->namakopi}}">

            <label for="ketersediaan">Ketersediaan</label>
            <input type="text" name="ketersediaan" class="form-control" id="ketersediaan" value="{{$datas->ketersediaan}}">
            
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga" value="{{$datas->harga}}">

            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar" value="{{$datas->gambar}}">

        </div>

        <button type="submit" class ="btn btn-primary">Submit</button>

    </form>

@endsection
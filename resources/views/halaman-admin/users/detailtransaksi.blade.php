@extends('halaman-admin.tamplate.index')

@section('content')

@include('sweetalert::alert')
   
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Resi</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Sub Total</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($data as $datas)
            <tr>
                <td>{{ strtoupper($datas->kodeResi) }}</td>
                <td>{{$datas->namakopi}}</td>
                <td>{{$datas->hargaKopi}}</td>
                <td>{{$datas->jumlah}}</td>
                <td>{{$datas->subTotal}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">
                <center>Total</center>
            </td>
            <td>
                <b>{{$dataTransaksi->total}}</b>
            </td>
        </tr>
        </tbody>
    </table>

</div>
@endsection

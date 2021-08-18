@extends('user.default')

@section('content')

@include('sweetalert::alert')
   
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Resi</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pesan</th>
            <th scope="col">Total</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($data as $datas)
            <tr>
                <td>{{ strtoupper($datas->kodeResi) }}</td>
                <td>{{$datas->alamat}}</td>
                <td>{{$datas->pesan}}</td>
                <td>{{$datas->total}}</td>
                <td>{{$datas->created_at}}</td>
                <td>
                    
                    @if($datas->status === 'Dikemas')
                    <span class="badge badge-danger">{{$datas->status}}</span>
                    @elseif ($datas->status === 'Dikirim')
                    <span class="badge badge-warning">{{$datas->status}}</span>
                    @else
                    <span class="badge badge-success">{{$datas->status}}</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('detailTransaksi', $datas->kodeResi) }}">
                        <button class="btn btn-warning">Detail</button>
                    </a>
                    @if($datas->status === 'Dikirim')
                        <a href="{{ route('konfirmasiTransaksi', $datas->kodeResi) }}">
                            <button onclick="return konfirmasi()" class="btn btn-danger">Terima Barang</button>
                        </a>
                    @else
                        <button class="btn btn-danger" disabled>Terima Barang</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
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

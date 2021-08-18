@extends('user.default')

@section('title', 'Index')

@section('content')
@include('sweetalert::alert')

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container {
        max-width: 960px;
      }

      .lh-condensed { line-height: 1.25; }

    </style>
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{asset(''. $datas->gambar)}}" alt="" width="250" height="250">
    <h2>{{$datas->namakopi}}</h2>
    <p class="lead">{{$datas->deskripsi}}</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{$datas->namakopi}}</h6>
          </div>
          <span class="text-muted">Rp. {{ $datas->harga }},-</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Jenis</h6>
          </div>
          <span class="text-muted">
            {{ $datas->jenis }}
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Jumlah</h6>
          </div>
          <span class="text-muted" id="jumlahView">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <span>Total (IDR)</span>
          </div>
          <span class="text-success" id="total"></span>
        </li>
      </ul>

    </div> 
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing Pemesan</h4>
      <form action="" method="POST" class="needs-validation" novalidate>
        @csrf
        @method("POST")
        <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
        <input type="text" name="kopi_id" value="{{ $datas->id }}" hidden>
        <input type="text" name="nama_kopi" value="{{ $datas->namakopi }}" hidden>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="state">Jumlah</label>
            <div class="">
              <div class="input-group quantity">
                <input type="number" oninput="changeVal()" id="inputJumlah" name="jumlah" class="qty-input form-control" min="1"  value="1">
              </div>
            </div>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
        </div>
        <input type="text" name="total" class="form-control" value="{{ $datas->harga }}" hidden>
        <hr class="mb-4">
        <div class="input-group">
          <button type="submit" class="btn btn-secondary">Masukan Keranjang</button>
          <div class="input-group-append">
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    let jumlahs = document.getElementById("inputJumlah").value
    let hargas = '<?= $datas->harga ?>'
    const totals = jumlahs * hargas
    document.getElementById('total').textContent = `Rp. ${totals},-`
    function changeVal () {
      let jumlah = document.getElementById("inputJumlah").value
      document.getElementById("jumlahView").textContent = jumlah
      const harga = '<?= $datas->harga ?>';
      let total = harga * jumlah
      if (jumlah > 0) {
        document.getElementById('total').textContent = `Rp. ${total},-`
      } else {
        document.getElementById('total').textContent = 'Rp. 0,-'
      }
      
    }
  </script>

@endsection





@extends('user.default')

@section('title', 'Index')

@section('content')

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
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing Pemesan</h4>
      <form action="" method="POST" class="needs-validation" novalidate>
        @csrf
        @method("POST")
        <div class="mb-3">
          <label for="address">Alamat</label>
          <textarea type="text" name="alamat" class="form-control" id="address" placeholder="Isikan Alamat Anda" required></textarea>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Pesan</label>
          <input type="text" name="pesan" class="form-control" id="address2" placeholder="Tinggalkan Pesan">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Jenis</label>
            <select class="custom-select d-block w-100" id="country" name="jenis" required>
              <option value="biji">Biji Kopi</option>
              <option value="bubuk">Bubuk Kopi</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="country">Ukuran</label>
            <div class="d-block ">
              <div class="custom-control custom-radio">
                <input id="250" name="ukuran" value="250" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="250">250 Gram</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="500" name="ukuran" value="500" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="500">500 Gram</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="1" name="ukuran" value="1" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="1">1 Kg</label>
              </div>
            </div>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Jumlah</label>
            <div class="">
              <div class="input-group quantity">
                <input type="number" class="qty-input form-control" min="1" max="10" value="1">
              </div>
            </div>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
        </div>
        <hr class="mb-4">
      </form>
    </div>
  </div>

  <script>
    $(document).ready(function () {
     $('.increment-btn').click(function (e) {
       e.preventDefault();
       var incre_value = $(this).parents('.quantity').find('.qty-input').val();
       var value = parseInt(incre_value, 10);
       value = isNaN(value) ? 0 : value;
       if(value<10){
           value++;
           $(this).parents('.quantity').find('.qty-input').val(value);
       }
     });
 
     $('.decrement-btn').click(function (e) {
         e.preventDefault();
         var decre_value = $(this).parents('.quantity').find('.qty-input').val();
         var value = parseInt(decre_value, 10);
         value = isNaN(value) ? 0 : value;
         if(value>1){
             value--;
             $(this).parents('.quantity').find('.qty-input').val(value);
         }
     });
 
   });
 
 </script>

@endsection





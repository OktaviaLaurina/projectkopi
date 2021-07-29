@extends('user.default')

@section('title', 'Index')

@section('content')
<main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1>Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
            @foreach ($data as $datas)
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <a href="#">
                        <img src="{{asset(''. $datas->gambar)}}" class="bd-placeholder-img card-img-top" width="450" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                      </a>
                      <div class="card-body">
                        <p class="lead text-muted">{{$datas->namakopi}}</p>
                        <p class="card-text">{{$datas->deskripsi}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="{{route('detail', $datas->id)}}" class="btn btn-sm btn-outline-secondary">Beli Sekarang</a>
                          {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                        </div>
                          <small class="text-muted">Harga:  Rp.{{$datas->harga}}</small>
                        </div>
                      </div>
                  </div>
              </div>
            @endforeach
        </div>
      </div>
    </div>
  
  </main>
@endsection
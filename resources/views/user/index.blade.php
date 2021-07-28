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
            @for ($i = 0; $i < 10; $i++)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                          <img src="https://camo.githubusercontent.com/0cbb7f5c60b17641df1d296a9eb8eef5cc9cdb4c975a399b7d0dde1e0c436354/68747470733a2f2f312e62702e626c6f6773706f742e636f6d2f2d56676545314d6a616e72452f58754646326975756678492f41414141414141414f49452f44505555366f4955704c3470757270415972747168307a4c4c6d75344f46785377434c63424741735948512f733332302f494d472d32303230303531362d5741303030372e6a7067" class="bd-placeholder-img card-img-top" width="450" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                        </a>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
      </div>
    </div>
  
  </main>
@endsection
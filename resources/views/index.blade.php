<!doctype html>
<html lang="en">
  <head>
    <title>BeeFlix</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <a href="{{ url()->previous() }}" type="button" class="btn btn-danger text-white my-3">Kembali</a>
      <a href="/" type="button" class="btn btn-secondary text white my-3">Lihat Semua Film</a>  
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">BeeFLix</h1>
            <p class="lead">Free Watching Series On BeeFlix! JOIN NOW!</p>
        </div>
      </div>
      
      {{-- @if (session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>    
      @endif --}}
      <h1 class="mt-3 text-center display-4">Drama</h1>
      <div class="row my-5">
        @foreach($genre1 as $d)
        <div class="col-lg-4">
            <div class="card mb-5" style="width: 18rem;">
            <img class=" card-img-top" src="{{$d->img_path}}" alt="Card image cap" style="height: 429px">
                <div class="card-body">
                 <h5 class="card-title text-center">{{$d->title}}</h5>
                <div class="d-flex justify-content-center"><a href="/{{$d->id}}" class="btn btn-secondary">Lihat Film</a></div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <h1 class="mt-3 text-center display-4">Kids</h1>
      <div class="row my-5">
        @foreach($genre2 as $d)
        <div class="col-lg-4">
            <div class="card mb-5" style="width: 18rem;">    
            <img class=" card-img-top" src="{{$d->img_path}}" alt="Card image cap" style="height: 429px">
                <div class="card-body">
                  <h5 class="card-title text-center">{{$d->title}}</h5>
                  <div class="d-flex justify-content-center"><a href="/{{$d->id}}" class="btn btn-secondary">Lihat Film</a></div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <h1 class="mt-3 text-center display-4">TV Show</h1>
      <div class="row my-5">
        @foreach($genre3 as $d)
        <div class="col-lg-4">
            <div class="card mb-5" style="width: 18rem;">
            <img class=" card-img-top" src="{{$d->img_path}}" alt="Card image cap" style="height: 429px">
                <div class="card-body">
                  <h5 class="card-title text-center">{{$d->title}}</h5>
                  <div class="d-flex justify-content-center"><a href="/{{$d->id}}" class="btn btn-secondary">Lihat Film</a></div>
                </div>
            </div>
        </div>
        @endforeach
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
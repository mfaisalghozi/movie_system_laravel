<!doctype html>
<html lang="en">
  <head>
    <title>Detail Of Series</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="/" type="button" class="btn btn-danger text-white my-3">Kembali</a>
        <a href="/" type="button" class="btn btn-secondary text white my-3">Lihat Semua Film</a>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">BEEFLIX MOVIE!</h1>
                <p class="lead">Enjoy Watching !</p>
                <p>Made by MFaisalGhozi</p>
            </div>
        </div>
    
      <h1 class="mt-3">{{$movie->title}} Series</h1>
            

            <div class="card">
              <div class="row">
                <div class="col-3">
                  <img src="{{$movie->img_path}}" class="img-fluid rounded" alt="an image from storage">
                </div>
                <div class="col-9">
                  <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    @if ($movie->rating == 1)
                    <h6 class="card-subtitle mb-2 text-muted">⭐</h6>
                    @elseif ($movie->rating == 2)
                    <h6 class="card-subtitle mb-2 text-muted">⭐⭐</h6>
                    @elseif ($movie->rating == 3)
                    <h6 class="card-subtitle mb-2 text-muted">⭐⭐⭐</h6>
                    @elseif ($movie->rating == 4)
                    <h6 class="card-subtitle mb-2 text-muted">⭐⭐⭐⭐</h6>
                    @elseif ($movie->rating == 5)
                    <h6 class="card-subtitle mb-2 text-muted">⭐⭐⭐⭐⭐</h6>
                    @endif
                    <p class="card-text">{{$movie->description}}</p>
                  <p class="category card-subtitle my-3"></p>Category : <a href="/genre/{{$movie->genre->id}}" class="card-link">{{$movie->genre->name}}</a>
                  </div>
                </div>
              </div>
            </div>
            <table class="table my-3">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Episode</th>
                    <th scope="col">Judul</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($episode as $e)
                  <tr>
                    <th scope="row">Episode {{$e->episode}}</th>
                    <td>{{$e->title}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
              <div class="mt-2 d-flex justify-content-center">
                {{ $episode->onEachSide(2)->links() }}
              </div>
              
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
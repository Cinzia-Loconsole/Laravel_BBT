<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBT Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Didact+Gothic&display=swap" rel="stylesheet">

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="/img/bazinga.png">

  <!-- CSS COSTUM -->
  <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg mb-4" style="background-color: rgba(255, 228, 196, 0.795);">
        
        <div class="container-fluid">

          <!-- LOGO -->
          <a class="navbar-brand" href="/">
            <img class=" ms-3 logo" src="/img/logo.png" alt="" srcset="">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
            <i class="fa-solid fa-robot"></i>
            
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="/workers-page">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/gadgets">I nostri gadget</a>
              </li>
            </ul>
           </div>
        </div>
      </nav>

<!-- FINE NAVBAR -->

<!-- CHI SIAMO -->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 my-3 d-flex justify-content-center">
                <h1>Chi siamo</h1>
            </div>
        </div>
    </div>


<!-- CARD CHI SIAMO -->
    <div class="container-fluid">
        <div class="row justify-content-center">
        @foreach($workers as $worker)
          <div class="col-12 col-md-4 d-flex justify-content-center my-3">

  <div class="card" style="width: 18rem;">
    <img src="{{$worker['img']}}" class="card-img-top" alt="{{$worker['name']}}">
        <div class="card-body">
          <h5 class="card-title">{{$worker['name']}}</h5>
          <p class="card-text">{{$worker['surname']}}</p>
          <p>{{$worker['age']}} anni </p>
          <a href="{{route('worker-detail',['id'=>$worker['id']])}}" class="btn btn-primary">Dettagli</a>

  </div>
        </div>
        
          </div>
            @endforeach
        </div>
    </div>
    <!-- FINE CARD CHI SIAMO -->


<!-- SCRIPT MAIN.JS -->
    <script src="/js/main.jss"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
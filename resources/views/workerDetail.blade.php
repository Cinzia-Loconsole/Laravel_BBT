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

<!-- FONTAWESOME CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

  <!-- CSS COSTUM -->
  <link rel="stylesheet" href="/css/style.css">


  </head>
  <body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg" style="background-color: rgba(255, 228, 196, 0.795);">
        
        <div class="container-fluid">

          <!-- primo logo -->
          <a class="navbar-brand" href="/">
            <img class=" ms-3 logo" src="/img/logo.png" alt="" srcset="">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img class="toggler" src="/img/toggler.png" alt="" srcset="">
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
                <a class="nav-link" href="/gadget">I nostri gadget</a>
              </li>
            </ul>
           </div>
        </div>
      </nav>
<!-- FINE NAVBAR -->

<div class="container-fluid bg vh-100">
<div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 my-3 d-flex justify-content-center">
                <h1 class="fw-bold">{{$worker['name']}}</h1>
            </div>
        </div>
    </div>


    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center my-3">
<div class="card" style="width: 18rem;">
    <img src="{{$worker['img']}}" class="card-img-top" alt="{{$worker['name']}}">
        <div class="card-body">
    <h5 class="card-title">{{$worker['name']}}</h5>
    <p class="card-text">{{$worker['surname']}}</p>
    <p>{{$worker['age']}} anni </p>
    <p class="card-text">{{$worker['description']}}</p>
    <a href="{{route('workersPage')}}" class="btn btn-primary">Torna indietro</a>

</div>
        </div>
        
            </div>
        </div>
    </div>
</div>    




    <script src="/js/main.jss"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
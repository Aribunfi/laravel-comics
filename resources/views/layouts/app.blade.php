<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite('resources/js/app.js')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <img src="../resources/img/dc-logo.png" alt="Logo_DB_comics">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Characters</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Comics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tv</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Collectibles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Fans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Shops</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- @include('partials._navbar') --}}
    
    <main>
        <h1>@yield('title')</h1>
        @yield('content')
    </main>


</body>
</html>
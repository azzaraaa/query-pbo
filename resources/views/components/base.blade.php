<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Penambahan Nilai - Dinda Azzahra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Query1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/query2">Query2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/query3">Query3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/query4">Query4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/query5">Query5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/query6">Query6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/query7">Query7</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

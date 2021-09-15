
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Aceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/a-propos">A-propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clients">Nos clients</a>
              </li>
             
          </ul>
        <div class="container">
            @yield('content')
        </div>         
    </body>
</html>

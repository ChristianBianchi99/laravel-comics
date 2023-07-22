<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="jumbotron">
        </div>
        <div class="background">
          <div class="container h100">
              <div class="row h100">
                  <div class="col">
                      <div class="contents">
                        <div class="comics">

                        </div>
                        <button>
                          load more
                        </button>
                        <div class="badge">
                          current series
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                          @foreach ($comics as $comic)
                            <div class="comics-card">
                              <div class="img">
                                  <img src="https://picsum.photos/200/300" alt="{{ $comic['title'] }}">
                              </div>
                              <div class="text">
                                  {{$comic['title']}}
                              </div>
                            </div>
                          @endforeach
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
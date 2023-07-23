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
    <div class="top-row">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content">
                        <span>
                            DC POWER VISA&reg;
                        </span>
                        <span>
                            ADDITIONAL DC SITES
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container h100">
            <div class="row h100">
                <div class="col">
                    <div class="logo">
                        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo">
                    </div>
                </div>
                <div class="col">
                    <div class="list">
                        <ul>
                            <li>
                                <a href="">
                                    Characters
                                </a>
                            </li>
                            <li>
                                <a href="" class="active">
                                    Comics
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    movies
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    tv
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    games
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    collectibles
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    videos
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    fans
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    news
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    shop
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
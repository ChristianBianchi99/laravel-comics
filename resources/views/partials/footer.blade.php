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
    <footer>
        <div class="middle-bar">
            <div class="container h100">
                <div class="row h100">
                    <div class="col">
                        <div class="section">
                            <h3>dc comics</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Characters
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Comics
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Movies
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        TV
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Games
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Videos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        News
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="section">
                            <h3>shop</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Shop DC
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Shop DC Collectibles
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="section">
                            <h3>dc</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Terms Of Use
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Privacy policy (New)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Ad Choices
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Advertising
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Subscriptions
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Talent Workshops
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        CPSC Certificates
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Ratings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Shop Help
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="section">
                            <h3>sites</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        DC
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        MAD Magazine
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        DC Kids
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        DC Universe
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        DC Power Visa
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-logo">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <span>noted here</span>. All rights reserved. <br> <span>Cookies Settings</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container h100">
                <div class="row h100">
                    <div class="col">
                        <div class="sign-up">
                            <button>Sign-up now!</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="follow-us">
                            follow us
                        </div>
                        <div class="contacts">
                            <a href="#">
                                <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="Facebook">
                            </a>
                            <a href="#">
                                <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="Twitter">
                            </a>
                            <a href="#">
                                <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="Youtube">
                            </a>
                            <a href="#">
                                <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="Pinterest">
                            </a>
                            <a href="#">
                                <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="Periscope">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
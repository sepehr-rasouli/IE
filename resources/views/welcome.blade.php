
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>




        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .carousel-inner img {
                width: 100%;
                height: 100%;
                display: inline-block;
            }



            div.container {
                position: absolute;
                box-shadow: 0 0 20px 0 #5ea3a3;
                padding: 10px 50px;
                top: 250px;
                left: 100px;
            }
            .card{
                padding: 10px;
            }
            .card img{
                display: block;
                width: 50%;
                height: auto;
                border-radius: 50%;
                border-width: 5px;
                border-style: solid;
                border-color: green;
            }
            footer{
                position: fixed;
                bottom: 0px;
            }
            .avg-score{
                font-size: 16px;
                color: #5ea3a3;
            }
            .email{
                font-size: 18px;
                font-weight: bold;
                color: #488b8f;
            }

        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('game')}}">Start Game</a>
            </div>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            {{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
                {{--<div class="carousel-inner">--}}
                    {{--<div class="carousel-item active">--}}
                        {{--<img class="d-block w-100" src="/resources/images/154.jpg" alt="First slide">--}}
                    {{--</div>--}}
                    {{--<div class="carousel-item">--}}
                        {{--<img class="d-block w-100" src="/resources/images/01.jpg" alt="Second slide">--}}
                    {{--</div>--}}
                    {{--<div class="carousel-item">--}}
                        {{--<img class="d-block w-100" src="/resources/images/01.jpg" alt="Third slide">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
                    {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                {{--</a>--}}
                {{--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
                    {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                {{--</a>--}}
            {{--</div>--}}



            <div class="container">
                <div class="row py-5" id="play">
                    @foreach(App\User::all() as $user)
                        <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 m-1">
                            <img width="250" height="250" src="{{asset('img/c'.($user->id%6 + 1).'.png')}}">
                            <div class="avg-score text-center mt-2">
                                avg score: 100
                            </div>
                            <div class="email text-center">
                                {{$user->email}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{----}}
            {{--<div class="card-group" id="card">--}}
                {{--<div class="card text-white">--}}
                    {{--<img class="card-img-top" src="https://source.unsplash.com/featured/" alt="Card image top">--}}
                    {{--<div class="card-img-overlay">--}}
                        {{--<h3 class="card-title">Card title</h3>--}}
                        {{--<h4 class="card-subtitle">Card subtitle</h4>--}}
                        {{--<p class="card-text">This is a simple Card example</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card text-white">--}}
                    {{--<img class="card-img-top" src="https://source.unsplash.com/featured/" alt="Card image top">--}}
                    {{--<div class="card-img-overlay">--}}
                        {{--<h3 class="card-title">Card title</h3>--}}
                        {{--<h4 class="card-subtitle">Card subtitle</h4>--}}
                        {{--<p class="card-text">This is a simple Card example</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card text-white">--}}
                    {{--<img class="card-img-top" src="https://source.unsplash.com/featured/" alt="Card image top">--}}
                    {{--<div class="card-img-overlay">--}}
                        {{--<h3 class="card-title">Card title</h3>--}}
                        {{--<h4 class="card-subtitle">Card subtitle</h4>--}}
                        {{--<p class="card-text">This is a simple Card example</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}








        </div>
    </body>
</html>

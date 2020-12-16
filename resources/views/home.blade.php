<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Course Management</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
          rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .header {
            width: 100%;
            background-color: #000000;
            color: white;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
        body {
            background-image:  url("https://www.thairath.co.th/media/dFQROr7oWzulq5FZYAIlMVEofzVWimHZE3b1GKBHvKmOsMTwQlFz4ebiQGZLWv4u27b.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>

</head>
<body>
<div id="app">
    <nav class="header navbar navbar-expand-md navbar-dark shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/login') }}">
                <h1>Course Management</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <h2><a class="nav-link" href="{{ route('login') }}">Login</a></h2>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <h2><a class="nav-link" href="{{ route('register') }}">Register</a></h2>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Welcome, {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<img src="https://t3.ftcdn.net/jpg/02/20/14/38/360_F_220143804_fc4xRygvJ8bn8JPQumtHJieDN4ORNyjs.jpg" class="card-img-top" alt="...">
                <div class="card-header">Student Management System</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        You are successfully logged in!
                        <p>You will be redirected in <span id="counter">3</span> second(s).</p>
                        <script type="text/javascript">
                            function countdown() {
                                var i = document.getElementById('counter');
                                if (parseInt(i.innerHTML)<=0) {
                                    location.href = 'students';
                                }
                                if (parseInt(i.innerHTML)!=0) {
                                    i.innerHTML = parseInt(i.innerHTML)-1;
                                }
                            }
                            setInterval(function(){ countdown(); },1000);
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

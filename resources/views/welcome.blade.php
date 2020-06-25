<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LearnaLot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
            <div style="position: relative;
  text-align: center;
  color: white;">
            <img  style="width: 1600px; height: 400px; margin-top: -330px;" src="{{ asset("images/car.jpg") }}" alt="">
            <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">home,courses,pages,gallery,teachers,blog,contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
  </nav>
            <div style="text-shadow: 2px 2px;font-size:50px;margin-bottom:400px; position: absolute;top: -250px;left: 50%;transform: translate(-50%, -50%);">LEARNALOT</div>
  <div style="text-shadow: 2px 2px;color:green; font-size:50px;margin-bottom:400px; position: absolute;top: -150px;left: 50%;transform: translate(-50%, -50%);">SAFE DRIVE & GET LICENSE</div>
  @if (Route::has('login'))
                <div style="font-size:30px;margin-bottom:400px; position: absolute;top: -100px;left: 50%;transform: translate(-50%, -50%);">
                    @auth
                        <a class="btn btn-info" role="button" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-info" role="button" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-info" role="button" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        </div>
        
    </body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OverSeas Hotel Reservation System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Link to W3Schools -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <!-- Link to Google Ajax Calls -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- Link to Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #bfbfbf;
                color: #3399ff;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
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
            .btn-group button {
                background-color: #4CAF50; /* Green background */
                border: 1px solid green; /* Green border */
                color: white; /* White text */
                padding: 10px 24px; /* Some padding */
                cursor: pointer; /* Pointer/hand icon */
                float: left; /* Float the buttons side by side */
            }

            /* Clear floats (clearfix hack) */
            .btn-group:after {
                content: "";
                clear: both;
                display: table;
            }

            .btn-group button:not(:last-child) {
                border-right: none; /* Prevent double borders */
            }

            /* Add a background color on hover */
            .btn-group button:hover {
                background-color: #3e8e41;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Sign Up</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="app">
             
                     <nav class="nav has-shadow">
                         <div class="container-1">
                             <div class="nav-left">
                                 <a class="nav-item" href="{{route('home')}}">
                                     <img src="{{asset('images/unnamed.png')}}" alt="DevHotel" />

                                 </a>

                             </div>

                         </div>


                     </nav>
             
         </div>
                <div class="title m-b-md">
                   Overseas Hotel Reservation System 
                </div>
                  <div id="app">
             
             <nav class="nav has-shadow">
                 <div class="container">
                     <div id="image1">
                         <a class="nav-item" href="{{route('home')}}">
                             <img src="{{asset('images/download-1.jpg')}}" alt="DevHotel" />
                             
                         </a>
                         
                     </div>
                     
                 </div>
                 
                 
             </nav>
             
         </div>
                <div class="links">
                    <button type="button" class="btn btn-primary"><a href="#">Flights</a></button>
                    <button type="button" class="btn btn-warning"><a href="#">Hotel</a></button>
                    <button type="button" class="btn btn-success"><a href="#">Cars</a></button>
                    <button type="button" class="btn btn-danger"><a href="#">Vacations</a></button>
                    <button type="button" class="btn btn-info"><a href="#">Explore</a></button>
                </div>

            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SabKo Medicine...</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Ice Hockey Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Cherry+Cream+Soda' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- header -->


<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="stroke">
                    <ul class="nav navbar-nav">
                       <li> <a  href="{{ url('/') }}" class="hvr-bounce-to-bottom">Home</a></li>

                        <li ><a href="/about"  class="hvr-bounce-to-bottom">About Us</a></li>
                        <li><a href="/gallery" class="hvr-bounce-to-bottom">Gallery</a></li>
                        <li><a href="/contact_us" class="hvr-bounce-to-bottom">Contact</a></li>
                        <li><a href="/faq" class="hvr-bounce-to-bottom">F.A.Q.</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="active"><a href="{{ url('/login') }}" >Login</a></li>
                            <li><a href="{{ url('/register') }}" class="hvr-bounce-to-bottom">Register</a></li>
                        @else

                            <li class="dropdown " style="color: #00AFF0">
                                <a href="#" class="dropdown-toggle" style="color: #20222a" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" >
                                    <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-sign-out"></i>Dashboard</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                </nav>
            </div>

            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>



    @yield('content')


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

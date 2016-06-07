<!doctype html>


<head>
    <title>Gallery</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Sabkomedicine" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Cherry+Cream+Soda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/evil-icons/1.7.8/evil-icons.min.css">

    <style>


        body .container .content {

            font-weight: 100;
            font-family: 'Lato';
        }



        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>

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

                        <li ><a href="/" class="hvr-bounce-to-bottom" >Home</a></li>
                        <li ><a href="/about" class="hvr-bounce-to-bottom">About Us</a></li>
                        <li class="active"><a href="/gallery" class="hvr-bounce-to-bottom">Gallery</a></li>
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
<br>
<br>
<div class="container">
    <div class="content">
        <div class="title">Aisa hai baad me aana..</div>
    </div>
</div>

<br>
<br>
<br>


<div class="footer">
    <div class="container">

        <div class="footer-contact">
            <form>
                <input type="text"
                       placeholder="Enter your email to Subscribe" required=" ">
                <input type="submit"
                       value="Subscribe">
            </form>
        </div>
        <div class="footer-grids">
            <div class="col-md-4 footer-grid">
                <p style="font-size: large" >SUPPORT</p>
                <br>
                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=sabkomedicine@gmail.com&su=SUBJECT&body=BODY&&tf=1" style="text-decoration: none;" target="_blank"><p><i class="fa fa-paper-plane-o"></i>  sabkomedicine@gmail.com</p></a>
                <p>+91-7417818742</p>
            </div>
            <div class="col-md-2 footer-grid">
                <ul>
                    <li><a
                                href="/contact_us">Contact</a></li>
                    <li><a
                                href="/">About</a></li>
                    <li><a
                                href="#">Privacy</a></li>
                    <li><a
                                href="/faq">FAQ</a></li>
                </ul>
            </div>


            <div class="clearfix"> </div>
        </div>

    </div>
</div>
</body>
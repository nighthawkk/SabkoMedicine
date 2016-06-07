
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <!-- for-mobile-apps -->

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="
" />
    <script type="application/x-javascript"> addEventListener("load",
                function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/evil-icons/1.7.8/evil-icons.min.css">

    <!-- Custom CSS -->





    <link href="ab/css/bootstrap.min.css" rel="stylesheet">


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

                        <li ><a href="/" class="hvr-bounce-to-bottom" class="hvr-bounce-to-bottom">Home</a></li>
                        <li class="active"><a href="/about" >About Us</a></li>
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
</div><!-- //header -->
<!-- banner -->
<div class="banner1">
    <div class="container">
        <div class="banner-info1">
            <h2><span>MEDICINE MONK</span></h2>
        </div>
    </div>
</div><br>
<!-- //banner -->
<!-- news -->

<div class="container">
    <center><h2>MEDICINE BABA (OUR INSPIRATION)</h2></center><br>

    <dd><dl><strong></strong></dl>Omkar Nath Sharma born in India (around 1940) also known as the "Medicine Baba" (Medicine Monk) is a retired blood bank technician from Kailash Hospital in Noida, Uttar Pradesh, India, who voluntarily collects unused medicines from people and distributes them to the poor free of charge </dd><br>
    <dd>Omkar started collecting medicine after realising the acute lack of accessibility of medicines, when he witnessed Delhi Metro under-construction bridge collapsed in East Delhi in 2008, claiming the lives of two labourers and injuring many others. The local hospital administered basic first aid, but nothing else and the injured returned home to die, unable to afford the cost of treatment. That incident shook Omkar and he became determined to not let something like this happen again.<a href="https://en.wikipedia.org/wiki/Omkar_Nath_Sharma_%22Medicine_Baba%22">know more</a></dd><br>
   <center><h2><strong>Our Mentors</strong></h2></center>
    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <dd><strong>Prof. Adesh Pandey</strong></dd>
            <dd>Head of Department</dd>
            <dd>Information Technology</dd>
            <dd>Krishna Institute Of Technology</dd>
            <dd>Ghaziabad</dd><br>

        </div>


        <div class="col-md-4 col-md-offset-2">
            <dd><strong>Prof. Anil Kumar Giri</strong></dd>
            <dd>Information Technology</dd>
            <dd>Krishna Institute Of Technology</dd>
            <dd>Ghaziabad</dd>
        </div>

    </div>
</div>
<div class='jumbotron team'>
    <div class='container text-center' id='team'>
        <div class='header'>
            <h1>Meet Our Team</h1><hr>
        </div>
        <center>
            <div class='row'>
                <div class='col-md-4 col-sm-3'>
                    <div class="panel panel-default teamcustom">
                        <a href="#" class="darken" data-toggle="modal"><div class="panel-body">
                                <img src="images/aman.jpg" class="img-circle img-responsive" alt="Aman Kumar" style="width:200px;height:200px">
                                <br>
                                <h4 style="color:#5b8930">Aman Kumar <br><small style="color:#757d75">
                                         </small></h4>

                                <a href="https://www.facebook.com/amandapunk"><i class="fa fa-facebook fa-w"></i></a>
                            </div>
                    </div></a>
                </div>
                <div class='col-md-4 col-sm-3'>
                    <div class="panel panel-default teamcustom">
                        <a href="#" class="darken" data-toggle="modal"><div class="panel-body">
                                <img src="images/abhinay.jpg" class="img-circle img-responsive" alt="Abhinay Gupta" style="width:200px;height:200px">
                                <br>
                                <h4 style="color:#5b8930"> Abhinay Gupta <br></h4>
                                <a href="https://www.facebook.com/abhinay.gupta.5"><i class="fa fa-facebook fa-w"></i></a>
                            </div></a>
                    </div>
                </div>
                <div class='col-md-4 col-sm-3'>
                    <div class="panel panel-default teamcustom">
                        <a href="#" class="darken" data-toggle='modal'><div class="panel-body">
                                <img src="images/amit.jpg" class="img-circle img-responsive" alt="Amit Misra" style="width:200px;height:200px">
                                <br>
                                <h4 style="color:#5b8930">Amit Misra<br><small style="color:#757d75">
                                    </small></h4>

                                <!-- <a href="#"><i class="fa fa-google-plus fa-w"></i></a> -->
                                <a href="https://www.facebook.com/amit.mishra.7161"><i class="fa fa-facebook fa-w"></i></a>
                            </div></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class='col-md-4 col-sm-3'>
                    <div class="panel panel-default teamcustom">
                        <a href="#" class="darken"><div class="panel-body">
                                <img src="images/anirudh.jpg" class="img-circle img-responsive" alt="Anirudh Gupta" style="width:200px;height:200px">
                                <br>
                                <h4 style="color:#5b8930">Anirudh Gupta<br><small style="color:#757d75">
                                        </small></h4>
                                <!-- <a href="#"><i class="fa fa-facebook fa-w"></i></a> -->

                                <!-- <a href="#"><i class="fa fa-google-plus fa-w"></i></a> -->
                                <a href="https://www.facebook.com/Anigupta123"><i class="fa fa-facebook fa-w"></i></a>
                            </div></a>
                    </div>
                </div>
                <div class='col-md-4 col-sm-3'>
                    <div class="panel panel-default teamcustom">
                        <a href="#" class="darken"><div class="panel-body">
                                <img src="images/ajay.jpg" class="img-circle img-responsive" alt="Ajay Kumar" style="width:200px;height:200px">
                                <br>
                                <h4 style="color:#5b8930">Ajay Kumar<br><small style="color:#757d75">
                                       </small></h4>
                                <!-- <a href="#"><i class="fa fa-facebook fa-w"></i></a> -->

                                <a href="https://www.facebook.com/profile.php?id=100009126146955"><i class="fa fa-facebook fa-w"></i></a>
                            </div></a>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
<!-- footer -->
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

<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title> Contact Us</title>
    <!-- for-mobile-apps -->
    <title>Donate</title>
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

                        <li ><a href="/" class="hvr-bounce-to-bottom">Home</a></li>
                        <li ><a href="/about" class="hvr-bounce-to-bottom">About Us</a></li>
                        <li><a href="/gallery" class="hvr-bounce-to-bottom">Gallery</a></li>
                        <li class="active"><a href="/contact_us" >Contact</a></li>
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
<!-- //header -->
<!-- banner -->

<!-- //banner -->
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@if(Session::has('message'))
    <div class="alert alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <div class="alert alert-info">
            {{ \Session::get('message')}}
        </div>

    </div>
    @endif

<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-3 contact-grid">
                <div class="call">
                    <div class="col-xs-3 contact-grdl">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 contact-grdr">
                        <ul>
                            <li>+9188025555409</li>

                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address">
                    <div class="col-xs-3 contact-grdl">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 contact-grdr">
                        <ul>
                            <li>345 KIET,</li>
                            <li>Ghaziabad.</li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="mail">
                    <div class="col-xs-3 contact-grdl">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 contact-grdr">
                        <ul>
                            <li><a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-5 contact-grid">
                <form role="form" method="POST" action="{{ url('/contact_us') }}">
                    {{csrf_field()}}

                    <input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <textarea type="text" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
                    <input type="submit" value="Send" >
                </form>
            </div>
            <div class="col-md-4 contact-grid">
                <div class="newsletter1">
                    <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Newsletter</h3>
                </div>
                <form>
                    <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="Subscribe" >
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="map">
            <h3>Find us on map</h3>
            <div ><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Krishna+Institute+Of+Engineering+and+Technology,+Ghaziabad,+Uttar+Pradesh,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-maps-html" href="http://www.hostingreviews.website/compare/inmotion-hosting-vs-dreamhost" id="enable-map-data">here</a><style>#my-map-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=58c66606-cd7b-de7c-0183-311b284c77e2&c=google-maps-html&u=1465211193" defer="defer" async="async"></script>
        </div>

    </div>
</div>
<!-- //contact -->
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
<!-- //footer -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>FAQ</title>
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
                        <li><a href="/contact_us" class="hvr-bounce-to-bottom">Contact</a></li>
                        <li class="active"><a href="/faq" class="hvr-bounce-to-bottom">F.A.Q.</a></li>
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
<div style="margin-top:80px;" class="container">
    <center><h1>F.A.Q.(Frequently Asked Question):-</h1></center>
    <hr style="border-color:#353232;border-width:80%;">
    <dl><dd><dt>1-Who are we ?</dt>
        We are group of students of <a target="new" href="http://www.kiet.edu"> Krishna Institute of Engineering And Technology</a> along with <a target="new" href="http://www.medicinebaba.in/">Medicine Baba</a> and Our Beloved Teacher's who just wants to use the unuse medicine in a very useful way which is just to donate medicine to the needy ones.</dd></dl>
    <dl><dd><dt>2-what we want to do?</dt>
        We just want the support to don't let  any poor person  to die due to lack of medicines .So just a one small step from your side , can save a LIFE. And you became a Life-Saver</dd></dl><dl><dd><dt>3-How to donate Medicine?</dt>You just have to <a href="/register">sign-up</a> and specify the medicines then give the right address and  then the nearby NGO will collect the medicines from you within 2-3 days. Done you have the saved the life.</dd></dl>
    <dl><dd><dt>4- What kind of medicines can be donated?</dt>Any unexpired medicines can be donated.
        Medicines in capsules, tablets, vitamins, antibiotics, antiseptic creams, vials, bandages, cottons, energy supplements & first aid supplies etc. can be donated.
        </dd></dl><dl><dd><dt>5-Who will handle the donated medicines?</dt>. The various government NGO's  has qualified designated panel of doctors and pharmacists to ensure proper segregation, handling, distribution and disposal of all medicines.</dd></dl><dl><dd><dt>6-What kind of medicines can’t be collected?

        </dt> Any medicines already expired cannot be donated.<ul><li>Syringes, Syrup & liquid medicines are not to be collected due to chances of breakage & leakage thus avoiding any damage to other medicines</li><li>Unsealed or open bottles of liquid drugs also cannot be donated.</li><li>Do not donate pet medicines and any other infectious waste.
            </li></ul></dd></dl>
    <dl><dd><dt></dt></dd></dl>
    <hr style="border-color:#353232;border-width:80%;">
</div><div class="footer">
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
                                href="/about">About</a></li>
                    <li><a
                                href="/terms">Terms</a></li>
                    <li><a
                                href="/faq">FAQ</a></li>
                </ul>
            </div>


            <div class="clearfix"> </div>
        </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>

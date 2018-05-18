<div id="navigation" class="wrapper">
    <!--Hidden Header Region-->
    <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
            <div class="row">
                <div class="col-md-3">
                    <h3>
                        About Us
                    </h3>
                    <p>Contineously providing
                        psychology services
                        to the local community</p>
                    <a href="{{ URL::route('aboutUs')}}" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
                </div>
                <div class="col-md-3">
                    <!--@todo: replace with company contact details-->
                    <h3>
                        Contact Us
                    </h3>
                    <address>
                        <strong>XYZ Online Booking System</strong>
                        <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                        Sunshine House, Sunville. SUN12 8LU.
                        <br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                        019223 8092344
                        <br>
                        <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                        softwareDevelopment@cqu.com
                    </address>
                </div>
            </div>
        </div>
    </div>
    <!--Header & navbar-branding region-->
    <div class="header">
        <div class="header-inner container">
            <div class="row">
                <div class="col-md-8">

                </div>
                <!--header rightside-->
                <div class="col-md-4">
                    <!--user menu-->
                    <ul class="list-inline user-menu pull-right">
                        <li class="user-button"><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
                    </ul>
                    <ul class="list-inline user-menu pull-right">
                        <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="{{url('register')}}" class="text-uppercase">Register</a></li>
                        <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="{{url('login')}}" class="text-uppercase">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar navbar-default">
            <!--mobile collapse menu button-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!--social media icons-->
            <div class="navbar-text social-media social-media-inline pull-right">
                <!--@todo: replace with company social media details-->
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-collapse collapse">
                <div id="navbaritem">


                    <ul class="nav navbar-nav" id="main-menu">
                        <li class="icon-link">

                            <a href="{{ URL::route('/')}}"><i class="fa fa-home"></i></a>
                        </li>

                        <li><a href="/appointment-help">Appointment Help</a></li>
                        <li><a href="/article">Health News</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/listdoctors">Health Professionals</a></li>

                    </ul>


                </div>


            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
</div>
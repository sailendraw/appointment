@include('includes.header')

<body class="page-index has-hero">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
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
                        <a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
                    </div>
                    <div class="col-md-3">
                        <!--@todo: replace with company contact details-->
                        <h3>
                            Contact Us
                        </h3>
                        <address>
                            <strong>Flexor Bootstrap Theme Inc</strong>
                            <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                            Sunshine House, Sunville. SUN12 8LU.
                            <br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                            019223 8092344
                            <br>
                            <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                            info@flexorinc.com
                        </address>
                    </div>
                    <div class="col-md-6">
                        <!--Colour & Background Switch for demo - @todo: remove in production-->
                        <h3>
                            Theme Variations
                        </h3>
                        <div class="switcher">
                            <div class="cols">
                                Backgrounds:
                                <br>
                                <a href="#benches" class="background benches active" title="Benches">Benches</a> <a href="#boots" class="background boots " title="Boots">Boots</a> <a href="#buildings" class="background buildings " title="Buildings">Buildings</a>
                                <a
                                        href="#city" class="background city " title="City">City</a> <a href="#metro" class="background metro " title="Metro">Metro</a>
                            </div>
                            <div class="cols">
                                Colours:
                                <br>
                                <a href="#orange" class="colour orange active" title="Orange">Orange</a> <a href="#green" class="colour green " title="Green">Green</a> <a href="#blue" class="colour blue " title="Blue">Blue</a> <a href="#lavender" class="colour lavender "
                                                                                                                                                                                                                                      title="Lavender">Lavender</a>
                            </div>
                        </div>
                        <p>
                            <small>Selection is not persistent.</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Header & navbar-branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row">
                    <div class="col-md-8">
                        <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                        <a class="navbar-brand" href="{{ url('/') }}" title="Home">
                            <h1 class="hidden">
                                <img src="img/logo.png" alt="Flexor Logo">
                                Flexor
                            </h1>
                        </a>
                        <div class="navbar-slogan">
                            Mental well being
                            <br>
                        </div>
                    </div>
                    <!--header rightside-->
                    <div class="col-md-4">
                        <!--user menu-->
                        <ul class="list-inline user-menu pull-right">
                            <li class="user-button"><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
                        </ul>
                        <ul class="list-inline user-menu pull-right">
                            <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="register.html" class="text-uppercase">Register</a></li>
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

                                    <a href="/"><i class="fa fa-home"></i></a>
                                </li>

                                <li><a href="#">Health News</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Health Professionals</a></li>
                                <li><a href="#">Make Appointment</a></li>
                                <li><a href="#">FAQ</a></li>
                                {{--<li><a href="#">Help</a></li>--}}

                            </ul>


                    </div>


                </div>
                <!--/.navbar-collapse -->
            </div>
        </div>
    </div>
    <div class="hero" id="highlighted">
        <div class="inner">
            <!--Slideshow-->
            <div id="highlighted-slider" class="container">
                <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
                    <!--Slideshow content-->
                    <!--Slide 1-->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 item-caption">
                                <h4 class="h1 text-weight-light">
                                    Welcome to <span class="text-primary">XYZ Online Booking System</span>
                                </h4>
                                <h4>
                                    Excellent Patient care is knocking your Door.
                                </h4>
                                <p>Making the online health care appointment possible.</p>
                                <a href="#" class="btn btn-more btn-lg i-right">Book Now <i class="fa fa-plus"></i></a>
                            </div>
                            <div class="col-md-6 col-md-pull-6 hidden-xs">
                                <img src="img/slides/slide1.jpg" alt="Slide 1" class="center-block img-responsive">
                            </div>
                        </div>
                    </div>
                    <!--Slide 2-->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 text-right-md item-caption">
                                <h2 class="h1 text-weight-light">
                                    <span class="text-primary">Appointment</span> Online Booking System
                                </h2>
                                <h4>
                                    High quality and reliable care on your way.
                                </h4>
                                <p>Making the online health care appointment possible</p>
                                <a href=""#" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <img src="img/slides/slide2.jpg" alt="Slide 2" class="center-block img-responsive">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======== @Region: #content ======== -->
<div id="content">
    <!-- Mission Statement -->
    <div class="mission text-center block block-pd-sm block-bg-noise">
        <div class="container">
            <h2 class="text-shadow-white">
              Contineously  providing psychology services to the local community
                <a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
            </h2>
        </div>
    </div>
    <!--Showcase-->
    <div class="showcase block block-border-bottom-grey">
        <div class="container">
            <h2 class="block-title">
                Health Articles
            </h2>
            <p>We Have Simple & Affordable Health Insurance Options. Get A Quote In Seconds.
                Only Pay For What You Use · Money Back Guarantee* · Not-For-Profit · Choose Your Own Provider
                Insurance coverage: General & Major Dental, Optical, Physiotherapy, Chiropractor, Acupuncture.</p>
            <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project1.png" alt="Project 1 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Diet Plan</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Diet Plan</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project2.png" alt="Project 2 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Healthy Living</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Healthy Living</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project3.png" alt="Project 3 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Fitness</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Fitness</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project4.png" alt="Project 4 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Age Care</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Age Care</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project5.png" alt="Project 5 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Medical aid</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Medical Aid</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project6.png" alt="Project 6 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Online Care</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Online Care</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project7.png" alt="Project 7 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Online Doctor</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Online Doctor</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project8.png" alt="Project 8 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 8</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 8</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project9.png" alt="Project 9 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 9</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 9</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project10.png" alt="Project 10 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 10</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 10</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project11.png" alt="Project 11 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 11</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 11</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project12.png" alt="Project 12 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 12</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 12</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <div class="services block block-bg-gradient block-border-bottom">
        <div class="container">
            <h2 class="block-title">
                Our Services
            </h2>
            <div class="row">
                <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-group fa-stack-1x fa-inverse"></i> </span>
                    <h4 class="text-weight-strong">
                        Online Doctor
                    </h4>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                    <p>
                        <a href="#" class="btn btn-more i-right">Learn More <i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-pencil fa-stack-1x fa-inverse"></i> </span>
                    <h4> Online Booking
                    </h4>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                    <p>
                        <a href="#" class="btn btn-more i-right">Learn More <i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i> </span>
                    <h4 class="text-weight-strong">Support
                    </h4>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                    <p>
                        <a href="#" class="btn btn-more i-right">Learn More <i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing -->

    <!--
Background image callout with CSS overlay
Usage: data-block-bg-img="IMAGE-URL" to apply a background image clearly via jQuery .block-bg-overlay = overlays the background image, colour is inherited from block-bg-* classes .block-bg-overlay-NUMBER = determines opcacity value of overlay from 1-9 (default is 5) ie. .block-bg-overlay-2 or .block-bg-overlay-6
-->
    <div class="block block-pd-sm block-bg-grey-dark block-bg-overlay block-bg-overlay-6 text-center" data-block-bg-img="https://picjumbo.imgix.net/HNCK1088.jpg?q=40&amp;w=1650&amp;sharp=30" data-stellar-background-ratio="0.3">
        <h2 class="h-xlg h1 m-a-0">
            <span data-counter-up>100,000,0</span>s
        </h2>
        <h3 class="h-lg m-t-0 m-b-lg">
            Of Happy Customers!
        </h3>
        <p>
            <a href="#" class="btn btn-more btn-lg i-right">Join them today! <i class="fa fa-angle-right"></i></a>
        </p>
    </div>
    <!--Customer testimonial & Latest Blog posts-->
    <div class="testimonials block-contained">
        <div class="row">
            <!--Customer testimonial-->
            <div class="col-md-6 m-b-lg">
                <h3 class="block-title">
                    Testimonials
                </h3>
                <blockquote>
                    <p>Customers are happy &amp;                                                                                                                           </p>
                    <img src="img/misc/charles-quote.png" alt="Charles Spencer Chaplin">
                    <small>
                        <strong>Online Doctor</strong>
                        <br>
                        27 x 7 Care
                    </small>
                </blockquote>
            </div>
            <!--Latest Blog posts-->
            <div class="col-md-6 blog-roll">
                <h3 class="block-title">
                    Latest From Our Blog
                </h3>
                <!-- Blog post 1-->
                <div class="media">
                    <div class="media-left hidden-xs">
                        <!-- Date desktop -->
                        <div class="date-wrapper"> <span class="date-m">Feb</span> <span class="date-d">01</span> </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="#" class="text-weight-strong">Blog 1</a>
                        </h4>
                        <!-- Meta details mobile -->
                        <ul class="list-inline meta text-muted visible-xs">
                            <li><i class="fa fa-calendar"></i> <span class="visible-md">Created:</span> Fri 1st Feb 2013</li>
                            <li><i class="fa fa-user"></i> <a href="#">Ashish</a></li>
                        </ul>
                        <p>
                            Ut <strong>Health</strong> care
                            <a href="#">Read more <i class="fa fa-angle-right"></i></a>
                        </p>
                    </div>
                </div>
                <!-- Blog post 2 -->
                <div class="media">
                    <div class="media-left hidden-xs">
                        <!-- Date desktop -->
                        <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">17</span> </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="#" class="text-weight-strong">blogss !</a>
                        </h4>
                        <!-- Meta details mobile -->
                        <ul class="list-inline meta text-muted visible-xs">
                            <li><i class="fa fa-calendar"></i> <span class="visible-md">Created:</span> Thu 17th Jan 2013</li>
                            <li><i class="fa fa-user"></i> <a href="#">Joe</a></li>
                        </ul>
                        <p>
                            Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Aenean at massa leo. Vestibulum in varius arcu.
                            <a href="#">Read more <i class="fa fa-angle-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /content -->
<!-- Call out block -->
<div class="block block-pd-sm block-bg-primary">
    <div class="container">
        <div class="row">
            <h3 class="col-md-4">
                Some of our Clients
            </h3>
            <div class="col-md-8">
                <div class="row">
                    <!--Client logos should be within a 120px wide by 60px height image canvas-->
                    <div class="col-xs-6 col-md-2">
                        <a href="https://bootstrapmade.com" title="Client 1">
                            <img src="img/clients/client1.png" alt="Client 1 logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://bootstrapmade.com" title="Client 2">
                            <img src="img/clients/client2.png" alt="Client 2 logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://bootstrapmade.com" title="Client 3">
                            <img src="img/clients/client3.png" alt="Client 3 logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://bootstrapmade.com" title="Client 4">
                            <img src="img/clients/client4.png" alt="Client 4 logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://bootstrapmade.com" title="Client 5">
                            <img src="img/clients/client5.png" alt="Client 5 logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://bootstrapmade.com" title="Client 6">
                            <img src="img/clients/client6.png" alt="Client 6 logo" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
</body>

</html>

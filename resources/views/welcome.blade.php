@include('includes.header')

<body class="page-index has-hero">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
    @include('includes.navigation')
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
                <a href="{{ URL::route('aboutUs')}}" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
            </h2>
        </div>
    </div>
    <!--Showcase-->
    @include('includes.article',['articleData'=>$articleData])
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
            @include('includes.blogs',['blogData'=>$blogData])
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

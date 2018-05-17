@include('includes.header')

<body class="page-index has-hero">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
    @include('includes.navigation')

</div>

<body class="page-about">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <div class="row">
                <!--main content-->
                <div class="col-md-9 col-md-push-3">
                    <div class="page-header">
                        <h1> {{ $blogData->article_name }}</h1>
                    </div>
                    <div class="block block-border-bottom-grey block-pd-sm">
                        <p> {{ $blogData->description }}</p>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a>Current Blog</a>
                            <small>{{ $blogData->article_name }}</small>
                        </li>
                        <li>
                            <a href="{{ URL::route('/')}}" class="first">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::route('aboutUs')}}">
                                About Us
                                <small>How It All Began</small>
                            </a>
                        </li>
                        <li>
                            <a href="#contactUs">
                                Contact Us
                                <small>How to get in touch</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@include('includes.footer')
</body>

</html>

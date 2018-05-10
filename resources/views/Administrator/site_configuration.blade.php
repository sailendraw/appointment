@extends('layouts.dashboard')

@section('dashboardcontent')
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @extends('layouts.dashboardnav')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
    @extends('layouts.dashboard-left-sidebar')
    <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    @extends('layouts.dashboard-right-sidebar')
    <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Site Configuration Settings
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form method="post" action="{{ action('SiteConfigController@SaveConfig') }}" enctype="multipart/form-data">
                                @csrf

                                        <input type="hidden" id="site_id" name="site_id" class="form-control" placeholder="Enter website name" value="{{$id}}" required>


                                <label for="email_address">Site Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="site_name" name="site_name" class="form-control"  value="{{$name}}" placeholder="Enter website name" required>
                                    </div>
                                </div>
                                <label for="password">Site Slogan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="site_slogan" name="site_slogan" class="form-control" value= "{{$slogan}}" placeholder="Enter your Slogan if you have any">
                                    </div>
                                </div>
                                <label for="password">Site Url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="site_url" name="site_url" class="form-control" value="{{$url}}" placeholder="Enter your url if you have any">
                                    </div>
                                </div>


                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->

        </div>
    </section>

@endsection

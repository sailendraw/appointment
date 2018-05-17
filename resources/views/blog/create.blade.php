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
                                Blog Create
                            </h2>

                        </div>
                        <div class="body">
                            @include('errors.validationErrors')
                            {!! Form::open(['route' => 'blog.store', 'method' => 'post', 'class' => 'form-horizontal custom-form clearfix', 'role' => 'form', 'files' => 'true']) !!}
                            @include('blog.form',['btn'=>'Add blog', 'create' => true]);

                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>

@endsection



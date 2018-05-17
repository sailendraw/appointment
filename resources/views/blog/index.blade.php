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
                                Blog List
                            </h2>
                            <div class="pull-right">
                            <a href="{{ URL::route('blog.create') }}" class="btn btn-info btn-lg glyphicon glyphicon-pencil">Create</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                @include('errors.validationErrors')

                                <table class="table custom-table {{ $blogData->isEmpty()? 'empty-table' : '' }}">
                                    <thead>
                                    <tr>
                                        <th>S.N <span class="caret"></span></th>
                                        <th>Blog Name <span class="caret"></span></th>
                                        <th>Action <span class="caret"></span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @forelse($blogData as $blog)
                                                <td>
                                                    {{$blog->id}}
                                                </td>
                                                <td>
                                                    {{$blog->article_name}}
                                                </td>
                                                <td>
                                                    <div class="btn-toolbar mb-6">
                                                        <a href="{{ URL::route('blog.show', $blog->id) }}" class="glyphicon glyphicon-eye-open btn btn-success">View</a>
                                                        <a href="{{ URL::route('blog.edit', $blog->id) }}" class="glyphicon glyphicon-edit btn btn-primary">Edit</a>
                                                        {!! Form::open(['route' => ["blog.destroy", $blog->id], 'method' =>'DELETE', 'id' => 'deleteForm']) !!}

                                                        <button class="btn btn-danger glyphicon glyphicon-trash" type="submit">
                                                            Delete
                                                        </button>
                                                        {!! Form::close() !!}

                                                    </div>
                                                </td>
                                        </tr>
                                    @empty
                                        <tr class="empty-row">
                                            <td> No Record Found</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>

@endsection



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


				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2>
									List of Users
								</h2>
								<ul class="header-dropdown m-r--5">
									<li class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<i class="material-icons">more_vert</i>
										</a>

									</li>
								</ul>
							</div>
							<div id="ex1" class="modal">
								<form action="" method="post">





								</form>
							</div>
							<div class="body table-responsive">
								<table class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									@foreach($patient as $patient)

										<tr>
											<th scope="row">{{$patient->id}}</th>
											<td>{{$patient->name}}</td>
											<td>{{$patient->email}}</td>

											<td><a class="btn btn-primary m-t-15 waves-effect " href="#ex1" rel="modal:open">Schedule Appointment</a>&nbsp;<button class="btn btn-primary m-t-15 waves-effect">Cancel Appointment</button>&nbsp;<button class="btn btn-primary m-t-15 waves-effect">Reschedule Appointment</button></td>

										</tr>

									@endforeach


									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>


				<!-- #END# Vertical Layout -->
				<!-- Vertical Layout | With Floating Label -->

	</section>

@endsection

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
								<a href="#" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
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
	<div class="block-contained">
		<h2 class="block-title">
			Health Professionals
		</h2>
		<div class="row">
			@if(count($doctorData)>0)
				@foreach($doctorData as $dData)
					<div class="col-md-3">
						<div class="panel panel-default panel-pricing text-center">
							<div class="panel-heading">
								<h4 class="panel-title">
									{{$dData->first_name}}
								</h4>
							</div>
							<div class="panel-pricing-price">{{$dData->first_name}} <span class="digits">{{$dData->last_name}}</span> </div>
							<div class="panel-body">
								<ul class="list-dotted">
									<li><strong>Qualification: </strong>{{$dData->qualification}}</li>
									<li><strong>Experience :</strong>{{$dData->experience}}</li>
									<li><strong>Speciality :</strong>{{$dData->speciality}}</li>
								</ul>
								<a href="" class="btn btn-primary btn-sm" data-doctorid="{{$dData->id}}">Make an Appointment</a>
							</div>
						</div>
					</div>
					@endforeach

				@else
				<p>There are No doctors registered !!!</p>
			@endif


		</div>
	</div>

</div>
@include('includes.footer')
</body>

</html>

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
	<div class="container">
			<h2>Make An Appointment</h2>
			@if(Auth::user())
				<div class="panel-body login">
					<form method="POST" action="{{ route('appointment.store') }}">
						@csrf
						<fieldset>
							<div class="form-group">
								<div class="input-group input-group-lg">
									<span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
									<input id="time" type="text" class="form-control" name="time" placeholder="time" required autofocus>
								</div>
							</div>
							<div class="form-group">


									<input id="doctor" type="hidden" class="form-control" name="doctor" placeholder="" value="{{$doctorid}}" required autofocus>

							</div>
							<div class="form-group">


									<input id="userid" type="hidden" class="form-control" name="userid" value="{{Auth::user()->id}}" required autofocus>

							</div>
							<div class="form-group">
								<div class="input-group input-group-lg">
									<span class="input-group-addon"><i class="fa fa-fw fa-user-o"></i></span>
									<textarea id="description" cols="4" rows="4" class="form-control" name="description" placeholder="Write any comments if you have" autofocus></textarea>
								</div>
							</div>





							<input class="btn btn-lg btn-primary btn-block" type="submit" value="Confirm Appointment">
						</fieldset>
					</form>
				</div>
				@else
			<div class="panel-body">
				<form method="POST" action="{{ route('register') }}">
					@csrf
					<fieldset>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
								<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
									<span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
								<input id="time" type="text" class="form-control" placeholder="time" name="time" required>

								@if ($errors->has('password'))
									<span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" name="password" required>

								@if ($errors->has('password'))
									<span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
								@if ($errors->has('password'))
									<span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<input type="hidden" id="role" name="role" value="1"/>

						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Terms">
								I agree to the <a href="#">terms and conditions</a>.
							</label>
						</div>
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign Me Up">
					</fieldset>
				</form>
				<p class="m-b-0 m-t">Already signed up? <a href="/login">Login here</a>.</p>

			</div>
		@endif
		<form>

		</form>

	</div>

</div>
<!-- /content -->
<!-- Call out block -->
<div class="block block-pd-sm block-bg-primary">
	<div class="container">

	</div>
</div>

@include('includes.footer')
</body>

</html>

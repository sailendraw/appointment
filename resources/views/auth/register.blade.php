@include('includes.header')
<body class="fullscreen-centered page-register">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="header">
            <div class="header-inner">
                <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                <a class="navbar-brand center-block" href="index.html" title="Home">
                    <h1 class="hidden">
                        <img src="img/logo.png" alt="Flexor Logo">
                        Flexor
                    </h1>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Sign Up
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('register') }}">
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
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>


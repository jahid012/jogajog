<!doctype html>
<html lang="en">


<!-- Mirrored from d-list.trendsetterthemes.org/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 13:22:45 GMT -->
<head>
	<!-- Basic Page Needs
      ================================================== -->
	<meta charset="utf-8">
	<title>D-List - Directory and Listing Html Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="favicon.html">
	<link href="https://fonts.googleapis.com/cssa076.css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">
	<!-- CSS
      ================================================== -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/icon-font.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div class="content p-0">
		<div class="login-wrapper">
			<div class="row m-0">
				<div class="col-lg-4 h-100-vh side-banner" style="background-image:url('assets/images/bg-login.jpg');background-position: center center; background-size: cover;">
					<div class="content px-5 text-center d-flex justify-content-center h-100">
						<div class="align-self-center">
							<img src="assets/images/logo-white.png" width="130" class="img-fluid mb-4" alt="">
							<h4 class="text-white">Discover great places in world</h4>
							<p class="text-white">Find awesome places, bars, restaurants and activities in London</p>
							<a href="JavaScript:Void(0)" class="btn btn-success">Search Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 site-content">
					<div class="content">
						<div class="row">
							<div class="col-lg-7 mx-auto">
								<div class="text-center mb-4">
									<h2>Create DirectList Account.</h2>
									<p>Fill up the following details</p>
								</div>
								<div class="card bg-secondary shadow border-0">
									<div class="card-body px-lg-5 py-lg-5">
										<form role="form" method="POST" action="{{ route('register') }}">
                                            @csrf
											<div class="form-group mb-3">
												<div class="input-group input-group-alternative">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-user"></i></span>
													</div>
													<input class="form-control" placeholder="Name" name="name" type="text">
												</div>
											</div>
                                            <x-input-error :messages="$errors->get('name')"/>
											<div class="form-group mb-3">
												<div class="input-group input-group-alternative">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-envelope"></i></span>
													</div>
													<input class="form-control" placeholder="Email" name="email" type="email">
												</div>
											</div>
                                            <x-input-error :messages="$errors->get('email')"/>
											<div class="form-group">
												<div class="input-group input-group-alternative">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
													</div>
													<input class="form-control" placeholder="Password" type="password" name="password">
												</div>
											</div>
                                            <x-input-error :messages="$errors->get('password')"/>
                                            <div class="form-group">
												<div class="input-group input-group-alternative">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
													</div>
													<input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation">
												</div>
											</div>
                                            <x-input-error :messages="$errors->get('password_confirmation')"/>
											<div class="custom-control custom-control-alternative custom-checkbox">
                                    </label>
											</div>
											<div class="text-center">
												<button type="submit" class="btn btn-primary mt-4">Register Me</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Scripts
      ================================================== -->
	<script type="text/javascript" src="assets/scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="assets/scripts/popper.min.js"></script>
	<script type="text/javascript" src="assets/scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/scripts/mmenu.min.js"></script>
	<script type="text/javascript" src="assets/scripts/chosen.min.js"></script>
	<script type="text/javascript" src="assets/scripts/slick.min.js"></script>
	<script type="text/javascript" src="assets/scripts/rangeslider.min.js"></script>
	<script type="text/javascript" src="assets/scripts/magnific-popup.min.js"></script>
	<script type="text/javascript" src="assets/scripts/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/scripts/counterup.min.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/scripts/tooltips.min.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="assets/scripts/bootstrap-datepicker.min.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script> -->
	<script type="text/javascript" src="assets/scripts/custom.js"></script>
</body>


<!-- Mirrored from d-list.trendsetterthemes.org/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 13:22:45 GMT -->
</html>
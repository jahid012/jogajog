<!doctype html>
<html lang="en">


<!-- Mirrored from d-list.trendsetterthemes.org/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 13:22:24 GMT -->
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
	<link rel="stylesheet" href="{{asset('assets/css/icon-font.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @stack('styles')
</head>

<body>
	<!-- Wrapper -->
	<div id="wrapper">
        <div class="clearfix"></div>
		<div id="dashboard">
            @include('backend.components.header')
            @include('backend.components.side-navigation')

			<!--Main Container -->
			<div class="dashboard-content">
                @yield('dashboard')
            </div>
        </div>
    </div>
    <!-- Wrapper / End -->
    <!-- Scripts
      ================================================== -->
    <script type="text/javascript" src="{{asset('assets/scripts/jquery-2.2.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/mmenu.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/chosen.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/rangeslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/tooltips.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/bootstrap-datepicker.min.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script> -->
    <script type="text/javascript" src="{{asset('assets/scripts/custom.js')}}"></script>
    @stack('scripts')
    </body>
    
    
    <!-- Mirrored from d-list.trendsetterthemes.org/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 13:22:24 GMT -->
    </html>
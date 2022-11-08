<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title', 'Brooklyn Construction')</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Barlow:400,600%7COpen+Sans:400,400i,700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{asset('frontend')}}/css/font-icons.css" />
	<link rel="stylesheet" href="{{asset('frontend')}}/revolution/css/settings.css" />
	<link rel="stylesheet" href="{{asset('frontend')}}/css/style.css" />
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('frontend')}}/img/favicon.ico">
	<link rel="apple-touch-icon" href="{{asset('frontend')}}/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend')}}/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend')}}/img/apple-touch-icon-114x114.png">
	
</head>
<body>
	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Loading..."
		</div>
	</div>
	<main class="main-wrapper">
		<!-- Navigation -->
        @include('layouts.header')
        <!-- end navigation -->
		<div class="content-wrapper content-wrapper--boxed oh">
			<div class="rev-offset"></div>
            @yield('content')
			<!-- Footer -->
			@include('layouts.footer')
            <!-- end footer -->
			<div id="back-to-top">
				<a href="#top"><i class="ui-arrow-up"></i></a>
			</div>
		</div> <!-- end content wrapper -->
	</main> <!-- end main wrapper -->


	<!-- jQuery Scripts -->
	<script src="{{asset('frontend')}}/js/jquery.min.js"></script>
	<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('frontend')}}/js/plugins.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="{{asset('frontend')}}/js/rev-slider.js"></script>
	<script src="{{asset('frontend')}}/js/scripts.js"></script>


	<!-- Rev Slider Offline Scripts -->
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

	

</body>
</html>

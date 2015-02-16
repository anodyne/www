<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title') &bull; Anodyne Productions</title>
		<meta name="description" content="">
		<meta name="author" content="Anodyne Productions">
		<meta name="viewport" content="width=device-width">
		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico?v1') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('apple-touch-icon.png') }}">

		<!--[if lt IE 9]>
		{{ HTML::script('js/html5shiv.js') }}
		<![endif]-->
		
		{{ partial('global_styles') }}
		{{ HTML::style('css/base.css') }}
		{{ HTML::style('css/nova.css') }}
		{{ HTML::style('css/responsive.css') }}
		{{ HTML::style('css/fonts.css') }}
	</head>
	<body>
		<div class="wrapper">
			{{ View::make('partials.nav-global')->withActive('nova') }}

			{{ View::make('partials.header')->withType('nova') }}
		
			<section>
				<div class="container">
					@yield('content')
				</div>
			</section>
		
			@include('partials.footer')
		</div>

		{{ modal(['id' => 'contactModal', 'header' => "Contact Anodyne"]) }}
		@yield('modals')
		
		{{ partial('global_scripts') }}
		<script>
			$('.js-contact').on('click', function(e)
			{
				e.preventDefault();

				$('#contactModal').modal({
					remote: "{{ route('contact') }}"
				}).modal('show');
			});

			$(document).ready(function()
			{
				$('.tooltip-bottom').tooltip({ placement: "bottom" });
				$('.tooltip-top').tooltip({ placement: "top" });
			});
		</script>
		@yield('scripts')
		@if (App::environment() == 'production')
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-36909106-2', 'auto');
				ga('send', 'pageview');
			</script>
		@endif
	</body>
</html>
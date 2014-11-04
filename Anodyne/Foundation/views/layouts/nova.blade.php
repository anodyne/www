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
		<script type="text/javascript" src="js/html5shiv.js"></script>
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
	</body>
</html>
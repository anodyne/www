<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title') &bull; Anodyne Productions</title>
		<meta name="description" content="">
		<meta name="description" content="Anodyne Productions specializes in RPG management software and tools to help game masters play and run their games with powerful and easy-to-use software.">
		<meta name="author" content="Anodyne Productions">
		<meta name="viewport" content="width=device-width">
		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico?v1') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('apple-touch-icon.png') }}">

		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
		
		{{ partial('global_styles') }}
		{{ HTML::style('css/base.css') }}
		{{ HTML::style('css/main.css') }}
		{{ HTML::style('css/responsive.css') }}
		{{ HTML::style('css/fonts.css') }}
	</head>
	<body>
		<div class="wrapper">
			{{ View::make('partials.nav-global')->withActive('main') }}
			
			{{ View::make('partials.header')->withType('main') }}
			
			<section>
				<div class="container">
					@if (Session::has('flash.message'))
						@include('partials.flash')
					@endif
					
					@yield('content')
				</div>
			</section>

			@include('partials.footer')
		</div>

		<div id="contactModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content"></div>
			</div>
		</div>

		@yield('modals')
		
		{{ partial('global_scripts') }}
		<script>
			// Destroy all modals when they're hidden
			$('.modal').on('hidden.bs.modal', function()
			{
				$('.modal').removeData('bs.modal');
			});
			
			$('.js-contact').on('click', function(e)
			{
				e.preventDefault();

				$('#contactModal').modal({
					remote: "{{ route('contact') }}"
				}).modal('show');
			});
		</script>
		@yield('scripts')
	</body>
</html>
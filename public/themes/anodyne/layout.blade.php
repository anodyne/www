<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title') &bull; Anodyne Productions</title>
		<meta name="description" content="">
		<meta name="author" content="Anodyne Productions">
		<meta name="viewport" content="width=device-width">
		<link rel="icon" type="image/x-icon" href="../favicon.ico?v2">
		<link rel="apple-touch-icon-precomposed" href="../apple-touch-icon.png">

		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
		
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Bitter:700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Exo+2:500,500italic,600,600italic" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
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
					@yield('content')
				</div>
			</section>

			<div class="push"></div>
		</div>

		@include('partials.footer')
		
		<div id="contactModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content"></div>
			</div>
		</div>

		@yield('modals')
		
		@if (App::environment() == 'production')
			<!--[if lt IE 9]>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<![endif]-->
			<!--[if gte IE 9]><!-->
				<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
			<!--<![endif]-->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
			<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
		@else
			<script src="//localhost/global/jquery/jquery-2.1.1.min.js"></script>
			<script src="//localhost/global/bootstrap/3.2/js/bootstrap.min.js"></script>
			<script src="//localhost/global/jquery.validate/1.13/jquery.validate.min.js"></script>
			<script src="//localhost/global/jquery.validate/1.13/additional-methods.min.js"></script>
		@endif
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
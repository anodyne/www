<header>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-md-4">
				@if ($type == 'main')
					<a href="{{ route('home') }}" class="brand">Anodyne Productions</a>
				@endif

				@if ($type == 'nova')
					<a href="{{ route('nova.home') }}" class="brand">Nova <small>By Anodyne</small></a>
				@endif
			</div>

			<div class="col-xs-12 col-sm-7 col-md-8">
				{{ View::make('partials.nav-main')->withType($type) }}
			</div>
		</div>
	</div>
</header>
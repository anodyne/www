@extends('layouts.nova')

@section('title')
	Nova Awards
@stop

@section('content')
	@if ( ! $type)
		<h1>Awards</h1>

		<p>Over the years, we've seen people do some incredible things with our products with just a little ingenuity and experimentation. Until now, those sites have gone unnoticed and unrecognized. We want to change that and make sure the community can see some of the amazing things being done. To do so, we've created three different awards we'll present to games and users from time to time to recognize their work and achievements.</p>

		<p>Below you can see the three awards, their descriptions, and a list of all the winners and their sites. If you know of a game or user who exemplifies any of these, <a href="#" class="js-contact">drop us a note</a> and let us know!</p>

		<hr class="partial-split">

		<div class="row">
			<div class="col-md-6 col-md-push-6">
				<p class="visible-xs visible-sm text-center">{{ HTML::image('images/award-presentation.png') }}</p>
				<p class="visible-md visible-lg text-right">{{ HTML::image('images/award-presentation.png') }}</p>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<h2>Outstanding Presentation</h2>

				<p>The first thing people will notice about a Nova game is the way it looks. This award is intended to recognize games that work hard to present a unique and fresh look to Nova for their visitors.</p>

				<p class="visible-xs visible-sm">{{ link_to_route('nova.awards', 'See All Award Winners', ['presentation'], ['class' => 'btn btn-lg btn-block btn-default']) }}</p>
				<p class="visible-md visible-lg">{{ link_to_route('nova.awards', 'See All Award Winners', ['presentation'], ['class' => 'btn btn-default']) }}</p>
			</div>
		</div>

		<hr class="partial-split">

		<div class="row">
			<div class="col-md-6">
				<p class="visible-xs visible-sm text-center">{{ HTML::image('images/award-technical.png') }}</p>
				<p class="visible-md visible-lg">{{ HTML::image('images/award-technical.png') }}</p>
			</div>
			<div class="col-md-6">
				<div class="visible-xs visible-sm">
					<h2>Technical Achievement</h2>

					<p>Awarded to games and users who take Nova beyond its out-of-the-box functionality to create something new, fresh, and exciting for their game or all Nova games.</p>

					<p>{{ link_to_route('nova.awards', 'See All Award Winners', ['technical'], ['class' => 'btn btn-lg btn-block btn-default']) }}</p>
				</div>
				<div class="visible-md visible-lg text-right">
					<h2>Technical Achievement</h2>

					<p>Awarded to games and users who take Nova beyond its out-of-the-box functionality to create something new, fresh, and exciting for their game or all Nova games.</p>

					<p>{{ link_to_route('nova.awards', 'See All Award Winners', ['technical'], ['class' => 'btn btn-default']) }}</p>
				</div>
			</div>
		</div>

		<hr class="partial-split">

		<div class="row">
			<div class="col-md-6 col-md-push-6">
				<p class="visible-xs visible-sm text-center">{{ HTML::image('images/award-creativity.png') }}</p>
				<p class="visible-md visible-lg text-right">{{ HTML::image('images/award-creativity.png') }}</p>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<h2>Outstanding Creativity</h2>

				<p>Awarded to games who show extreme creativity in all manner of ways. That can be through how they present information, what they present, or anything else we think is highly creative and adds to the game's experience in a new and exciting way.</p>

				<p class="visible-xs visible-sm">{{ link_to_route('nova.awards', 'See All Award Winners', ['creativity'], ['class' => 'btn btn-lg btn-block btn-default']) }}</p>
				<p class="visible-md visible-lg">{{ link_to_route('nova.awards', 'See All Award Winners', ['creativity'], ['class' => 'btn btn-default']) }}</p>
			</div>
		</div>
	@else
		@if ($type == 'creativity')
			<h1>Outstanding Creativity</h1>

			<div class="btn-toolbar">
				<div class="btn-group">
					{{ link_to_route('nova.awards', "All Awards", [], ['class' => 'btn btn-default']) }}
				</div>
				<div class="btn-group">
					{{ link_to_route('nova.awards', "Technical Achievement Award", ['technical'], ['class' => 'btn btn-default']) }}
				</div>
				<div class="btn-group">
					{{ link_to_route('nova.awards', "Outstanding Presentation Award", ['presentation'], ['class' => 'btn btn-default']) }}
				</div>
			</div>

			<p>{{ HTML::image('images/award-creativity.png') }}</p>
		@endif

		@if ($type == 'technical')
			<h1>Technical Achievement</h1>

			<div class="btn-toolbar">
				<div class="btn-group">
					{{ link_to_route('nova.awards', "All Awards", [], ['class' => 'btn btn-default']) }}
				</div>
				<div class="btn-group">
					{{ link_to_route('nova.awards', "Outstanding Creativity Award", ['creativity'], ['class' => 'btn btn-default']) }}
				</div>
				<div class="btn-group">
					{{ link_to_route('nova.awards', "Outstanding Presentation Award", ['presentation'], ['class' => 'btn btn-default']) }}
				</div>
			</div>

			<p>{{ HTML::image('images/award-technical.png') }}</p>
		@endif

		@if ($type == 'presentation')
			<h1>Outstanding Presentation</h1>

			<div class="btn-toolbar">
				<div class="btn-group">
					{{ link_to_route('nova.awards', "All Awards", [], ['class' => 'btn btn-default']) }}
				</div>
				<div class="btn-group">
					{{ link_to_route('nova.awards', "Outstanding Creativity Award", ['creativity'], ['class' => 'btn btn-default']) }}
				</div>
				<div class="btn-group">
					{{ link_to_route('nova.awards', "Technical Achievement Award", ['technical'], ['class' => 'btn btn-default']) }}
				</div>
			</div>

			<p>{{ HTML::image('images/award-presentation.png') }}</p>
		@endif

		<h2>List of Winners</h2>

		<dl>
		@foreach ($winners[$type] as $winner)
			<dt>{{ link_to($winner['url'], $winner['title'], ['target' => '_blank']) }}</dt>
			<dd>{{ $winner['reason'] }}</dd>
			<dd class="text-sm text-muted">{{ $winner['date'] }}</dd>
		@endforeach
		</dl>
	@endif
@stop
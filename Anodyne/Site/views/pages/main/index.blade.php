@extends('layouts.main')

@section('title')
	Home
@stop

@section('content')
	<a name="about"></a><h1>About Us</h1>

	<p>Founded in {{ $founding->year }}, Anodyne Productions was the definition of the the idiom "necessity is the mother of invention." Born out of a need for an easy-to-use and powerful tool to manage online RPGs, Anodyne Productions opened its doors with the SIMM Management System (SMS), a tool to help game masters spend less time managing the game and more time playing it. Over the last {{ $founding->diffInYears(Date::now()) }} years, Anodyne has delivered premier RPG management tools, first for Star Trek RPGs with SMS, and now for RPGs of all kinds with <a href="{{ route('nova.home') }}">Nova</a>.</p>

	<p>Our mission is simple: provide products of the highest quality. That's been the driving force behind our efforts since the day we opened our doors; we don't just want to meet your expectations for powerful and easy-to-use web software, we want to exceed it.</p>

	<hr class="partial-split">

	<a name="products"></a><h1>Products &amp; Services</h1>

	<div class="row">
		<div class="col-md-6">
			<div class="well">
				<h2 class="text-center">Nova <small><?php echo $version;?></small></h2>
				<p>Nova is an easy-to-use and powerful RPG management system to help you manage your online RPG so you can get back to playing it.</p>
				<p><a href="{{ route('nova.home') }}" class="btn btn-primary btn-lg btn-block">Get Nova</a></p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="well">
				<h2 class="text-center">AnodyneXtras</h2>
				<p>Looking for a new skin for your sim? Need a MOD to do something special? AnodyneXtras is your one-stop-shop for all Nova content.</p>
				<p><a href="{{ config('anodyne.links.xtras') }}" class="btn btn-primary btn-lg btn-block">Explore Xtras</a></p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="well">
				<h2 class="text-center">Forums</h2>
				<p>Everything from how to do something in Nova to skin requests and much more can be answered by our knowledgeable community members.</p>
				<p><a href="{{ config('anodyne.links.forums') }}" class="btn btn-primary btn-lg btn-block">Hit the Forums</a></p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="well">
				<h2 class="text-center">Help Center</h2>
				<p>If you're having an issue with one of our products, this is the first place to look. We've compiled FAQs and more in a simple, searchable site!</p>
				<p><a href="{{ config('anodyne.links.help') }}" class="btn btn-primary btn-lg btn-block">Get Help</a></p>
			</div>
		</div>
	</div>
@stop
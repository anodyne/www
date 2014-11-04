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
		<div class="col-md-4">
			<div class="well">
				<h2 class="text-center">Nova <small><?php echo $version;?></small></h2>
				<p>Nova is an easy-to-use and powerful RPG management system to help you manage your online RPG so you can get back to playing it.</p>
				<p><a href="{{ route('nova.home') }}" class="btn btn-primary btn-lg btn-block">Get Nova</a></p>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="well">
				<h2 class="text-center">AnodyneXtras</h2>
				<p>Looking for a new skin for your sim? Need a MOD to do something special? AnodyneXtras is your one-stop-shop for all Nova content.</p>
				<p><a href="{{ Config::get('anodyne.links.xtras') }}" class="btn btn-primary btn-lg btn-block">Explore Xtras</a></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="well">
				<h2 class="text-center">Forums</h2>
				<p>Everything from how to do something in Nova to skin requests and much more can be answered by our knowledgeable community members.</p>
				<p><a href="{{ Config::get('anodyne.links.forums') }}" class="btn btn-primary btn-lg btn-block">Hit the Forums</a></p>
			</div>
		</div>
	</div>

	<!--<div class="row">
		<div class="col-xs-12">
			<div class="well">
				<h2 class="text-center">Anodyne Help Resources</h2>
				
				<div class="row">
					<div class="col-md-6">
						<p class="text-sm">Everything you could ever want or need to know about Anodyne's products can be found in our learning system. Take courses to get proficient with our products and share that knowledge with others!</p>
						<p><a href="/nova" class="btn btn-primary btn-lg btn-block">Learn</a></p>
					</div>
					
					<div class="col-md-6">
						<p class="text-sm">If you're having an issue with one of our products, this is the first place to look. We've compiled frequently asked questions as well as common issues in a simple, searchable site so you can get back to your game!</p>
						<p><a href="/nova" class="btn btn-primary btn-lg btn-block">Visit the Help Center</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<hr class="partial-split">

	<a name="news"></a><h1>Latest News</h1>

	<?php $i=1;?>

	@forelse ($news as $n)
		@if ($i > 1)
			<hr class="partial-split">
		@endif

		<h2 class="news-title">{{ $n->title }} <small>{{ date("M d Y", strtotime($n->publish_date)) }}</small></h2>
		{{ Markdown::parse(Str::words($n->content, 50)) }}

		<p class="visible-xs visible-sm"><a href="{{ route('wardrobe.posts.show', [$n->slug]) }}" class="btn btn-lg btn-block btn-default">Read More</a></p>

		<p class="visible-md visible-lg"><a href="{{ route('wardrobe.posts.show', [$n->slug]) }}" class="btn btn-default">Read More</a></p>

		<?php ++$i;?>
	@empty
		{{ alert('warning', "No news found.") }}
	@endforelse

	<hr class="partial-split">

	<a name="help"></a><h1>Get Help</h1>

	<p>Whether it's a question about an issue you're having, getting help with putting the finishing touches on your skin, or working through the development of your MOD, we've have several options for you to get the help you need with any of our products:</p>

	<dl>
		<dt><a href="{{ Config::get('anodyne.links.forums') }}">The Forums</a></dt>
		<dd>Our forums are the primary way to get help with any of our products. You can also use the forums to ask questions, get direction, and talk with other members of the community. (Requires registration)</dd>
		
		<!--<dt><a href="http://help.anodyne-productions.com">Anodyne Help Center</a></dt>
		<dd>We've spent a great deal of time building an extensive user guide for Nova through AnodyneDocs. If you don't see something here that you think should be included, make sure to drop us a line and let us know.</dd>-->
		
		<!--<dt><a href="http://docs.anodyne-productions.com">AnodyneDocs</a></dt>
		<dd>We've spent a great deal of time building an extensive user guide for Nova through AnodyneDocs. If you don't see something here that you think should be included, make sure to drop us a line and let us know.</dd>-->
		
		<dt><a href="#" class="js-contact">Email</a></dt>
		<dd>We're happy to answer questions over email, but the best place to get help is on the forums. Not only is it quicker for us to help you that way, but it also benefits other members of the community that may be having similar issues or someone who may come along several months from now with the same issue.</dd>
		
		<dt><a href="https://twitter.com/anodyneprod" target="_blank">Twitter</a> &amp; <a href="http://facebook.com/anodyneproductions" target="_blank">Facebook</a></dt>
		<dd>Feel free to post on our wall or send us a tweet with any issues you may be having. The best place to get help will still be the forums, but if you've got a quick question, we're happy to answer it through social media.</dd>
	</dl>
@stop
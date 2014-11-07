@extends('layouts.nova')

@section('title')
	Nova: Next Generation
@stop

@section('content')
	<h1>Nova: Next Generation</h1>

	<p>Over the last couple of years, there have been a lot of promises about the next generation of Nova, but to date, little evidence to back those promises up. The last thing we want is for this to feel like "vaporware" that we talk and talk about, but never happens. Believe us when we say, we're committed to getting the next generation of Nova into your hands, but we won't do it until we feel it's the best product it can possibly be. That involves a lot of time and effort though and we don't want to leave people empty-handed, so we've created this preview site to show you what's coming when it finally does ship.</p>

	<p>Our development is being governed by two principles: <em>make it smarter</em> and <em>make it better</em>. Those are certainly subjective principles to be guided by, but we've come to view our role as curators of features now. Ultimately, we have the final say over what does and does not go into Nova. At the end of the day, we're the ones who have to be satisfied with the product, so our goal is to make sure that every new feature added either makes Nova smarter or better. If an existing feature doesn't meet our standards, we tear it apart and re-build it until it does, even if the end user will never notice the change. At the end of the day, it's about building a product we're proud of and something you'll love using.</p>

	<hr class="partial-split">

	<div class="row">
		<div class="col-md-2">
			<p><a href="#" class="btn btn-block btn-default tooltip-top" title="Application Reviews">{{ $_icons['preview']['arc'] }}</a></p>
		</div>
		<div class="col-md-2">
			<p><a href="#" class="btn btn-block btn-default tooltip-top" title="Control Your Content">{{ $_icons['preview']['content'] }}</a></p>
		</div>
		<div class="col-md-2">
			<p><a href="#" class="btn btn-block btn-default tooltip-top" title="Setup Module">{{ $_icons['preview']['setup'] }}</a></p>
		</div>
		<div class="col-md-2">
			<p><a href="#" class="btn btn-block btn-default tooltip-top" title="Forms 2.0">{{ $_icons['preview']['forms'] }}</a></p>
		</div>
		<div class="col-md-2">
			<p><a href="#" class="btn btn-block btn-default tooltip-top" title="Join Form">{{ $_icons['preview']['join'] }}</a></p>
		</div>
		<div class="col-md-2">
			<p><a href="#" class="btn btn-block btn-default tooltip-top" title="New Rank System">{{ $_icons['preview']['ranks'] }}</a></p>
		</div>
	</div>

	<hr class="partial-split">

	@include('pages.nova.preview.arc')

	<hr class="partial-split">

	@include('pages.nova.preview.content')

	<hr class="partial-split">

	@include('pages.nova.preview.setup')

	<hr class="partial-split">

	@include('pages.nova.preview.forms')

	<hr class="partial-split">

	@include('pages.nova.preview.join')

	<hr class="partial-split">

	@include('pages.nova.preview.ranks')
@stop
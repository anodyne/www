@extends('layouts.nova')

@section('title')
	Nova NextGen
@stop

@section('content')
	<h1>Nova NextGen</h1>

	<div class="row">
		<div class="col-md-9">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
				<li><a href="#vision" data-toggle="tab">Our Vision</a></li>
				<li><a href="#installing" data-toggle="tab">Installing Preview Release 1</a></li>
			</ul>

			<div class="tab-content">
				<div id="overview" class="tab-pane active">
					<p>Over the last couple of years, there have been a lot of promises about the next generation of Nova, but to date, little evidence to back those promises up. The last thing we want is for this to feel like "vaporware" that we talk and talk about, but never happens. Believe us when we say, we're committed to getting the next generation of Nova into your hands, but we won't do it until we feel it's the best product it can possibly be. That involves a lot of time and effort though and we don't want to leave people empty-handed, so we've created this preview site to show you what's coming.</p>

					<p>Our development is being governed by two principles: <em>make it smarter</em> and <em>make it better</em>. Those are certainly subjective principles to be guided by, but we've come to view our role as curators of features now. Ultimately, we have the final say over what does and does not go into Nova. At the end of the day, we're the ones who have to be satisfied with the product, so our goal is to make sure that every new feature added either makes Nova smarter or better. If an existing feature doesn't meet our standards, we tear it apart and re-build it until it does, even if the end user will never notice the change. At the end of the day, it's about building a product we're proud of and something you'll love using.</p>
				</div>

				<div id="vision" class="tab-pane">
					
				</div>

				<div id="installing" class="tab-pane">
					
				</div>
			</div>
		</div>

		<div class="col-md-3">
			{{ alert('warning', "Nova NextGen is not suitable for running a live site. This meant as a way to check out what's coming in the next version of Nova.") }}

			<p><a href="#" class="btn btn-primary btn-lg btn-block">{{ $_icons['download'] }} Preview Release 1</a></p>

			<h3>What's in PR1</h3>

			<ul>
				<li class="text-sm">Basic technology stack</li>
				<li class="text-sm">Application architecture</li>
				<li class="text-sm">Foundational elements</li>
				<li class="text-sm">Setup Center
					<ul>
						<li class="text-sm">Fresh install</li>
						<li class="text-sm">Uninstall</li>
					</ul>
				</li>
			</ul>

			<h3>Coming in PR2</h3>

			<ul>
				<li class="text-sm">Page Manager
					<ul>
						<li class="text-sm">Basic page info</li>
						<li class="text-sm">Page content</li>
						<li class="text-sm">Site navigation</li>
						<li class="text-sm">Page collections</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
@stop
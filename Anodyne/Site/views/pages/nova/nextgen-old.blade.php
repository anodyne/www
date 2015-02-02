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
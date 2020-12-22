@extends('layouts.nova')

@section('title')
	Nova
@stop

@section('content')
	<p>Built by <a href="{{ route('home') }}">Anodyne Productions</a>, Nova is the premier RPG management software. With an easy-to-use interface, a built-in mini-wiki, vastly improved messaging and posting systems, a wide array of developer tools and much more, Nova is all you need to help you stop managing your game and get back to playing it.</p>

	<hr class="partial-split">

	<a name="features"></a><h1>Features</h1>

	<div class="row">
		<div class="col-sm-6">
			<h2>Post Locking</h2>
			<p>Frustrated when an update you just made to a post gets wiped out because someone else was editing at the same time? No more. Never have your changes overwritten with a smart post locking system that locks and unlocks multi-author posts during editing.</p>
		</div>

		<div class="col-sm-6">
			<h2>Say Anything</h2>
			<p>Site messages in Nova can now contain previously disallowed HTML content meaning that just about anything you want to share can be done from right inside Nova without having to touch any files. Just copy and paste your code into the message!</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-3">
			<h3>Find</h3>
			<p class="text-sm">Search through all your content to find what you're looking for.</p>
		</div>

		<div class="col-sm-6 col-md-3">
			<h3>Change</h3>
			<p class="text-sm">Lots of customization options with powerful developer tools.</p>
		</div>

		<div class="col-sm-6 col-md-3">
			<h3>Share</h3>
			<p class="text-sm">Collaborate with other users through a simple built-in wiki.</p>
		</div>

		<div class="col-sm-6 col-md-3">
			<h3>Gather</h3>
			<p class="text-sm">Get what you want from users through customizable forms.</p>
		</div>
	</div>

	<hr class="partial-split">

	<h2>New in Nova 2.6</h2>

	<dl>
		<dt>Event System</dt>
	    <dd>Mod developers can take advantage of a new event system in Nova 2 to listen for specific events during Nova's lifecycle or even listen for specific calls to the database and hook into those events to code specific functionality, modifications, or changes to the core system. <em>This event system is officially being classified as <strong>experimental</strong> for the remainder of Nova 2's life.</em></dd>

		<dt>Extension System</dt>
	    <dd>Mod developers can take advantage of a new extension system in Nova 2 to write significantly more robust mods that extend Nova beyond its default capabilities. <em>This extension system is officially being classified as <strong>experimental</strong> for the remainder of Nova 2's life.</em></dd>
	</dl>

	<hr class="partial-split">

	<div class="visible-md visible-lg">
		<a name="download"></a><h1>Download</h1>

		<div class="row">
			<div class="col-md-7">
				<p>To begin, select your game's genre and click download to get the latest version of Nova 2. If you want to download a previous version, you can select the version you want from the dropdown. You can use the same zip archive for a fresh install, upgrade from SMS or Nova 1, or updating Nova 2.</p>

				<p class="alert alert-success">Nova 2.5+ requires PHP 5.3 or higher. Nova 2.3 will work on PHP 5.2. Nova 3 will require PHP 7 or higher.</p>

				<p class="alert alert-warning">Nova 2.6 requires additional steps in order to work as intended. Please see the <a href="https://help.anodyne-productions.com/article/nova-2/updating-to-nova-26" target="_blank">Nova 2.6 Update Guide</a> for more information.</p>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">Version</label>
							{{ Form::select('version', $versions, null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="control-label">Genre</label>
							{{ Form::select('genre', $genres, null, ['class' => 'form-control', 'rel' => 'download']) }}
						</div>
					</div>
				</div>

				<div id="download-container" class="hide">
					<div class="form-group">
						<a href="#" class="btn btn-lg btn-block btn-primary track-download" id="download-btn">Download (<span class="genre-text"></span>)</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('modals')
	{{ modal(['id' => 'download-confirm', 'header' => 'Thank You For Choosing Nova!', 'body' => '<p>Your download will start momentarily...</p>']) }}
@stop

@section('scripts')
	<script>
		$('.track-download').click(function(e)
		{
			e.preventDefault();

			var clicked = $(this);

			// Show the modal
			$('#download-confirm').modal('show');

			// Start the countdown
			setTimeout(function()
			{
				$('#download-confirm').modal('hide');
				window.location.href = clicked.attr('href');
			}, 3000);
		});

		$('[rel="download"]').on('change', function()
		{
			// Get the variables
			var genre = $('[name="genre"]').val();
			var version = $('[name="version"] option:selected').val();

			if (genre != '---')
			{
				// Build the link
				$('#download-btn').attr('href', "{{ $_ENV['FS_URL'] }}nova/nova-" + version + "-" + genre + ".zip");
				$('#download-btn .genre-text').html(genre.toUpperCase());

				// Show the download button
				$('#download-container').removeClass('hide');
			}
			else
				$('#download-container').addClass('hide');
		});
	</script>
@stop

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-10">
				<h2>Anodyne Productions</h2>

				<p>Our mission is simple: provide products of the highest quality. That's been the driving force behind our efforts since the day we opened our doors; we don't just want to meet your expectations for powerful and easy-to-use web software, we want to exceed it.</p>

				<p>&copy; <?php echo Date::now()->year;?> Anodyne Productions</p>
			</div>
			<div class="col-sm-3 col-md-2">
				<ul class="list-unstyled">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('nova.home') }}">Nova</a></li>
					<li><a href="https://discord.gg/7WmKUks">Discord</a></li>
					<li><a href="{{ config('anodyne.links.xtras') }}">AnodyneXtras</a></li>
					<li><a href="{{ config('anodyne.links.help') }}">Help Center</a></li>
					<li><a href="{{ config('anodyne.links.forums') }}">Forums</a></li>
					<li><a href="#" class="js-contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
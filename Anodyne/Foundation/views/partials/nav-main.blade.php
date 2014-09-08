<nav class="nav-main">
	<ul>
		@if ($type == 'main')
			<li class="hidden-sm"><a href="{{ route('home') }}#about">About Us</a></li>
			<li class="hidden-sm"><a href="{{ route('home') }}#products">Our Products</a></li>
			<li class="hidden-sm"><a href="{{ route('home') }}#news">Latest News</a></li>
			<li class="hidden-sm"><a href="{{ route('home') }}#help">Get Help</a></li>

			<li class="visible-sm"><a href="{{ route('home') }}#about">About</a></li>
			<li class="visible-sm"><a href="{{ route('home') }}#products">Products</a></li>
			<li class="visible-sm"><a href="{{ route('home') }}#news">News</a></li>
			<li class="visible-sm"><a href="{{ route('home') }}#help">Help</a></li>
		@endif

		@if ($type == 'nova')
			<li><a href="{{ route('nova.home') }}#features">Nova 2 Features</a></li>
			<li class="visible-md visible-lg"><a href="{{ route('nova.home') }}#download">Download Nova 2</a></li>
			<!--<li><a href="{{ route('nova.home') }}#start">Getting Started</a></li>-->
			<li><a href="{{ route('nova.home') }}#help">Get Help</a></li>
		@endif
	</ul>
</nav>
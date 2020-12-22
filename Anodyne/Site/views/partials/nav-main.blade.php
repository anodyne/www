<nav class="nav-main">
	<ul>
		@if ($type === 'main')
			<li><a href="{{ route('home') }}#about">About</a></li>

			<li class="hidden-sm"><a href="{{ route('home') }}#products">Products &amp; Services</a></li>
			<li class="visible-sm"><a href="{{ route('home') }}#products">Products</a></li>

			{{-- <li><a href="{{ route('home') }}#news">News</a></li> --}}
			{{-- <li><a href="{{ route('home') }}#help">Help</a></li> --}}
			<li><a href="https://discord.gg/7WmKUks" target="_blank">Discord</a></li>
			<!--<li><a href="https://kiwiirc.com/client?settings=acd01fa5290119cfa95b879f8a782ea9">Chat Room</a></li>-->
		@endif

		@if ($type === 'nova')
			<li><a href="{{ route('nova.home') }}#features">Features</a></li>
			<li class="visible-md visible-lg"><a href="{{ route('nova.home') }}#download">Download</a></li>
		@endif
	</ul>
</nav>
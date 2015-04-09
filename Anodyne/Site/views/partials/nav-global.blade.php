<nav class="nav-global visible-xs">
	<div class="container">
		<ul>
			@if ($active == 'nova')
				<li><a href="#" class="active" data-toggle="modal" data-target="#navGlobalMobile">Nova<div class="arrow"></div></a></li>
			@else
				<li><a href="#" class="active" data-toggle="modal" data-target="#navGlobalMobile">Anodyne<div class="arrow"></div></a></li>
			@endif
		</ul>
	</div>
</nav>

<div class="modal fade" id="navGlobalMobile">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Anodyne Productions</h4>
			</div>
			<div class="modal-body">
				<ul>
					<li><a href="{{ route('home') }}">Anodyne</a></li>
					<li><a href="{{ route('nova.home') }}">Nova</a></li>
					<li><a href="{{ config('anodyne.links.xtras') }}">Xtras</a></li>
					<li><a href="{{ config('anodyne.links.forums') }}">Forums</a></li>
					<li><a href="{{ config('anodyne.links.help') }}">Help</a></li>
					<li><a href="#" class="js-contact">Contact</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
					<li><a href="{{ route('login') }}">Log In</a></li>
				</ul>
			</div>
			<div class="modal-footer">
				<a href="#" data-dismiss="modal" class="btn btn-lg btn-block btn-default">Close</a>
			</div>
		</div>
	</div>
</div>

<nav class="nav-global hidden-xs">
	<div class="container">
		<ul class="visible-md visible-lg pull-right">
			<li><a href="#" class="js-contact">Contact</a></li>

			@if (Auth::check())
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="user-icon">{{ $_icons['user'] }}</span> {{ $_currentUser->present()->name }} <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-right dd">
						<li><a href="{{ route('admin.users.edit', [$_currentUser->username]) }}">Edit My Account</a></li>

						@if ($_currentUser->can('www.admin'))
							<li class="divider"></li>

							@if ($_currentUser->can('www.admin'))
								<li><a href="{{ route('wardrobe.admin.index') }}">Manage News</a></li>
							@endif

							@if ($_currentUser->can('www.admin.users'))
								<li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
							@endif

							@if ($_currentUser->can('www.admin.permissions'))
								<li><a href="{{ route('admin.roles.index') }}">Manage Roles</a></li>
							@endif
						@endif

						<li class="divider"></li>
						<li><a href="{{ route('logout') }}">Logout</a></li>
					</ul>
				</li>
			@else
				<li><a href="{{ route('register') }}">Register</a></li>
				<li><a href="{{ route('login') }}">Log In</a></li>
			@endif
		</ul>

		<ul>
			<li><a href="{{ route('home') }}"{{ ($active == 'main') ? ' class="active"' : '' }}>Anodyne<div class="arrow"></div></a></li>
			<li><a href="{{ route('nova.home') }}"{{ ($active == 'nova') ? ' class="active"' : '' }}>Nova<div class="arrow"></div></a></li>
			<li><a href="{{ config('anodyne.links.xtras') }}">Xtras<div class="arrow"></div></a></li>
			<li><a href="{{ config('anodyne.links.forums') }}">Forums<div class="arrow"></div></a></li>
			<li><a href="{{ config('anodyne.links.help') }}">Help<div class="arrow"></div></a></li>
			<!--<li><a href="http://learn.anodyne-productions.com">Learn<div class="arrow"></div></a></li>-->
			<li class="visible-sm"><a href="#" class="js-contact">Contact</a></li>
			<li class="visible-sm"><a href="{{ route('register') }}">Register</a></li>
			<li class="visible-sm"><a href="{{ route('login') }}">Log In</a></li>
		</ul>
	</div>
</nav>
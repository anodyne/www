@extends('layouts.main')

@section('title')
	Users
@stop

@section('content')
	<h1>Users <small>{{ $users->getTotal() }} users</small></h1>

	<div class="visible-xs visible-sm">
		<div class="row">
			<div class="col-sm-4">
				<p><a href="{{ route('admin.users.create') }}" class="btn btn-lg btn-block btn-primary">Create New User</a></p>
			</div>
		</div>
	</div>
	<div class="visible-md visible-lg">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create New User</a>
			</div>
		</div>
	</div>

	@if ($users->getTotal() > 0)
		{{ $users->links() }}

		<div class="data-table data-table-striped data-table-bordered">
		@foreach ($users as $user)
			<div class="row">
				<div class="col-md-9">
					<p class="lead">{{ $user->present()->name }}</p>
					<p class="text-sm text-muted">{{ $user->present()->email }}</p>
				</div>
				<div class="col-md-3">
					<div class="visible-xs visible-sm">
						<div class="row">
							<div class="col-sm-6">
								<p><a href="{{ route('admin.users.edit', [$user->username]) }}" class="btn btn-lg btn-block btn-default">{{ $_icons['edit'] }}</a></p>
							</div>

							@if ($_currentUser->id != $user->id)
								<div class="col-sm-6">
									<p><a href="#" class="btn btn-lg btn-block btn-danger js-user-action" data-action="delete" data-username="{{ $user->username }}">{{ $_icons['remove'] }}</a></p>
								</div>
							@endif
						</div>
					</div>
					<div class="visible-md visible-lg">
						<div class="btn-toolbar pull-right">
							<div class="btn-group">
								<a href="{{ route('admin.users.edit', [$user->username]) }}" class="btn btn-default">{{ $_icons['edit'] }}</a>
							</div>

							@if ($_currentUser->id != $user->id)
								<div class="btn-group">
									<a href="#" class="btn btn-danger js-user-action" data-action="delete" data-username="{{ $user->username }}">{{ $_icons['remove'] }}</a>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		@endforeach
		</div>

		{{ $users->links() }}
	@else
		{{ alert('warning', "No users found.") }}
	@endif
@stop

@section('modals')
	{{ modal(array('id' => 'deleteUser', 'header' => "Delete User")) }}
@stop

@section('scripts')
	<script>
		$('.js-user-action').on('click', function(e)
		{
			e.preventDefault();

			var action = $(this).data('action');
			var username = $(this).data('username');

			if (action == 'delete')
			{
				$('#deleteUser').modal({
					remote: "{{ URL::to('admin/users/delete') }}/" + username
				}).modal('show');
			}
		});
	</script>
@stop
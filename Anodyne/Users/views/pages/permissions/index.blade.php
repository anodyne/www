@extends('layouts.main')

@section('title')
	Permissions
@stop

@section('content')
	<h1>Permissions</h1>

	<div class="visible-xs visible-sm">
		<div class="row">
			<div class="col-sm-4">
				<p><a href="{{ route('admin.permissions.create') }}" class="btn btn-lg btn-block btn-primary">Create New Permission</a></p>
				<p><a href="{{ route('admin.roles.index') }}" class="btn btn-lg btn-block btn-default">Manage Roles</a></p>
			</div>
		</div>
	</div>
	<div class="visible-md visible-lg">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">Create New Permission</a>
			</div>
			<div class="btn-group">
				<a href="{{ route('admin.roles.index') }}" class="btn btn-default">Manage Roles</a>
			</div>
		</div>
	</div>

	@if ($permissions->getTotal() > 0)
		{{ $permissions->links() }}

		<div class="data-table data-table-striped data-table-bordered">
		@foreach ($permissions as $permission)
			<div class="row">
				<div class="col-md-9">
					<p class="lead">{{ $permission->present()->displayName }}</p>
					<p class="text-sm text-muted">{{ $permission->present()->name }}</p>
				</div>
				<div class="col-md-3">
					<div class="visible-xs visible-sm">
						<div class="row">
							<div class="col-sm-6">
								<p><a href="{{ route('admin.permissions.edit', [$permission->id]) }}" class="btn btn-lg btn-block btn-default">{{ $_icons['edit'] }}</a></p>
							</div>
							<div class="col-sm-6">
								<p><a href="#" class="btn btn-lg btn-block btn-danger js-permission-action" data-action="delete" data-id="{{ $permission->id }}">{{ $_icons['remove'] }}</a></p>
							</div>
						</div>
					</div>
					<div class="visible-md visible-lg">
						<div class="btn-toolbar pull-right">
							<div class="btn-group">
								<a href="{{ route('admin.permissions.edit', [$permission->id]) }}" class="btn btn-default">{{ $_icons['edit'] }}</a>
							</div>
							<div class="btn-group">
								<a href="#" class="btn btn-danger js-permission-action" data-action="delete" data-id="{{ $permission->id }}">{{ $_icons['remove'] }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach

		{{ $permissions->links() }}
	@else
		{{ alert('warning', "No permissions found.") }}
	@endif
@stop

@section('modals')
	{{ modal(array('id' => 'deletePermission', 'header' => "Delete Permission")) }}
@stop

@section('scripts')
	<script>
		$('.js-permission-action').on('click', function(e)
		{
			e.preventDefault();

			var action = $(this).data('action');
			var id = $(this).data('id');

			if (action == 'delete')
			{
				$('#deletePermission').modal({
					remote: "{{ URL::to('admin/permissions/delete') }}/" + id
				}).modal('show');
			}
		});
	</script>
@stop
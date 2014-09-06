@extends('layouts.main')

@section('title')
	Roles
@stop

@section('content')
	<h1>Roles</h1>

	<div class="visible-xs visible-sm">
		<div class="row">
			<div class="col-sm-4">
				<p><a href="{{ route('admin.roles.create') }}" class="btn btn-lg btn-block btn-primary">Create New Role</a></p>
			</div>
		</div>
	</div>
	<div class="visible-md visible-lg">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Create New Role</a>
			</div>
			<div class="btn-group">
				<a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Manage Permissions</a>
			</div>
		</div>
	</div>

	@if ($roles->getTotal() > 0)
		{{ $roles->links() }}

		<div class="data-table data-table-striped data-table-bordered">
		@foreach ($roles as $role)
			<div class="row">
				<div class="col-md-9">
					<p class="lead">{{ $role->present()->name }}</p>
				</div>
				<div class="col-md-3">
					<div class="visible-xs visible-sm">
						<div class="row">
							<div class="col-sm-6">
								<p><a href="{{ route('admin.roles.edit', [$role->id]) }}" class="btn btn-lg btn-block btn-default">{{ $_icons['edit'] }}</a></p>
							</div>
							<div class="col-sm-6">
								<p><a href="#" class="btn btn-lg btn-block btn-danger js-role-action" data-action="delete" data-id="{{ $role->id }}">{{ $_icons['remove'] }}</a></p>
							</div>
						</div>
					</div>
					<div class="visible-md visible-lg">
						<div class="btn-toolbar pull-right">
							<div class="btn-group">
								<a href="{{ route('admin.roles.edit', [$role->id]) }}" class="btn btn-default">{{ $_icons['edit'] }}</a>
							</div>
							<div class="btn-group">
								<a href="#" class="btn btn-danger js-role-action" data-action="delete" data-id="{{ $role->id }}">{{ $_icons['remove'] }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach

		{{ $roles->links() }}
	@else
		{{ alert('warning', "No roles found.") }}
	@endif
@stop

@section('modals')
	{{ modal(array('id' => 'deleteRole', 'header' => "Delete Role")) }}
@stop

@section('scripts')
	<script>
		$('.js-role-action').on('click', function(e)
		{
			e.preventDefault();

			var action = $(this).data('action');
			var id = $(this).data('id');

			if (action == 'delete')
			{
				$('#deleteRole').modal({
					remote: "{{ URL::to('admin/roles/delete') }}/" + id
				}).modal('show');
			}
		});
	</script>
@stop
<p>Are you sure you want to delete the <strong>{{ $permission->present()->displayName }}</strong> permission? This action is permanent and cannot be undone!</p>

{{ Form::model($permission, ['route' => ['admin.permissions.destroy', $permission->id], 'method' => 'delete']) }}
	<div class="row">
		<div class="col-xs-12">
			{{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-lg btn-danger']) }}
		</div>
	</div>
{{ Form::close() }}
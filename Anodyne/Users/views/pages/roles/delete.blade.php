<p>Are you sure you want to delete the <strong>{{ $role->present()->name }}</strong> role? This action is permanent and cannot be undone!</p>

{{ Form::model($role, ['route' => ['admin.roles.destroy', $role->id], 'method' => 'delete']) }}
	<div class="row">
		<div class="col-xs-12">
			{{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-lg btn-danger']) }}
		</div>
	</div>
{{ Form::close() }}
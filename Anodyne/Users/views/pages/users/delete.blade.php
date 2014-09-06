<p>Are you sure you want to delete <strong>{{ $user->present()->name }}</strong>? This action is permanent and cannot be undone!</p>

{{ Form::model($user, ['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) }}
	<div class="row">
		<div class="col-xs-12">
			{{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-lg btn-danger']) }}
		</div>
	</div>
{{ Form::close() }}
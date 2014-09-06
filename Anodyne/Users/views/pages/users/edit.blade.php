@extends('layouts.main')

@section('title')
	Edit User - {{ $user->present()->name }}
@stop

@section('content')
	<h1>Edit User <small>{{ $user->present()->name }}</small></h1>

	<div class="btn-toolbar">
		<div class="btn-group">
			<a href="#" class="btn btn-default">Change Password</a>
		</div>
	</div>

	{{ Form::model($user, ['route' => ['admin.users.update', $user->username], 'method' => 'put']) }}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Name</label>
					{{ Form::text('name', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		@if ($_currentUser->can('www.admin.users'))
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Username</label>
						{{ Form::text('username', null, ['class' => 'form-control']) }}
					</div>
				</div>
			</div>
		@endif

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Email Address</label>
					{{ Form::email('email', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Personal Website URL</label>
					{{ Form::text('url', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Twitter</label>
					{{ Form::text('twitter', null, ['class' => 'form-control']) }}
					<p class="help-block">Make sure to include the <strong>@</strong> in your username.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Facebook</label>
					{{ Form::text('facebook', null, ['class' => 'form-control']) }}
					<p class="help-block">Include the full URL to your page or profile.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Google+</label>
					{{ Form::text('google', null, ['class' => 'form-control']) }}
					<p class="help-block">Include the full URL to your page or profile.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Bio</label>
					{{ Form::textarea('bio', null, ['class' => 'form-control', 'rows' => 8]) }}
					<p class="text-sm text-muted">{{ $_icons['markdown'] }} Parsed with Markdown</p>
				</div>
			</div>
		</div>

		@if ($_currentUser->can('www.admin.users'))
			<fieldset>
				<legend>Roles</legend>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<div class="row">
							@foreach ($roles as $id => $name)
								<div class="col-md-4">
									<label class="checkbox-inline">{{ Form::checkbox('access[]', $id, array_key_exists($id, $user_roles)) }} {{ $name }}</label>
								</div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		@endif

		<div class="row">
			<div class="col-md-12">
				{{ Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) }}
			</div>
		</div>
	{{ Form::close() }}
@stop
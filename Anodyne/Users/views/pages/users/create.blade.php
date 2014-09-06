@extends('layouts.main')

@section('title')
	Create User
@stop

@section('content')
	<h1>Create User</h1>

	<div class="btn-toolbar">
		<div class="btn-group">
			<a href="{{ route('admin.users.index') }}" class="btn btn-default">{{ $_icons['back'] }}</a>
		</div>
	</div>

	{{ Form::open(['route' => ['admin.users.store']]) }}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Name</label>
					{{ Form::text('name', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Username</label>
					{{ Form::text('username', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Email Address</label>
					{{ Form::email('email', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Password</label>
					{{ alert('info', "A password will be generated for the user and emailed to them.") }}
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
			<div class="col-md-6">
				<div class="form-group">
					<label>Bio</label>
					{{ Form::textarea('bio', null, ['class' => 'form-control', 'rows' => 8]) }}
					<p class="text-sm text-muted">{{ $_icons['markdown'] }} Parsed with Markdown</p>
				</div>
			</div>
		</div>

		<fieldset>
			<legend>Roles</legend>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<div class="row">
						@foreach ($roles as $id => $name)
							<div class="col-md-4">
								<label class="checkbox-inline">{{ Form::checkbox('access[]', $id, false) }} {{ $name }}</label>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</fieldset>

		<div class="row">
			<div class="col-md-12">
				{{ Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) }}
			</div>
		</div>
	{{ Form::close() }}
@stop
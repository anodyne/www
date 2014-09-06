@extends('layouts.main')

@section('title')
	Create Role
@stop

@section('content')
	<h1>Create Role</h1>

	<div class="btn-toolbar">
		<div class="btn-group">
			<a href="{{ route('admin.roles.index') }}" class="btn btn-default">{{ $_icons['back'] }}</a>
		</div>
	</div>

	{{ Form::open(['route' => ['admin.roles.store']]) }}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Name</label>
					{{ Form::text('name', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<fieldset>
			<legend>Permissions</legend>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<div class="row">
						@foreach ($permissions as $id => $name)
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
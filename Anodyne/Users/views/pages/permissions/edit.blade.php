@extends('layouts.main')

@section('title')
	Edit Permission - {{ $permission->present()->displayName }}
@stop

@section('content')
	<h1>Edit Permission <small>{{ $permission->present()->displayName }}</h1>

	<div class="btn-toolbar">
		<div class="btn-group">
			<a href="{{ route('admin.roles.index') }}" class="btn btn-default">{{ $_icons['back'] }}</a>
		</div>
	</div>

	{{ Form::model($permission, ['route' => ['admin.permissions.update', $permission->id], 'method' => 'put']) }}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Display Name</label>
					{{ Form::text('display_name', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Name</label>
					{{ Form::text('name', null, ['class' => 'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				{{ Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) }}
			</div>
		</div>
	{{ Form::close() }}
@stop
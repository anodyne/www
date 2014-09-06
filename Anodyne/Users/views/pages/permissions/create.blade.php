@extends('layouts.main')

@section('title')
	Create Permission
@stop

@section('content')
	<h1>Create Permission</h1>

	<div class="btn-toolbar">
		<div class="btn-group">
			<a href="{{ route('admin.permissions.index') }}" class="btn btn-default">{{ $_icons['back'] }}</a>
		</div>
	</div>

	{{ Form::open(['route' => ['admin.permissions.store']]) }}
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
				{{ Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) }}
			</div>
		</div>
	{{ Form::close() }}
@stop
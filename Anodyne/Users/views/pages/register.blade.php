@extends('layouts.main')

@section('title')
	Register
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
			<h1>Register</h1>

			<p>Registering for an AnodyneID will give you access to a growing array of services and sites, including AnodyneXtras and others in the future.</p>

			<hr class="partial-split">

			{{ Form::open(['route' => 'register.do']) }}
				<div class="form-group{{ ($errors->has('name')) ? ' has-error' : '' }}">
					<label class="control-label">Name</label>
					{{ Form::text('name', null, ['class' => 'form-control input-lg input-with-feedback']) }}
					{{ $errors->first('name', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group{{ ($errors->has('username')) ? ' has-error' : '' }}">
					<label class="control-label">Username</label>
					{{ Form::text('username', null, ['class' => 'form-control input-lg input-with-feedback']) }}
					{{ $errors->first('username', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group{{ ($errors->has('email')) ? ' has-error' : '' }}">
					<label class="control-label">Email Address</label>
					{{ Form::text('email', null, ['type' => 'email', 'class' => 'form-control input-lg input-with-feedback']) }}
					{{ $errors->first('email', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group{{ ($errors->has('password')) ? ' has-error' : '' }}">
					<label class="control-label">Password</label>
					{{ Form::password('password', ['class' => 'form-control input-lg input-with-feedback']) }}
					{{ $errors->first('password', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group{{ ($errors->has('password_confirm')) ? ' has-error' : '' }}">
					<label class="control-label">Confirm Password</label>
					{{ Form::password('password_confirm', ['class' => 'form-control input-lg input-with-feedback']) }}
					{{ $errors->first('password_confirm', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group{{ ($errors->has('confirm')) ? ' has-error' : '' }}">
					<label class="control-label">Spam-Be-Gone</label>
					<p class="help-block">In order to prevent spam, please type in the number to the field below: <strong>{{ $confirm_number }}</strong>.</p>
					{{ Form::text('confirm', null, ['class' => 'form-control input-lg input-with-feedback']) }}
					{{ $errors->first('confirm', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group">
					{{ Form::button('Register', ['type' => 'submit', 'class' => 'btn btn-lg btn-block btn-primary']) }}
					<a href="{{ route('login') }}" class="btn btn-block btn-link">Log In Now</a>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
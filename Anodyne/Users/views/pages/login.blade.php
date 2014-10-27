@extends('layouts.main')

@section('title')
	Log In
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Log In</h1>

			<p>Log in using your AnodyneID below. Once logged in, you'll be logged in across all Anodyne sites and services that use the AnodyneID. If you don't have an AnodyneID, you can get one by {{ link_to_route('register', 'registering') }}.</p>

			<hr class="partial-split">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ Form::open(['route' => 'login.do']) }}
				<div class="form-group{{ ($errors->has('email')) ? ' has-error' : '' }}">
					<label class="control-label">Email Address</label>
					{{ Form::text('email', null, array('type' => 'email', 'class' => 'form-control input-with-feedback input-lg')) }}
					{{ $errors->first('email', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group{{ ($errors->has('password')) ? ' has-error' : '' }}">
					<label class="control-label">Password</label>
					{{ Form::password('password', array('class' => 'form-control input-with-feedback input-lg')) }}
					{{ $errors->first('password', '<p class="help-block">:message</p>') }}
				</div>

				<div class="form-group">
					{{ Form::button('Log In', ['type' => 'submit', 'class' => 'btn btn-lg btn-block btn-primary']) }}
					<a href="{{ route('register') }}" class="btn btn-block btn-link">Register Now</a>
					<a href="{{ route('password.remind') }}" class="btn btn-block btn-link">Forgot Your Password?</a>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
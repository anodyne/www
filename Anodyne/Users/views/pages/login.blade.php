@extends('layouts.main')

@section('title')
	Log In
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
			<h1>Log In</h1>

			<p>Your AnodyneID gives you access to a growing array of Anodyne services and sites including AnodyneXtras. If you don't have an AnodyneID, you can create one by registering.</p>

			<hr>

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
					<a href="{{ route('password.remind') }}" class="btn btn-block btn-link">Forgot Password?</a>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
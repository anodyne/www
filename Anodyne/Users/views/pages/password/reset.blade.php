@extends('layouts.main')

@section('title')
	Reset Your Password
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
			<h1>Reset Your Password</h1>

			{{ Form::open(['route' => "password.reset.do"]) }}
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label class="control-label">Email Address</label>
							{{ Form::email('email', null, array('class' => 'form-control input-lg')) }}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label class="control-label">Password</label>
							{{ Form::password('password', array('class' => 'form-control input-lg')) }}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label class="control-label">Confirm Password</label>
							{{ Form::password('password_confirmation', array('class' => 'form-control input-lg')) }}
						</div>
					</div>
				</div>

				{{ Form::hidden('token', $token) }}

				<div class="row">
					<div class="col-xs-12">
						<p>{{ Form::submit("Reset Password", array('class' => 'btn btn-lg btn-block btn-primary')) }}</p>
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
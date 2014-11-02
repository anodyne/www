@extends('layouts/email')

@section('content')
	<p>A password reset has been requested for your account. If you did not initiate this reset, please contact Anodyne Productions immediately (contact@anodyne-productions.com).</p>

	<p>Using the link below, you can set your new password. This reset will only work for 60 minutes following your reset request, at which time you'll have to initiate a new reset.</p>

	<p>{{ URL::to('password/reset', [$token]) }}</p>
@stop
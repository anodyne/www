@extends('layouts.email')

@section('content')
	<h1>Welcome to Anodyne Productions!</h1>

	<p>You have successfully registered for your Anodyne Productions account. With your new account, you now have access to AnodyneXtras to search for, download, and submit content. In the future, we'll be launching other services that will use this same account as well.</p>

	<p>{{ HTML::link('http://anodyne-productions.com/login', 'Log In Now') }}</p>

	<p>If you believe you've received this message in error, please reply to the email and let us know.</p>
@stop
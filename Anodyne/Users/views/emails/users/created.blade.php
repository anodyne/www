@extends('layouts.email')

@section('content')
	<h1>Welcome to Anodyne Productions!</h1>

	<p>An account has been created for you by Anodyne Productions. With your new Anodyne Productions account, you have access to AnodyneXtras to search for, download, and submit content. In the future, we'll be launching other services that will use this same account as well.</p>

	<p>We have generated a random password for you to start. You should log in and change this password to something easier to remember as soon as possible.</p>

	<p>{{ HTML::link('http://anodyne-productions.com/login', 'Log In Now') }}</p>

	<ul>
		<li><strong>Email Address:</strong> {{ $email }}</li>
		<li><strong>Password:</strong> {{ $password }}</li>
	</ul>

	<p>If you believe you've received this message in error, please reply to the email and let us know.</p>
@stop
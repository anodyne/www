@extends('layouts.email')

@section('content')
	<h1>Welcome to Anodyne Productions!</h1>

	<p>An AnodyneID has been created for you by Anodyne Productions. With your AnodyneID, you have access to AnodyneXtras to search for, download, and submit content as well as manage your profile on the Anodyne Productions site. In the future, we'll be launching other services and sites that will use the AnodyneID and you'll be able to use this account for those sites as well.</p>

	<p>We have generated a random password for you to start. You should log in and change this password as soon as possible.</p>

	<p>{{ HTML::link('https://anodyne-productions.com/login', 'Log In Now') }}</p>

	<ul>
		<li><strong>Email Address:</strong> {{ $email }}</li>
		<li><strong>Password:</strong> {{ $password }}</li>
	</ul>

	<p>If you believe you've received this message in error, please contact Anodyne Productions immediately (contact@anodyne-productions.com).</p>
@stop
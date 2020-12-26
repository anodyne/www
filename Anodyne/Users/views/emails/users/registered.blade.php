@extends('layouts.email')

@section('content')
	<h1>Welcome to Anodyne Productions!</h1>

	<p>You've successfully registered for your AnodyneID! With your account, you now have access to AnodyneXtras to search for, download, and submit content as well as manage your profile on the Anodyne Productions site. In the future, we'll be launching other services and sites that will use the AnodyneID and you'll be able to use this account for those sites as well.</p>

	<p>{{ HTML::link('https://anodyne-productions.com/login', 'Log In Now') }}</p>

	<p>If you believe you've received this message in error, please contact Anodyne Productions immediately (contact@anodyne-productions.com).</p>
@stop
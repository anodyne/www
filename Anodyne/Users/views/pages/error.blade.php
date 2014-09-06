@extends('layouts.main')

@section('title')
	Error
@stop

@section('content')
	<h1 class="text-{{ $type }}">Error!</h1>

	<p class="alert alert-{{ $type }}">{{ $error }}</p>
@stop
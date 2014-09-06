@extends(theme_view('layout'))

@section('title')
	{{ $post->title }}
@stop

@section('content')
	<h2 class="title">{{ $post->title }}</h2>

	<div class="visible-xs visible-sm">
		<div class="row">
			<div class="col-sm-4">
				<p><a href="{{ route('home') }}" class="btn btn-lg btn-block btn-default">{{ $_icons['back'] }}</a></p>
			</div>
		</div>
	</div>
	<div class="visible-md visible-lg">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="{{ route('home') }}" class="btn btn-default">{{ $_icons['back'] }}</a>
			</div>
		</div>
	</div>

	{{ $post->parsed_content }}
@stop
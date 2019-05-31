@extends('default.layouts.layout')

@section('navbar')
@parent
@endsection

@section('header')
@parent
@endsection

@section('sidebar')
@parent
@endsection

@section('content')
<div class="col-md-9">
	<div class="jumbotron">
		<h2>{{ $title }}</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
@foreach($articles as $article)
		<h2>{{ $article->name }}</h2>
		<p>
			{!! $article->text !!}
		</p>
		<p>
			{{ $article->img }}
		</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
@endforeach
	</div>
</div>
@endsection
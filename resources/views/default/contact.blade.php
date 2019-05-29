@extends('default.layouts.layout')

@section('content')
<div class="col-md-9">
	<pre>
		{{ print_r(Session::all()) }}
	</pre>
	
	<div>
		<h2>{{ $title }}</h2>
	</div>
	<p>
		Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.
	</p>
@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
	<form action="{{ route('contact',['name'=>'hello']) }}" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="site">Site:</label>
			<input type="text" class="form-control" id="site" name="site" value="{{ old('site') }}" placeholder="Site">
		</div>
		<div class="form-group">
			<label for="text">Text:</label>
			<textarea type="text" class="form-control" id="text" name="text">{{ old('text') }}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection
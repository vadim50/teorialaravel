<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="{{ route('home') }}">Home Page</a>
	
	<form action="/pages" method="post">
		@csrf
		<!-- <input type="hidden" name="_method" value="put"> -->
		<p>
			
			<label for="name">Name:</label>
			<input id="name" type="text" name="name">

		</p>
		<p>
			
			<label for="text">Comment:</label>
			<textarea id="text" name="text" ></textarea>

		</p>
		
		<p><button type="submit">Add...</button></p>
	</form>
</body>
</html>
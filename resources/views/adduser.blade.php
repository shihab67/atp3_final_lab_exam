<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<h1>Add User</h1>
	<a href="/admin">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
		{{csrf_field()}}
	<table border="1">
        <tr>
			<td>NAME</td>
			<td><input type="text" name="name" value="{{old('name')}}" required></td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="{{old('username')}}" required></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="{{old('contact')}}" required></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add User"></td>
			<td></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
</body>
</html>



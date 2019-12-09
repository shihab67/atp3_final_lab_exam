<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/admin">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USER NAME</td>
			<td>CONTACT</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->name}}</td>
			<td>{{$s->username}}</td>
			<td>{{$s->contact}}</td>
			<td>{{$s->password}}</td>
			<td>
				<a href="{{route('user.edit', $s->id)}}">Edit</a> | 
				<a href="{{route('user.delete', $s->id)}}">Delete</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>
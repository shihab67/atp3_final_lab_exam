<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<h1>Edit User</h1>
	<a href="/admin">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>NAME</td>
			<td><input type="text" name="username" value="{{$user['name']}}"></td>
		</tr>
        <tr>
			<td>USER NAME</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
        <tr>
			<td>CONTACT</td>
			<td><input type="text" name="username" value="{{$user['contact']}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>
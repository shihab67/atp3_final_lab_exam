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
		<?php echo e(csrf_field()); ?>

	<table border="1">
        <tr>
			<td>NAME</td>
			<td><input type="text" name="name" value="<?php echo e(old('name')); ?>" required></td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="<?php echo e(old('username')); ?>" required></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="<?php echo e(old('contact')); ?>" required></td>
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

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($err); ?> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
</body>
</html>



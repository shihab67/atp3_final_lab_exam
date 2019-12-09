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

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->id); ?></td>
			<td><?php echo e($s->name); ?></td>
			<td><?php echo e($s->username); ?></td>
			<td><?php echo e($s->contact); ?></td>
			<td><?php echo e($s->password); ?></td>
			<td>
				<a href="<?php echo e(route('user.edit', $s->id)); ?>">Edit</a> | 
				<a href="<?php echo e(route('user.delete', $s->id)); ?>">Delete</a> | 
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html>
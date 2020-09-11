<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">

<form method="post"  action="<?php echo site_url('test_controller/insert_data') ?>">
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" id="name"  placeholder="Enter name" value="">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" id="email"  placeholder="Enter email" value="">
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
</form>




<table class="table">
	<thead>
	<tr>
		<th scope="col">Id</th>
		<th scope="col">First</th>
		<th scope="col">Email</th>
	</tr>
	</thead>
	<tbody>

	<?php
	$id = 1;
	foreach ($test as $row){ ?>
	<tr>

		<td><?php echo $id++ ; ?></td>
		<td><?php echo $row->name ; ?></td>
		<td><?php echo $row->email ; ?></td
	</tr>
	<?php } ?>
	</tbody>
</table>
</div>
</body>
</html>

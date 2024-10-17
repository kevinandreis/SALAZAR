<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Sofware Engineering Co. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="birthdate">Birthdate</label> <input type="text" name="birthdate"></p>
		<p><label for="age">Age</label> <input type="text" name="age"></p>
		<p><label for="address">Address</label> <input type="text" name="address"></p>
		<p><label for="position">Position</label> <input type="text" name="position"></p>
		<p><label for="salary">Salary</label> <input type="text" name="salary">
			<input type="submit" name="insertBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Birthdate</th>
	    <th>Age</th>
	    <th>Address</th>
	    <th>Position</th>
	    <th>Salary</th>
	  </tr>

	  <?php $seeAllStudentRecords = seeAllRecords($pdo); ?>
	  <?php foreach ($seeAllRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['birthdate']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['address']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['salary']; ?></td>
	  	<td>
	  		<a href="editse.php?id=<?php echo $row['id'];?>">Edit</a>
	  		<a href="deletese.php?id=<?php echo $row['id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>

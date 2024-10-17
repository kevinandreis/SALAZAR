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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getStudentById = getStudentById($pdo, $_GET['student_id']); ?>
	<form action="core/handleForms.php?student_id=<?php echo $_GET['student_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getStudentById['first_name']; ?></p>
			<p>Last Name: <?php echo $getStudentById['last_name']; ?></p>
			<p>Birthdate: <?php echo $getStudentById['birthdate']; ?></p>
			<p>Age: <?php echo $getStudentById['age']; ?></p>
			<p>Address: <?php echo $getStudentById['address']; ?></p>
			<p>Position: <?php echo $getStudentById['aposition']; ?></p>
			<p>Salary: <?php echo $getStudentById['salary']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>

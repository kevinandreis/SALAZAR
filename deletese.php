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
	<?php $getStudentById = getId($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="Container" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getyId['first_name']; ?></p>
			<p>Last Name: <?php echo $getId['last_name']; ?></p>
			<p>Birthdate: <?php echo $getId['birthdate']; ?></p>
			<p>Age: <?php echo $getId['age']; ?></p>
			<p>Address: <?php echo $getId['address']; ?></p>
			<p>Position: <?php echo $getId['position']; ?></p>
			<p>Salary: <?php echo $getId['salary']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>

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
	<?php $getId = getId($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getId['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getId['last_name']; ?>">
		</p>
		<p>
			<label for="birthdate">Birthdate</label>
			<input type="text" name="birthdate" value="<?php echo $getId['birthdate']; ?>">
		</p>
		<p>
			<label for="age">Age</label>
			<input type="text" name="age" value="<?php echo $getId['age']; ?>">
		</p>
		<p>
			<label for="address">Address</label>
			<input type="text" name="address" value="<?php echo $getId['address']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getId['position']; ?>"></p>
		<p>
			<label for="salary">Salary</label>
			<input type="text" name="salary" value="<?php echo $getId['salary']; ?>">
			<input type="submit" name="editBtn">
		</p>
	</form>
</body>
</html>


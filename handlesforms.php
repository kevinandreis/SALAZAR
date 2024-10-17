<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$birthdate = trim($_POST['birthdate']);
	$age = trim($_POST['age']);
	$address = trim($_POST['address']);
	$position = trim($_POST['position']);
	$salary = trim($_POST['salary]);

	if (!empty($firstName) && !empty($lastName) && !empty($gbirthdate) && !empty($age) && !empty($address)  && !empty($position)  && !empty($salary)) {
			$query = insertIntoRecords($pdo, $firstName, $lastName, $birthdate, $age, $address, $position, $salary);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editBtn'])) {
    $id = $_POST['id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$birthdate = trim($_POST['birthdate']);
	$age = trim($_POST['age']);
	$address = trim($_POST['address']);
	$position = trim($_POST['position']);
	$salary = trim($_POST['salary]);
	
	echo "ID: $id<br>";
    echo "First Name: $firstName<br>";
    echo "Last Name: $lastName<br>";
    echo "Birthdate: $birthdate<br>";
    echo "Age: $age<br>";
    echo "Address: $address<br>";
    echo "Position: $expectedsalary<br>";
	echo "salary: $salary<br>";

	if (!empty($firstName) && !empty($lastName) && !empty($gbirthdate) && !empty($age) && !empty($address)  && !empty($position)  && !empty($salary)) {

		$query = insertIntoRecords($pdo, $firstName, $lastName, $birthdate, $age, $address, $position, $salary);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deletetBtn'])) {

	$query = deleterec($pdo, $_GET['id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>






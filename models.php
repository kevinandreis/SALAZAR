<?php 

require_once 'dbConfig.php';

function insertIntoRecords($pdo,$first_name, $last_name, $birthdate, $age, $address, $position, $salary) {

	$sql = "INSERT INTO employees (first_name,last_name,birthdate,age,address,position,salary) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([($pdo,$first_name, $last_name, $birthdate, $age, $address, $position, $salary)]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllRecords($pdo) {
	$sql = "SELECT * FROM employees";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getID($pdo, $id) {
	$sql = "SELECT * FROM employees WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([id])) {
		return $stmt->fetch();
	}
}

function updateRecord($pdo, $first_name, $last_name, $birthdate, $age, $address, $position, $salary) {

	$sql = "UPDATE employees 
				SET first_name = ?, 
					last_name = ?, 
					birthdate = ?, 
					age = ?, 
					address= ?, 
					position = ?, 
					salary = ? 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $birthdate, $age, $address, $position, $salary]);

	if ($executeQuery) {
		return true;
	}
}



function deleteRecord($pdo, $id) {

	$sql = "DELETE FROM employees WHERE id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}

}




?>

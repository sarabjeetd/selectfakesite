<?php
include 'connection.php';
$model = $_POST['model'];
$make = $_POST['make'];
$query = "INSERT INTO car_models (year, make, model)
VALUES ";
$rows = [];
foreach($_POST['years'] as $year ){ 
	$rows[] = "('$year','$make','$model')";
}
$query .= implode(",",$rows);
if(mysqli_query($conn,$query)){
	echo json_encode(['type' => 'success', 'response' => 'Inserted successfully']);
	exit();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	exit();
}
?>
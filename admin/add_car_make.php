<?php
include 'connection.php';
$make = $_POST['make'];
$query = "INSERT INTO car_makes (year, make)
VALUES ";
$rows = [];
foreach($_POST['years'] as $year ){ 
	$rows[] = "('$year','$make')";
}
$query .= implode(",",$rows);
if(mysqli_query($conn,$query)){
	echo json_encode(['type' => 'success', 'response' => 'Inserted successfully']);
	exit();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
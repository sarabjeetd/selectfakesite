<?php
include 'connection.php';
$years = implode(",",$_POST['years']);
$sql = 'SELECT DISTINCT make FROM car_makes WHERE year IN ('.$years.')';
$result = $conn->query($sql);
$rows = [];
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$rows[] = $row['make'];
	}
	echo json_encode(['type' => 'success', 'response' => $rows]);
	exit();
} else {
	echo json_encode(['type' => 'error', 'response' => $rows]);
	exit();
}
?>
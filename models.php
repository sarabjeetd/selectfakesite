<?php
include 'admin/connection.php';
$year = $_POST['quote_year'];
$make = $_POST['quote_make'];
$sql = "SELECT DISTINCT * FROM car_models WHERE year = '$year' AND make = '$make' ";
$result = $conn->query($sql);
$rows = [];
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $rows[] = $row['model'];
  }
  echo json_encode(['type' => 'success', 'response' => $rows]);
  exit();
} else {
  echo json_encode(['type' => 'error', 'response' => $rows]);
  exit();
}

?>


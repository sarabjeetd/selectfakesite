<?php

$conn = new mysqli("localhost","natio904_autopro","!K8G@[}+SiTf","natio904_selectautoprotect");

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

?>
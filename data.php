<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root"," ","grh");

$sqlQuery = "SELECT id,username,nbtotalabsence FROM absences ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
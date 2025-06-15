<?php
include 'databasereal.php';
mysqli_set_charset($conn, "utf8mb4");

$sql = 'SELECT * FROM komenty ORDER BY datum DESC';
$result = mysqli_query($conn,$sql);

$comments = array();
while($row = mysqli_fetch_assoc($result)){
	$comments[] = $row;
}
echo json_encode($comments);
mysqli_close($conn);
?>
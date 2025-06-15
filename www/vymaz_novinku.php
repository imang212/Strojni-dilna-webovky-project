<?php
include 'databasereal.php';
mysqli_set_charset($conn, "utf8mb4");
$new_id = $_POST['novinka_id'];


$sql = "DELETE FROM komenty WHERE id_kom = $new_id";
if ($conn->query($sql) === TRUE) {
  $response = 'Novinka byla smazána';

} else {
  $response = 'Chyba při mazání.: ' . $conn->error;
}

$conn->close();

?>
<?php
session_start();
include_once 'databasereal.php';

$date = date_create('now')->format('Y-m-d H:i:s');


$name = "";
if(isset($_GET['name'])){
	$name = $_GET['name'];
}

$text_ = "";
if(isset($_GET['text'])){
	$text_ = $_GET['text'];
}
$actual_nick = mysqli_real_escape_string($conn, $_SESSION["nick"]); 

$user_id = "SELECT id FROM ucty where login='$actual_nick' limit 1";
$result1 = mysqli_query($conn,$user_id);
$row_for_id = mysqli_fetch_array($result1);
$id_of_user = $row_for_id['id'];

$sql_comms = "SELECT * FROM komenty";

//$result=mysqli_query($conn,$sql_comms);

if($conn -> connect_error) {
	header("Location: ../Strojni%20dilna%20webovky/login.php?login=connect");
  	exit();
}

else if(!empty($_GET['name']) && !empty($_GET['text'])){
		$sql = "INSERT INTO komenty (datum, nazev_kom, id_uziv, text) VALUES ('$date','$name','$id_of_user','$text_');";
  		mysqli_query($conn, $sql);

		header("Location: ../Strojni%20dilna%20webovky/novinky.php");
		exit();
	}
	
?>
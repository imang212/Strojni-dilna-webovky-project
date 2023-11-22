<?php
session_start();
include 'databasereal.php';
$nick = mysqli_real_escape_string($conn, $_SESSION['nick']); 



function change_password($actual_nick){
	include 'databasereal.php';
	$nove_heslo = mysqli_real_escape_string($conn, $_POST['pass1']);
	$nove_heslo_hash = password_hash($nove_heslo, PASSWORD_DEFAULT);
	//echo $nove_heslo;
	$sql = "UPDATE ucty SET pass = '$nove_heslo_hash' WHERE login='$actual_nick';";
	$result = mysqli_query($conn,$sql);
	mysqli_close($conn);
	
}


if (isset($_POST["passverify"])){
	change_password($nick);
	if(isset($_POST['passverify'])){
		$POST['passverify'] = 'false';
	}
}
?>
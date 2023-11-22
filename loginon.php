<?php
session_start();
include_once 'databasereal.php';


$emailuid = mysqli_real_escape_string($conn, $_POST['emailuid']);
	
$pass = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "SELECT * FROM ucty where login='$emailuid' OR email='$emailuid' limit 1";

$result=mysqli_query($conn,$sql);



if($conn -> connect_error) {
	header("Location: ../Strojni%20dilna%20webovky/login.php?login=connect");
  	exit();
}
elseif(empty($emailuid)){
	header("Location: ../Strojni%20dilna%20webovky/login.php?login=emptyemailuid");
	exit();
}
elseif(empty($pass)){
	header("Location: ../Strojni%20dilna%20webovky/login.php?login=emptypass");
	exit();
}
elseif(empty($emailuid) || empty($pass)){
  	header("Location: ../Strojni%20dilna%20webovky/login.phploginn=empty");
  	exit();
}

elseif(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	$password_hash = $row["pass"];
	if(password_verify($pass,$password_hash)){
		setcookie("nick",$row["login"],time()+(86400),"/");
		setcookie("email",$row["email"],time()+(86400),"/");
		$_SESSION['success'] = true;
		$_SESSION['nick'] = $row["login"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['ucet'] = $row["typ_uctu"];

		header("Location: ../Strojni%20dilna%20webovky/main.php");
		exit();
	}
	else{
		header("Location: ../Strojni%20dilna%20webovky/login.php?login=incorrectpass");
		exit();
	}
}
else{
	header("Location: ../Strojni%20dilna%20webovky/login.php?login=incorrect");
	$_SESSION['logged'] = false;
	exit();
}
 
?>
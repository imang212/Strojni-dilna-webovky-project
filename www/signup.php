<?php
include_once 'databasereal.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$lastname = mysqli_real_escape_string($conn, $_POST['surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$pass1 = mysqli_real_escape_string($conn, $_POST['password_1']);
$pass2 = mysqli_real_escape_string($conn, $_POST['password_2']);


$specialpismena = preg_match('@[^\w]@', $username);

$phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
$gender = mysqli_real_escape_string($conn, $_POST['pohlavi']);

$state = mysqli_real_escape_string($conn, $_POST['zeme']);
$date = mysqli_real_escape_string($conn, $_POST['datum_narozeni']);
$checkbox = mysqli_real_escape_string($conn, $_POST['podminky']);

$account_find = "SELECT * FROM ucty where login='$username' limit 1";
$result_name=mysqli_query($conn,$account_find);

$account_find_email = "SELECT * FROM ucty where email='$email' limit 1";
$result_email=mysqli_query($conn,$account_find_email);


if ($conn -> connect_error) {
	header("Location: ../register.php?register=connect");
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
elseif($pass1 != $pass2){
  header("Location: ../register.php?register=passdifferent");
  exit();
}
elseif(strlen($_POST["password_1"]) <= '6' || strlen($_POST["password_1"]) >= '20') {
  header("Location: ../register.php?register=passlength");
  exit();
}
elseif(isset($checkbox) != 'ano'){
  header("Location: ../register.php?register=podminky");
  exit();
}
elseif(empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["username"]) || empty($_POST["password_1"])
|| empty($_POST["password_2"]) || empty($_POST["phonenumber"]) || empty($_POST["datum_narozeni"])) {
  header("Location: ../register.php?register=empty");
  exit();
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../register.php?register=emailincorrect");
  exit();
}
elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  header("Location: ../register.php?register=nameincorrect");
  exit();
}
elseif (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
  header("Location: ../register.php?register=surnameincorrect");
  exit();
}
/*elseif(!preg_match('/^[0-9]{10}+$/', $phone)){
  header("Location: ../Strojni%20dilna%20webovky/register.php?register=numberincorrect");
  exit();
}*/
elseif($specialpismena) {
  header("Location: ../register.php?register=usernameincorrect");
  exit();
}
else if(mysqli_num_rows($result_name) == 1){
  header("Location: ../register.php?register=usernameexist");
  exit();
}

else if(mysqli_num_rows($result_email) == 1){
  header("Location: ../register.php?register=emailexist");
  exit();
}
elseif (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,20}$/', $pass1)) {
  header("Location: ../register.php?register=passincorrect");
  exit();
}
elseif(empty($checkbox)){
  header("Location: ../register.php?register=podminky");
  exit();
}
else{
  $hash = password_hash($pass1, PASSWORD_DEFAULT);
  $sql = "INSERT INTO ucty (jmeno, prijmeni, login, pass, email,telefon, zeme, pohlavi, dat_nar, typ_uctu) VALUES ('$name','$lastname','$username','$hash','$email','$phone','$state','$gender','$date','OBYCEJNY');";
  mysqli_query($conn, $sql);
  header("Location: ../register.php?register=success");
  sleep(3);
  header("Location: ../login.php?login=registered");
  exit();
}
?>

<?php
include_once 'databasereal.php';
$datum = date_create('now')->format('Y-m-d H:i:s');
$name= $_POST['name'];

$email = $_POST['email'];

$vr = "";
if(isset($_POST['vr'])){
	$vr = $_POST['vr'].', ';
}
$sv = "";
if(isset($_POST['sv'])){
	$sv = $_POST['sv'].', ';
}
$ob = "";
if(isset($_POST['ob'])){
	$ob = $_POST['ob'].', ';
}
$br = "";
if(isset($_POST['br'])){
	$br = $_POST['br'].', ';
}
$ot = "";
if(isset($_POST['ot'])){
	$ot = $_POST['ot'].', ';
}
$druhy = $vr.''.$sv.''.$ob.''.$br.''.$ot;

$vaha = $_POST['vaha'];
$x = $_POST['x'];

$y = $_POST['y'];

$z = $_POST['z'];

$material = $_POST['material'];

$popis = $_POST['popis'];

$ukoly = $_POST['ukoly'];


$komu = "imanggamer@gmail.com";
$predmet = "Zakázka";

$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

session_start();
if(isset($_GET['la'])){
    $_SESSION['la'] = $_GET['la'];
}

if(isset($_SESSION['la'])){
switch($_SESSION['la']){
    case "cze":
        require_once('lang/cze.php');
      break;
    case "eng":
        require_once('lang/eng.php');
      break;
    case "ger":
        require_once('lang/ger.php');
      break;
    case "fin":
        require_once('lang/fin.php');
      break;
  default:
      require_once('lang/cze.php');
      break;
}
}
else{
	require_once('lang/cze.php');
}

$body = "<html>
		<head>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
		<style>
			.header1{
				height: 90px;
				padding: 0;
				display: flex;
				justify-content: center;
				align-content: center;
				text-align: center;
				justify-self: center;
				background-color: rgb(252,202,20);			
				width: 100%;
			}
			.ikona_stranky{
				display: flex;
			}
			.ikona_stranky img{
				height: 80px;
				align-self: center;
				margin-left: 1.5px;
			}
			p{
				margin-left:10px;
			}
			h1{
				text-align: center;
			}
			.footer1{
				text-align: center;
				font-weight: bold;
				margin-top: 100px;
				background-color: #D3D3D3;
			}
			
		</style>
		</head>
		<body style='background-color: rgba(255, 255, 0,0.7);height:100%;'>
        	<header class='header1'><img  height='90px' src='http://www.strojnidilnaevangelik.cz/logo/soustruh_logo3.png'></header>
			<h1>Žádost zakázky</h1>
			<p><strong>Název zakázky: </strong>" .$name."</p>
			<p><strong>Váha: </strong>".$vaha."</p>
			<p><strong>Rozměry: </strong>".$x.'x'.$y.'x'.$z."</p>
			<p><strong>Materiál: </strong>".$material."</p>
			<p><strong>Popis: </strong>".$popis."</p>
			<p><strong>Co udělat.: </strong>".$ukoly."</p>
			<footer class='footer1'>
				<div class='kontakt'>".$lang['footer_address']."</div>
			</footer>
			<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
		</body>
	</html>";

/*$body .= "<p><strong>Druhy: </strong>".$druhy."</p>";*/


if(isset($_SESSION["success"])){
	$actual_nick = $_SESSION["nick"]; 
	$user_id = "SELECT CAST(id AS UNSIGNED) AS id FROM ucty where login='$actual_nick' limit 1";
	$result1 = mysqli_query($conn,$user_id);
	if ($result1) {
		$row_for_id = mysqli_fetch_array($result1);
		$id_of_user = $row_for_id['id'];
		
	} 
	else {
		echo "Error: could not retrieve user ID";
		exit();
	}
}
else{
	$id_of_user = 1;
}


if($conn -> connect_error) {
	header("Location: ../formular.php?formular=connect");
}
else{
	$sql = "INSERT INTO zakazky (datum, nazev, email, druhy, vaha, sirka, vyska, hloubka, material, popis, cinnost, id_uziv) VALUES ('$datum','$name','$email','$druhy','$vaha','$x','$y','$z','$material','$popis','$ukoly','$id_of_user');";
	mysqli_query($conn, $sql);
}

$result = mail($komu,$predmet,$body,$headers);
if(!$result){
	header("Location: ../formular.php?formular=senderror");
}
else{
	header("Location: ../formular.php?formular=success");
}





?>
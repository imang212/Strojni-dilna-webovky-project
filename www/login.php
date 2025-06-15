<?php
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
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $lang['index_title'];?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<link rel="stylesheet" href="web_style.css">
		<link rel="icon" type="image/x-icon" href="logo/favicon.ico">
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
			.error {
                color: red;
                position: absolute;
                top: 250px;
                display: flex;
            	flex-direction: column;
                width: 100%;
                margin:0;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 22px;
                text-align: center;
                font-weight: bold;

            }

          	.loginstatus{
          		color: green;
                position: absolute;
                top: 250px;
                display: flex;
            	flex-direction: column;
                width: 100%;
                margin:0;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 22px;
                text-align: center;
                font-weight: bold;
          	}

            h2 {
  				font-size: 26px;
				color: #41FF00;
  				text-align: center;
  				font-family: Arial, Helvetica, sans-serif;
   				margin-bottom: 20px;
   				margin-top: 2%;


  			}



  			div.register_container {
    			display: flex;
    			flex-direction: row;
  				align-items: center;
  				justify-content: center;
  				text-align: left;
 				 margin: 20px;
 				 margin-left: 30px;
  				margin-right: 30px;
  				margin-top: 150px;
  				margin-bottom: 260px;



			}

			form {
  				padding: 10px;
  				text-align: center;
  				width: 450px;
  				height: 325px;
  				border: 3px solid grey;
  				background-color: yellow;
          		border-radius: 10px;

			}

			input[type=text],[type=password] {
				width: 300px;
  				height: 15%;
  				padding: 7px;
 				margin: 5px;
  				border: 1px solid black;
  				margin-left: 60px;
  				margin-right: 60px;
  				font-size: 20px;
  				padding-left: 2%;
  				font-family: Verdana;
  				border: 2px solid #555;
			}
			input[type=text],[type=password]:focus {
  				border: 2px solid #555;
			}



			b {
  				font-size: 17px;
  				font-family: Arial, Helvetica, sans-serif;
  				margin-bottom: 5%;
			}

			button {
  				margin-top: 20px;
  				margin-bottom: 17px;
  				color: white;
  				background-color: #0066ff;
  				padding-top: 5px;
  				width: 200px;
  				height: 50px;
  				font-size: 18px;
  				font-family: Arial, Helvetica, sans-serif;
  				cursor: pointer;
  				border-radius:2px;
                border: none;
                font-weight: bold;
			}
			button:hover{
            	background: rgb(96,9,240);
 				background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
            }
			p {
  				color: red;
  				margin: 0px;
  				font-size: 18px;
			}
			div.prihlasit {
				text-align: left;
  				margin-left: 10px;
  			}
  			.zaregistrovat{
  				text-align: left;
  				padding-left: 2%;

  			}
  			.zaregistrovat a {
  				color: blue;
  				font-family: Helvetica, Arial, sans-serif;

  			}

  			@media only screen and (max-width: 1000px){
  				form{
  					width: 400px;
  				}
  				input[type=text],[type=password]{
  					margin-left: 40px;

  				}
  				h2{
  					font-size: 1.7rem;
  				}
  			}
  			 @media only screen and (max-width: 700px){
  			 	main{
  			 		width: 100%;
  			 	}
            	div.register_container{
            		width: 100%;
            		margin-left: 0;
            		margin-right: 0;

            	}
            	form{
            		width:100%;
            		padding-left: 5px;
            		padding-right: 5px;
            		margin-left: 0;
            		margin-right: 0;
            		border:none;

            	}

            	.tlacitka_footer_container a {
					margin: 0;
					padding: 0;
					padding-top: 8px;
					width: 100%;
				}
				.tlacitka_footer_container{
					display: flex;
					flex-direction: column;
					justify-content: center;
					margin-top: 50px;
					width: 100%;
				}
				input[type=text],[type=password]{
					width: 90%;
					margin-left: 10px;
				}
            	footer{
    				width: 100%;
  				}
  				button{
  					width:50%;
  				}
  				.kontakt{
  				  width: 100%;
  				  padding: 0px;
  				  margin-top: 145px;
  				  font-size: 0.8rem;
  				}
            }
		</style>
	</head>

	<body>
		<div class="container">
			<header class="header2">
				<div class="jazyk_bar">
					<input class="flag_button" type="image" src="flags/cz.svg" onclick="location.href='main.php?la=cze';"  width="35%" height="35%">
          			<input class="flag_button" type="image" src="flags/gb.svg" onclick="location.href='main.php?la=eng';"  width="35%" height="35%">
				</div>
			</header>
			<header class="header">
				<div class="ikona_stranky">
					<img  height="90px" src="logo/soustruh_logo3.png">
				</div>
				<div class="tlacitka" id='tlacitka_id'>
            		<a class='' href="main.php" id="t1"><?php echo $lang['link_1'];?></a>
            		<a href="formular.php"><?php echo $lang['link_2'];?></a>
            		<a href="cenik.php"><?php echo $lang['link_3'];?></a>
            		<a href="novinky.php" id="t2"><?php echo $lang['link_4'];?></a>
            		<a href="stroje.php" id="t3"><?php echo $lang['link_5'];?></a>
            		<a href="kontakty.php" id="t4"><?php echo $lang['link_6'];?></a>
          		</div>
    			<a href="javascript:void(0);" class="icon" onclick="show_responsive_menu()"><ion-icon id='io_icon' name="menu-sharp" style='font-size:50px;'></ion-icon></a>
    			<script>
    				function show_responsive_menu(){
						var tlacitka = document.getElementById('tlacitka_id');
						var ioicon = document.getElementById('io_icon')
						if (tlacitka.className === "tlacitka") {
							tlacitka.className += " is-responsive";
							ioicon.setAttribute("name","close");

						}
						else{
							tlacitka.className = "tlacitka";
							ioicon.setAttribute("name","menu-sharp");
						}
					}
				</script>
				<div class="prihlasovaci_tabulka">

				</div>
			</header>

			<article class="main">
				<div class="register_container">
				<form action="loginon.php" method="POST">
					<h2><?php echo $lang['nadpis_prihlaseni'];?></h2>
					<input type="text", name="emailuid", placeholder="<?php echo $lang['emailuid_prihlaseni'];?>">
					<br>
					<input type="password", name="pwd", placeholder="<?php echo $lang['heslo_prihlaseni'];?>">
					<br>
					<button type="submit" name="submit"><?php echo $lang['prihlasit_prihlaseni'];?></button>
					<br>
					<div class="zaregistrovat"><p><a href="register.php"><?php echo $lang['zaregistrovatse_prihlaseni'];?></a></p></div>
				</form>
				</div>
			</article>
			<footer class="footer">
				<div class="tlacitka_footer">
					<div class="tlacitka_footer_container">
						<a href="onas.php"><?php echo $lang['footer_link_1'];?></a>
						<a href="kontakty.php"><?php echo $lang['footer_link_2'];?></a>
						<a href="podminky.php"><?php echo $lang['footer_link_3'];?></a>
						<a href="register.php"><?php echo $lang['footer_link_5'];?></a>
						<a href="login.php"><?php echo $lang['footer_link_6'];?></a>
					</div>
				</div>
				<div class="kontakt">
					<?php echo $lang['footer_address'];?>
				</div>
			</footer>
		</div>
	</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php

$fullUrl = $_SERVER['REQUEST_URI'];

if(strpos($fullUrl, "login=incorrect") !== false) {
	echo "<p class='error'>".$lang['error1_prihlaseni']."</p>";
}
elseif(strpos($fullUrl, "login=incorrectpass") !== false) {
	echo "<p class='error'>".$lang['error2_prihlaseni']."</p>";
}
elseif(strpos($fullUrl, "login=empty") !== false) {
	echo "<p class='error'>".$lang['error3_prihlaseni']."</p>";
}
elseif(strpos($fullUrl, "login=emptyemailuid") !== false) {
	echo "<p class='error'>".$lang['error4_prihlaseni']."</p>";
}
elseif(strpos($fullUrl, "login=emptypass") !== false) {
	echo "<p class='error'>".$lang['error5_prihlaseni']."</p>";
}
elseif(strpos($fullUrl, "login=registered") !== false) {
	sleep(3);
	echo "<p class='loginstatus'>".$lang['success_prihlaseni']."</p>";
}
elseif(strpos($fullUrl, "login=connect") !== false) {
	echo "<p class='error'>".$lang['error6_prihlaseni']."</p>";
}

?>
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
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<style type="text/css">
			.cenik_container{
				width: 100%;
				display: flex;
                flex-direction: column;
                margin-top: 50px;
                font-family: Arial, Helvetica, sans-serif;
                align-items: center;
                justify-content: center;
                margin-bottom: 150px;
			}
			.cenik_container2{
				display: flex;
                flex-direction: row;
                width:65%;
                align-items: center;
                justify-content: center;
                padding: 0px;
               
                flex-wrap: wrap;
                
			}

			.materialy1{
				display: flex;
				flex-direction: column;
				align-self: flex-start;
				width: 550px;
				margin: 0 auto;
				padding: 5px;
				
			}
			.materialy1 h3{
				font-weight: bold;
				font-size: 20px;
				border-bottom: 2px solid black;
				width: 550px;
				padding-bottom: 5px;
			}
			.materialy2{
				display: flex;
				flex-direction: column;
				align-self: flex-start;
				width: 550px;
				margin: 0 auto;
				padding: 5px;
				
			}
			.materialy2 h3{
				font-weight: bold;
				font-size: 20px;
				border-bottom: 2px solid black;
				width: 550px;
				padding-bottom: 5px;
			}
			.nadpis_ceniku{
				margin: 10px;
				text-align: left;
				font-size: 32px;
				font-family: Arial, Helvetica, sans-serif;
				font-weight: bold;
			}
			.text_ceniku{
				text-align: left;
				font-weight: normal;
				margin-left:10px;
				margin-bottom: 15px;
				font-size: 17px;
			}
			@media only screen and (max-width: 1000px){
				.materialy1, .materialy2, .materialy1 h3, .materialy2 h3, .cenik_container2{
					width: 95%;
				}
				.cenik_container{
					margin-bottom: 50px;
				}
				.materialy1 h3, .materialy2 h3{
					font-size: 1rem;
				}

				.nadpis_ceniku{
					font-size: 1.2rem;
				}
			}
			 @media only screen and (max-width: 700px){
            	
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
            	footer{
    				width: 100%;
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
				<div class="loginstatus">
				</div>
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
					<?php
					if(!isset($_SESSION['success'])){
							echo '
								<a href="register.php">'.$lang['footer_link_5'].'</a>
								<a href="login.php">'.$lang['footer_link_6'].'</a>
							';
						}

					?>
				</div>
			</header>


			<article class="main">
				<div class="cenik_container">
					<h2 class="nadpis_ceniku"><?php echo $lang['nadpis_ceniku'];?></h2>
					<div class="cenik_container2">
						<div class="materialy1">
							<h3 class="text_ceniku"><?php echo $lang['text1_ceniku'];?></h3>
							<p class="text_ceniku"><?php echo $lang['text2_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text3_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text4_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text5_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text6_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text7_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text8_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text9_ceniku'];?></p>
						</div>
						<div class="materialy2">
							<h3 class="text_ceniku"><?php echo $lang['text_2_1_ceniku'];?></h3>
							<p class="text_ceniku"><?php echo $lang['text_2_2_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text_2_3_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text_2_4_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text_2_5_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text_2_6_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text_2_7_ceniku'];?></p>
							<p class="text_ceniku"><?php echo $lang['text_2_8_ceniku'];?></p>
						</div>
					</div>
				</div>	
			</article>
			<footer class="footer">
				<div class="tlacitka_footer">
					<div class="tlacitka_footer_container">
						<a href="onas.php"><?php echo $lang['footer_link_1'];?></a>
						<a href="kontakty.php"><?php echo $lang['footer_link_2'];?></a>
						<a href="podminky.php"><?php echo $lang['footer_link_3'];?></a>
						<?php
						if(!isset($_SESSION['success'])){
							echo '
								<a href="register.php">'.$lang['footer_link_5'].'</a>
								<a href="login.php">'.$lang['footer_link_6'].'</a>
							';
						}
						?>
					</div>
				</div>
				<div class="kontakt">
					<?php echo $lang['footer_address'];?>
				</div>
			</footer>

			
		</div>
	</body>
<script>
	var page_links = document.querySelectorAll('.tlacitka a');
	for (var i = 0; i < page_links.length; i++) {
   		if (page_links[i].href == document.URL) {
    	    page_links[i].className = 'active';
    	}
	}
</script>
<?php
if (isset($_SESSION['success'])){
	echo "<div class='login_bar'><p class='username'>".$lang['login_status']. $_SESSION['nick']."<a class='logout_btn' href='logout.php'>".$lang['login_odhlasit']."</a><a id='settings_button' href='ucet.php'><ion-icon name='settings-sharp' style='font-size:20px;'></ion-icon></a></p></div>
	
	";
}
?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
			.main{
				text-align: left;
			}
			.kontakty_bar{
				width: 100%;
				display: flex;
                flex-direction: column;
                margin-top: 40px;
                font-family: Helvetica, Arial, sans-serif;
                align-items: center;

			}
			.kontakty_bar2{
				width: 1250px;
				display: flex;
				flex-direction: column;
				margin-left: 14px;
			}

			.nadpis_kontaktu{
				margin: 10px;
				font-size: 28px;
				border-bottom: 3px solid grey;
				width: 1250px;
				padding-bottom: 5px;
				margin-bottom: 12px;
			}

			.adresa_ram{
				margin: 10px;
				margin-bottom: 25px;
			}

			.adresa_ram h3{
				margin-bottom: 5px;
				margin-left: 5px;
				font-size: 18px;
				font-weight: bold;
			}

			.adresa{
				margin-left: 20px;
				font-size: 17px;
				font-weight: 500;
			}
			.info{
				margin-top: 3px;
				margin-bottom: 3px;
			}
			.info ul{
				list-style-type: none;
				margin: 0;
 				padding: 0;
 				font-size:17px;
			}
			.info ul li{
				padding-bottom: 10px;
				margin-left:15px;

			}
			.mapa{
				margin: 10px;
			}
			ion-icon{
				font-size: 20px;
			}
			@media only screen and (max-width: 1400px){
				.kontakty_bar2{
					width: 95%;
				}
				.nadpis_kontaktu{
					width: 95%;
				}
			}
			@media only screen and (max-width: 930px){
				iframe{
					width: 100%;
					height: auto*2;
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
				<div class="kontakty_bar">
				  <div class="kontakty_bar2">
					<h2 class="nadpis_kontaktu"><?php echo $lang['nadpis_kontaktu'];?></h2>
					<div class="info">
					  <ul>
						<li><span class="icon1"><ion-icon name="mail"></ion-icon></span>
						<span class="email">evangelik.strojni.dilna@seznam.cz</span></li>
						<li><span class="icon2"><ion-icon name="call"></ion-icon></span>
						<span class="telefon">+420 728 946 446</span></li>
						<li><span class="icon3"><ion-icon name="time"></ion-icon></span>
						<span class="oteviraci_doba"><?php echo $lang['oteviracidoba_kontaktu'];?></span></li>
					  </ul>
					</div>
					<div class="adresa_ram">
						<h3 class="adresa_nadpis"><?php echo $lang['nadpis_adresy_kontaktu'];?></h3>
						<div class="adresa">
							<p><?php echo $lang['adresa_kontaktu'];?></p>
						</div>
					</div>
					<div class="mapa">
						<iframe frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2538.7066859762613!2d14.030873015933164!3d50.483803992841786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470a2a91cf3c1c29%3A0xdfb615ce8e74a64b!2zQmVuZcWhb3ZhIDE5NywgNDExIDEyIMSMw63FvmtvdmljZQ!5e0!3m2!1scs!2scz!4v1673459846382!5m2!1scs!2scz" width="900" height="450" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
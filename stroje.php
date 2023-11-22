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
		<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
		<link rel='stylesheet' href="zoomjs-master/css/zoom.css">
		<script src='zoomjs-master/js/zoom.js'></script>

		<style type="text/css">
			.nadpis_stroju {
				padding: 0px;
				font-size: 32px;
				margin-top: 20px;
				font-family: "Arial", Helvetica, sans-serif;
				margin: 10px;
				text-align: left;
				font-weight: bold;
				border-bottom: 3px solid grey;
			}

			.main{
				text-align: left;
				width: 100%;
				margin-top: 20px; 
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
			.stroje_container{
				width: 1250px;
			}

			.soustruh{
				margin: 10px;
				padding: 5px;
				font-family: "Arial", Helvetica, sans-serif;
				margin-top: 10px;


			}
			.soustruh h2{
				margin-bottom: 10px;
				border-bottom: 2px solid black;
			}

			.podnazev{
				margin-top: 5px; 
			}

			.popis{
				margin-top: 5px;
				font-weight: normal;
			}

			.obrazky_switcher{
				width:auto;
				height: auto;
				display: inline-block;
				
			}
			.obrazky_switcher li{
				display: inline-block;
			}

			.obrazky_switcher img{
				height:230px;
				max-width: 100%;
				max-height: 100%;
				display: inline-block;
				margin: 0;
				
			}

			

			.bg {
  				position: fixed;
  				left: 0;
  				top: 0;
 			 	right: 0;
  				background-color: #ffffff;
  				opacity: 0;
  				display: block;
  				transition: opacity .3s;
			}

			.zoomable.zoomed-in {
			  cursor: zoom-out;
			}

			.zoomable.zoomed-out {
			  cursor: zoom-in;
			}
			@media only screen and (max-width: 1400px){
				.stroje_container{
					width: 95%;
				}
				 h2{
  				  font-size: 1.2rem;
  				}
  
  				#nadpis_stroju {
  				  font-size: 1.2rem;
  				}
  
  				p{
  				  font-size: 0.8rem;
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
				
				
			</aside>
			

			<article class="main">
			<div class='stroje_container'>
				<h2 class="nadpis_stroju"><?php echo $lang['nadpis_stroju'];?></h2>
				<div class="soustruh">
					<h2 class="nazev_stroje">Poreba TR70</h2>
					<h3 class="podnazev"></h3>
					<p class="popis"> 
					</p>
					<ul class="obrazky_switcher">
						<li><img src="images/poreba1.jpg" alt='Image 1' id='zoom-image' class="zoomable" data-action="zoom"></li>
						<li><img src="images/2.jpg" alt='Image 2' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>

				<div class="soustruh">
					<h2 class="nazev_stroje">TOS RD 18</h2>
					<h3 class="podnazev"></h3>
					<p class="popis"></p>
					<ul class="obrazky_switcher">
						<li><img src="images/4.jpg" alt='Image 3' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>

				<div class="soustruh">
					<h2 class="nazev_stroje">TOS S 28</h2>
					<h3 class="podnazev"></h3>
					<p class="popis"></p>
					<ul class="obrazky_switcher">
						<li><img src="images/S28.jpg" alt='Image 4' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>

				<div class="soustruh">
					<h2 class="nazev_stroje">Obrážečka Stringon-nástrojařská</h2>
					<h3 class="podnazev"></h3>
					<p class="popis">
					
					</p>
					<ul class="obrazky_switcher">
						<li><img src="images/stringon1.jpg" alt='Image 5' id='zoom-image' class="zoomable" data-action="zoom"></li>
						<li><img src="images/stringon2.jpg" alt='Image 6' id='zoom-image' class="zoomable" data-action="zoom"></li>
						<li><img src="images/8.jpg" alt='Image 7' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>

				<div class="soustruh">
					<h2 class="nazev_stroje">Vrtačka V40</h2>
					<h3 class="podnazev"></h3>
					<p class="popis"></p>
					<ul class="obrazky_switcher">
						<li><img src="images/img.jpg" alt='Image 8' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>

				<div class="soustruh">
					<h2 class="nazev_stroje">TOS Frézka Velká (ISO40)</h2>
					<h3 class="podnazev"></h3>
					<p class="popis"></p>
					<ul class="obrazky_switcher">
						<li><img src="images/freza1.jpg" alt='Image 9' id='zoom-image' class="zoomable" data-action="zoom"></li>
						<li><img src="images/freza2.jpg" alt='Image 10' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>

				<div class="soustruh">
					<h2 class="nazev_stroje">Vrtačka TOS VS32A</h2>
					<h3 class="podnazev"></h3>
					<p class="popis"></p>
					<ul class="obrazky_switcher">
						<li><img src="images/1.jpg" alt='Image 11' id='zoom-image' class="zoomable" data-action="zoom"></li>
					</ul>
				</div>
			</div>
			</article>
			<div class="image_background" style='position:fixed;background-color: rgba(0, 0, 0, 0.5);width: 100%; height: 100%;display: none;'></div>
			<script>
				
				/*$(document).ready(function(){
					var $overlay = $('.zoom-overlay');
					$('.zoomable').click(function(){
						var imgSrc = $(this).attr('src');
						$overlay.html('<img src="'+imgSrc+'">').fadeIn();
					});
					$overlay.click(function(){
						$(this).fadeOut();
					});
				});
				/*var img = document.querySelector('.obrazky_swither img');
				var zobrazeni_okno = document.querySelector('.zobrazeni_obrazku');
				var zobrazeni_obrazek = document.querySelector('.zobrazeni_obrazku img');
				var br_obrazku = document.querySelector('.bg_obrazku');
				
				var toggleState = function(elem, one, two) {
			  		var elem = document.querySelector(elem);
  					elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
				};

				document.getElementsByClassName(".obrazky_switcher img").onclick = function(){
					toggleState('.obrazky_switcher img', 'zoom-in', 'zoom-out');
  					e.preventDefault();
				}

				img.onclick = function(e) {
  					toggleState('.obrazky_switcher img', 'zoom-in', 'zoom-out');
  					e.preventDefault();
				};*/
			</script>
			
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

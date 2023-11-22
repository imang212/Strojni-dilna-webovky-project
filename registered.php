
<!DOCTYPE html>
<html>
	<head>
		<title>Strojní dílna Evangelik</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<link rel="stylesheet" href="web_style.css">
		<style type="text/css">
			.zaregistrovany_text{
				margin-top: 60px;
				font-family: 'Montserrat', Arial, Helvetica, sans-serif;
				font-weight: 25px;
				color: green;
				margin-bottom: 120px;
			}
		</style>
		<script>
			$('.menu-toggle').click(function(){
   				$(".tlacitka").toggleClass("mobile-nav");
   				$(this).toggleClass("is-active");
			});
		</script>
	</head>

	<body>
		<div class="container">
			<header class="header2">
				<div class="loginstatus">
				</div>
				<div class="jazyk_bar">
					<input class="flag_button" type="image" src="flags/cz.svg"  width="12%" height="12%">
					<input class="flag_button" type="image" src="flags/gb.svg"  width="12%" height="12%">
					<input class="flag_button" type="image" src="flags/de.svg"  width="12%" height="12%">
					<input class="flag_button" type="image" src="flags/fi.svg"  width="12%" height="12%">
				</div>
			</header>
			<header class="header">
				<nav class="navbar">
					<div class="menu-toggle" id="mobile-menu">
      					<span class="bar"></span>
      					<span class="bar"></span>
      					<span class="bar"></span>
    				</div>
					<div class="ikona_stranky">
						<img  height="90px" src="logo/soustruh_logo3.png">
					</div>
					<div class="tlacitka">
						<a href="main.php" id="t1">Úvod</a>
						<a href="formular.php">Objednat zakázku</a>
						<a href="cenik.php">Ceník</a>
						<a href="novinky.php" id="t2">Novinky</a>
						<a href="stroje.php" id="t3">Naše stroje</a>
						<a href="kontakty.php" id="t4">Kontakty</a>
					</div>
				</nav>
			</header>

			<aside class="sidebar1">
				
			</aside>
	
			<aside class="sidebar2">
				
				
			</aside>

			<article class="main">
				<div class="zaregistrovany_text">
					<p>Úspěšně jste se zaregistroval</p>
				</div>	
			</article>
			<footer class="footer">
				<div class="tlacitka_footer">
					<div class="tlacitka_footer_container">
						<a href="onas.php">O nás</a>
						<a href="kontakty.php">Kontaktní údaje</a>
						<a href="podminky.php">Obchodní podmínky</a>
						<a href="info.php">Informace</a>
						<a href="register.php">Zaregistrovat se</a>
						<a href="login.php">Prihlasit se</a>
					</div>
				</div>
				<div class="kontakt">
					Benešova 197, Čížkovice 411 12, Evangelik strojní dílna 2022
				</div>
			</footer>

			
		</div>
		
		
	</body>
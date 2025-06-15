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
		<meta name="description" content="Strojní dílna evangelik - kovoobrábění - Obrábění kovů i plastů. Soustružení a frézování ozubených kol, hřídelí, pouzder a dalších." />
		<link rel="canonical" href="https://strojnidilnaevangelik.cz/" />
		<link rel="stylesheet" href="web_style.css">
		<link rel="icon" type="image/x-icon" href="logo/favicon.ico">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<style type="text/css">
			*{
				-webkit-tap-highlight-color: transparent;
  				tap-highlight-color: transparent;
			}
			#nadpis {
				padding: 0px;
				font-size: 30px;
				padding-bottom: 10px;
				padding-top: 30px;
				font-family: "Arial", Helvetica, sans-serif;
			}
			#nadpis2 {
				font-size: 40px;
				padding-bottom: 0.5%;
				margin-top: 10px;
				font-family: "Arial", Helvetica, sans-serif;
				font-weight: 520;
			}


			#text {
				font-size: 25px;
				font-family: Verdana;
				font-weight: 500;
				margin-bottom: 0.5%;
				text-align: left;
				padding-left: 3%;
				
				
			}
			#text2{
				font-family: Verdana;
				font-size: 25px;
				font-weight: 500;
				text-align: center;
			}

			.poletextu{
				margin-bottom: 15px;
				display: flex;
				flex-direction: column;
				width: 100%;
			}
			.text_container{
				width: 72%;
				display: flex;
				flex-flow: column;
				align-self: center;
  				align-content: center;
			}
			.obrazky_video_container{
				position: relative;
			}
			

			.obrazek_buttony{
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
				align-content: center;
				position: relative;

			}
			.obrazek_buttony input{
				cursor: pointer;
				height: 80%;	
			}
			.image_slider{
  				height:853px;
  				width:1280px;
  				position:absolute;
  				top:0;
  				overflow:hidden;
  				border: 3px solid black;
  				display: flex;
  				align-self: center;
  				align-content: center;
			}
			.predchozi{
				 position:absolute;
				 top:45%;
				 left:-1px;
				 cursor:pointer;
				 background-color: transparent; 
				 border-color: transparent; 
			}
			.predchozi:active{
				color: white;
			}
			.dalsi{
				 position:absolute;
				 top:45%;
				 right:-1px;
				 cursor:pointer;
				 background-color: transparent; 
				 border-color: transparent;
			}
			.dalsi:active{
				color: white;
			}
			.transition {
				 transition:.5s linear;
			}
			.image{
				 height:100%;
				 width:100%;
				 position:absolute;
				 top:0px;
				 left:0px;
				 display:flex;
				 flex-direction: column;
				 flex-wrap: wrap;
				 align-items:center;
				 justify-content:center;
			}
		

			.objednej_button{
				cursor: pointer;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 150%;
				padding: 3%;
				margin: 5%;
				margin-top: 5%;
				width: 600px;
				font-weight: bold;
				border-radius: 5px;
				border: none;
  				background: linear-gradient(0deg, rgba(0,64,131,1) 0%, rgba(12,25,180,1) 100%);
  				color: white;
			}
			.objednej_button:hover {
 				background: rgb(96,9,240);
 				background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
			}


			.video_box{
				margin-top: 900px;
			}
			.video_frame{
				width:1300px;
				height:900px;
			}

			.covsechnodelame{
				margin-top: 950px;
			}

			.covsechnodelame_container{
				display: grid;
 				grid-template-columns: auto auto auto;
 				grid-template-rows: auto auto auto;
 				padding: 1px;
 				gap: 10px;
 				justify-items: center;
 				margin: 2px;
 				justify-content: center;
			}
			.covsechnodelame_container > div{
				padding: 20px 0;
				font-size: 30px;
				margin: 1px;
				font-family: Arial, Helvetica, sans-serif;
			}


			.item{
				background-color: green;
				height:250px; 
				width:375px;
				border-radius: 8px;
				font-size: 38px;
			}
			.item p{
				padding: 28%;
			}
			.item1{
				background-color: #FF0000;
				place-self: center;
			}
			.item2{
				background-color: #2196F3;
				place-self: center;
			}
			.item3{
				background-color: #00FF00;
				place-self: center;
			}
			.item4{
				background-color: #40E0D0;
				place-self: center;
			}
			.item5{
				background-color: #FF00FF;
				place-self: center;	
			}
			.item6{
				background-color: #FFBF00;
				place-self: center;
			}
			
			#nadpis3{
				margin:0;
				font-size: 35px;
				font-family: Verdana;
				font-weight: 535;
				margin-bottom: 10px;
			}
			ion-icon{
				outline: none;
				text-decoration: none;
			}

			

			@media only screen and (max-width: 1700px){
				.image_slider{
  					/*top:460px;*/
				}
				
			}
			@media only screen and (max-width: 1400px){
				.objednej_button{
					width: 30%;
					min-width: 300px;
				}
				.image_slider{
  					width:800px;
  					height: 530px;
  					/*top:380px;*/
				}
				.video_box{
					margin-top: 600px;
					display: flex;
					flex-direction: column;
					align-items: center;

				}
				
				.video_frame{
					width: 800px;
  					height: 450px;
				}
						
				.text_container{
					width: 90%;
				}
			
				.objednej_button{
					padding: 2%;
					border-radius: 60px;
				}
				h1,#nadpis2,#nadpis3 {
  				  font-size: 1.9rem;
  				}
  				p, #text, #text2  {
  				  font-size: 1.2rem;
  				}		
  				#nadpis3{
  					margin-bottom: 20px;
  					font-size: 1.5rem;
  				}
  				h2, .objednej_button {
  				  font-size: 1rem;
  				}

			}
			@media only screen and (max-width: 900px){
				.image_slider{
  					width:650px;
  					height: 480px;
				}
				
				.video_frame{
					width: 650px;
  					height: 400px;
				}
				.video_box{
					margin-top: 540px;
				}
			}
			@media only screen and (max-width: 700px){
				.image_slider{
  					/*top:335px;*/
  					width:385px;
  					height:300px;
				}
				.predchozi{
					top: 40%;
				}
				.dalsi{
					top: 40%;
				}
				.video_box{
					margin-top: 335px;
					width: 100%;
				}
				.poletextu{
					width: 100%;
				}
				.text_container{
					width: 95%;
				}
				.video_frame{
					width:385px;
  					height:250px;
				}
				
				.objednej_button{
					margin-top: 15%;
				}
          		
          		.objednej_button_div{
          			width: 100%;
          		}
 				.container{
 					width: 100%;
 				}
 				.obrazek_button{
 					width: 100%;
 				}
 				main{
 					width: 100%;
 				}
 				#nadpis{
 					padding-top: 0px;
 				}
 				 h1, #nadpis2, #nadpis3 {
  				  font-size: 1.1rem;
  				}
  
  				h2, #nadpis3 {
  				  font-size: 1rem;
  				}
  
  				p,#text,#text2 {
  				  font-size: 0.9rem;
  				  font-weight: 500;
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
					<img src="logo/soustruh_logo3.png">
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
				
				<script>
					var page_links = document.querySelectorAll('.tlacitka a');
					for (var i = 0; i < page_links.length; i++) {
				   		if (page_links[i].href == document.URL) {
				    	    page_links[i].className = 'active';
				    	}
					}
				</script>
				<div class="prihlasovaci_tabulka">
					<?php
					if(!isset($_SESSION['success'])){
							echo "
								<a onClick='registrace();'>".$lang['footer_link_5']."</a>
								<a onClick='prihlaseni();'>".$lang['footer_link_6']."</a>
								<script>
									function registrace(){
										document.location.href = 'register.php';
									}
									function prihlaseni(){
										document.location.href = 'login.php';
									}
								</script>
							";
						}
					?>
				</div>
			</header>
			<header class="header3">
				<div class="header3_prvky">
					<div class="vyhledavaci_tabulka">
						<i class="fas fa-search" id="search-icon"></i>
      					<input class="search-input" type="text" placeholder="Search..">
					</div>
				</div>
			</header>
			<article class="main">
				<h1 id="nadpis2"><?php echo $lang['nazev'];?></h1>
				<div class="poletextu">
					<div class="text_container">
						<p id="text">
						<?php echo $lang['popis_text'];?>
						</p>
						<p id="text2"><?php echo $lang['popis_text2'];?></p>
					</div>				
				</div>
					<div class="obrazek_buttony">
						<div class="image_slider">
							<img class="image image_1" src="images/1.jpg" />
							<img class="image image_2" src="images/2.jpg" />
							<img class="image image_3" src="images/3.jpg" />
							<img class="image image_4" src="images/4.jpg" />
							<img class="image image_5" src="images/5.jpg" />
							<img class="image iamge_6" src="images/9.jpg" />
							<img class="image image_7" src="images/7.jpg" />
							<img class="image iamge_8" src="images/8.jpg" />
							<button class="predchozi" type="button" onclick="changeImageLeft()" value="" /><ion-icon name="caret-back-outline" style='font-size:70px;'></ion-icon></button>
							<button class="dalsi" type="button" onclick="changeImageRight()" value="" /><ion-icon name="caret-forward-outline" style='font-size:70px;'></ion-icon></button>
						</div>
					</div>
				

						<div class='video_box'>
							<h1 id="nadpis3"><?php echo $lang['nazev2'];?></h1>
							<iframe class="video_frame" src="https://www.youtube.com/embed/-qBvVz-O1hA" allowfullscreen></iframe>
						</div>
						<div class="objednej_button_div">
							<input class="objednej_button" type="button" onclick="location.href='formular.php';" value="<?=$lang['objednej_button'];?>" />
						</div>
				<script type="module">
					import Frame from 'https://cdn.jsdelivr.net/gh/ofekN/Frame/src/frame.js';
					let num = 0;
					let slides = [...document.querySelectorAll('.image')];

					slides.forEach((image,i)=>{
						if(i > 0) image.style.left = (100) + '%';
					});
					function moveSlideDalsi(n){
						if(n===0){
					    	slides[0].style.left = '100%';
					    	Frame.run(slides[slides.length - 1],{left:'-100%',duration:.5});
					    	Frame.run(slides[n],{left:'0px',duration:.5});
					  	}
					  	else{
							slides[n].style.left = '100%';
							slides[n-1].style.left = '0%';
					 		Frame.run(slides[n-1],{left:'-100%',duration:.5});
					 		Frame.run(slides[n],{left:'0px',duration:.5});
					    }
					}
					function moveSlidePredchozi(n){
					 if(n===0){
					    slides[n].style.left = '-100%';
					    slides[n+1].style.left = '0px';
					    Frame.run(slides[n+1],{left:'100%',duration:.5});
					    Frame.run(slides[n],{left:'0px',duration:.5});
					 }
					 else if(n === slides.length - 1){
					    slides[n].style.left = '-100%';
					    slides[0].style.left = '0px';
					    Frame.run(slides[0],{left:'100%',duration:.5});
					    Frame.run(slides[n],{left:'0px',duration:.5});
					 }
  					 else{
					    slides[n].style.left = '-100%';
					    slides[n+1].style.left = '0px';
					    Frame.run(slides[n+1],{left:'100%',duration:.5});
					    Frame.run(slides[n],{left:'0px',duration:.5});
					 }
					}
					document.querySelector('.dalsi').addEventListener('click',()=>{
					    if(num < slides.length - 1){
					        num+=1;
 					 		moveSlideDalsi(num);
    					}
  						else{
   					 		num = 0;
     				 		moveSlideDalsi(num);
  						}
					});
					document.querySelector('.predchozi').addEventListener('click',()=>{
    					if(num > 0 ){
        					num-=1;
  							moveSlidePredchozi(num);
   						}
  						else{
   							num = slides.length - 1;
      						moveSlidePredchozi(num);
  						}
					});
					setInterval(Loop, 8000);
					function Loop() {
						if(num < slides.length - 1){
					        num+=1;
 					 		moveSlideDalsi(num);
    					}
  						else{
   					 		num = 0;
     				 		moveSlideDalsi(num);
  						}
					  }
				</script>
			</article>
			<footer class="footer">
				<div class='footer_container'>
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
				</div>
			</footer>
		</div>
		<div id="cookiebar_box" class="os-animation" data-os-animation="fadeIn" >
    		<div class="cookie_container risk-dismiss" style="display: block;" >
    			<div id='cookie_exit_box'><a id='cookie_exit_button' onclick="pass_change_window_close()" ><ion-icon name="close" style="font-size:30px"></ion-icon></a></div>
    			<h1 id='cookie__nadpis'><?php echo $lang['cookie_nadpis'];?></h1>
        		<p><?php echo $lang['cookie_text'];?></p>
            	<a id="cookieBox_button" class="cookieok" data-cookie="risk"><?php echo $lang['cookie_button_text'];?></a>
    		</div>
		</div>
	</body>
<?php
if (isset($_SESSION['success'])){
	echo "<div class='login_bar'><p class='username'>".$lang['login_status']. $_SESSION['nick']."<a class='logout_btn' href='logout.php'>".$lang['login_odhlasit']."</a><a id='settings_button' href='ucet.php'><ion-icon name='settings-sharp' style='font-size:20px;'></ion-icon></a></p></div>";
}
?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script>
  			var cookieBox = document.getElementById('cookiebar_box');
  			var closeCookieBox = document.getElementById("cookieBox_button");
  			var exitCookieBox = document.getElementById("cookie_exit_button");
  			var cookiePopup = readCookie('seen-cookiePopup');

  			function readCookie(name) {
        		var nameEQ = name + "=";
        		var ca = document.cookie.split(';');
        		for (var i = 0; i < ca.length; i++) {
        		    var c = ca[i];
        		    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        		    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        		}
       		return null;
    		}
    		if (cookiePopup != null && cookiePopup == 'yes') {
    		    cookieBox.style.display = 'none';
    		    all_cookies = document.cookie;
				if(all_cookies){
					const cookie_array = all_cookies.split('; ');
					for (let i = 0; i < cookie_array.length; i++) {
						var c = cookie_array[i];
						//console.log(cookie_array[i]);
					}
				}
    		} else {
    		    cookieBox.style.display = 'block';
    		};

  			closeCookieBox.onclick = function() {
        		cookieBox.style.display = "none";
    		};

		
			function createCookie(name, value, days, path) {
        		var expires = "";
        		if (days) {
           			var date = new Date();
            		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            		expires = "; expires=" + date.toGMTString();
        		}
        		else expires = "";

        		document.cookie = name + "=" + value + expires + "; path=" + path;
    		}

    		closeCookieBox.addEventListener('click', function () {
        		createCookie('seen-cookiePopup', 'yes', 2,  "/");
        		cookieBox.style.display = "none";
        		all_cookies = document.cookie;
				if(all_cookies){
					const cookie_array = all_cookies.split('; ');
					for (let i = 0; i < cookie_array.length; i++) {
						var c = cookie_array[i];
						//console.log(cookie_array[i]);
					}
				}
    		});
    		exitCookieBox.addEventListener('click', function (){
    			createCookie('seen-cookiePopup', 'yes', 1,  "/");
    			cookieBox.style.display = "none";
    		});
</script>

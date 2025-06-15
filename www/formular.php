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

			#form-main{
				width: 100%;
			}

			#form-div{
				width: 100%;
				display: flex;
                flex-direction: column;
                margin-top: 35px;
                font-family: 'Montserrat', Arial, Helvetica, sans-serif;
			}
			.form{
				font-size: 1.2em;
				display: flex;
				flex-direction: column;
				width: 1250px;
				margin: 0 auto;
				padding: 5px;
				background-color: rgba(255, 255, 0,0.7);
				border-radius: 20px;
    			align-self: start;


			}

			.form h3{
				font-size: 2.1em;
				text-align: center;
				letter-spacing: 2px;
				word-spacing: 5px;
				font-family: 'Montserrat', Arial, Helvetica, sans-serif;
				margin-bottom: -3px;
			}
			.form > *{
				margin: 3px;
				flex-direction: column;
				margin-left: 10px;

			}

			.labels{
				text-align: left;
				margin-left: 10px;
				margin-bottom: -3px;
				margin-top:  -2px;
				font-weight: 500;
			}

			input[type=text] {
        width: 500px;
        height: 25px;
        padding: 7px;
        margin: 5px;
        border: 1px solid black;
        font-size: 1em;
        margin-left: 10px;
        margin-bottom: 10px;
      }
            #textarea{
            	resize: none;
            	width: 900px;
            	height: 350px;
            	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            	font-size: 20px;
            	margin-bottom: 10px;
            	border: 2px solid #555;
            	padding: 7px;
            	margin-top: 2px;

            }

            input[type=number]{
            	height: 25px;
            	float: left;
            	margin-right: 3px;
            	width: 153px;
            	font-size: 1em;
            	padding: 7px;
            	margin-top: 2px;
            }

            .input-tab{
            	display: inline-block;
 				text-align: left;
  				width: 600px;
  				font-weight: normal;
  				margin-top: 5px;
            }
            input[type=checkbox]{
            	margin-left: 5px;
  				    margin-right: 5px;
  				    font-size: 1em;
  				    height: 17px;
  				    width: 17px;
  				    margin-bottom: 5px;
            }

            input[type=text],[type=number],[type="number"]:focus {
  				    border: 2px solid #555;

			     }

			    .rozmery{
            	margin-right: 5px;


            }
            #label_material{
            	margin-top: 3px;
            }


            .submit input{
            	cursor: pointer;
				font-family: 'Montserrat', Arial, Helvetica, sans-serif;
				font-size: 100%;
				padding: 1%;
				width: 20%;
				min-width: 300px;
				font-weight: bold;
				border-radius: 5px;
				border: none;
				background: rgb(6,14,131);
  				background: #ffbf00;
  				margin-bottom: 5px;
            }

            .submit input:hover{
            	background-color: #bf6516;
            }

            .podminky{
            	text-align: left;
            	margin: 10px;
            }
            .errorbox{
            	position: absolute;
                top: 120px;
                display: flex;
            	flex-direction: column;
                width: 100%;


            }

            .error {
                  color: red;
                  margin: 20px;
                  font-size: 22px;
                  font-family: Arial, Helvetica, sans-serif;
                  font-weight: bold;
                  text-align: center;
                  display: flex;
				          flex-direction: column;
				          align-self: center;
				          width:1250px;

            }
            .success{
                  color: green;
                  margin: 20px;
                  font-size: 22px;
                  font-family: Arial, Helvetica, sans-serif;
                  font-weight: bold;
                  text-align: center;
                  display: flex;
				         flex-direction: column;
				         align-self: center;
				         width:1250px;
            }

            @media only screen and (max-width: 1300px){
            	#form-div{
            		width: 500px;
            		margin: -10px;
            		margin-top: 50px;
            		align-content: center;

            	}
            	#form-main{
            		display: flex;
            		flex-direction: column;
            		align-items: center;
            	}
            	.main{
            		width: 100%;
            	}
            	.form{
            		width: 440px;
            		font-size: 1rem;

            	}
            	#textarea{
            		width: 92%;
            	}
            	.input-tab{
            		width: 90%;
            	}
            	input[type='text']{
            		width: 89%;
            	}
            	input[type=number]{
            		width: 27.5%;
            	}
            	input[type=checkbox]{
            		width:17px;
            		font-size: 0.8rem;
            		margin-left: 5px;
            		margin-right: 5px;
            	}
            	 .submit input{
            	 	min-width: 150px;
            	 	padding: 2%;
            	 }
            	 .error{
            	 	font-size: 15px;
            	 }
            	 .success{
            	 	font-size: 15px;
            	 }
            	h1, .nadpis h3 {
  				  font-size: 1.7rem;
  				}
  				p,label {
  				  font-size: 1rem;
  				}
  				h2{
  				  font-size: 1rem;
  				}
  				.error,.success{
  					margin-top: 30px;
  					font-size: 1.2rem;
  					width: 100%;
  				}
            }
            @media only screen and (max-width: 700px){
            	#form-div{
            		width: 100%;
            	}
            	#form-main{
            		display: flex;
            		flex-direction: column;
            		align-items: center;
            		width:100%;
            	}
            	.main{
            		width: 100%;
            	}
            	.form{
            		width: 95%;
            		border:none;
            	}
            	.form > *{
            		margin-left: 10px;
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
			 	<div id="form-main">

 				<div id="form-div">

    			  <form class="form" id="form1" action="poslatemail.php" method="POST">
      				<div class=nadpis>
 				  		<h3><?php echo $lang['nadpis_objednavky'];?></h3>
 				  	</div>
      				<div class="labels">
     					<label><?php echo $lang['nazev_objednavky'];?></label><br>
     				</div>
        			<input name="name" type="text" class="" placeholder="<?php echo $lang['nazev_placeholder_objednavky'];?>" id="name" maxlength="40" required>


      				<div class="labels">
     					<label><?php echo $lang['email_objednavky'];?></label><br>
     				</div>
        			<input name="email" type="text" class="" id="email" placeholder="Email" maxlength="60" required>

     				<!--<div class="labels">
     					<label><?php echo $lang['druh_objednavky'];?></label><br>
     				</div>
     				<div class="input-tab">
          				<div><input type="checkbox" name="vr" value="Vrtani" ><?php echo $lang['value1'];?></div>
          				<div><input type="checkbox" name="sv" value="Svareni" ><?php echo $lang['value2'];?></div>
          				<div><input type="checkbox" name="ob" value="Obrabeni" ><?php echo $lang['value3'];?></div>
          				<div><input type="checkbox" name="br" value="Brouseni" ><?php echo $lang['value4'];?></div>
          				<div><input type="checkbox" name="ot" value="other" ><?php echo $lang['value5'];?></div>
        			</div>-->

     				<div class="labels">
     					<label><?php echo $lang['vaha_objednavky'];?></label><br>
     				</div>
       				<input type="text" name="vaha" id="comment" placeholder="<?php echo $lang['vaha_placeholder_objednavky'];?>" maxlength="10" required>

      			<div class="labels">
     					<label><?php echo $lang['rozmery_objednavky'];?></label><br>
     				</div>
     				<div class="rozmery">
       					<input type="number" min='0' name="x"  placeholder="<?php echo $lang['rozmer1_objednavky'];?>" required><input name="y" type="number" min='0'  placeholder="<?php echo $lang['rozmer2_objednavky'];?>" required>
       					<input type="number" name="z" min='0'  placeholder="<?php echo $lang['rozmer3_objednavky'];?>" required>
       				</div>
      				<div class="labels" id='label_material'>
     					<label><?php echo $lang['material_objednavky'];?></label><br>
     				</div>
       				<input type="text" name="material" id="comment" placeholder="<?php echo $lang['material_placeholder_objednavky'];?>" maxlength="20" required>


     				<div class="labels">
     					<label><?php echo $lang['popis_objednavky'];?></label><br>
     				</div>
       				<textarea type="text" name="popis" id="textarea" maxlength="6000" required></textarea>


      				<div class="labels">
     					<label><?php echo $lang['cochciudelat_objednavky'];?></label><br>
     				</div>
       				<input type="text" name="ukoly" id="comment" placeholder="<?php echo $lang['cochciudelat_placeholder_objednavky'];?>" maxlength="100" required>
      				<!--<div class=podminky>
      					<p><b><input type="checkbox" name="podminky" value="ano"></input>Souhlasím s obchodními podmínkami.</b></p>
      				</div>-->
      				<div class="submit">
        				<input type="submit" value="<?php echo $lang['submit_objednavky'];?>" id="button-blue"/>
     				</div>
    			  </form>
    			  <p class="error"></p>
    			  <p class="success"></p>
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
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
	$fullUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$requestUri = $_SERVER['REQUEST_URI'];


	if(strpos($fullUrl, "formular=empty") == true) {
		echo "<div class='errorbox'><p class='error'>Vyplňte prosím všechna pole.</p></div>";
	}
	else if(strpos($fullUrl, "formular=connect") == true) {
		echo "<div class='errorbox'><p class='error'>".$lang['error1_register']."</p></div>";
	}
	elseif(strpos($fullUrl, "formular=login") == true) {
		 echo "<div class='errorbox'><p class='error'>".$lang['prihlaseni_objednavky']."</p></div>";
	}
	elseif(strpos($fullUrl, "formular=senderror") == true){
		echo "<div class='errorbox'><p class='error'>".$lang['chyba_odeslani_objednavky']."</p></div>";
	}
	elseif(strpos($fullUrl, "formular=success") == true) {
		 echo "<div class='errorbox'><p class='success'>".$lang['success_objednavky']."</p></div>";
	}
	if (isset($_SESSION['success'])){
  	echo "<div class='login_bar'><p class='username'>".$lang['login_status']. $_SESSION['nick']."<a class='logout_btn' href='logout.php'>".$lang['login_odhlasit']."</a><a id='settings_button' href='ucet.php'><ion-icon name='settings-sharp' style='font-size:20px;'></a></p></div>";
	}
?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
			.novinky_container{
				width: 100%;
				display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 30px;
                font-family: Arial, Helvetica, sans-serif;
                margin-bottom: 150px;
                height: 120%;
			}
			.novinky_container2{
				padding: 1em;
				display: flex;
				flex-direction: column;
				width: 1250px;
				margin: 0 auto;
				padding: 10px;
			}
			.nadpis_novinky{
				margin: 10px;
				text-align: left;
				border-bottom: 3px solid grey;
				font-size: 30px;
			}
			.form_news_container{
				width: 1250px;
				min-height:300px;
				border: 1px solid black;
				border-radius: 20px;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-content: center;
			}
			.form{
				align-self: flex-start;
				display: flex;
				flex-direction: column;
				margin:5px;
				width: 650px;
				border: 3px solid black;
			}
			.form h2{
				text-align: left;
				margin-left: 2%;
				margin-bottom: 5px;
				margin-top: 5px;
			}
			input[type='text']{
				margin-left: 2%;
				margin-bottom: 8px;
				float: left;
				height: 30px;
				width: 600px;
				padding: 7px;
				font-size: 18px;
  				padding-left: 2%;
  				font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  				border: 2px solid #555;
			}
			#textarea{
				margin-left: 2%;
				margin-bottom: 8px;
				resize: none;
				width: 600px;
				height: 250px;
				float: left;
				padding: 7px;
				font-size: 18px;
  				padding-left: 2%;
  				font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  				border: 2px solid #555;
			}

			.submit{
				align-self: center;

				margin-bottom: 8px;
			}
			.submit input{
				 color: white;
                  background-color: #0066ff;
                  width: 180px;
                  height: 40px;
                  font-size: 18px;
                  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
           		  font-size: 1.2em;
           		  font-weight: bold;
                  margin: 4%;
                  border-radius:2px;
                  border: 2px solid transparent;
			}

			.submit input:hover{
            	background: rgb(96,9,240);
 				background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
 				cursor:pointer;
            }
            .comments_container{
            	width: 98%;
            	text-align: left;
            	padding: 5px;
            }
            .novinka_class{
            	width: 100%;
            	margin-bottom: 10px;
            	border: 2px solid grey;
            	padding: 10px;
            	position: relative;

            }
            .jmeno_novinky{
            	width: 100%;
            	padding-bottom: 2px;
            	font-weight: 500;
            	font-size: 23px;
            }
            .datum_novinky{
            	width: 100%;
            	margin-bottom: 6px;
            	padding-left: 1px;
            	font-weight: 400;
            	color: rgba(0,0,0,0.6);
            	font-style: italic;
            }
            .text_novinky{
            	width: 100%;
            	margin-bottom: 10px;
            	padding-left: 1px;
            	font-weight: normal;
            }
            .novinka_class button{
            	cursor: pointer;
            	position: absolute;
            	right: 10px;
            	top: 10px;
            	color: white;
                  background-color: #0066ff;
                  padding: 1%;
           		    font-weight: bold;
                  border-radius:2px;
                  border: 2px solid transparent;

            }
            .novinka_class button:hover{
            	background-color: darkblue;
            }
            .delete_comment{
            	display: none;
            }

            @media only screen and (max-width: 1400px){

            	input[type='text']{
            		width: 90%;
            	}
            	#textarea{
            		width: 90%;
            	}
            	.novinky_container2{
            		width: 95%;
            	}
            	.form_news_container{
					width: 94%;
				}
				.comments_container{
					width: 97%;
				}

            }

            @media only screen and (max-width: 1000px){
            	.form{
            		width: 97%;
            	}
				 h1{
  				  font-size: 1.4rem;
  				}

  				h2 {
  				  font-size: 1.4rem;
  				}

  				p{
  				  font-size: 0.9rem;
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
  				.comments_container{
					width: 93%;
				}
            }

		</style>
		<?php
		if(isset($_SESSION['ucet']) && isset($_SESSION['nick'])){
			include 'databasereal.php';
        	$actual_nick = mysqli_real_escape_string($conn, $_SESSION["nick"]);
        	$sql = "SELECT * FROM ucty where login='$actual_nick' limit 1";
        	$result = mysqli_query($conn,$sql);
        	$row = mysqli_fetch_array($result);

        	if($row[10] == 'ADMIN'){
          		echo "<style>
          				.delete_comment{
          					display: block;
            			}
          			</style>";
        	}
        	else{
        		echo "<style>
          				.delete_comment{
          					display: none;
            			}
          			</style>";
        	}

		}
		?>
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
				<div class="novinky_container">
					<div class="novinky_container2">
						<h2 class="nadpis_novinky"><?php echo $lang['novinky_nadpis'];?></h2>
					</div>
					<div class="form_news_container">
						<div class="comments_container" id='comments_container_id'>
							<script>
								function LoadNews(){
									const comment_list = document.querySelector('#comments_container_id');
									fetch('nacti_novinky.php')
										.then(response => response.json())
										.then(comments => {
											comments.forEach(comment => {
												const novinka = document.createElement('div');
												novinka.classList.add('novinka_class');

												const datum = document.createElement('p');
												nastaveni_datumu = {year: 'numeric', month: 'long', day: 'numeric',
																	hour: 'numeric', minute: 'numeric', second: 'numeric'};
												var jazyk = '<?php echo $lang['language']; ?>';
												var js_datum = new Date(comment.datum).toLocaleString(jazyk, nastaveni_datumu);
												datum.textContent = js_datum+' - Admin'
												datum.classList.add('datum_novinky');

												const jmeno = document.createElement('h3');
												jmeno.classList.add('jmeno_novinky');
												jmeno.textContent = comment.nazev_kom;

												const text = document.createElement('p');
												text.classList.add('text_novinky');
												text.textContent = comment.text;

												const deletebutton = document.createElement('button');
												deletebutton.classList.add('delete_comment');
												deletebutton.setAttribute('data-comment-id',comment.id_kom);
												deletebutton.textContent = 'Vymazat';

												novinka.appendChild(jmeno);
												novinka.appendChild(datum);
												novinka.appendChild(text);
												novinka.appendChild(deletebutton);

												comment_list.appendChild(novinka);
											});
										})
									.catch(error => {
    									console.error('Chyba při zpracování komentů.:', error);
  									});
								}
								LoadNews();

  								$(document).on('click', '.delete_comment', function() {
  									var id_komentu = $(this).data('comment-id');
  									$.ajax({
  										url: 'vymaz_novinku.php',
  										type: 'POST',
  										data: {
  											novinka_id: id_komentu
  										},
  										success: function(response) {
  											setTimeout(() => { document.location.href = 'novinky.php';}, 1000);
    									},
    									error: function() {
    										console.log('Chyba při připojení k serveru.');
    									}
  									});

  								});
							</script>
						</div>
						<?php
						if(isset($_SESSION['ucet'])){
							if($_SESSION['ucet'] == 'ADMIN'){
								echo show_comment_form();
							}
						}
						function show_comment_form(){
							$html = '
								<form class="form" id="form1" action="commentadd.php">
    								<h2>Přidat novinku</h2>
        							<input name="name" type="text" class="" placeholder="Název" id="name" maxlength="50" required/>

        							<textarea name="text" class="" id="textarea" placeholder="Novinka" maxlength="6000" required></textarea>

      								<div class="submit">
        								<input type="submit" value="ODESLAT" id="button-blue"/>
        								<div class="ease"></div>
      								</div>
    							</form>
							';
							return $html;
						}
						?>
						<script>

						</script>
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


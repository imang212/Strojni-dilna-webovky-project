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

if (isset($_SESSION['success'])){
  echo "<div class='login_bar position-absolute top-0 start-0 mt-0.5 ms-1 fw-bolder'><a class='logout_btn' href='logout.php'>".$lang['login_odhlasit']."</a></div>";
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
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
		<style type="text/css">";

			body{
				background-image: none;
			}
			.container-fluid{
				max-width: 1500px;
			}
			.ucet_container1{
				display: flex;
				flex-flow: column;
				align-content: center;
				justify-content: center;
				width: 100%;
				margin-top: 20px;


			}
			.sprava_nadpis{
				text-align: center;
				margin-bottom: 20px;
			}
			.ucet_container2{
				width: 100%;
				align-self: center;
				height: 700px;
				text-align: left;
				box-shadow: 0px 0px 15px hsla(113, 100%, 50%, .5);
				backdrop-filter: blur(10px);
			}
			
			.ucet_container2 > *{
				margin-left: 10px;
			}
			#header_buttons{
				margin-right: 5px;
			}

			.ucet_nadpis{
				margin-bottom: 20px;
			}
			.loginstatus{
				
			}
			.links_container{
				display: flex;
				justify-content: space-between;
				margin-bottom: 10px;
			}
			.zpatky_button{
				color: black;
				text-align: left;
				margin-top: 5px;
				margin-left: 10px;
				
			}
			.zpatky_button:hover{
				color: blue;
			}
			
      .inform_div_main{
				height: 30px;
				text-align: center;
			}
			.inform_div_main.show{
       	opacity: 1;
       	animation: fadeIn 5s;
       	-webkit-animation: fadeIn 5s;
       	-moz-animation: fadeIn 5s;
       	-o-animation: fadeIn 5s;
       	-ms-animation: fadeIn 5s;     
      }
      .inform_div_main.hide{
        	opacity: 1;
        	animation: fadeOut 4s;
       	-webkit-animation: fadeOut 4s;
       	-moz-animation: fadeOut 4s;
       	-o-animation: fadeOut 4s;
       	-ms-animation: fadeOut 4s;   
      }
      .jazyk_bar{
      	padding-right: -20px;
      }

      @keyframes fadeIn {
     		 0% { opacity: 0; }
     		 100% { opacity: 1; }
      }
     	@keyframes fadeOut {
     	   0% { opacity: 1; }
     	   100% { opacity: 0; }
     		}
			
		</style>
	</head>
	<body class='bg-secondary bg-opacity-10'>
	<header class="header2">
		<div class="loginstatus">			
		</div>
		<div class="jazyk_bar" style='margin-top: -4px;'>
			<input class="flag_button" type="image" src="flags/cz.svg" onclick="location.href='main.php?la=cze';"  width="35%" height="35%">
			<input class="flag_button" type="image" src="flags/gb.svg" onclick="location.href='main.php?la=eng';"  width="35%" height="35%">
		</div>
	</header>
	<div class="container-fluid">
		<?php
			if(isset($_SESSION['ucet']) && isset($_SESSION['nick'])){
				include 'databasereal.php';
				$actual_nick = mysqli_real_escape_string($conn, $_SESSION["nick"]); 
				$sql = "SELECT * FROM ucty where login='$actual_nick' limit 1";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				
				$pohlavi = '';
				if($row[8] == ''){
					$pohlavi = 'žádné';
				}
				else{
					$pohlavi = $row[8];
				}
				$sprava_button = '';
				if($row[10] == 'ADMIN'){
					$sprava_button = "<button class='btn btn-primary' type='submit' onclick='show_objednavky()'>Správa objednávek</button>";
				}
				else{
					$sprava_button = '';
				}
				$datum = date("Y/m/d", strtotime(str_replace('-"', '/', $row[9])));  
				
				$html = "
    				<div class='ucet_container1'>
    					<div id='inform_div_main_id' class='inform_div_main'><p id='inform_text_main' class='text text-center fs-5 fw-bolder'></p></div>
    					<h2 class='sprava_nadpis'>".$lang['sprava_uctu_nadpis']."</h2>
    					<div class='links_container'>
    						<a class='zpatky_button' href='main.php'><ion-icon name='arrow-back-outline' style='font-size:35px;margin:-3px'></ion-icon></a>
    						<div id='header_buttons'>
    							<button class='btn btn-primary' type='button' onclick='account();'>".$lang['ucet_info']."</button>
    							<script>
									function account(){document.location.href = 'ucet.php';}
									</script>
    							".$sprava_button."
    						</div>
    					</div>
    					<div  id='ucet_container2_id' class='ucet_container2 border border-secondary border-3 p-2 mb-2'>
    						<div id='ucet_container2_id_content'>
    							<h2 class='ucet_nadpis fs-3'>".$lang['ucet_nadpis']."</h2>".
    							"<p class='account_text fs-5'>".$lang['jmeno_registrace'].': '.$row[1].' '.$row[2].'</p>'.
    							"<p class='fs-5'".$lang['prezdivka_registrace'].': '.$row[3].'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<p class='fs-5'>Email: ".$row[5].'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<p class='fs-5'>".$lang['telefon_registrace'].': '.$row[6].'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<p class='fs-5'>".$lang['zeme_registrace'].' '.$row[7].'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<p class='fs-5'>".$lang['ucet_pohlavi'].': '.$pohlavi.'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<p class='fs-5'>".$lang['datum_registrace'].' '.$datum.'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<p class='fs-5'>".$lang['ucet_typ'].': '.$row[10].'</p>'.
    							"<p class='border-bottom w-50'></p>".
    							"<div class='d-flex justify-content-between w-50'><p class='fs-5 p-2' style='margin-left:-6px;'>".$lang['heslo_registrace'].":</p> <button id='change_button' class='btn btn-dark btn-sm p-2 h-25' onclick='pass_change_window()'>".$lang['ucet_heslo'].'</button></div>'."	
    							<div class='d-flex justify-content-between w-50'></div>
    						</div>	
    					</div>
    				</div>
    				";
    			echo $html;
    		}
    		else{
    			echo "<div class='position-absolute top-50 start-50 translate-middle'><p class='text text-center fs-4 fw-bolder text-warning'>".$lang['login_odhlasen']."</p></div>";
    		}
		?>
		<script>
			var actiontext = document.getElementById('inform_text_main');
     	 	var actiondiv = document.getElementById('inform_div_main_id');
			function ShowInfoText(class_type,write){
      			actiontext.classList.add(class_type);
      			actiondiv.classList.add('show');
      			actiontext.innerHTML = write;
      			setTimeout(HideInfoText, 5000);
      			setTimeout(ClearInfoText, 9000);
      		}
      		function HideInfoText(){
      			actiondiv.classList.remove('show');
      			actiondiv.classList.add('hide');
      			}
      		function ClearInfoText(){
     		  	actiondiv.classList.remove('hide');
      			actiontext.innerHTML = '';
      		}
		</script>
		<script>
			function pass_change_window(){
				"use strict";

				var password_change_window_html = `
					<div class='pass_change_container'>
						<div id='inform_div_id' class='inform_div'><p id='inform_text' class='text text-center fs-5 fw-bolder'></p></div>
						<div class='pass_change_content border border-warning border-5 p-4 mb-4 rounded bg-primary-subtle w-40'>
							<a class='exit_button' onclick="pass_change_window_close()" ><i class="fa fa-close" style="font-size:27px"></i></a>
							<h3 class="fw-bold fs-3 text-center mt-2 mb-3"><?php echo $lang['zmena_hesla']; ?></h3>
							<input id='input_pass_new' class="form-control mb-2 form-control-lg" type="password", name="pwd_new", placeholder="<?php echo $lang['heslo_registrace']; ?>" maxlength="20">
							<input id='input_pass_new_again' class="form-control mb-2 form-control-lg" type="password", name="pwd_new_again", placeholder="<?php echo $lang['heslo2_registrace']; ?>" maxlength="20">
							<button id='change_button' class="btn btn-primary mt-2" type="submit" onclick='Pass_Submit()' name="submit"><?php echo $lang['zmenit']; ?></button>
						</div>
					</div>
				`;

				var password_change_window_css = document.createElement("style");

				password_change_window_css.type = "text/css";
				password_change_window_css.innerHTML = `
					.pass_change_container{
						display: flex;
						flex-flow: column;
						justify-content: center;
						align-content: flex-start;
						width: 100%;
						height: 70%;
					}
					.pass_change_content{
						align-self: center;
						display:flex;
						flex-flow: column;
						
					}
					.pass_change_content a{
						text-align: right;
					}
					.pass_change_content h2{
  						text-align: center;
   						margin-bottom: 20px;
   						margin-top: 2%;
					}
					.pass_change_content input{
						padding-top: 5px;
						padding-bottom:5px;

					}
					.pass_change_content button{
						width: 60%;
						align-self: center;
					}
					.exit_button{
						cursor: pointer;
						color: black;
						margin-bottom: -10px;
						margin-top: -23px;
						margin-right: -20px;
						
					}
					.exit_button:hover{
						color: blue;
					}
					.inform_div{
						height: 30px;
						text-align: center;
						margin-bottom: 10px;
					}
					.inform_div.show{
       			opacity: 1;
       			animation: fadeIn 5s;
       			-webkit-animation: fadeIn 5s;
       			-moz-animation: fadeIn 5s;
       			-o-animation: fadeIn 5s;
       			-ms-animation: fadeIn 5s;     
     			}
      		.inform_div.hide{
        		opacity: 1;
        		animation: fadeOut 4s;
       			-webkit-animation: fadeOut 4s;
       			-moz-animation: fadeOut 4s;
       			-o-animation: fadeOut 4s;
       			-ms-animation: fadeOut 4s;   
      		}

      		@keyframes fadeIn {
     		 		0% { opacity: 0; }
     		 		100% { opacity: 1; }
      		}
     			@keyframes fadeOut {
     	   		0% { opacity: 1; }
     	   		100% { opacity: 0; }
     			}
      		.pass_change_content input[type="password"]:hover{
      			border-color: rgba(126, 239, 104, 0.8);
      		}
      		.pass_change_content input.reddish{
      			border-color: rgba(255, 0, 0, 0.8);	
      		}
				`;


        		var container_content = document.querySelectorAll('#ucet_container2_id_content');
        		for (var i=0; i<container_content.length ; i++) {
        			container_content[i].style.display = 'none';
    			}
        		var password_change_window_span = document.createElement('span');

        		password_change_window_span.innerHTML = password_change_window_html;
        		document.body.appendChild(password_change_window_span);
        		document.body.appendChild(password_change_window_css);
        		document.getElementById('ucet_container2_id').appendChild(password_change_window_span);
			}

	function Pass_Submit(){
      	var password2 = document.getElementById('input_pass_new').value;
     	var password3 = document.getElementById('input_pass_new_again').value;
     	var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
     	var actiontext = document.getElementById('inform_text');
        var actiondiv = document.getElementById('inform_div_id');
        function ShowText(class_type,write){
      		actiontext.classList.add(class_type);
      		actiondiv.classList.add('show');
      		actiontext.innerHTML = write;
      		setTimeout(HideText, 5000);
      		setTimeout(ClearText, 9000);
     	}
      	function HideText(){
      		  actiondiv.classList.remove('show');
      		  actiondiv.classList.add('hide');
      	}
      	function ClearText(){
      	 	actiondiv.classList.remove('hide');
      		actiontext.innerHTML = '';
      	}
        function insert_pass(password){
            function ShowTextInsert(class_type, write){
              actiontext.classList.add(class_type);
              actiondiv.classList.add('show');
              actiontext.innerHTML = write;
              setTimeout(HideTextInsert, 5000); 
              setTimeout(ClearTextInsert, 9000);
              return;
            }
            function HideTextInsert(){
            	actiondiv.classList.remove('show');
            	actiondiv.classList.add('hide');
            	return;
          	}
          	function ClearTextInsert(){
             	actiondiv.classList.remove('hide');
             	actiontext.innerHTML = '';
             	return;
          	}
        
          
			$.ajax({
    			url: 'change_password.php',
    			type: 'POST',
    			data: {
    			  passverify: 'true',
    			  pass1: password
    			},
    			success: function(response) {
    				//console.log(response);
					//´document.location.href = 'ucet.php?passchange=success';
					pass_change_window_close();
					ShowInfoText('text-success','Vaše heslo bylo úspěšně změněno.');
    			},
    			error: function() {
    			  	ShowTextInsert('text-warning','Chyba spojení se serverem, zkuste to později.');
    			}
  			});
    	}

      	if(password2 == "" && password3 == ""){
        		ShowText('text-danger','Vyplňte prosím všechna pole.');
        		$("#input_pass_new").addClass('reddish');
         	  $("#input_pass_new_again").addClass('reddish'); 
         	  setTimeout(function() {
      				$('#input_pass_new').removeClass('reddish');
         	    $('#input_pass_new_again').removeClass('reddish');
         	  }, 9000);
        	}
        	else if(password2 == ""){
        		ShowText('text-danger','Vyplňte prosím všechna pole.');
         	  $("#input_pass_new").addClass('reddish'); 
         	  setTimeout(function() {
         	    $('#input_pass_new').removeClass('reddish');
         	  }, 9000);
        	}
        	else if(password3 == ""){
        		ShowText('text-danger','Vyplňte prosím všechna pole.');
         	  $("#input_pass_new_again").addClass('reddish');
         	  setTimeout(function() {
         	    $('#input_pass_new_again').removeClass('reddish');
         	  }, 9000);
        	}
        	else if(!password2.match(passwordRegex)) {
        		ShowText('text-danger','Vaše heslo musí obsahovat velké písmeno, malé písmeno a číslo.');
         	  $("#input_pass_new").addClass('reddish'); 
         	  setTimeout(function() {
         	    $('#input_pass_new').removeClass('reddish');
         	  }, 9000);
 					}
 					else if (password2 != password3){
         	  ShowText('text-danger','Hesla se neshodují.');
         	  $("#input_pass_new").addClass('reddish');
         	  setTimeout(function() {
         	    $('#input_pass_new').removeClass('reddish');
         	  }, 9000);
 					}
 					else if (password2.length < 8){
         	  ShowText('text-danger','Heslo musí mít nejméně 8 znaků.');
         	  $("#input_pass_new").addClass('reddish'); 
         	  setTimeout(function() {
         	    $('#input_pass_new').removeClass('reddish');
         	  }, 9000);
         	}
          else if (password2.length > 20){
            ShowText('text-danger','Heslo nesmí mít víc než 20 znaků.');
            $("#input_pass_new").addClass('reddish'); 
            setTimeout(function() {
              $('#input_pass_new').removeClass('reddish');
            }, 9000);
          }
 				 else{  
            insert_pass(password2);
          }
			}
			
			function pass_change_window_close(){
				const element = document.querySelector('span');
				element.remove();
				var container_content = document.querySelectorAll('#ucet_container2_id_content');
        		for (var i=0; i<container_content.length ; i++) {
        			container_content[i].style.display = 'block';
        		}
			}

			function show_objednavky(){
				$.ajax({
        			url: 'spravaobjednavek.php',
        			type: 'post',
        			data: { "sprava_objednavek": "true"},
        			success: function(){
               			location.href = 'spravaobjednavek.php';
          			 }
    			});
			}
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		
	</body>
</html>
<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>



<?php
session_start();

if(isset($_GET['la'])){
    $_SESSION['la'] = $
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
                top: 160px;
                display: flex;
                flex-direction: column;
                width: 100%;
                margin:0;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                text-align: center;
                font-weight: bold;
            }
            .success{
                color: green;
                position: absolute;
                top: 160px;
                display: flex;
                flex-direction: column;
                width: 100%;
                margin:0;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                text-align: center;
                font-weight: bold;
            }
            h2 {
                  font-size: 26px;
                  color: #41FF00;
                  text-align: center;
                  font-family: Arial, Helvetica, sans-serif;
                  margin-bottom: 10px;
                  margin-top: 10px;
            }
            div.register_container {
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
                  text-align: left;
                  margin: 30px;
                  margin-left: 10px;
                  margin-right: 10px;
                  margin-bottom: 80px;
                  margin-top: 80px;
            }

            form {
                  padding: 10px;
                  text-align: center;
                  width: 550px;
                  border: 3px solid black;
                  background-color: yellow;
                  height: 880px;
                  display: flex;
                  flex-direction: row;
                  align-items: center;
                  justify-content: center;
                  border-radius: 5px;
            }

            input[type=text],[type=password],[type=email],[type=tel] {
                  width: 300px;
                  padding: 7px;
                  margin: 5px;
                  border: 1px solid black;
                  font-family: Helvetica, Arial, sans-serif;
                  font-size: 15px;
                  border: 2px solid #555;
                 
            
            }
            input[type=text],[type=password],[type=email],[type=tel]:focus{
            	border: 2px solid #555;
              width: 300px;
              background-repeat: no-repeat;
            }

            input[type=date]{
               font: "Roboto Mono",monospace;
            }




            ::-webkit-calendar-picker-indicator{
              background-color: white;
              padding: 4px;
              cursor: pointer;
              border-radius: 3px;
            }

            .nazev{
              width: 380px;
            }

            .zeme_box{
              display: inline-block;
              text-align: left;
              border-bottom: 1px solid black;
              padding-bottom: 10px;
              margin-bottom: 10px; 
              
             
            }
            .zeme_box select{
              margin-left: 100px;
            }

            .datum_narozeni_box{
              display: inline-block;
              text-align: left;
              width: 390px;
              border-bottom: 1px solid black;
              padding-bottom: 10px;
              margin-bottom: 10px; 
            }
            .datum_narozeni_box input{
              margin-left: 50px; 
            }
            
            b {
              font-size: 17px;
              font-family: Helvetica, Arial, sans-serif;
              
            }
            .select_zeme{
            	margin-bottom: 3px;
            	margin:1px;
            }
            div.pohlavi {
                  line-height: 1.4;
                  border-bottom: 1px solid black;
                  padding-bottom: 10px;
                  margin-bottom: 10px; 
                  width: 390px;
                  text-align: left;
            }
            
            div.pohlavi input {
                  display: inline-block;
                  
                  margin-right: 4.5px;
                  text-align: left;
            }

            .pohlavi b{
              margin-right: 45px;
            }

            .podminky_box{
              width: 380px;
              text-align: left;
              margin-bottom: 10px;
            }
            .podminky_box input{
              border: none;
            }
            

            button {
                  color: white;
                  background-color: #0066ff;
                  width: 200px;
                  height: 45px;
                  font-size: 18px;
                  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
           		    font-size: 1.2em;
           		    font-weight: bold;
                  margin: 4%;
                  border-radius:2px;
                  border: 2px solid transparent;
                  
                  
            }
            .button_click{
            	cursor: pointer;
            }

            .button_click:hover{
            	background: rgb(96,9,240);
 				     background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
            }

            div.prihlasit {
                  width: 200px;
                  margin: 1%;
                  text-align: left;
                  
            }
            div.prihlasit a {
                  color: blue;
                  font-size: 17px;
                  font-family: Helvetica, Arial, sans-serif;


            }
            div.prihlasit a:hover{
              color: rgb(96,9,240);
            }
            div.nezname {
                  width: 270px;
            }

            @media only screen and (max-width: 700px){
              main{
                width: 100%;
              }

              .register_container{
                width:97%;
                margin-right: -10px;
              }
              form{
                width: 100%;
                height: 930px;
                border: none;
                margin-right: 0;
                margin-left: -9px;
                padding-left: 0px;
               
              }
              .form_in{
                width: 100%;
                margin-right: 0;
                
              }
              h2{
                font-size: 1.5rem;
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
              input[type=text],[type=password],[type=email],[type=tel] {
                width:90%;
              }
              .nazev{
                width: 100%;
              }
              .datum_narozeni_box{
                width: 90%;
              }
              div.pohlavi{
                width: 85%;
                margin-left: 24px;
                
              }
              div.nezname{
                width: 95%;
              }
              .podminky_box{
                width: 90%;
                padding-left: 25px;
              }
              button{
                width: 50%;
              }
              footer{
                width: 100%;
              }
              div.prihlasit{
                width: 90%;
              }
              .zeme_box{
                width: 90%;
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
          
        </div>
			</header>
			<article class="main">
				<div class="register_container">
        		 <form method="POST" action="signup.php">
        		   <div class="form_in">
        		    <h2><?php echo $lang['nadpis_registrace'];?></h2>
                <div class='nazev'>
        		      <b class="nadtext"><?php echo $lang['jmeno_registrace'];?></b>
        		      <br>
        		      <input type="text" name="name" placeholder="<?php echo $lang['jmeno_registrace'];?>" maxlength="15" required></input>
                </div>
        		    <br>
                <div class='nazev'>
        		      <b class="nadtext"><?php echo $lang['prijmeni_registrace'];?></b>
        		      <br>
        		      <input type="text" name="surname" placeholder="<?php echo $lang['prijmeni_registrace'];?>" maxlength="15" required>
                </div>
        		    <br>
                <div class='nazev'>
        		      <b class="nadtext">Email</b>
        		      <br>
        		      <input type="email" name="email" placeholder="Email" maxlength="60" required>
                </div>
        		    <br>
                <div class='nazev'>
        		      <b class="nadtext"><?php echo $lang['telefon_registrace'];?></b>
        		      <br>
        		      <input type="tel" name="phonenumber" placeholder="<?php echo $lang['telefon_registrace'];?>" required>
        		    </div>
                <br>
                <div class='nazev'>
        		      <b class="nadtext"><?php echo $lang['prezdivka_registrace'];?></b>
        		      <br>
        		      <input type="text" name="username" placeholder="<?php echo $lang['prezdivka_registrace'];?>" maxlength="20" required>
        		    </div>
                <br>
                <div class='nazev'>
        		      <b class="nadtext"><?php echo $lang['heslo_registrace'];?></b>
        		      <br>
        		      <input type="password" name="password_1" placeholder="<?php echo $lang['heslo_registrace'];?>" required>
        		    </div>
                <br>
                <div class='nazev'>
        		      <b class="nadtext"><?php echo $lang['heslo2_registrace'];?></b>
        		      <br>
        		      <input type="password" name="password_2" placeholder="<?php echo $lang['heslo2_registrace'];?>"required>     
        		    </div>
                <br>
                <div class="zeme_box">
        		      <b><?php echo $lang['zeme_registrace'];?></b>
        		      <select class="select_zeme" name="zeme" required>
        					 <option value="GB">United Kingdom</option>
                            <option value="AL">Albania</option>
                            <option value="AD">Andorra</option>
                            <option value="AT">Austria</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BG">Bulgaria</option>
                            <option value="HR">Croatia (Hrvatska)</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="FR">France</option>
                            <option value="GI">Gibraltar</option>
                            <option value="DE">Germany</option>
                            <option value="GR">Greece</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HU">Hungary</option>
                            <option value="IT">Italy</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MK">Macedonia</option>
                            <option value="MT">Malta</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="ME">Montenegro</option>
                            <option value="NL">Netherlands</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="RO">Romania</option>
                            <option value="SM">San Marino</option>
                            <option value="RS">Serbia</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="ES">Spain</option>
                            <option value="UA">Ukraine</option>
                            <option value="DK">Denmark</option>
                            <option value="EE">Estonia</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FI">Finland</option>
                            <option value="GL">Greenland</option>
                            <option value="IS">Iceland</option>
                            <option value="IE">Ireland</option>
                            <option value="LV">Latvia</option>
                            <option value="LT">Lithuania</option>
                            <option value="NO">Norway</option>
                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="TR">Turkey</option>		  
        		      </select>
                </div>
                
        		    <div class="pohlavi">
        		    	<b><?php echo $lang['pohlavi_registrace'];?></b>
        		    	<input class="button_click" type="radio" name="pohlavi" value="muž"><?php echo $lang['pohlavi1_registrace'];?>
        		    	<input class="button_click" type="radio" name="pohlavi" value="žena"><?php echo $lang['pohlavi2_registrace'];?>
        		    </div>
                <div class='datum_narozeni_box'>
        		      <b><?php echo $lang['datum_registrace'];?></b>
        		      <input type="date" name="datum_narozeni" max="2004-01-01" required>
                </div>
        		    <br>
        		    <p class="podminky_box"><b><?php echo $lang['podminky_registrace'];?></b>
                  <input type="checkbox" class="button_click" name="podminky" value="ano" required></input><span class="checkmark"></span><?php echo $lang['podminky2_registrace'];?><a href="/about.html"><?php echo $lang['podminky3_registrace'];?></a></p>
            		<button class="button_click" type="submit" name="submit"><p><?php echo $lang['zaregistrovat_registrace'];?></p></button>
            		<div class="prihlasit"><p><a href="login.php"><?php echo $lang['prihlasitse_registrace'];?></a></p></div>
            	   </div>
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
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullUrl, "register=connect") == true) {
                      echo "<p class='error'>".$lang['error1_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=passdifferent") == true) {
                      echo "<p class='error'>".$lang['error2_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=passlength") == true) {
                      echo "<p class='error'>".$lang['error3_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=podminky") == true) {
                      echo "<p class='error'>".$lang['error4_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=empty") == true) {
                      echo "<p class='error'>".$lang['error5_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=emailincorrect") == true) {
                      echo "<p class='error'>".$lang['error6_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=nameincorrect") == true) {
                      echo "<p class='error'>".$lang['error7_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=surnameincorrect") == true) {
                      echo "<p class='error'>".$lang['error8_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=usernameincorrect") == true) {
                      echo "<p class='error'>".$lang['error9_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=numberincorrect") == true) {
                      echo "<p class='error'>".$lang['error10_register']."</p>";
                }  
                elseif(strpos($fullUrl, "register=passincorrect") == true) {
                      echo "<p class='error'>".$lang['error11_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=usernameexist") == true) {
                      echo "<p class='error'>".$lang['error12_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=emailexist") == true) {
                      echo "<p class='error'>".$lang['error13_register']."</p>";
                }
                elseif(strpos($fullUrl, "register=success") == true) {
                      echo "<p class='success'>".$lang['success_register']."</p>";
                      #header("Location: registered.php");
                }
?>
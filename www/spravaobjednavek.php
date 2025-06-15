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
    <link rel="icon" type="image/x-icon" sizes- href="logo/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <style type="text/css">
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
        margin-top: 15px;
        min-width: 1200px;
        max-width: 100%;

      }
      .sprava_nadpis{
        text-align: center;
        margin-bottom: 20px;

      }
      .ucet_container2{
        width: 100%;
        align-self: center;
        min-height: 700px;
        text-align: left;
        box-shadow: 0px 0px 15px hsla(113, 100%, 50%, .5);
        backdrop-filter: blur(10px);

      }
      .ucet_container2 > *{
        
      }
      #header_buttons{
        margin-right: 5px;
      }
      #ucet_container2_id_content{
        margin-bottom: -15px;
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
      table{
        text-align: center;

      }
     
      .smazat_column{
        border: none;
      }
      .action_div{
        height: 35px;
        
      }
      .action_div.show{
        opacity: 1;
        animation: fadeIn 5s;
        -webkit-animation: fadeIn 5s;
        -moz-animation: fadeIn 5s;
        -o-animation: fadeIn 5s;
        -ms-animation: fadeIn 5s;     
      }
      .action_div.hide{
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
        
        if($row[10] == 'ADMIN'){
          $sprava_button = "<button class='btn btn-primary' type='submit' onclick='show_objednavky()'>Správa objednávek</button>";
        }
        else{
          $sprava_button = '';
        }
        $html = "
            <div class='ucet_container1'>
              <div id='action_divid' class='action_div'><p id='action_window' class='action_text text-center fs-5 fw-bolder'></p></div>
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
                  ".show_objednavky_window()."
                </div>  
              </div>
            </div>
            ";
          echo $html;
      }
      else{
          echo "<div class='position-absolute top-50 start-50 translate-middle'><p class='text text-center fs-4 fw-bolder text-warning'>".$lang['login_odhlasen']."</p></div>";
      }

      function show_objednavky_window(){
        include 'databasereal.php';
        $html = "
        <table id='table_id' class='table table-dark table-striped table-hover' style='width:100%'>
          <thead>
            <tr>
              <th scope='col'>id</th>
              <th scope='col' style='width:8%'>datum</th>
              <th scope='col'>nazev</th>
              <th scope='col'>email</th>
              <th scope='col'>druhy</th>
              <th scope='col'>vaha</th>
              <th scope='col'>sirka</th>
              <th scope='col'>vyska</th>
              <th scope='col'>hloubka</th>
              <th scope='col'>material</th>
              <th scope='col' style='width:20%'>popis</th>
              <th scope='col' style='width:10%'>cinnost</th>
              <th scope='col'>Uživatel</th>
            </tr>
          </thead>
        ";
        $sql1 = "SELECT * FROM zakazky ORDER BY id_zak DESC";
        $result1 = mysqli_query($conn,$sql1);
        
        while ($row = mysqli_fetch_assoc($result1)){
            $html .= "<tbody><tr ondblclick='UkazObjednavku(".$row['id_zak'].")'>";
              if($row['id_uziv']){
                $id_uzivatele = $row['id_uziv'];
                $sql2 = "SELECT CONCAT(prijmeni,' ', jmeno) AS 'jmeno' FROM ucty WHERE id = '$id_uzivatele' limit 1";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_array($result2);
                $row['id_uziv'] = $row2['jmeno'];
              }
              foreach ($row as $field => $value) { 
                $html .= "<td>" . $value . "</td>"; 
              }
            $html .= "<td class='smazat_column table-light'><button class='btn btn-danger btn-sm p-1 m-1' type='button' onclick='Vymaz_objednavku(".$row['id_zak'].");'>Smazat</button></td></tr></tbody>";
        }
        $html .= '</table>';
        $html .= "<script>
                    var tble = document.getElementById('table_id');
                    var row = tble.rows; 
                    for (var i = 0; i < row[0].cells.length; i++) {
                      var str = row[0].cells[i].innerHTML;
                      if (str.search('id') == 0) { 
                        for (var j = 0; j < row.length; j++){
                          row[j].deleteCell(i);
                        }
                      }
                    }
                  </script>";
        return $html;
      }
    
      function vymazat_objednavku($id_zakazky){
        include 'databasereal.php';
        $id = mysqli_real_escape_string($conn, $id_zakazky); 
        $sql3 = "DELETE FROM `zakazky` WHERE `id_zak` = '$id';";
        $result3 = mysqli_query($conn,$sql3);
        if($result3){
          return;
        }
        else{
          return;
        }
      }
      if(isset($_GET['smazani']) == 'true') {
        vymazat_objednavku($_GET['postid_zak']);
        if(isset($_GET['smazani'])){
          $_GET['smazani'] == 'false';
        }
      }    
      ?>
    <script>
      function Vymaz_objednavku(id_zakazky){
        if (confirm("Opravdu chcete smazat tuto objednávku?")) {
           const xmlhttp = new XMLHttpRequest();
           xmlhttp.onload = function() {
            var actiontext = document.getElementById('action_window');
                var actiondiv = document.getElementById('action_divid');
                function ShowText(){
                  actiontext.classList.add('text-success');
                  actiondiv.classList.add('show');
                  actiontext.innerHTML = 'Objednávka byla smazána.';
                  setTimeout(HideText, 5000); 
                  setTimeout(ClearText, 9000);
                  return;
                }
                function HideText(){
                  actiondiv.classList.remove('show');
                  actiondiv.classList.add('hide');
                  return;
                }
                function SmazSeznam(){
                  var seznam_id = document.getElementById("table_id");
                  seznam_id.parentNode.removeChild(seznam_id);
                  return;
                }
                function ReloadSeznam(){
                  //var container_content = document.querySelectorAll('#ucet_container2_id_content');
                  $('#ucet_container2_id_content').load('load_seznam.php');
                  return;
                }
                function ClearText(){
                  actiondiv.classList.remove('hide');
                  actiontext.innerHTML = '';
                  document.location.href = 'spravaobjednavek.php';
                  return;
                }
                ShowText();
                setTimeout(SmazSeznam, 3000);
                setTimeout(ReloadSeznam,6000);
                //setTimeout(GetUrl, 9001);
            }
          xmlhttp.open("GET", "spravaobjednavek.php?smazani=true&postid_zak="+id_zakazky);
          xmlhttp.send();

        } 
      }

      function UkazObjednavku(id){
        var http = new XMLHttpRequest();
        var params = 'showemail=true&id='+id;
        http.open("POST", "odpovedet_email.php", true);
        http.onreadystatechange = function() {
            if(http.readyState == 4 && http.status == 200) {
              document.location.href = 'odpovedet_email.php?showemail=true&id='+id;
            }
            else{
              ShowTextInsert('text-warning','Chyba spojení se serverem, zkuste to později.');
            }

          }
          http.send(params);
      }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php
if (isset($_SESSION['success'])){
  echo "<div class='login_bar position-absolute top-0 start-0 mt-0.5 ms-1 fw-bolder'><a class='logout_btn' href='logout.php'>".$lang['login_odhlasit']."</a></div>";
}
?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



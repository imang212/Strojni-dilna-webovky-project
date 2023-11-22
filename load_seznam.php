<?php
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
echo show_objednavky_window();
?>
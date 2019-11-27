<?php
function dbverbindung(){
    //zur Datenbank verbinden 
    $db = new mysqli('localhost', 'root', '', 'shop', 3306);     
  
    // Check connection 
    if ($db->connect_error) { 
        die("Connection failed: " . $this->dbConnection->connect_error); 
    }  else{
        return $db;
    }
  }



  function getAllCasinos(){
      //Strasse, Nummer, Öffnungszeit
    $db = dbverbindung();
    $sql_casino = 'select * from casion';
    $result_casino = $db->query($sql_casino);
    while($row = mysqli_fetch_assoc($result_casino)){
        echo ''.$row['strasse'], $row['nummer'].'';

        $ID_casino = $row['ID_casino'];

        $sql_zeit = "select * from oeffnungszeiten where casino_ID = '$ID_casino';";
        $result_zeit = $db->query($sql_zeit);
        while($zeit = mysqli_fetch_assoc($result_zeit)){
        echo ''.$zeit['zeit'].'';
        }
    } 

  }

 
  function getCasinosByName($id){
    //Strasse, Nummer, Öffnungszeit
  $db = dbverbindung();
  $sql_casino = "select * from casion where ID_casino = '$id'";
  $result_casino = $db->query($sql_casino);
  while($row = mysqli_fetch_assoc($result_casino)){
      echo ''.$row['strasse'], $row['nummer'].'';

      $sql_zeit = "select * from oeffnungszeiten where casino_ID = '$id';";
      $result_zeit = $db->query($sql_zeit);
      while($zeit = mysqli_fetch_assoc($result_zeit)){
      echo ''.$zeit['zeit'].'';
      }
  } 

}


  ?>

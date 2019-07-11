<?php
include("../db_connection.php");

   $departid = $_POST['depart'];  

    
    $sql = "SELECT `legalId`,`beneficiariesName`, `beneficiariesRelation`, `benficiariesAddress` FROM `benefeciaries` WHERE applicantid=".$departid;
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

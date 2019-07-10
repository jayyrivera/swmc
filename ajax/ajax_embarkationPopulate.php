<?php
include("../db_connection.php");


    
    $sql = "SELECT `status`, `rank`,`firstname`, `lastname`, `vessel`, `type`, `grossTonage`, `dateEnrolled`, `port_fdids_1`, `duration`, `embarkedDate_sbds`, `disembarkedDate_sbds`,`remarks` from embarktion_tbl
    ";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

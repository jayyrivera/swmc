<?php
include("../db_connection.php");


    
    $sql = "SELECT `vesselname`, `operation_date`, `due_date`, `destination`, `total_capacity`, `remarks` FROM `principal_form`";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

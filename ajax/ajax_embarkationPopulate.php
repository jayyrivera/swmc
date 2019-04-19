<?php
include("../db_connection.php");


    
    $sql = "SELECT `status`, `rank`, `vessel`, `type`, `grossTonage`, `dateEnrolled`, `port_fdids_1`, `duration`, `disembarked_fdids_1`, `embarkedDate_sbds`,
    `disembarkedDate_sbds`, `performanceEvaluation`, `willingnessToJoin`, `availability`, `nextVessel`, 
   `license`, `commentFromPrin`, `remarks` FROM `embarktion_tbl`";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

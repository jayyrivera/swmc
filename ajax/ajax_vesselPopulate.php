<?php
include("../db_connection.php");


    
    $sql = "SELECT `vesselno`, `vesselname`, `principal`, `flag`, `grosstonage`, `jsu`, `enginemake`, `portregistry`, `officialno`, `cba`, `imono`, `vesselabr`, `status`, `hpkw`, `classification`, `type`, `dateenrolled`, `yearbuilt` FROM `vessel`";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

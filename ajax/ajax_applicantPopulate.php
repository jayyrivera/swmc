<?php
include("../db_connection.php");

$columns = array( 
    // datatable column index  => database column name
        0 => 'First Name',
        1 => 'Last Name',
        2 => 'Middle Name',
        3 => 'Gender',
        4 => 'Age',
        5 => 'Birthdate',
        6 => 'Mobile No.',
        7 => 'Address',
    );
    
    $sql = "SELECT `applicant_status`, `firstname`,`lastname`, `middlename`, `gender`, `age`, `address`, `birthdate`, `mobileno` FROM `applicant_tbl`";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

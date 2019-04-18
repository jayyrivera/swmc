<?php
include("../db_connection.php");

$columns = array( 
    // datatable column index  => database column name
        0 => 'firstname',
        1 => 'lastname',
        2 => 'middlename',
        3 => 'gender',
        4 => 'age',
        5 => 'birthdate',
        6 => 'mobileno',
        7 => 'address',
    );
    
    $sql = "SELECT `firstname`,`lastname`, `middlename`, `gender`, `age`, `address`, `birthdate`, `mobileno` FROM `applicant_tbl`";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    $dataArray = array();
    
    while( $row = mysqli_fetch_array($res) ) {

        
    
        $dataArray[] = $row["firstname"];
        $dataArray[] = $row["lastname"];
        $dataArray[] = $row["middlename"];
        $dataArray[] = $row["gender"];
        $dataArray[] = $row["age"];
        $dataArray[] = $row["birthdate"];
        $dataArray[] = $row["mobileno"];
        $dataArray[] = $row["address"];

    
        
    
    }
    
    echo json_encode($dataArray);

    ?>

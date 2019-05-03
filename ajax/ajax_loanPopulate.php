<?php
include("../db_connection.php");


    
    $sql = "SELECT loan_existing, applicant_tbl.firstname, applicant_tbl.lastname, loan_category, loan_type from applicant_loan INNER JOIN applicant_tbl ON applicant_tbl.applicantId = applicant_loan.applicantId";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

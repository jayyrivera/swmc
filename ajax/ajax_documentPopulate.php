<?php
include("../db_connection.php");


    
    $sql = "SELECT applicant_tbl.applicantid, applicant_tbl.firstname, applicant_tbl.lastname, applicant_tbl.middlename, applicant_documents.documentName, applicant_documents.date_passed, applicant_documents.exp_date FROM applicant_tbl INNER JOIN applicant_documents ON applicant_tbl.applicantId=applicant_documents.applicantid ORDER BY YEAR(applicant_documents.exp_date) ASC";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

    // $dataArray = array();
    
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $output["aaData"][] = $row;
    
      }
      
      echo json_encode( $output );
    
    // echo json_encode($dataArray);

    ?>

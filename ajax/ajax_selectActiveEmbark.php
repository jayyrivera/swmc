<?php
include("../db_connection.php");

$sql = "select applicant_tbl.applicantId, applicant_tbl.firstname, applicant_tbl.lastname, applicant_tbl.middlename from applicant_tbl WHERE applicant_tbl.applicantid IN ( SELECT applicant_documents.applicantid FROM applicant_documents GROUP BY applicant_documents.applicantid HAVING COUNT(*) > 5 ) 
AND applicant_tbl.applicant_status = 'Active'";
$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

// $dataArray = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output[] = $row;

  }
  
  echo json_encode( $output );



?>
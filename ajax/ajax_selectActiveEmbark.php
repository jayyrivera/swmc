<?php
include("../db_connection.php");

$sql = "SELECT applicantid, firstname, lastname, middlename FROM `applicant_tbl` where applicant_status = 'Active'";
$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

// $dataArray = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output[] = $row;

  }
  
  echo json_encode( $output );



?>
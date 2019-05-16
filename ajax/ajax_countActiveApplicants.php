<?php
include("../db_connection.php");
  // department id

$sql = "select COUNT(applicantid) as count from applicant_tbl where applicant_status = 'Active'";

$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

$users_arr = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output[] = $row;

  }
  

// encoding array to json format
echo json_encode($output);

?>
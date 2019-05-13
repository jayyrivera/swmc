<?php
include("../db_connection.php");

$departid = $_POST['depart'];   // department id

$sql = "SELECT * FROM educationalandgov WHERE applicantid=".$departid;

$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

$users_arr = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output[] = $row;

  }
  

// encoding array to json format
echo json_encode($output);

?>
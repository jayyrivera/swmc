<?php
include("../db_connection.php");

$sql = "SELECT vesselid, vesselno FROM `vessel`";
$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

// $dataArray = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output[] = $row;

  }
  
  echo json_encode( $output );



?>
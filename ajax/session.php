<?php

session_start();
include("../db_connection.php");
if(isset($_SESSION['user'])){

$value = $_SESSION['user'];

$sql = "SELECT designation, CONCAT(first_name, ' ', last_name) as fullname FROM `users` WHERE email ='$value'";

$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));


while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output = $row;

  }

// $dataArray = array();


  print($row);
  echo json_encode( $output );
}

?>
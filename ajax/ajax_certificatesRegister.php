<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $certificateName = $_POST['certificateName'];
    $certificateCat = $_POST['certificateCat'];

    $sql = "INSERT INTO `certificates_training_tbl`(`title`, `category`) VALUES ('".$certificateName."','".$certificateCat."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
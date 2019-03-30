<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $regFname = $_POST['regFname'];
    $regLname = $_POST['regLname'];
    $regEmailAdd = $_POST['regEmailAdd'];
    $regPass = $_POST['regPass'];

    $sql = "INSERT INTO `users`(`first_name`, `last_name`,`email`, `password`) 
                VALUES ('".$regFname."','".$regLname."','".$regEmailAdd."','".$regPass."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
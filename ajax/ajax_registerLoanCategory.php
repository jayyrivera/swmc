<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $loanCategory = $_POST['loanCategory'];

    $sql = "INSERT INTO `loan_category`( `category`) VALUES ('".$loanCategory."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
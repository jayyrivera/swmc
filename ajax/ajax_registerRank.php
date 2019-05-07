<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $rankName = $_POST['rankName'];
    $rankCode = $_POST['rankCode'];
    $rankCat = $_POST['rankCat'];

    $sql = "INSERT INTO `ranks`(`rank`, `rankCode`, `category`)
                VALUES ('".$rankName."','".$rankCode."','".$rankCat."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
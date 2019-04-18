<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $agency = $_POST['agency'];
    $principal = $_POST['principal'];
    $vessel = $_POST['vessel'];

    $sql = "INSERT INTO `rps`(`applicantid`, `agencyrps`, `principalrps`, `vesselrps`) 
    VALUES((SELECT MAX(applicantId) FROM applicant_tbl),'".$agency."','".$principal."','".$vessel."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
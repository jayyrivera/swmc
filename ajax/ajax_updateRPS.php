<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
    $regFname = $_POST['sel_name'];
    $agency = $_POST['agency'];
    $principal = $_POST['principal'];
    $vessel = $_POST['vessel'];

    $sql = "UPDATE `rps` SET `agencyrps`='".$agency."',`principalrps`='".$principal."',`vesselrps`='".$vessel."' WHERE applicantid = '".$regFname."'";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
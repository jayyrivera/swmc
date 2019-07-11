<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
    
    $dependentName = $_POST['dependentName'];
    $dependentRelation = $_POST['dependentRelation'];
    $dependentDob = $_POST['dependentDob'];
    $dependentid = $_POST['dependentid'];
   


    $sql = "UPDATE `dependents` SET `dependentName`='$dependentName',`dependentRelation`='$dependentRelation',`dependentDob`='$dependentDob' WHERE dependentid = ".$dependentid;

    

    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
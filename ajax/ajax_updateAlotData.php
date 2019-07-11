<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
    
    $alottename = $_POST['alottename'];
    $alotterelation = $_POST['alotterelation'];
    $alotteaddres = $_POST['alotteaddres'];
    $alotteid = $_POST['alotteid'];
   


    $sql = "UPDATE `alotte` SET `alottename`='$alottename',`alotterelation`='$alotterelation',`alotteaddres`='$alotteaddres' WHERE alotteid = ".$alotteid;

    

    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
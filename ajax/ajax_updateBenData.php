<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
    
    $beneficiariesName = $_POST['beneficiariesName'];
    $beneficiariesRelation = $_POST['beneficiariesRelation'];
    $benficiariesAddress = $_POST['benficiariesAddress'];
    $legalId = $_POST['legalId'];
   


    $sql = "UPDATE `benefeciaries` SET `beneficiariesName`='$beneficiariesName',`beneficiariesRelation`='$beneficiariesRelation',`benficiariesAddress`='$benficiariesAddress' WHERE legalId = ".$legalId;

    

    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
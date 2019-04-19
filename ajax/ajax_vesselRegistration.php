<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

   
    $vesselNo = $_POST['vesselNo'];
    $vesselName = $_POST['vesselName'];
    $vesselPrincipal = $_POST['vesselPrincipal'];
    $vesselFlag = $_POST['vesselFlag'];
    $vesselGross = $_POST['vesselGross'];
    $vesselJSU = $_POST['vesselJSU'];
    $vesselEngine = $_POST['vesselEngine'];
    $vesselPort = $_POST['vesselPort'];
    $vesselOff = $_POST['vesselOff'];
    $vesselCBA = $_POST['vesselCBA'];
    $vesselIMO = $_POST['vesselIMO'];
    $vesselAbr = $_POST['vesselAbr'];
    $vesselStatus = $_POST['vesselStatus'];
    $vesselHp = $_POST['vesselHp'];
    $classificationVessel = $_POST['classificationVessel'];
    $vesselType = $_POST['vesselType'];
    $dateEnrolled = $_POST['dateEnrolled'];
    $yearBuilt = $_POST['yearBuilt'];


    $sql = "INSERT INTO `vessel`( `vesselno`, `vesselname`, `principal`, `flag`, `grosstonage`, `jsu`, `enginemake`, `portregistry`, `officialno`, `cba`, `imono`, 
    `vesselabr`, `status`, `hpkw`, `classification`, `type`, `dateenrolled`, `yearbuilt`) 
    VALUES ('".$vesselNo."','".$vesselName."','".$vesselPrincipal."','".$vesselFlag."','".$vesselGross."','".$vesselJSU."','".$vesselEngine."',
    '".$vesselPort."','".$vesselOff."','".$vesselCBA."','".$vesselIMO."','".$vesselAbr."','".$vesselStatus."','".$vesselHp."','".$classificationVessel."',
    '".$vesselType."','".$dateEnrolled."','".$yearBuilt."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
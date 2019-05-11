<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $request_vessel = $_POST['request_vessel'];
    $dateEnrolledRequest = $_POST['dateEnrolledRequest'];
    $due_date = $_POST['due_date'];
    $destination = $_POST['destination'];
    $capacity = $_POST['capacity'];
    $remarksReq = $_POST['remarksReq'];

    $sql = "INSERT INTO `principal_form`(`vesselname`, `operation_date`, `due_date`, `destination`, `total_capacity`, `remarks`) VALUES 
    ('".$request_vessel."','".$dateEnrolledRequest."','".$due_date."','".$destination."','".$capacity."','".$remarksReq."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
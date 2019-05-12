<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $sel_name = $_POST['sel_name'];
    $sel_lname = $_POST['sel_lname'];
    $mainEmail = $_POST['mainEmail'];
    $mainPass = $_POST['mainPass'];
    $regRole = $_POST['sel_role'];
    // $departid = $_POST['depart']; 

    $sql = "UPDATE `users` SET `first_name`= '".$sel_name."',`last_name`= '".$sel_lname."',`email`= '".$mainEmail."',`password`= '".$mainPass."',`designation`= '".$regRole."' WHERE first_name = '".$sel_name."'";
    if (mysqli_query($conn, $sql)) {
        
       
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
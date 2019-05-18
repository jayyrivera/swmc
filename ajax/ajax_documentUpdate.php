<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $applicantID = $_POST['applicantid'];
    $sel_name = $_POST['docname'];
    $sel_lname = $_POST['datepassed'];
    $mainEmail = $_POST['datexp'];
    // $departid = $_POST['depart']; 

    $sql = "UPDATE `applicant_documents` SET `documentName`=  '".$sel_name."',`date_passed`= '".$sel_lname."',`exp_date`= '".$mainEmail."' WHERE applicantid =  '".$applicantID."'";
    if (mysqli_query($conn, $sql)) {
        
       
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
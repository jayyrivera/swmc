<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $loan_cat = $_POST['loan_cat'];
    $loan_type = $_POST['loan_type'];
    $loanStatus = $_POST['loanStatus'];
    $sel_name = $_POST['sel_name'];

   


    $sql = "INSERT INTO `applicant_loan`(`applicantid`, `loan_category`, `loan_type`, `loan_existing`) VALUES ('".$sel_name."','".$loan_cat."','".$loan_type."','".$loanStatus."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
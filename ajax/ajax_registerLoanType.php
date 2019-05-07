<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $loanCategory = $_POST['loanType'];
    $sel_loan_cat = $_POST['sel_loan_cat'];

    $sql = "INSERT INTO `loan_type`(`loan_type`, `category`) VALUES  ('".$loanCategory."', (SELECT category FROM `loan_category` WHERE category = '".$sel_loan_cat."'))";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);
    
}


?>
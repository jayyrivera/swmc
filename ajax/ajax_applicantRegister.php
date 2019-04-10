<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $regFname = $_POST['firtNameApplicant'];
    $regLname = $_POST['lastNameApplicant'];
    $regMiddleName = $_POST['middleNameApplicant'];
    $regStatus = $_POST['cStatus'];
    $regGender = $_POST['genderID'];
    $regSuffix = $_POST['suffixID'];
    $regAddress = $_POST['address'];
    $regAge = $_POST['ageID'];


    $sql = "INSERT INTO `applicant_tbl`(`firstname`, `lastname`, `middlename`, `suffix`, `civilstatus`, `gender`, `age`, `address`, `religion`, `citizenship`, `birthdate`, `placeofbirth`, `telephoneno`, `mobileno`, `height`, 
    `weight`, `spouse_firstname`, `spouse_middlename`, `spouse_lastname`, `spouse_suffix`, `noofchildren`, `father_firstname`, `father_middlename`, `father_lastname`, `father_suffix`, `mother_firstname`
    , `mother_middlename`, `mother_lastname`, `mother_suffix`) 
                VALUES ('".$regFname."','".$regLname."','".$regMiddleName."','".$regSuffix."','".$regStatus."','".$regGender."','".$regAge."','".$regAddress."')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
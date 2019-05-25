<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
   
    $files = $_POST['idname'];
    $regFname = $_POST['firtNameApplicant'];
    $regLname = $_POST['lastNameApplicant'];
    $regMiddleName = $_POST['middleNameApplicant'];
    $regStatus = $_POST['cStatus'];
    $regGender = $_POST['genderID'];
    $regSuffix = $_POST['suffixID'];
    $regAddress = $_POST['address'];
    $regAge = $_POST['ageID'];
    $placeofbirth = $_POST['placeofbirth'];
    $religion = $_POST['religion'];
    $citizenship = $_POST['citizenship'];
    $dob = $_POST['dob'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $cellphone = $_POST['cellphone'];
    $telephone = $_POST['telephone'];
    $status = $_POST['applicant_status'];
    
    

    // familybacground
    $firstNameSpouse = $_POST['firstNameSpouse'];
    $lastNameSpouse = $_POST['lastNameSpouse'];
    $middleNameSpouse = $_POST['middleNameSpouse'];
    $suffixSpouse = $_POST['suffixSpouse'];
    $children = $_POST['children'];
    $fatherfirstName = $_POST['fatherfirstName'];
    $fatherlastName = $_POST['fatherlastName'];
    $fathermiddleName = $_POST['fathermiddleName'];
    $fatherSuffix = $_POST['fatherSuffix'];
    $motherFirstName = $_POST['motherFirstName'];
    $motherLastName = $_POST['motherLastName'];
    $motherMiddleName = $_POST['motherMiddleName'];
    $motherSuffix = $_POST['motherSuffix'];


    $sql = "INSERT INTO `applicant_tbl`(`applicant_status`,`firstname`, `lastname`, `middlename`, `suffix`, `civilstatus`, `gender`, `age`, `address`, `religion`, `citizenship`, `birthdate`, `placeofbirth`, `telephoneno`, `mobileno`, `height`, 
    `weight`, `spouse_firstname`, `spouse_middlename`, `spouse_lastname`, `spouse_suffix`, `noofchildren`, `father_firstname`, `father_middlename`, `father_lastname`, `father_suffix`, `mother_firstname`
    , `mother_middlename`, `mother_lastname`, `mother_suffix`) 
                VALUES ('".$status."','".$regFname."','".$regLname."','".$regMiddleName."','".$regSuffix."','".$regStatus."','".$regGender."','".$regAge."','".$regAddress."','".$religion."','".$citizenship."','".$dob."','".$placeofbirth."','".$telephone."'
                ,'".$cellphone."','".$height."','".$weight."','".$firstNameSpouse."','".$middleNameSpouse."','".$lastNameSpouse."','".$suffixSpouse."','".$children."','".$fatherfirstName."'
                ,'".$fathermiddleName."','".$fatherlastName."','".$fatherSuffix."','".$motherFirstName."','".$motherMiddleName."','".$motherLastName."','".$motherSuffix."')";

  
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }

    
    
    echo json_encode($response);
}
?>
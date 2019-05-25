<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
    
    $idname = $_POST['idname'];
    $regFname = $_POST['sel_name'];
    $regLname = $_POST['lastName'];
    $regMiddleName = $_POST['middleName'];
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


    $sql = "UPDATE `applicant_tbl` AS `dest`, ( SELECT * FROM `applicant_tbl` WHERE `applicantid` = '".$regFname."' ) AS `src` SET `dest`.`firstname` = `src`.`firstname`, dest.applicant_status = '".$status."', dest.lastname = '".$regLname."',  dest.`middlename` = '".$regMiddleName."', dest.`suffix` = '".$regSuffix."' , 
    dest.`civilstatus` = '".$regStatus."' , dest.`gender` = '".$regGender."' , dest.`age` = '".$regAge."', dest.`address` = '".$regAddress."' , dest.`religion` = '".$religion."' , dest.`citizenship` = '".$citizenship."' , dest.`birthdate` = '".$dob."' , dest.`placeofbirth` = '".$placeofbirth."' , 
    dest.`telephoneno` = '".$telephone."',  dest.`mobileno` = '".$cellphone."' ,   dest.`height` = '".$height."' ,   dest.`weight` = '".$weight."',   dest.`spouse_firstname` = '".$firstNameSpouse."' ,  dest.`spouse_middlename` = '".$middleNameSpouse."' ,   dest.`spouse_lastname` = '".$lastNameSpouse."' ,   
    dest.`spouse_suffix` = '".$suffixSpouse."' ,   dest.`noofchildren` = '".$children."' ,   dest.`father_firstname` = '".$fatherfirstName."' ,   dest.`father_middlename` = '".$fathermiddleName."' ,   dest.`father_lastname` = '".$fatherlastName."' ,   dest.`father_suffix` = '".$fatherSuffix."' ,  
    dest.`mother_firstname` = '".$motherFirstName."' ,   dest.`mother_middlename` = '".$motherMiddleName."' ,   dest.`mother_lastname` = '".$motherLastName."' ,   dest.`mother_suffix` = '".$motherSuffix."' WHERE `dest`.`applicantid` = '".$regFname."'";

    $pathName = "photos/".$idname;
    
    $sql2 = "UPDATE `applicant_image` SET `imagename`= '".$pathName."' WHERE applicantid ='".$regFname."'";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_query($conn, $sql2)) {
            $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
        }
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
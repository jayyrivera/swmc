<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $school = $_POST['school'];
    $fromEducation = $_POST['fromEducation'];
    $yearEducation = $_POST['yearEducation'];
    $sssno = $_POST['sssno'];
    $srcNo = $_POST['srcNo'];
    $ofwNo = $_POST['ofwNo'];
    $phNo = $_POST['phNo'];
    $pgbno = $_POST['pgbno'];
    $passno = $_POST['passno'];

 

        $sql = "INSERT INTO `educationalandgov`(`applicantId`, `schoolname`, `sch_frm_yr`, `sch_to_yr`, `sss_no`, `src_sid_no`, `ofw_ecard_no`, `philhealth_no`, `passpost_no`, `pagibig_no`) 
        VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$school','$fromEducation','$yearEducation','$sssno','$srcNo','$ofwNo','$phNo','$passno','$pgbno')";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
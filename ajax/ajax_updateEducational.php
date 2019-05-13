<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){
    $regFname = $_POST['sel_name'];
    $school = $_POST['school'];
    $fromEducation = $_POST['fromEducation'];
    $yearEducation = $_POST['yearEducation'];
    $sssno = $_POST['sssno'];
    $srcNo = $_POST['srcNo'];
    $ofwNo = $_POST['ofwNo'];
    $phNo = $_POST['phNo'];
    $pgbno = $_POST['pgbno'];
    $passno = $_POST['passno'];

 

        $sql = "UPDATE `educationalandgov` SET `schoolname`='".$school."',`sch_frm_yr`='".$fromEducation."',`sch_to_yr`='".$yearEducation."',`sss_no`='".$sssno."',`src_sid_no`='".$srcNo."',
        `ofw_ecard_no`='".$ofwNo."',`philhealth_no`='".$phNo."',`passpost_no`='".$passno."',`pagibig_no`='".$pgbno."' WHERE applicantid = '".$regFname."'";

    
    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    
    echo json_encode($response);

}



?>
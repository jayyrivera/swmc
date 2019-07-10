<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    

    $vesselStatus = $_POST['vesselStatus'];
    $rank = $_POST['sel_rank'];
    $firstName = $_POST['sel_name'];
    // $lastname = $_POST['sel_lname'];
    // $middlename = $_POST['sel_mname'];

    $vessel = $_POST['sel_vessel'];
    $type = $_POST['sel_type'];
    $gross = $_POST['sel_gross'];
    
    $dateEnrolled = $_POST['dateEnrolled'];
    $port = $_POST['port'];
    // $disembarkedFlight = $_POST['disembarkedFlight'];
    
    $disembarked = $_POST['disembarked'];
    $duration = $_POST['duration'];
    $embarkedDate = $_POST['embarkedDate'];

    $disembarkedDate = $_POST['disembarkedDate'];
    // $performance = $_POST['performance'];
    // $will = $_POST['will'];

    // $availability = $_POST['availability'];
    // $next = $_POST['next'];
    // $license = $_POST['license'];
    // $comment = $_POST['comment'];
    $remards = $_POST['remards'];

    $sql = "INSERT INTO `embarktion_tbl`(`applicantId`, `firstname`, `lastname`, `middlename`, `status`, `rank`, `vessel`, `dateEnrolled`, `port_fdids_1`, `duration`, `embarkedDate_sbds`, `disembarkedDate_sbds`,`remarks`) 
    VALUES((SELECT MAX(applicantId) FROM applicant_tbl),(SELECT firstname from applicant_tbl where applicantid = $firstName),(SELECT lastname from applicant_tbl where applicantid = $firstName),(SELECT middlename from applicant_tbl where applicantid = $firstName),
    '$vesselStatus','$rank','$vessel','$dateEnrolled','$port',
    '$duration','$embarkedDate','$disembarked','$remards')";

    // print($sql);

    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!"); 
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }

    echo json_encode($response);

}



?>
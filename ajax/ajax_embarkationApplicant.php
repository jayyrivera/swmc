<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    

    $vesselStatus = $_POST['vesselStatus'];
    $rank = $_POST['rank'];
    $firstName = $_POST['sel_name'];
    $lastname = $_POST['sel_lname'];
    $middlename = $_POST['sel_mname'];

    $vessel = $_POST['vessel'];
    $type = $_POST['type'];
    $gross = $_POST['gross'];
    
    $dateEnrolled = $_POST['dateEnrolled'];
    $port = $_POST['port'];
    $disembarkedFlight = $_POST['disembarkedFlight'];
    
    $disembarked = $_POST['disembarked'];
    $duration = $_POST['duration'];
    $embarkedDate = $_POST['embarkedDate'];

    $disembarkedDate = $_POST['disembarkedDate'];
    $performance = $_POST['performance'];
    $will = $_POST['will'];

    $availability = $_POST['availability'];
    $next = $_POST['next'];
    $license = $_POST['license'];
    $comment = $_POST['comment'];
    $remards = $_POST['remards'];

    $sql = "INSERT INTO `embarktion_tbl`(`applicantId`, `status`, `rank`, `vessel`, `type`, `grossTonage`, `dateEnrolled`, `port_fdids_1`, `duration`, `disembarked_fdids_1`, `embarkedDate_sbds`,
     `disembarkedDate_sbds`, `performanceEvaluation`, `willingnessToJoin`, `availability`, `nextVessel`, 
    `license`, `commentFromPrin`, `remarks`) 
    VALUES((SELECT MAX(applicantId) FROM applicant_tbl),'$firstName','$lastname','$middlename','$vesselStatus','$rank','$vessel','$type','$gross','$dateEnrolled','$port',
    '$duration','$disembarkedFlight','$embarkedDate','$disembarked','$performance', '$will','$availability','$next', '$license','$comment','$remards')";


    if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }

    echo json_encode($response);

}



?>
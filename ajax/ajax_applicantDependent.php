<?php
include("../db_connection.php");

if($_POST['function'] == 'save'){

    $dependentsName1 = $_POST['dependentsName1'];
    $dependetsRel1 = $_POST['dependetsRel1'];
    $dateofbirthdependent1 = $_POST['dateofbirthdependent1'];

    $dependentsName2 = $_POST['dependentsName2'];
    $dependetsRel2 = $_POST['dependetsRel2'];
    $dateofbirthdependent2 = $_POST['dateofbirthdependent2'];
    
    $dependentsName3 = $_POST['dependentsName3'];
    $dependetsRel3 = $_POST['dependetsRel3'];
    $dateofbirthdependent3 = $_POST['dateofbirthdependent3'];
  
    $arrayeName= array( $dependentsName1, $dependentsName2, $dependentsName3);
    $arrayRelation= array( $dependetsRel1, $dependetsRel2, $dependetsRel3);
    $arrayDob= array( $dateofbirthdependent1, $dateofbirthdependent2, $dateofbirthdependent3);

    $filtered_array = array_filter($arrayeName); 

    for($i=0;$i<count($filtered_array);$i++){

    $product_name=$arrayeName[$i];
    $sub_product_name=$arrayRelation[$i];
    $plan_name=$arrayDob[$i];

    $sid = mysqli_insert_id($conn);

    $sql = "INSERT INTO `dependents`(`applicantid`, `dependentName`, `dependentRelation`, `dependentDob`) 
    VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$product_name','$sub_product_name','$plan_name')";

   
        if (mysqli_query($conn, $sql)) {
            $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
        } else {
            $response = array("status" => 2, "message" =>  "saving failed!" );
        }

    }

     
    if(count($filtered_array)== 0){
        $response = array("status" => 1, "message" => "EMPTY");
    }
    echo json_encode($response);

}



?>
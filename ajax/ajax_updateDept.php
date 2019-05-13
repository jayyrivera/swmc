<?php
include("../db_connection.php");

if(isset($_POST["item_namedep"]))
{
 $departid = $_POST['depart']; 
 $item_namedep = $_POST["item_namedep"];
 $item_reldep = $_POST["item_reldep"];
 $item_dobdep = $_POST["item_dobdep"];

//  print_r($departid);

 $query = "";
 for($count = 0; $count<count($item_namedep); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($conn, $item_namedep[$count]);
  $item_code_clean = mysqli_real_escape_string($conn, $item_reldep[$count]);
  $item_desc_clean = mysqli_real_escape_string($conn, $item_dobdep[$count]);
  if($item_name_clean != '' && $item_code_clean != '' && $item_desc_clean != '')
  {
   $query = "INSERT INTO `dependents`(`applicantid`,`dependentName`, `dependentRelation`, `dependentDob`) 
        VALUES ((SELECT applicantid FROM applicant_tbl WHERE applicantid = '".$departid."' ),'".$item_name_clean."','".$item_code_clean."','".$item_desc_clean."')";

        if (mysqli_query($conn, $query)) {
            $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
        } else {
            $response = array("status" => 2, "message" =>  "saving failed!" );
        }
        echo json_encode($response);
  }
 }
}



?>
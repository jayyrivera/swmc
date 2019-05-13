<?php
include("../db_connection.php");

if(isset($_POST["item_name"]))
{
 $departid = $_POST['depart']; 
 $item_name = $_POST["item_name"];
 $item_rel = $_POST["item_rel"];
 $item_add = $_POST["item_add"];

 $query = "";
 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($conn, $item_name[$count]);
  $item_code_clean = mysqli_real_escape_string($conn, $item_rel[$count]);
  $item_desc_clean = mysqli_real_escape_string($conn, $item_add[$count]);
  if($item_name_clean != '' && $item_code_clean != '' && $item_desc_clean != '')
  {
   $query = "INSERT INTO `benefeciaries`(`applicantid`, `beneficiariesName`, `beneficiariesRelation`, `benficiariesAddress`)
    VALUES ((SELECT applicantId FROM applicant_tbl where applicantid = '".$departid."'),'$item_name_clean','$item_code_clean','$item_desc_clean')";


        if (mysqli_query($conn, $query)) {
            $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
        } else {
            $response = array("status" => 2, "message" =>  "saving failed!" );
        }
  }
 }
 echo json_encode($response);
 
}



?>
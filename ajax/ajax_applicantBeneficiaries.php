<?php
include("../db_connection.php");

// if($_POST['function'] == 'save'){

//     $benNAme1 = $_POST['benNAme1'];
//     $benRel1 = $_POST['benRel1'];
//     $benAddress1 = $_POST['benAddress1'];

//     $benNAme2 = $_POST['benNAme2'];
//     $benRel2 = $_POST['benRel2'];
//     $benAddress2 = $_POST['benAddress2'];
    
//     $benNAme3= $_POST['benNAme3'];
//     $benRel3 = $_POST['benRel3'];
//     $benAddress3 = $_POST['benAddress3'];

//     $benNAme4 = $_POST['benNAme4'];
//     $benRel4 = $_POST['benRel4'];
//     $benAddress4 = $_POST['benAddress4'];
  
//     $arrayName= array( $benNAme1, $benNAme2, $benNAme3, $benNAme4);
//     $arrayRelation= array( $benRel1, $benRel2, $benRel3, $benRel4);
//     $arrayAdd= array( $benAddress1, $benAddress2, $benAddress3, $benAddress4);

//     $filtered_array = array_filter($arrayName); 

//     for($i=0;$i<count($filtered_array);$i++){

//     $product_name=$arrayName[$i];
//     $sub_product_name=$arrayRelation[$i];
//     $plan_name=$arrayAdd[$i];

//     $sql = "INSERT INTO `benefeciaries`(`applicantid`, `beneficiariesName`, `beneficiariesRelation`, `benficiariesAddress`) 
//     VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$product_name','$sub_product_name','$plan_name')";


//     if (mysqli_query($conn, $sql)) {
//         $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
//     } else {
//         $response = array("status" => 2, "message" =>  "saving failed!" );
//     }

// }
//     if(count($filtered_array)== 0){
//         $response = array("status" => 1, "message" => "EMPTY");
//     }

//     echo json_encode($response);

// }

if(isset($_POST["item_name"]))
{
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
    VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$item_name_clean','$item_code_clean','$item_desc_clean')";


        if (mysqli_query($conn, $query)) {
            $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
        } else {
            $response = array("status" => 2, "message" =>  "saving failed!" );
        }
  }
 }
 
}



?>
<?php
include("../db_connection.php");

// if($_POST['function'] == 'save'){

//     $empty = 0;

//     $nameAllottee1 = $_POST['nameAllottee1'];
//     $relAllottee1 = $_POST['relAllottee1'];
//     $addAllottee1 = $_POST['addAllottee1'];

//     $nameAllottee2 = $_POST['nameAllottee2'];
//     $relAllottee2 = $_POST['relAllottee2'];
//     $addAllottee2 = $_POST['addAllottee2'];
    
//     $nameAllottee3 = $_POST['nameAllottee3'];
//     $relAllottee3 = $_POST['relAllottee3'];
//     $addAllottee3 = $_POST['addAllottee3'];
    
//     $nameAllottee4 = $_POST['nameAllottee4'];
//     $relAllottee4 = $_POST['relAllottee4'];
//     $addAllottee4 = $_POST['addAllottee4'];

//     $nameAllottee5 = $_POST['nameAllottee5'];
//     $relAllottee5 = $_POST['relAllottee5'];
//     $addAllottee5 = $_POST['addAllottee5'];

//     $nameAllottee6 = $_POST['nameAllottee6'];
//     $relAllottee6 = $_POST['relAllottee6'];
//     $addAllottee6 = $_POST['addressAllotte6'];

//     $arrayeName= array( $nameAllottee1, $nameAllottee2, $nameAllottee3,$nameAllottee4,$nameAllottee5,$nameAllottee6);
//     $arrayRelation= array( $relAllottee1, $relAllottee2, $relAllottee3, $relAllottee4, $relAllottee5, $relAllottee6);
//     $arrayDob= array( $addAllottee1, $addAllottee2, $addAllottee3, $addAllottee4, $addAllottee5, $addAllottee6);
   
//     $filtered_array = array_filter($arrayeName); 



    
       
//         for($i=0;$i<count($filtered_array);$i++){
    

//             $product_name=$arrayeName[$i];
//             $sub_product_name=$arrayRelation[$i];
//             $plan_name=$arrayDob[$i];
        
//             $sid = mysqli_insert_id($conn);
        
//             $sql = "INSERT INTO `alotte`(`applicantid`, `alottename`, `alotterelation`, `alotteaddres`)
//              VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$product_name','$sub_product_name','$plan_name')";
        
           
//                 if (mysqli_query($conn, $sql)) {
//                     $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
//                 } else {
//                     $response = array("status" => 2, "message" =>  "saving failed!" );
//                 }
        
//             }
    
//             if(count($filtered_array)== 0){
//                 $response = array("status" => 1, "message" => "EMPTY");
//             }

     
    
//     echo json_encode($response);

// }
if(isset($_POST["alot_name"]))
{

 $alot_name = $_POST["alot_name"];
 $alot_rel = $_POST["alot_rel"];
 $alot_add = $_POST["alot_add"];
 
 $query = "";
 
 for($count = 0; $count<count($alot_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($conn, $alot_name[$count]);
  $item_code_clean = mysqli_real_escape_string($conn, $alot_rel[$count]);
  $item_desc_clean = mysqli_real_escape_string($conn, $alot_add[$count]);
  if($item_name_clean != '' && $item_code_clean != '' && $item_desc_clean != '')
  {
   $query = "INSERT INTO `alotte`( `applicantid`, `alottename`, `alotterelation`, `alotteaddres`) 
        VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$item_name_clean','$item_code_clean','$item_desc_clean')";
  print($query);

        if (mysqli_query($conn, $query)) {
            $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
        } else {
            $response = array("status" => 2, "message" =>  "saving failed!" );
        }
  }
  
 }
 
}



?>
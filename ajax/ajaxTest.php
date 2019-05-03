<?php
//insert.php
include("../db_connection.php");
// if(isset($_POST["item_name"]))
// {
//  $item_name = $_POST["item_name"];
//  $item_code = $_POST["item_code"];
//  $item_desc = $_POST["item_desc"];

// $query = "";
//  for($count = 0; $count<count($item_name); $count++)
//  {
//   $item_name_clean = mysqli_real_escape_string($conn, $item_name[$count]);
//   $item_code_clean = mysqli_real_escape_string($conn, $item_code[$count]);
//   $item_desc_clean = mysqli_real_escape_string($conn, $item_desc[$count]);
//   if($item_name_clean != '' && $item_code_clean != '' && $item_desc_clean != '')
//   {
//    $query = "INSERT INTO `benefeciaries`(`applicantid`, `beneficiariesName`, `beneficiariesRelation`, `benficiariesAddress`)
//     VALUES ((SELECT MAX(applicantId) FROM applicant_tbl),'$item_name_clean','$item_code_clean','$item_desc_clean')";


//         if($query != '')
//         {
//         if(mysqli_multi_query($conn, $query))
//         {
//         echo 'Item Data Inserted';
//         }
//         else
//         {
//             printf(mysqli_error($conn));
//         }
//         }
//         else
//         {
//         echo 'All Fields are Required';
//         }
//   }
//  }
 
// }

$departid = $_POST['depart'];   // department id

$sql = "SELECT applicantid,lastname,middlename FROM applicant_tbl WHERE applicantid=".$departid;

$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

$users_arr = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)){
    $output[] = $row;

  }
  

// encoding array to json format
echo json_encode($output);
?>
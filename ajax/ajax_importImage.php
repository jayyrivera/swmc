<?php  
include("../db_connection.php");
$path = 'uploads/'; // upload directory
if(!empty($_FILES['insertImage']){
    $img = $_FILES['insertImage']['name'];
    $tmp = $_FILES['insertImage']['tmp_name'];

    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
    $final_image = rand(1000,1000000).$img;

    if(in_array($ext, $valid_extensions)) {
        $path = $path.strtolower($final_image); 
        if(move_uploaded_file($tmp,$path)) {
            echo "<img src='$path' />";
            //include database configuration file
            include_once 'db.php';
            //insert form data in the database
            $insert = $db->query("INSERT applicant_tbl (file_name) VALUES ('".$path."')");
            //echo $insert?'ok':'err';
        }
    }
}
   ?>
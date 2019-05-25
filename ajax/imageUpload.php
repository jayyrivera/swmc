<?php

include("../db_connection.php");  
  

$uploads_dir =  realpath(dirname(getcwd()));


// $dirpath = realpath(dirname(getcwd()))
$name = $_FILES['files']['name'];

if (is_uploaded_file($_FILES['files']['tmp_name']))
{       
    $tmppath = "/photos/".$name;
    $pathanme = "photos/".$name;
    // echo $uploads_dir.$tmppath;
    //in case you want to move  the file in uploads directory
     move_uploaded_file($_FILES['files']['tmp_name'], $uploads_dir.$tmppath);

     $wholeName = $uploads_dir.$tmppath;

     $sql = "INSERT INTO `applicant_image`(`imagename`, `applicantid`) VALUES ('".$pathanme."',(SELECT MAX(applicantId) FROM applicant_tbl))";

     if (mysqli_query($conn, $sql)) {
        $response = array("status" => 1, "message" => "Account has been successfulyl registered!");
    } else {
        $response = array("status" => 2, "message" =>  "saving failed!" );
    }
    //  echo 'moved file to destination directory';
    
    }
    echo json_encode($sql);
?> 

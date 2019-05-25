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

}
?> 

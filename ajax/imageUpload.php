<?php
// include("../db_connection.php");
// Check if image file is a actual image or fake image
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
if(isset($_FILES['image']))
{
    $name = $_FILES['image']['name'];
		
    //Getting temporary file name stored in php tmp folder 
    $tmp_name = $_FILES['image']['tmp_name'];
    
    //Path to store files on server
    $path = 'http://localhost/swmc/uploads';
    
    //checking file available or not 
    if(!empty($name)){
        //Moving file to temporary location to upload path 
        move_uploaded_file($tmp_name,$path.$name);
        
        //Displaying success message 
        print("rrrrrr");
        echo "Upload successfully";
    }else{
        //If file not selected displaying a message to choose a file 
        echo "Please choose a file";
        print("sssss");
    }
}

?>
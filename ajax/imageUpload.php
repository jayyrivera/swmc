<?php
include("../db_connection.php");
// Check if image file is a actual image or fake image

if (isset($_FILES['files']) && $_FILES['files']['size'] > 0) { 
    // Temporary file name stored on the server
    $tmpName  = $_FILES['files  ']['tmp_name'];  
    // Read the file 
    $fp      = fopen($tmpName, 'r');
    $data = fread($fp, filesize($tmpName));
    $data = addslashes($data);
    fclose($fp);
    $result = mysql_query("INSERT INTO applicant_image (images)VALUES ( '$data')", $conn);
    if(!$result)
    {
        die("Database query failed: ". mysql_error());
    }
    // Print results

    print "Thank you, your file has been uploaded.";
}
else 
{
    print "No image selected/uploaded";
}

?>
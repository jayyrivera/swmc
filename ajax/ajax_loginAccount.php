<?php
include("../db_connection.php");
 
if($_POST['function'] == 'login'){


    $email=$_POST['loginEmail'];
    $pass=$_POST['loginPassword'];
    $sql = "SELECT * FROM users where email='$email' and password='$pass'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        
        // output data of each row
        session_start();
            $response = array("status" => 1, "message" => "Login Successfully");
            $_SESSION['user'] = $email;
    } else {
        $response = array("status" => 2, "message" =>  "Login failed!" );
    }

echo json_encode($response);
    
}


?>
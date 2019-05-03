<?php  
include("db_connection.php");
 //excel.php  
 if(isset($_GET['export'])){
    if($_GET['export'] == 'true'){
    $query = mysqli_query($conn, 'select * from applicant_loan'); // Get data from Database from demo table
     
     
        $delimiter = ",";
        $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
         
        //create a file pointer
        $f = fopen('php://memory', 'w'); 
         
        //set column headers
        $fields = array('loadid', 'applicantid', 'loan_category', 'loan_type', 'loan_existing');
        fputcsv($f, $fields, $delimiter);
         
        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            
            $lineData = array($row['loadid'], $row['applicantid'], $row['loan_category'], $row['loan_type'], $row['loan_existing']);
            fputcsv($f, $lineData, $delimiter);
        }
         
        //move back to beginning of file
        fseek($f, 0);
         
        //set headers to download file rather than displayed
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
         
        //output all remaining data on a file pointer
        fpassthru($f);
     
     }
    }
 ?>  
<?php  
include("db_connection.php");
 //excel.php  
 if(isset($_GET['export'])){
    if($_GET['export'] == 'true'){
    $query = mysqli_query($conn, 'SELECT `status`, applicant_tbl.firstname, applicant_tbl.lastname, `rank`, `vessel`, `type`, `grossTonage`, `dateEnrolled`, `port_fdids_1`, `duration`, `disembarked_fdids_1`, `embarkedDate_sbds`,`disembarkedDate_sbds`, `performanceEvaluation`, `willingnessToJoin`, `availability`, `nextVessel`,
     `license`, `commentFromPrin`, `remarks`from embarktion_tbl INNER JOIN applicant_tbl ON applicant_tbl.applicantId = embarktion_tbl.applicantId'); // Get data from Database from demo table
     
     
        $delimiter = ",";
        $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
         
        //create a file pointer
        $f = fopen('php://memory', 'w'); 
         
        //set column headers
        $fields = array('status', 'firstname', 'lastname', 'rank', 'vessel', 'dateenrolled', 'embarked', 'availability', 'port_fdids_1', 'duration', 'license');
        fputcsv($f, $fields, $delimiter);
         
        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            
            $lineData = array($row['status'], $row['firstname'], $row['lastname'], $row['rank'], $row['vessel'], $row['dateEnrolled'], $row['embarkedDate_sbds'], 
            $row['availability'], $row['port_fdids_1'], $row['duration'], $row['license']);
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
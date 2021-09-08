<?php


 
// Name of the data file
$filename = 'toto.sql';
// MySQL host
$mysqlHost = 'sql418.main-hosting.eu';
// MySQL username
$mysqlUser = 'u280714611_course';
// MySQL password
$mysqlPassword = '("Dahab2021@LMS");';
// Database name
$mysqlDatabase = 'u280714611_course';

// Connect to MySQL server
$link = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPassword, $mysqlDatabase) or die('Error connecting to MySQL Database: ' . mysqli_error());

$mysqli = new mysqli($mysqlHost,$mysqlUser,$mysqlPassword,$mysqlDatabase); 
$mysqli->select_db($mysqlDatabase); 

// mysql_select_db($mysqlDatabase, $link);
// echo $mysqli->query('SHOW TABLES'); 
$delete= $mysqli->query("DROP TABLE com_students ,torm_students");
// $delete= mysql_query("DROP TABLE com_students");
if($delete !== FALSE)
{
   echo("This table has been deleted. ");
}else{
   echo("This table has not been deleted.");
}

$tempLine = '';
// Read in the full file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {

    // Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

    // Add this line to the current segment
    $tempLine .= $line;
    // If its semicolon at the end, so that is the end of one query
    if (substr(trim($line), -1, 1) == ';')  {
        // Perform the query
        mysqli_query($link, $tempLine) or print("Error in " . $tempLine .":". mysqli_error());
        // Reset temp variable to empty
        $tempLine = '';
    }
}
 echo "Tables imported successfully";
?>
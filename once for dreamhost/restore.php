<?php
// Name of the data file
$filename = 'toto.sql';
// MySQL host
$mysqlHost = 'localhost';
// MySQL username
$mysqlUser = 'root';
// MySQL password
$mysqlPassword = '';
// Database name
$mysqlDatabase = 'course';

// Connect to MySQL server
$link = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPassword, $mysqlDatabase) or die('Error connecting to MySQL Database: ' . mysqli_error());


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
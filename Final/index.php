<?php

 
//  include 'restore.php';
  // require 'restore.php';
 include 'myphp-backup.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/bootstrap.css">
    <link rel="shortcut icon" href="content/server.svg" type="image/x-icon">  
    <title>Backup-Restore</title>
</head>
<body>


<div class="container">




<!-- 
<a href="./myphp-backup.php">aaa</a>
<form action="./Backup.php">
   


    <input type="submit" value="Get Database ">

</form>
    

<form action="./restore.php">
  
  <input type="submit" value="Updaate Database ">
</form> -->

</div>
<div class="mt-5"></div>
<center>
   <div class="container cont" >
            <div class="row ">
                <div class="col-12 con alert alert-success">
                <h1>Database had been Backup <span style='font-size:40px;'>&#128578;</span></h1>
                <!-- <h1>Backup /Restore Database <span style='font-size:40px;'>&#128578;</span></h1> -->

                

                <br>
                 </div>
                <br>
                <div class="col-12">
                <div class="bk">
                <h4>Restore Database</h4>
                    <a href="./restore.php" class="btn btn-primary" type="submit">Press Here</a>
                </div>
                </div>
               
            </div>
             
        </div>
   </center>

</body>
</html>
<?php

 

?>
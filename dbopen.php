<?php
 $host = 'localhost';
 $dbname = 'opisk_t3vatu01';
 $username = 't3vatu01';
 $password = '1525Tuure1525';
 $con = mysqli_connect($host,$username,$password,$dbname);

 if (mysqli_connect_errno()) {
 echo "Failed to connect to mysli database: " . mysqli_connect_error();
 }
 else {
echo ”OK, you are connected”;
 }
 mysqli_close($con);
?>
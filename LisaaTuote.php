<?php
$dbname = 'opisk_t3vatu01';
$dbuser = 't3vatu01';
$dbpass = '';
$dbhost = 'mysli.oamk.fi';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
echo "Failed to connect mysli database: ". mysqli_connect_error();
}



$Koko = mysqli_real_escape_string($connect, $_POST['Size']);
$Vari = mysqli_real_escape_string($connect, $_POST['Col']);
$Hinta = mysqli_real_escape_string($connect, $_POST['Price']);
$Tuotenimi = mysqli_real_escape_string($connect, $_POST['Nm']);
$Tuoteryhma = mysqli_real_escape_string($connect, $_POST['PrGr']);
$Valmistaja = mysqli_real_escape_string($connect, $_POST['ManNam']);
$sql = "CALL LisaaTuote ('$Koko', '$Vari', '$Hinta','$Tuotenimi','$Tuoteryhma', '$Valmistaja')";
if (!mysqli_query($connect, $sql)) {
 die('Error: ' . mysqli_error($connect));
}
echo "1 record added";


mysqli_close($connect);
?>

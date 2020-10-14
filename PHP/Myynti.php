<?php
$dbname = 'opisk_t3vatu01';
$dbuser = 't3vatu01';
$dbpass = '';
$dbhost = 'mysli.oamk.fi';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
echo "Failed to connect mysli database: ". mysqli_connect_error();
}



$Asiakas = mysqli_real_escape_string($connect, $_POST['CN']);
$Viivakoodi = mysqli_real_escape_string($connect, $_POST['BarCod']);
$Kassa= mysqli_real_escape_string($connect, $_POST['Regis']);
$Tyontekija = mysqli_real_escape_string($connect, $_POST['Emp']);
$sql = "CALL Myynti ('$Asiakas', '$Viivakoodi', '$Kassa', '$Tyontekija')";
if (!mysqli_query($connect, $sql)) {
 die('Error: ' . mysqli_error($connect));
}
echo "1 Osto Suoritettu.";


mysqli_close($connect);
?>

  
<!DOCTYPE html>
<html>
<head>
<title> Testing php connection script</title>
</head>
<body>
<h3>Teretulemast koittamaan php-lottoa!</h3>

<?php
$dbname = 't3vatu01';
$dbuser = 't3vatu01';
$dbpass = '';
$dbhost = 'mysli.oamk.fi';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass);

if (mysqli_connect_errno()){
echo "Failed to connect mysli database: ". mysqli_connect_error();
}
else {
echo "OK, You are connected, voitit pelin!";
}

$sql= "Select * FROM KantaAsiakas"
$result = mysqli_query($connect,$sql);

echo "<table border='1'>
 <tr>
 <th>IDAsiakasnumero</th>
 <th>Etunimi</th>
 <th>Sukunimi</th>
 <th>Osoite</th>
 <th>Puhelinnumero</th>
 </tr>";
 while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['IDAsiakasnumero'] . "</td>";
 echo "<td>" . $row['Etunimi'] . "</td>";
 echo "<td>" . $row['Sukunimi'] . "</td>";
 echo "<td>" . $row['Osoite'] . "</td>";
 echo "<td>" . $row['Puhelinnumero'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
}
mysqli_close($connect);
?>

</body>
</html>
<?php
$dbname = 'opisk_t3vatu01';
$dbuser = 't3vatu01';
$dbpass = '';
$dbhost = 'mysli.oamk.fi';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
echo "Failed to connect mysli database: ". mysqli_connect_error();
}
else {
echo "OK, You are connected, voitit pelin!";
}



$result = mysqli_query($connect,"SELECT * FROM KantaAsiakas");

echo "<table border='1'>
 <tr>
 <th>Asiakasnumero</th>
 <th>Etunimi</th>
 <th>Sukunimi</th>
 <th>Osoite</th>
 <th>Puhelinnumero</th>
 </tr>";


 while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['0'] . "</td>";
 echo "<td>" . $row['1'] . "</td>";
 echo "<td>" . $row['2'] . "</td>";
 echo "<td>" . $row['3'] . "</td>";
 echo "<td>" . $row['4'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";


mysqli_close($connect);
?>

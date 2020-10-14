<?php
$dbname = 'opisk_t3vatu01';
$dbuser = 't3vatu01';
$dbpass = '';
$dbhost = 'mysli.oamk.fi';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
echo "Failed to connect mysli database: ". mysqli_connect_error();
}


$sql= "Select * FROM Tuotetiedot";
$result = mysqli_query($connect,$sql);

echo "<table border='1'>
 <tr>
 <th>TuoteID</th>
 <th>Tuote</th>
 <th>Koko</th>
 <th>Vari</th>
 <th>Hinta</th>
 <th>Valmistaja</th>
 <th>Tuoteryhma</th>
 </tr>";
 while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['0'] . "</td>";
 echo "<td>" . $row['1'] . "</td>";
 echo "<td>" . $row['2'] . "</td>";
 echo "<td>" . $row['3'] . "</td>";
 echo "<td>" . $row['4'] . "</td>";
 echo "<td>" . $row['5'] . "</td>";
 echo "<td>" . $row['6'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";

mysqli_close($connect);
?>

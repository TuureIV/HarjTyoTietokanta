<!DOCTYPE html>
<html>
<body>

<?php
$dbname = 't3vatu01';
$dbuser = 't3vatu01';
$dbpass = '';
$dbhost = 'mysli.oamk.fi';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass);

if (mysqli_connect_errno()){
echo "Failed to connect mysli database: ". mysqli_connect_error();
}
$sql= "Select * FROM Kuitti"
$result = mysqli_query($connect,$sql);

echo "<table border='1'>
 <tr>
 <th>IDosto</th>
 <th>Ostohetki</th>
 <th>Asiakasnumero</th>
 <th>Tuotenimi</th>
 <th>Hinta</th>
 <th>Koko</th>
 <th>Viivakoodi</th>
 <th>Kassa</th>
 <th>Myyjä</th>
 </tr>";
 while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['IDosto'] . "</td>";
 echo "<td>" . $row['ostohetki'] . "</td>";
 echo "<td>" . $row['Asiakasnumero'] . "</td>";
 echo "<td>" . $row['Tuotenimi'] . "</td>";
 echo "<td>" . $row['Hinta'] . "</td>";
 echo "<td>" . $row['Koko'] . "</td>";
 echo "<td>" . $row['Viivakoodi'] . "</td>";
 echo "<td>" . $row['Kassa'] . "</td>";
 echo "<td>" . $row['Myyjä'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
}
mysqli_close($connect);
?>

</body>
</html>
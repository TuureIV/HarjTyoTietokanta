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
mysqli_close($connect);
?>
</body>
</html>


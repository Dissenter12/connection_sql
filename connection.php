<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ps4games';

$conn = mysqli_connect($host,$username,$password,$database);
if ($conn)
	echo "connected succesfully<br>";
?>
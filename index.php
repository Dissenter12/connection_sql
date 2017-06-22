<?php
require 'connection.php';
$sql = "SELECT * from employees";
$result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0) {
 	while($row = mysqli_fetch_assoc($result)){
 		extract($row);
 		echo $firstName.'_'. $lastName . '<br>';
 	}
 	
 }
?>
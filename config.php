<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'plants';

 $conn = @mysqli_connect($server,$username,$password,$db_name);
 if(!$conn){
    die("Connect Error");
 }

?>



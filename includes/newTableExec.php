<?php
$server = "localhost";
$user = "root";
$pass = "";
$connect = mysql_connect($server,$user ,$pass);
$user_info = "CREATE TABLE dbccema.`$_POST[name]` (city varchar(13),name varchar(30),address varchar(50),lat varchar(14),lon varchar(13),state bool)"; 
if (!mysql_query($user_info)) { die('Error: ' . mysql_error()); }
echo "Your information was added to the database. Go back";
?>
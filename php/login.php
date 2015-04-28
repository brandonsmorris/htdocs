<?php
$host = "localhost";
$user = "dbccemauser";
$pass = "DBccema5961";
$connection = mysql_connect($host, $user, $pass) or die("Couldn't Connect to Server");
$db = mysql_select_db("location", $connection) or die("Insert A. database");
?>
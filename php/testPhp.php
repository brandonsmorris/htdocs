<?php
function login(){
	$host = "localhost";
	$user = "dbccemauser";
	$pass = "DBccema5961";
	$connection = mysql_connect($host, $user, $pass) or die("Couldn't Connect to Server");
}
?>
<?php
$dbhost = "localhost";
$dbname = "reklama";
$dbuser = "root";
$dbpass = "";

$sConn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Ne ste konektirani vo bazata");
	if(!$sConn)
		{
			echo "ГРЕСКА!";
		}
?>
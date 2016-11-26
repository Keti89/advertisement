<?php
include "../store/connect_to_db.php";
$idp=$_GET['idp'];
$q= "SELECT type, data FROM pictures WHERE idp ='$idp'";
$r= mysqli_query($sConn,$q);

if(!$r)
{
echo "Грешка!";
}
else
{
$row= mysqli_fetch_array($r);
$type ="Content-type: ".$row['type'];
header($type);


echo $row['data'];
}
?>
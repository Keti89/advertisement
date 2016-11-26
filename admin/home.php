<?php
include "../store/connect_to_db.php";

$query=("SELECT * FROM oglas");
$exec=  mysql_query($query, $sConn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>

<?php while($row=mysql_fetch_array($exec)){?>
<h1><a href="images.php?idog=<?php echo $row['idoglas']?>"><?php echo $row['naslov']?></a></h1><br/>

<?php } ?>


</body>
</html>
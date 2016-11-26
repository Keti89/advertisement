<?php 
	session_start();
	if(!isset($_SESSION["manager"]))
	{
		header("location:index.php");
		exit();
	}
	include "../store/connect_to_db.php";
	$managerID = preg_replace('#(^0-9)#i','',$_SESSION["id_korisnik"]);
	$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Ime"]);
	$Password = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Password"]);
	$sql= mysqli_query($sConn,"SELECT * FROM korisnik WHERE id_korisnik='$managerID' AND Ime='$Ime' AND Password='$Password' LIMIT 1");
	$existCount = mysqli_num_rows($sql);
	if($existCount == 0)
	{
		echo"Your login sesion data is not on record in the database";
		exit();
	}else
	{
		while($row=mysqli_fetch_array($sql))
			{
				$Ime=$row['Ime'];
				$Grad=$row['Grad'];
				$tel=$row['tel'];
				$email=$row['email'];
				
			}
	}
?>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
?>
<?php
  if(isset($_GET['id_korisnik']))
	{
		include "../store/connect_to_db.php";
		$managerID=preg_replace('#[^0-9]#i','',$_GET['id_korisnik']);
		$sql=mysqli_query($sConn,"SELECT * FROM korisnik WHERE id_korisnik = '$managerID' LIMIT 1");

		$oglasCoun = mysqli_num_rows($sql);
		if($oglasCoun>0)
		{
				while($row=mysqli_fetch_array($sql))
				{
		
					$Ime=$row['Ime'];
					$Grad=$row['Grad'];
					$tel=$row['tel'];
					$email=$row['email'];
				
				}
		}

	}


	//mysql_close(); 
?>



<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $naslov; ?></title>
        <link rel="stylesheet" href="../css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
    </head>
    <body>
	<div class="mainbody1" align="left" style="margin-left:32px;">
	
	</br>
	<table width="100%" border="0" cellspacing="0"cellpadding="6" style="margin: 10px 0px 0px 150px;">
			<tr>
			<td width="17%" valign="top"><a href="../images/smiley.gif"><img style="border#666 1px solid;" src="../images/smiley.gif" alt="$dynamicTitle" width="77" height="102" border="1" />
			</a></br></td>
			</tr>
			<tr valign="center" style="line-height: 25px;"><td>Име:</td><td>  <?php echo $Ime; ?>  </td></tr>
			<tr valign="center" style="line-height: 25px;"><td>Град:</td><td>  <?php echo $Grad; ?> </td></tr>
			<tr valign="center" style="line-height: 25px;"><td>Тел:</td><td>  <?php echo $tel; ?>  </td></tr>
			<tr valign="center" style="line-height: 25px;"><td>Е-маил:</td><td>  <?php echo $email; ?> </td></tr>
			
			<tr valign="center" style="line-height: 50px;"><td style='text-align:center;'><a  href="edit_korisnik.php?id_korisnik=<?php echo  $managerID ; ?>">Промени:</a></td><td>  
	</table>
	</div>
<?php //include_once("../includes/footer.php"); ?>

</body>
</html>
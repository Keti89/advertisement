<?php
	session_start();
	if(!isset($_SESSION["manager"]))
	{
		header("location:../index.php");
		exit();
	} 
	if(isset($_POST["Ime"])&& isset($_POST["Password"]))
	{
		$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_POST["Ime"]);
		$Password = (preg_replace('#(^A-Za-z0-9)#i','',$_POST["Password"]));
		include"../store/connect_to_db.php";
		$sql=mysqli_query($sConn,"SELECT id_korisnik FROM korisnik WHERE Ime='$Ime' AND Password='$Password' LIMIT 1");
		$existCount = mysqli_num_rows($sql);
		if($existCount==1)
		{
			while($row=mysqli_fetch_array($sql))
			{
				$id=$row["id_korisnik"];	
			}
			$_SESSION["id_korisnik"]=$id;
			$_SESSION["Ime"]=$Ime;
			$_SESSION["Password"]=$Password;
			header("location:index.php");
			exit();
		}else
		{
			echo'That information is incorect, try again <a href="../index.php">Click Here</a>';
			exit();
		}	
	} 

?>

<?php 
	/* session_start();
	if(isset($_SESSION["manager"]))
	{
	header("location:index.php");
	exit();
	}  */
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
		}  
?>

<?php 
	error_reporting(E_ALL);
	ini_set('display_errors','1');
?>
<?php
	if(isset($_GET['deleteid']))
	{
		echo'Дали навистина сакате да го избришете одласот со ID '.$_GET['deleteid'].'?<a href="index.php?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="index.php">No</a>';
		exit();
	}
	if(isset($_GET['yesdelete']))
	{
		$id_to_delete=$_GET['yesdelete'];
		//$sql1=mysql_query("DELETE oglas,avto,nedviznini FROM oglas LEFT JOIN avto ON oglas.idoglas = avto.id LEFT JOIN nedviznini ON oglas.idoglas = nedviznini.ido WHERE oglas.idoglas ='$id_to_delete'")or die(mysql_error());
		$sql2=mysqli_query($sConn,"DELETE oglas,avto,nedviznini FROM oglas LEFT JOIN avto ON oglas.idoglas = avto.id LEFT JOIN nedviznini ON oglas.idoglas = nedviznini.ido WHERE oglas.idoglas ='$id_to_delete'")or die(mysqli_error($sConn));
		//$sql=mysql_query("DELETE user,items,orders FROM user LEFT JOIN items ON user.us_id = items.us_id LEFT JOIN orders ON items.od_id = orders.od_id WHERE user.us_id = $usrID")or die(mysql_error());
		header("location:index.php");
		exit();
	}
?>
 
<?php
	include"../store/connect_to_db.php";
	$product_list="";
	$sql=mysqli_query($sConn,"SELECT * FROM oglas INNER JOIN korisnik ON oglas.id_korisnik = korisnik.id_korisnik WHERE korisnik.id_korisnik ='$managerID'ORDER BY data_add");
	$oglasCount=mysqli_num_rows($sql);
	if($oglasCount>0)
	{
		while($row=mysqli_fetch_array($sql))
		{
			$idoglas=$row['idoglas'];
			$naslov=$row['naslov'];
			$data_add = strftime("%d,%b %Y", strtotime($row["data_add"]));
			$cena=$row['cena'];
			$godina=$row['godina'];
			
			$product_list .="$data_add - $naslov &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='oglas.php?idoglas=$idoglas'>Погледај</a> &bull; <a href='edit.php?idoglas=$idoglas'>Промени</a> &bull; <a href='index.php?deleteid=$idoglas'>Избриси</a></br></br>";
		}
	}else
	{
		$product_list="Немате оглас";
	} 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reklama</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>

	<body>
	<div class='wrapper'>
<?php
        include("../includes/header1.php"); 
		include("../includes/navbar1.php"); 
	    include("../includes/leftNavbar1.php");
		
		include("../includes/mainbody1.php");
		include("../includes/footer1.php");
?>
	</div>

</body>
</html>
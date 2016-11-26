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
	}  
?>
<?php
if(isset($_GET['id_korisnik']))
{
	include"../store/connect_to_db.php";
	//$managerID=$_GET['id_korisnik'];
	$sql=mysqli_query($sConn,"SELECT * FROM korisnik WHERE id_korisnik='$managerID' LIMIT 1");
	
	$oglasCount=mysqli_num_rows($sql);
	if($oglasCount>0)
	{
		while($row=mysqli_fetch_array($sql))
		{
			$id_korisnik=$row['id_korisnik'];
			$Ime=$row['Ime'];
			$last_log_data = strftime("%d,%b %Y", strtotime($row["last_log_data"]));
			$Password=$row['Password'];
			$Grad=$row['Grad'];
			$tel=$row['tel'];
			$email=$row['email'];
		}
	}else
	{
		$product_list="Sorry dude that crap dont exist";
		exit();
	} 
} 
?>
<?php
if(isset($_POST['Ime']))
{
	$id_korisnik=mysqli_real_escape_string($sConn,$_POST['thisID']);
	$Ime=mysqli_real_escape_string($sConn,$_POST['Ime']);
	$Password=mysqli_real_escape_string($sConn,$_POST['Password']);
	$Grad=mysqli_real_escape_string($sConn,$_POST['Grad']);
	$tel=mysqli_real_escape_string($sConn,$_POST['tel']);
	$email=mysqli_real_escape_string($sConn,$_POST['email']);
	
	if (!preg_match("/^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $email)) 
	{
		echo "Ne validen email format. <a href='edit_korisnik.php?id_korisnik= $managerID ' ?><button>Vrati se nazad</button>  <a/>"; return 0;
	}
	else
    {
		if(strlen($Password)==0 || strlen($Password)<5)
		{
			echo" Lozinkata treba da se sodrzi od najmalku 5 karakteri. <a href='edit_korisnik.php?id_korisnik= $managerID '><button>Vrati se nazad</button> <a/>";return 0;
		} 
		else
		{
			if (!preg_match("/^[0-9_]+$/", $tel)) 
			{
				echo "Ne validen telefonski format. <a href='edit_korisnik.php?id_korisnik= $managerID '><button>Vrati se nazad</button>  <a/>"; return 0;
			}	
			else
			{
				$Password=($Password);
				$sql=mysqli_query($sConn,"UPDATE korisnik SET Ime='$Ime', Password='$Password', Grad='$Grad', tel='$tel', email='$email' WHERE id_korisnik='$id_korisnik'");
				 
				session_destroy("manager");
				header('Location: edit_korisnik.php?id_korisnik=$id_korisnik'); 
				
				session_start();
				if(isset($_SESSION["manager"]))
				{
					header("location:../index.php");
					exit();
				} 
				else
				{
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
							header('Location: index.php');
							exit();
						}else
						{
							echo'That information is incorect, try again <a href="../index.php">Click Here</a>';
							exit();
						}	
					}
				}
				
			}
		}
	}
	
	//header("location:index.php");
	exit();
}
?>
<?php
/*  
 session_destroy("manager");

header('Location: edit_korisnik.php?id_korisnik=$id_korisnik');  */
 
?>
<?php
	/* session_start();
	if(isset($_SESSION["manager"]))
	{
		header("location:../index.php");
		exit();
	} 
	if(isset($_POST["Ime"])&& isset($_POST["Password"]))
	{
		$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_POST["Ime"]);
		$Password = preg_replace('#(^A-Za-z0-9)#i','',$_POST["Password"]);
		include"../store/connect_to_db.php";
		$sql=mysql_query("SELECT id_korisnik FROM korisnik WHERE Ime='$Ime' AND Password='$Password' LIMIT 1");
		$existCount = mysql_num_rows($sql);
		if($existCount==1)
		{
			while($row=mysql_fetch_array($sql))
			{
				$id=$row["id_korisnik"];	
			}
			$_SESSION["id_korisnik"]=$id;
			$_SESSION["Ime"]=$Ime;
			$_SESSION["Password"]=$Password;
			header('Location: index.php');
			exit();
		}else
		{
			echo'That information is incorect, try again <a href="../index.php">Click Here</a>';
			exit();
		}	
	} */ 

?>
<?php 
	/*   session_start();
	if(isset($_SESSION["manager"]))
	{
	header("location:index.php");
	exit();
	}  
	include "../store/connect_to_db.php";
	$managerID = preg_replace('#(^0-9)#i','',$_SESSION["id_korisnik"]);
	$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Ime"]);
	$Password = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Password"]);
	$sql= mysql_query("SELECT * FROM korisnik WHERE id_korisnik='$managerID' AND Ime='$Ime' AND Password='$Password' LIMIT 1");
	$existCount = mysql_num_rows($sql);
	if($existCount == 0)
		{
			echo"Your login sesion data is not on record in the database";
			exit(); 
		} */  
?>
<?php 
	error_reporting(E_ALL);
	ini_set('display_errors','1');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Reklama</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../css/style.css">
    </head>

<body>
<div class='wrapper'>
<?php
        include("../includes/header1.php"); 
		include("../includes/navbar1.php"); 
		//include("../includes/search.php");
		//include("../includes/AdvancedSearch.php");
	    include("../includes/leftNavbar1.php");
?>


 
<div class="mainbody1">
<div align="center" style="text-align: right; margin-top: 20px; margin-bottom: 20px;">
<a href="#"id="Profil" style="font-size:20px;">Профил</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="" id="Oglasi" style="font-size:20px;">Ваши огласи</a>
</div>
  <div align="left" style="margin-left:50px; margin-right:50px;">
  <div class="regi" style="text-align:left;">
	<div><h1 style="text-align:center; font-size: 25px; margin: 0px 0px 25px 0px;">Промени профил:</h1></div>
	<br/>
	
	<form id= "form1" name="form1" method="POST" action="edit_korisnik.php">
		<div style=" text-align:center;  margin-right:50px;">
		Име: <input name="Ime" type="text"  size="20" value="<?php echo $Ime;?>" />
		</div>
		<br/>
		<div style="text-align:center;  margin-right:63px;">
		Е-маил: <input name="email" type="text"  size="20" value="<?php echo $email;?>" />
		</div>
		<br/>
		<div style="text-align:center; margin-right:82px;"> 
		Пасворд: <input name="Password" type="password"  size="20" value="<?php echo $Password;?>"  /> 
		</div>
		<br/>
		<div style="text-align:center; margin-right:50px;">
		<span> Град: 
	        <select name="Grad"id="Grad">
			<option value="<?php echo $Grad;?>"><?php echo $Grad;?></option>
			<option value="Битола">Битола</option>
			<option value="Берово">Берово</option>
			<option value="Валандово">Валандово</option>
			<option value="Велес">Велес</option>
			<option value="Виница">Виница</option>
			<option value="Гевгелија">Гевгелија</option>
			<option value="Гостивар">Гостивар</option>
			<option value="Дебар">Дебар</option>
			<option value="Демир Хисар">Демир Хисар</option>
			<option value="Делчево">Делчево</option>
			<option value="Кавадарци">Кавадарци</option>
			<option value="Кратово">Кратово</option>
			<option value="Крушево">Крушево</option>
			<option value="Крива Паланка">Крива Паланка</option>
			<option value="Кичево">Кичево</option>
			<option value="Кочани">Кочани</option>
			<option value="Куманово">Куманово</option>
			<option value="Македонски Брод">Македонски Брод</option>
			<option value="Македонска Каменица">Македонска Каменица</option>
			<option value="Неготино">Неготино</option>
			<option value="Охрид">Охрид</option>
			<option value="Прилеп">Прилеп</option>
			<option value="Пехчево">Пехчево</option>
			<option value="Пробиштип">Пробиштип</option>
			<option value="Радовош">Радовиш</option>
			<option value="Ресен">Ресен</option>
			<option value="Струга">Струга</option>
			<option value="Струмица">Струмица</option>
			<option value="Свети Николе">Свети Николе</option>
			<option value="Скопје">Скопје</option>
			<option value="Тетово">Тетово</option>
			<option value="Штип">Штип</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:130px;">
		Телефон за контакт: <input name="tel" type="text"  size="20"  value="<?php echo $tel;?>" />
		</div>
		<br/>
		<input name="thisID" type="hidden" value="<?php echo$managerID;?>">
		<div style="text-align: center; margin-bottom: 15px;">  
			<input type="submit" name="button"  value="Промени профил" />
		</div>
	</form>
    </div>
	
	
	
	
	</div>
	</div>
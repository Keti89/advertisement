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
	error_reporting(E_ALL);
	ini_set('display_errors','1');
?>
<?php
if(isset($_GET['idoglas']))
	{
		include "../store/connect_to_db.php";
		$dynamicOglas="";
		$idoglas=preg_replace('#[^0-9]#i','',$_GET['idoglas']);
		$sql=mysqli_query($sConn,"SELECT * FROM oglas LEFT JOIN korisnik ON oglas.id_korisnik=korisnik.id_korisnik LEFT JOIN avto ON oglas.idoglas=avto.id LEFT JOIN pictures ON oglas.idoglas=pictures.idog WHERE oglas.idoglas = '$idoglas' AND Vid='Возила' LIMIT 1");

		$oglasCoun = mysqli_num_rows($sql);
		if($oglasCoun>0)
		{
				while($row=mysqli_fetch_array($sql))
				{
					$naslov=$row['naslov'];
					$Vid=$row['Vid'];
					$podVid=$row['podVid'];
					$data_add = strftime("%d,%b %Y", strtotime($row["data_add"]));
					$cena=$row['cena'];
					$godina=$row['godina'];
					$marka=$row['marka'];
					$km=$row['km'];
					$gorivo=$row['gorivo'];
					$karoserija=$row['karoserija'];
					$registracija=$row['registracija'];
					$opis=$row['opis'];
					$Ime=$row['Ime'];
					$Grad=$row['Grad'];
					$tel=$row['tel'];
					$email=$row['email'];
					$idp=$row['idp'];
					header("Content-type: text/html");
					$type ="Content-type: ".$row['type'];
					header($type);
					$dynamicOglas.='<table width="50%" border="0" cellspacing="0"cellpadding="6">
			
			<tr><td>Наслов:</td><td>' . $naslov . '</td></tr>
			<tr><td>Вид:</td><td>' . $Vid . '</td></tr>
			<tr><td>Под вид:</td><td>' . $podVid . '</td></tr>
			<tr><td>Цена:</td><td>$' . $cena . '</td></tr>
			<tr><td>Година на производство:</td><td>'  . $godina .  '</td></tr>
			<tr><td>Марка:</td><td>'  . $marka .  '</td></tr>
			<tr><td>Километраза:</td><td>'  . $km .  '</td></tr>
			<tr><td>Гориво:</td><td>'  . $gorivo .  '</td></tr>
			<tr><td>Каросерија:</td><td>'  . $karoserija .  '</td></tr>
			<tr><td>Регистрација:</td><td>'  . $registracija .  '</td></tr>
			<tr><td>Опис:</td><td>'  . $opis .  '</td></tr>
			<tr><td>Име:</td><td>'  . $Ime .  '</td></tr>
			<tr><td>Град:</td><td>'  . $Grad .  '</td></tr>
			<tr><td>Тел:</td><td>'  . $tel .  '</td></tr>
			<tr><td>Е-маил:</td><td>'  . $email .  '</td></tr>

			</table>';
				}
		}else
	
		$sql=mysqli_query($sConn,"SELECT * FROM oglas LEFT JOIN korisnik ON oglas.id_korisnik=korisnik.id_korisnik LEFT JOIN nedviznini ON oglas.idoglas = nedviznini.ido WHERE oglas.idoglas = '$idoglas' AND Vid='Недвижнини' LIMIT 1");
		$oglasCounn = mysqli_num_rows($sql);
		if($oglasCounn>0)
		{
				while($row=mysqli_fetch_array($sql))
				{
					$naslov=$row['naslov'];
					$Vid=$row['Vid'];
					$podVid=$row['podVid'];
					$data_add = strftime("%d,%b %Y", strtotime($row["data_add"]));
					$cena=$row['cena'];
					$godina=$row['godina'];
					$sobi=$row['sobi'];
					$sprat=$row['sprat'];
					$km2=$row['km2'];
					$dvor=$row['dvor'];
					$greenje=$row['greenje'];
					$opis=$row['opis'];
					$Ime=$row['Ime'];
					$Grad=$row['Grad'];
					$tel=$row['tel'];
					$email=$row['email'];
					$dynamicOglas.='<table width="50%" border="0" cellspacing="0"cellpadding="6">

			<tr><td>Наслов:</td><td>' . $naslov . '</td></tr>
			<tr><td>Вид:</td><td>' . $Vid . '</td></tr>
			<tr><td>Под вид:</td><td>' . $podVid . '</td></tr>
			<tr><td>Цена:</td><td>$' . $cena . '</td></tr>
			<tr><td>Година на производство:</td><td>'  . $godina .  '</td></tr>
			<tr><td>Број на соби:</td><td>'  . $sobi .  '</td></tr>
			<tr><td>Број на спрат:</td><td>'  . $sprat .  '</td></tr>
			<tr><td>Квадратура:</td><td>'  . $km2 .  '</td></tr>
			<tr><td>Дворна површина:</td><td>'  . $dvor .  '</td></tr>
			<tr><td>Греење:</td><td>'  . $greenje .  '</td></tr>
			<tr><td>Опис:</td><td>'  . $opis .  '</td></tr>
			<tr><td>Име:</td><td>'  . $Ime .  '</td></tr>
			<tr><td>Град:</td><td>'  . $Grad .  '</td></tr>
			<tr><td>Тел:</td><td>'  . $tel .  '</td></tr>
			<tr><td>Е-маил:</td><td>'  . $email .  '</td></tr>
			
			</table>';
				}
		}else
		{
			$dynamicOglas.="This oglas does not exist.";
			exit();
		}
	}
	else
	{
		$dynamicOglas.="Data to render this page is missing.";
		exit();
	}


	mysqli_close($sConn);
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
<div class='wrapper'>
	<?php
	 	include("../includes/header1.php"); 
		include("../includes/navbar1.php"); 
		//include("../includes/search.php");
		//include("../includes/AdvancedSearch.php");
		include("../includes/leftNavbar1.php"); 
	?>
	<script type="text/javascript">
	$(function(){
 		$("#Profil").click(function(){
			$(".mainbody1").empty();
			$.get('profil.php', function(data) {
				//console.log(data);
				$('.mainbody1').html(data);
			//	alert('Load was performed.');
			});
		});
	});
</script>
<div align="center" >
<div align="center" style="text-align: right; margin-top: 20px; margin-bottom: 20px;">
<a href="#"id="Profil" style="font-size:20px;">Профил</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="index.php" style="font-size:20px;">Ваши огласи</a>
</div>
</div>
	<div class="mainbody1" >
		<h2 align='center'>Оглас <?php echo $naslov;?></h2>
		<div align="left" style="margin-left:32px;">
			<table width="50%" border="0" alight="center"><tr bgcolor="white">


<?php
include "../store/connect_to_db.php";
$r= mysqli_query($sConn,"SELECT * FROM pictures INNER JOIN oglas ON pictures.idog=oglas.idoglas WHERE oglas.idoglas = '$idoglas'");
if($r)
{
while($row=mysqli_fetch_array($r))
{
echo "<td>";
//header("Content-type: text/html");
$type ="Content-type: ".$row['type'];
//header($type);
echo "<a href=image.php?idp=" .$row['idp']. "><img src=image.php?idp=" .$row['idp']. " width=100 height=100/>";
echo "</td>";
}
}
?>
</tr>
</table>
			 <?php echo $dynamicOglas;?>
		</div>
	</div>

<?php //include_once("../includes/footer.php"); ?>
</div>
</body>
</html>
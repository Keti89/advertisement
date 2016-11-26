<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
?>

<?php
	if(isset($_GET['idoglas']))
	{
		include "store/connect_to_db.php";
		$dynamicOglas="";
		$idoglas=preg_replace('#[^0-9]#i','',$_GET['idoglas']);
		$sql=mysqli_query($sConn,"SELECT * FROM oglas LEFT JOIN korisnik ON oglas.id_korisnik=korisnik.id_korisnik LEFT JOIN avto ON oglas.idoglas=avto.id WHERE oglas.idoglas = '$idoglas' AND Vid='Возила' LIMIT 1");
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
					$dynamicOglas.='<table width="100%" border="0" cellspacing="0"cellpadding="6">
			<tr><td>Наслов:</td><td>' . $naslov . '</td></tr>
			
			<tr><td>Вид:</td><td>' . $Vid . '</td> <td>Под вид:</td><td>' . $podVid . '</td></tr>
			<tr><td>Цена:</td><td>$' . $cena . '</td> <td>Година:</td><td>'  . $godina .  '</td></tr>
			<tr><td>Марка:</td><td>'  . $marka .  '</td><td>Километраза:</td><td>'  . $km .  '</td></tr>
			<tr><td>Гориво:</td><td>'  . $gorivo .  '</td><td>Каросерија:</td><td>'  . $karoserija .  '</td></tr>
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
					$dynamicOglas.='<table width="100%" border="0" cellspacing="0"cellpadding="6">	
			<tr><td>Наслов:</td><td>' . $naslov . '</td></tr>
			<tr><td>Вид:</td><td>' . $Vid . '</td><td>Под вид:</td><td>' . $podVid . '</td></tr>
			<tr><td>Цена:</td><td>$' . $cena . '</td><td>Година:</td><td>'  . $godina .  '</td></tr>
			<tr><td>Соби:</td><td>'  . $sobi .  '</td><td>Спрат:</td><td>'  . $sprat .  '</td></tr>
			<td>Двор:</td><td>'  . $dvor .  '</td></tr>
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $naslov; ?></title>
        <link rel="stylesheet" href="css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		
		<script type="text/javascript">
			var value;
			$(function(){
				
			
				$(".advancedSearch").hide();
			
				$("#kategorii").change(function(){
					value = $("#kategorii option:selected").text();
					//console.log(value);
					
					if(value=='Сите категории..'){
						$(".advancedSearch").hide();
						$(".advancedSearch").text("Сите категории..");
						//console.log("Site kategorii..");
					}else if(value=='Возила'){
						$(".advancedSearch").show();
						$(".advancedSearch").empty();
								$.get('includes/aSearchVozila.php', function(data) {
									$('.advancedSearch').html(data);
								});
					}else if(value=='Недвижнини'){
						$(".advancedSearch").show();
								$(".advancedSearch").empty();
								$.get('includes/aSearchNedviznini.php', function(data) {
									$('.advancedSearch').html(data);
								});
					}else{
						console.log("empty");
					}
				});
				
			});
		</script>
    </head>
    <body>
	<div class='wrapper'>
		<?php
		include("includes/header.php"); 
		include("includes/navbar.php"); 
		include("includes/search.php");
		include("includes/AdvancedSearch.php");
		include("includes/leftNavbar.php");
		//include("includes/mainbody.php");
		
		?>
		
 
<div class="mainbody">
<h2 align='center'>Oglas <?php echo $naslov;?></h2>
<div align="left" style="margin-left:32px;">
</br></br>
<table border="0" alight="center"><tr bgcolor="white">


<?php
include "store/connect_to_db.php";
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
<?php
		include("includes/rightNavbar.php");
		include("includes/footer.php");
		?>


</body>
</html>
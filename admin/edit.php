<?php 
	session_start();
	if(!isset($_SESSION["manager"]))
	{
		header("location:../index.php");
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
if(isset($_POST['naslov']))
{
	$idoglas=mysqli_real_escape_string($sConn,$_POST['thisID']);
	$naslov=mysqli_real_escape_string($sConn,$_POST['naslov']);
	$cena=mysqli_real_escape_string($sConn,$_POST['cena']);
	$godina=mysqli_real_escape_string($sConn,$_POST['godina']);
	$podVid=mysqli_real_escape_string($sConn,$_POST['podVid']);
	$marka=mysqli_real_escape_string($sConn,$_POST['marka']);
	$km=mysqli_real_escape_string($sConn,$_POST['km']);
	$gorivo=mysqli_real_escape_string($sConn,$_POST['gorivo']);	
	$karoserija=mysqli_real_escape_string($sConn,$_POST['karoserija']);
	$registracija=mysqli_real_escape_string($sConn,$_POST['registracija']);
	$opis=mysqli_real_escape_string($sConn,$_POST['opis']);	
	$km2=mysqli_real_escape_string($sConn,$_POST['km2']);
	$sobi=mysqli_real_escape_string($sConn,$_POST['sobi']);
	$sprat=mysqli_real_escape_string($sConn,$_POST['sprat']);
	$dvor=mysqli_real_escape_string($sConn,$_POST['dvor']);
	$greenje=mysqli_real_escape_string($sConn,$_POST['greenje']);
	$sql=mysqli_query($sConn,"UPDATE oglas LEFT JOIN avto ON oglas.idoglas=avto.id LEFT JOIN nedviznini ON oglas.idoglas=nedviznini.ido SET naslov='$naslov', cena='$cena', godina='$godina', km2='$km2', marka='$marka', gorivo='$gorivo', registracija='$registracija', karoserija='$karoserija', km='$km', podVid='$podVid', opis='$opis', sobi='$sobi', sprat='$sprat',dvor='$dvor',greenje='$greenje' WHERE idoglas='$idoglas'");
	header("location:index.php");
	exit();
}
?>
<?php
if(isset($_GET['idoglas']))
{
	include"../store/connect_to_db.php";
	$product_list="";
	$targetID=$_GET['idoglas'];
	$sql=mysqli_query($sConn,"SELECT * FROM avto  LEFT JOIN oglas ON oglas.idoglas=avto.id WHERE idoglas='$targetID' LIMIT 1");
	$oglasCount=mysqli_num_rows($sql);
	if($oglasCount>0)
	{
		while($row=mysqli_fetch_array($sql))
	  {
		$idoglas=$row['idoglas'];
		$naslov=$row['naslov'];
		$data_add = strftime("%d,%b %Y", strtotime($row["data_add"]));
		$cena=$row['cena'];
		$marka=$row['marka'];
		$podVid=$row['podVid'];
		$km=$row['km'];
		$godina=$row['godina'];
		$gorivo=$row['gorivo'];
		$karoserija=$row['karoserija'];
		$registracija=$row['registracija'];
		
		$opis=$row['opis'];
		$product_list .='<form id= "form1" name="form1"  method="POST" action="edit.php">
		<div style=" text-align:center;  margin-right:50px;">
		Наслов: <input name="naslov" type="text"  size="20"  value="' . $naslov . '"/>
		</div>
		<br/>
		<div style="text-align:center; margin-right:100px;">
		<span> Вид: 
	        <select name="podVid"id="podVid">
			<option value=' . $podVid . '>' . $podVid . '</option>
			<option value="Автомобил">Автомобил</option>
			<option value="Моторцикл">Моторцикл</option>
			<option value="Комбе">Комбе</option>
			<option value="Автобус">Автобус</option>
			<option value="Камион">Камион</option>
			<option value="Трактор">Трактор</option>
			
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:140px;">
		<span> Марка: 
	        <select name="marka"id="marka">
			<option value=' . $marka . '>' . $marka . '</option>
			<option value="Acure">Acure</option>
			<option value="Aixam">Aixam</option>
			<option value="Alfa Romeo">Alfa Romeo</option>
			<option value="Aston Martin">Aston Martin</option>
			<option value="ATV">ATV</option>
			<option value="Aprilia">Aprilia</option>
			<option value="Audi">Audi</option>
			<option value="Bentley">Bentley</option>
			<option value="Buick">Buick</option>
			<option value="BMW">BMW</option>
			<option value="Cadillac">Cadillac</option>
			<option value="Chevrolet">Chevrolet</option>
			<option value="Chrysler">Chrysler</option>
			<option value="Citroen">Citroen</option>
			<option value="Dacija">Dacija</option>
			<option value="Daewoo">Daewoo</option>
			<option value="Daihatsu">Daihatsu</option>
			<option value="Ducati">Ducati</option>
			<option value="Dodge">Dodge</option>
			<option value="Ferrari">Ferrari</option>
			<option value="Fiat">Fiat</option>
			<option value="Ford">Ford</option>
			<option value="Gilera">Gilera</option>
			<option value="Gilera">Golf</option>
			<option value="Honda">Honda</option>
			<option value="Hunner">Hunner</option>
			<option value="Hyundai">Hyundai</option>
			<option value="Isuzu">Isuzu</option>
			<option value="Jaguar">Jaguar</option>
			<option value="Jeep">Jeep</option>
			<option value="Kia">Kia</option>
			<option value="Lada">Lada</option>
			<option value="Lamborghini">Lamborghini</option>
			<option value="Lancia">Lancia</option>
			<option value="LandRover">LandRover</option>
			<option value="Lexus">Lexus</option>
			<option value="Liger">Liger</option>
			<option value="Lotus">Lotus</option>
			<option value="Maserati">Maserati</option>
			<option value="Maybach">Maybach</option>
			<option value="Mazda">Mazda</option>
			<option value="MG">MG</option>
			<option value="Mini">Mini</option>
			<option value="Mitsubishi">Mitsubishi</option>
			<option value="Nissan">Nissan</option>
			<option value="Opel">Opel</option>
			<option value="Peugeot">Peugeot</option>
			<option value="Pontiac">Pontiac</option>
			<option value="Porche">Porche</option>
			<option value="Proton">Proton</option>
			<option value="Renault">Renault</option>
			<option value="Rolls-Royce">Rolls-Royce</option>
			<option value="Rover">Rover</option>
			<option value="Saab">Saab</option>
			<option value="Seat">Seat</option>
			<option value="Skoda">Skoda</option>
			<option value="Smart">Smart</option>
			<option value="Subaru">Subaru</option>
			<option value="Suzuku">Suzuku</option>
			<option value="Toyota">Toyota</option>
			<option value="Tomos">Tomos</option>
			<option value="VW Volkswagen">VW Volkswagen</option>
			<option value="Volvo">Volvo</option>
			<option value="Warburg">Warburg</option>
			<option value="Yamaha">Yamaha</option>
			<option value="Yugo">Yugo</option>
			<option value="Zastava">Zastava</option>
			<option value="Друго">Друго</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:110px;">
		<span> Километри: 
	        <select name="km"id="km">
			<option value=' . $km . '>' . $km . '</option>
			<option value="0-19999">0-19999</option>
			<option value="20000-39999">20000-39999</option>
			<option value="40000-59999">40000-59999</option>
			<option value="60000-79999">60000-79999</option>
			<option value="80000-99999">80000-99999</option>
			<option value="100000-119999">100000-119999</option>
			<option value="120000-139999">120000-139999</option>
			<option value="140000-159999">140000-159999</option>
			<option value="160000-179999">160000-179999</option>
			<option value="180000-199999">180000-199999</option>
			<option value="200000-219999">200000-219999</option>
			<option value="220000-239999">220000-239999</option>
			<option value="240000-259999">240000-259999</option>
			<option value="260000-279999">260000-279999</option>
			<option value="280000-299999">280000-299999</option>
			<option value="300000-319999">300000-319999</option>
			<option value="320000-339999">320000-339999</option>
			<option value="340000-359999">340000-359999</option>
			<option value="360000-379999">360000-379999</option>
			<option value="380000-399999">380000-399999</option>
			<option value="400000-419999">400000-419999</option>
			<option value="420000-439999">420000-439999</option>
			<option value="440000-459999">440000-459999</option>
			<option value="460000-479999">460000-479999</option>
			<option value="480000-499999">480000-499999</option>
			<option value=">500000">>500000</option>
			
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:122px;">
		<span> Гориво: 
	        <select name="gorivo"id="gorivo">
			<option value=' . $gorivo . '>' . $gorivo . '</option>
			<option value="Бензин">Бензин</option>
			<option value="Дизел">Дизел</option>
			<option value="Бензин/Плин">Бензин/Плин</option>
			<option value="Хибрид">Хибрид</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:117px;">
		<span> Каросерија: 
	        <select name="karoserija"id="karoserija">
			<option value=' . $karoserija . '>' . $karoserija . '</option>
			<option value="Мали градски">Мали градски</option>
			<option value="Седани">Седани</option>
			<option value="Лимузина">Лимузина</option>
			<option value="Караван">Караван</option>
			<option value="Кабриолет">Кабриолет</option>
			<option value="Купе">Купе</option>
			<option value="Спортски">Спортски</option>
			<option value="Товарни возила">Товарни возила</option>
			<option value="Теренски- SUV">Теренски- SUV</option>
			<option value="Пик-ап">Пик-ап</option>
			<option value="Комбе и минибус">Комбе и минибус</option>
			<option value="Моноволумен">Моноволумен</option>
			<option value="Хезбек">Хезбек</option>
			<option value="Останати">Останати</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:148px;">
		<span> Регистрација: 
	        <select name="registracija"id="registracija">
			<option value=' . $registracija . '>' . $registracija . '</option>
			<option value="Македонска">Македонска</option>
			<option value="Странска">Странска</option>
			
		    </select>
	   </span>
		</div>
		<br/>
		
		<div style="text-align:center; margin-right:55px;"> 
		Цена: <input name="cena" type="text"  size="20" value="' . $cena . '"/> 
		</div>
		<br/>
		<div style="text-align:center; margin-right:118px;"> 
		Година на производство: <input name="godina" type="text"  size="20" value="' . $godina  . ' "/> godina 
		</div>
		<br/>
		<div style="text-align:center; margin-right:95px;"> 
		Опис: <textarea name="opis" id="opis"  cols="64"  rows="10" > ' . $opis . '</textarea> 
		</div>
		<br/>
		<input name="thisID" type="hidden" value=' . $targetID . '>
		<div style="text-align: center; margin-bottom: 15px;">  
			<input type="submit" name="button"  value="Make Changes" />
		</div>
	</form>';
	  }
	}else
	$sql=mysqli_query($sConn,"SELECT * FROM nedviznini	 LEFT JOIN oglas ON oglas.idoglas=nedviznini.ido WHERE idoglas='$targetID' LIMIT 1");
	$oglasCount=mysqli_num_rows($sql);
	if($oglasCount>0)
	{
		while($row=mysqli_fetch_array($sql))
	  {
		$idoglas=$row['idoglas'];
		$naslov=$row['naslov'];
		$data_add = strftime("%d,%b %Y", strtotime($row["data_add"]));
		$cena=$row['cena'];
		$podVid=$row['podVid'];
		$sobi=$row['sobi'];
		$sprat=$row['sprat'];
		$godina=$row['godina'];
		$km2=$row['km2'];
		$dvor=$row['dvor'];
		$greenje=$row['greenje'];
		$opis=$row['opis'];
		$product_list .='<form id= "form1" name="form1"  method="POST" action="edit.php">
		<div style=" text-align:center;  margin-right:50px;">
		Наслов: <input name="naslov" type="text"  size="20"  value="' . $naslov . '"/>
		</div>
		<br/>
		<div style="text-align:center; margin-right:65px;">
		<span> Вид: 
	        <select name="podVid"id="podVidN">
			<option value=' . $podVid . '>' . $podVid . '</option>
			<option value="ПродавамСтан">Продавам Стан</option>
			<option value="ПродавамКуќа">Продавам Куќа</option>
			<option value="ПродавамВила">Продавам Вила</option>
			<option value="ИздавамСтан">Издавам Стан</option>
			<option value="ИздавамКуќа">Издавам Куќа</option>
			<option value="ИздавамВила">Издавам Вила</option>
			<option value="ИздавамСоби">Издавам Соби</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:168px;">
		<span> Број на соби: 
	        <select name="sobi"id="sobi">
			<option value=' . $sobi . '>' . $sobi . '</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value=">6">>6</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:190px;">
		<span> Број на спратови: 
	        <select name="sprat"id="sprat">
			<option value=' . $sprat . '>' . $sprat . '</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value=">6">>6</option>
		    </select>
	   </span>
		</div>
		<br/>
		<div style=" text-align:center;  margin-right:53px;">
		Квадратура: <input name="km2" type="text"  size="20" value="' . $km2 . '" />m2
		</div>
		<br/>
		<div style=" text-align:center;  margin-right:83px;">
		Дворна површина: <input name="dvor" type="text"  size="20" value="' . $dvor . '" />m2
		</div>
		<br/>
		<div style="text-align:center; margin-right:170px;">
		<span> Греење: 
	        <select name="greenje"id="sprat">
			<option value=' . $greenje . '>' . $greenje . '</option>
			<option value="Нема">Нема</option>
			<option value="Центарлно">Централно</option>
			<option value="Дрва">Дрва</option>
			<option value="Струја">Струја</option>
			<option value="Соларна">Соларна</option>
			<option value="Друго">Друго</option>
		    </select>
	   </span>
		</div>
		<br/>
		
		<div style="text-align:center; margin-right:28px;"> 
		Цена: <input name="cena" type="text"  size="20" value="' . $cena . '" /> 
		</div>
		<br/>
		<div style="text-align:center; margin-right:118px;"> 
		Година на производство: <input name="godina" type="text"  size="20" value="' . $godina . '" /> godina 
		</div>
		<br/>
		<div style="text-align:center; margin-right:95px;"> 
		Опис: <textarea name="opis" id="opis"  cols="64"  rows="10">' . $opis . ' </textarea> 
		</div>
		<br/>
		<input name="thisID" type="hidden" value=' . $targetID . '>
		<div style="text-align: center; margin-bottom: 15px;">  
			<input type="submit" name="button"  value="Make Changes" />
		</div>
  </form>';
		
		}
}
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
		//include("../includes/search.php");
		//include("../includes/AdvancedSearch.php");
	    include("../includes/leftNavbar1.php");
?>


 
<div class="mainbody1">
  <div align="left" style="margin-left:50px; margin-right:50px;">
  <div class="regi" style="text-align:left;">
	<div><h1 style="text-align:center; margin: 25px 0px 25px 0px; font-size: 27px;">Промени оглас:</h1></div>
	<br/>
	<?php echo $product_list;?>
    </div>
</div>
  <p>&nbsp;</p>

</div>


<?php //include_once("../includes/footer.php"); ?>
</div>

</body>
</html>
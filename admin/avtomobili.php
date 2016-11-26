<?php 
session_start();
if(!isset($_SESSION["manager"]))
	{
		header("location:index.php");
		exit();
	}
	$managerID = preg_replace('#(^0-9)#i','',$_SESSION["id_korisnik"]);
	$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Ime"]);
	$Password = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Password"]);
	include "../store/connect_to_db.php";
	$sql= mysqli_query($sConn,"SELECT * FROM korisnik WHERE id_korisnik='$managerID' AND Ime='$Ime' AND Password='$Password' LIMIT 1");
	$existCount = mysqli_num_rows($sql);
	if($existCount == 0)
	{
		echo"Your login sesion data is not on record in the database";
		exit();
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Реклама</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript">
  function addItems()
  	{
		var table1 = document.getElementById('tab1');
		var newrow = document.createElement("tr");
		var newcol = document.createElement("td");
		var input = document.createElement("input");
		input.type="file";
		input.name="image[]";
		newcol.appendChild(input);
		newrow.appendChild(newcol);
		table1.appendChild(newrow);
  	}
  	function remItems()
  	{
		var table1 = document.getElementById('tab1');
		var lastRow = table1.rows.length;
		if(lastRow>=2)
		table1.deleteRow(lastRow-1);
  	}
 </script>
 <style type="text/css">
		<a class="tooltip" and them url href="/http.www.anyurl.com" </a>
		a.tooltip:hover span{
		display:inline;
		position:absolute;
		border:2px solid #cccccc; 
		background:#efefef; 
		color:#333399;
		}
		a.tooltip span{
		display:none; 
		padding:2px 3px; 
		margin-left:8px; 
		width:150px;
		}
        </style>
  
    </head>

<body>
  <div align="left" style="margin-left:50px; margin-right:50px;">
  <div class="regi" style="text-align:left;">
	<div><h1 style="text-align:center; font-size: 20px;">Внеси оглас:</h1></div>
	</br></br>
	<form id= "form1" name="form1" method="POST" action="avto.php" enctype="multipart/form-data">
		<div style=" text-align:center;  margin-right:50px;">
		* Наслов:<input name="naslov" type="text"  size="20"  />
		</div>
		<br/>
		<div style="text-align:center; margin-right:100px;">
		<span>* Вид: 
	        <select name="podVid"id="podVidV">
			<option value="">Вид</option>
			<option value="Автомобил">Автомобил</option>
			<option value="Моторцикл">Моторцикл</option>
			<option value="Комбе">Комбе</option>
			<option value="Автобус ">Автобус</option>
			<option value="Камион">Камион</option>
			<option value="Трактор">Трактор</option>
			
		    </select>
	   </span>
		</div>
		<br/>
		<div style="text-align:center; margin-right:140px;">
		<span> Марка: 
	        <select name="marka"id="marka">
			<option value="">Одбери</option>
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
			<option value="">Одбери</option>
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
			<option value="">Одбери</option>
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
			<option value="">Одбери</option>
			<option value="Мали градски">Мали градски</option>
			<option value="Седани">Седани</option>
			<option value="Лимузина">Лимузина</option>
			<option value="Караван">Караван</option>
			<option value="Кабриолет">Кабриолет</option>
			<option value="Купе">Купе</option>
			<option value="Спортска">Спортска</option>
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
			<option value="">Одбери</option>
			<option value="Македонска">Македонска</option>
			<option value="Странска">Странска</option>
			
		    </select>
	   </span>
		</div>
		<br/>
		
		<div style="text-align:center; margin-right:55px;"> 
		* Цена: <input name="cena" type="text"  size="20" /> 
		</div>
		<br/>
		<div style="text-align:center; margin-right:118px;"> 
		* Година на производство: <input name="godina" type="text"  size="20" /> godina 
		</div>
		<br/>
		<div style="text-align:center; margin-right:95px;"> 
		* Опис: <textarea name="opis" id="opis"  cols="64"  rows="10"> </textarea> 
		</div>
		<br/>
	
	<center>
<div id="box">
<table align="center" width="450px"><tr><td>
	<table style="float:left;" id="tab1">
	     <tr>
			<td width="218" align="center"><input type="file" name="image[]"  /></td>
			<td width="54" align="center"><img src="../images/add.jpg" width="30" height="20" alt="Add" style="cursor:pointer" onclick="addItems()" /></td>
			<td><img src="../images/remove.jpg" width="40" height="20" alt="Remove" style="cursor:pointer" onclick="remItems()" /></td>
	    </tr>
	</table>
</table>	
	</br>
	<div class="cc-container" style="margin: 5px 30px 25px 0px;">
		<span>* Тип на кредитна картичка:</span>
	        <select id="cctypes" name="cctypes">
				<option value="">Одбери тип на кредитна картичка</option>
				<option value="Master">Master</option>
				<option value="Visa Card">Visa</option>
				<option value="American Express">American Express</option>
				<option value="Diner's Club">Diner's Club</option>
				<option value="Discover">Discover</option>
			</select>
			</br></br>
			<span>* Број на кредитна картичка:</span>
			<input id="card-number" name="ccnumber" type="text"> 
			</br>
			
	  
           
	   
	   
	   
		</div>
        <table  id="tab2">
	   <tr>
		<td style="padding-left:10px;"><input type="submit" name="button"  value="Внеси оглас" /></td></tr>
	</table>
</td></tr></br></br></br></br></table>
  </form>
</div>
</center>
</div>
</div>

</body>
</html>
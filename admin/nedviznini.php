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
        <title>Reklama</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
	
	<!--link rel="stylesheet" href="../css/ccvalidate.css" type="text/css" media="screen"-->
	<script type="text/javascript" src="../js/ccvalidate.js"></script>
	
		<script type="text/javascript">
	function addItems()
  	{
		var table1 = document.getElementById('tab1');
		var newrow = document.createElement("tr");
		var newcol = document.createElement("td");
		var input = document.createElement("input");
		input.type="file";
		input.name="image[]";
		input.className ="inputImg";
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
	<form id= "form1" name="form1" method="POST" action="nedviz.php" enctype="multipart/form-data">
		<div style=" text-align:center;  margin-right:50px;">
		* Наслов: <input name="naslov" type="text"  size="20" id="imeOglas" />
		</div>
		<br/>
		<div style="text-align:center; margin-right:65px;">
		<span>* Вид: 
	        <select name="podVid"id="podVidN">
				<option value="">Под Вид</option>
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
			<option value="">Одбери</option>
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
			<option value="">Одбери</option>
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
		Квадратура: <input name="km2" type="text"  size="20" id="km2" />m2
		</div>
		<br/>
		<div style=" text-align:center;  margin-right:83px;">
		Дворна површина: <input name="dvor" type="text"  size="20" id="dvor" />m2
		</div>
		<br/>
		<div style="text-align:center; margin-right:170px;">
		<span> Греење: 
	        <select name="greenje"id="greenje">
			<option value="">Одбери</option>
			<option value="Нема">Нема</option>
			<option value="Централно">Централно</option>
			<option value="Дрва">Дрва</option>
			<option value="Струја">Струја</option>
			<option value="Соларна">Соларна</option>
			<option value="Друго">Друго</option>
		    </select>
	   </span>
		</div>
		<br/>
		
		<div style="text-align:center; margin-right:28px;"> 
		* Цена: <input id="cenaNedviznina" name="cena" type="text"  size="20" /> 
		</div>
		<br/>
		<div style="text-align:center; margin-right:118px;"> 
		* Година на изградба: <input id="godinaNedviznina" name="godina" type="text"  size="20" /> година 
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
</table>	</br>
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
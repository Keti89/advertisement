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


 <?php 
	
$product_list='<table>
<tr><td style="padding:10px; color:#f00">За реклама</td></tr>
<tr><td style="padding:10px; color:#f00">Основање на Реклама</td></tr>
<tr><td><p>Секоја идеја се заснова на потреби. Идејата за постоење на сајтот кој ќе овозможи огласување на васите огласи за недвижнини и возила исто така и пребарување на огласите беше реализирано 2012 година со официјално пуштање во употреба на сајтот Реклама.</p></td></tr>
<tr><td style="padding:10px; color:#f00">Реклама Бизнис идеја</td></tr>
<tr><td><p>Нашата бизнис идеја е обезбедување на едноставно, ефикасно  и безбедно огласување и пребарување на огласи. Преку овој сајт македонските грагани имаат можност да ги огласуваат своите огласи и да ги разгледуваат најновите огласи од областа недвижнини и возила.</p></td></tr>
<tr><td style="padding:10px; color:#f00">Кон што се стремиме</td></tr>
<tr><td><p>Реклама најпрво започна како сајт за огласување на недвижнини и возила но во иднина би сакале да се надградиме со повеќе функционалности и огласувања на огласи и од други области.</p></td></tr>
</table>';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reklama</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
		
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
  
  
  
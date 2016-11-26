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
        <link rel="stylesheet" href="../css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
	
	</head>
<div class='wrapper'>
		<?php
		include("../includes/header1.php"); 
		include("../includes/navbar1.php"); 
		include("../includes/leftNavbar1.php");
		?>

<div class="mainbody1">
			<span class="title">Помош</span>
			<div class="tab-zone">
				<ul class="tab">
					<li class="tab-item">
					<a href="#tab-1"><p class="tab-power">Регистрација</p></a>
						<div class="tab-detail" id="tab-1">
							<p>Регистрацијата на овој портал е многу едноставна. Во десниот горен агол од страницата се наоѓа линкот регистрирај се. Со клик на овој линк се отвара нова форма каде се внесуваат сите основни податоци како име, емаил, телефон за контакт, град и лозинка. За да се регистрирате потребно е да ги внесете сите наведени податоци за ваше понатамошно логирање<a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
						</li>
					<li class="tab-item">
					<a href="#tab-2"><p class="tab-power">Логирање</p></a>
						<div class="tab-detail" id="tab-2">
							<p>Логирање на системот се прави преку формата за најава во горниот десен агол и клик на копчето Логирај се, притоа испишувајќи коректно име и лозинка</a><a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
					</li>					
					<li class="tab-item">
					<a href="#tab-3"><p class="tab-power">Пребарување</p></a>
						<div class="tab-detail" id="tab-3">
							<p>Пребарување на системот се врши со внесување на наслов и-или внесување на градот на огласот<a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
					</li>					
					<li class="tab-item">
					<a href="#tab-4"><p class="tab-power">Напредно пребарување</p></a>
						<div class="tab-detail" id="tab-4">
							<p>Напредното пребарувањето може да се врши доколку од делот за пребарување се избере категорија недвижнина (под вид, број на соби и број на спратови) или возила (под вид, марка, километража, гориво и регистрација)<a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
					</li>						
					<li class="tab-item">
					<a href="#tab-5"><p class="tab-power">Внесување оглас</p></a>
						<div class="tab-detail" id="tab-5">
							<p>Внесувањето на оглас се врши преку внесување на податоците за огласот во соодветната форма за недвижнината или возилата. За да се огласи огласот потребно е да се внесе и валидна кредитна картичка.<a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
					</li>
					<li class="tab-item">
					<a href="#tab-6"><p class="tab-power">Промена на оглас</p></a>
						<div class="tab-detail" id="tab-6">
							<p>Промена на оглас се врши во клик на линкот промени кој се наоога во делот ваши огласи. Со клик на линкот се отвара форма со податоците од огласот и со промена на податоците и клик на копчето промени се променува огласот <a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
					</li>
					<li class="tab-item">
					<a href="#tab-7"><p class="tab-power">Избриши оглас</p></a>
						<div class="tab-detail" id="tab-7">
							<p>Бришење на оглас се врши со клик на линкот избриши кој се наога во делот ваши огласи. со клик на линкот се бара потврда за бришење на оглас и доколку кликнете на копчето да се брише огласот<a href="#close"><span class="tab-powerOff">- </span><em class="tab-close">Затвори</em></a></p>
						</div>
					</li>
				</ul>
			</div>	
		</div>
		<?php
		include("../includes/footer1.php");
		?>
		
	</div>
</html>


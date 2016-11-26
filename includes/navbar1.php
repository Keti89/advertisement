<div class="navbar1">
	<ul>
		<li><a href="index.php">Дома</a></li>
		<!--li><a href="site.php">Сите огласи</a></li-->
	<!--span ><a href="page=nov">Нови огласи|</a></span-->
		<li><a href="kontakt.php">Контакт</a></li>
		<li><a href="zaNas.php">За нас</a></li>
		<li><a href="help.php">Помош</a></li>
		<span class="login_img" >
	<a href="index.php">
		<img src="../images/smiley.gif" style="width:20px; height:20px; vertical-align:middle;" >
		<span class="caci"> <?php include "../store/connect_to_db.php";
        echo$Ime;  ?> </span>
	</a>			
		<span class="caci">|</span>
	<a href="odjavi.php"><span class="caci">Одлогирај се</span></a>
	</span>  
	</ul>
	
	
</div>
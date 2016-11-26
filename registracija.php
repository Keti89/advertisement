<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Регистрација</title>
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
		
		
		?>
<br/>
<div class="mainbody" align="center">
  
    </br>
	</br>
	<h1 style="text-align:center;font-size: 20px;">Регистрирај се:</h1>
	</br>
	</br>
	<form id= "form1" name="form1" method="POST" action="admin/outputt.php">
		<table style="padding:10px; border:#000 1px dashed;">
		<tr>
		<td style="padding:10px;">Име:</td>
		<td style="padding:10px;"><input name="Ime" type="text"  size="35"  /></td>
		</tr>
		<tr>
		<td style="padding:10px;">Е-маил:</td>
		<td style="padding:10px;"><input name="email" type="text"  size="35" /></td>
		</tr>
		<tr>
		<td style="padding:10px;">Пасворд:</td>
		<td style="padding:10px;"><input name="Password" type="password"  size="35" /></td>
		</tr>
		<tr>
		<td style="padding:10px;">Повтори пасворд:</td>
		<td style="padding:10px;"><input name="Password1" type="password"  size="35" /></td>
		</tr>
		<tr>
		<td style="padding:10px;">Град:</td>
			<td style="padding:10px;">
	        <select name="Grad"id="Grad">
			<option value="">Град</option>
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
			</td>
		</tr>
		<tr>
		<td style="padding:10px;">Телефон за контакт:</td>
		<td style="padding:10px;"><input name="tel" type="text"  size="35" /></td>
		 </tr>
		 <tr>
		 
			<td style="padding:10px;"><input type="submit" name="submit"  value="Регистрирај се" /></td>
		</tr>
		</table>
	</form>
    
</div>
	<?php
		include("includes/rightNavbar.php");
		include("includes/footer.php");
		?>
		
	</div>
<?php //include_once("../includes/footer.php"); ?>


</body>
</html>
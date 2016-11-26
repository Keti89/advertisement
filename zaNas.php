  <?php 
	
$dynamicList='<table>
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
		include("includes/mainbody.php");
		include("includes/rightNavbar.php");
		include("includes/footer.php");
		?>
	</div>
    </body>
</html>
  
  
  
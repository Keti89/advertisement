<?php 
	include "store/connect_to_db.php";
	$dynamicList="";
	$sql=mysqli_query($sConn,"SELECT * FROM oglas ORDER BY data_add");
	$oglasCount=mysqli_num_rows($sql);
	if($oglasCount>0)
	{
		while($row=mysqli_fetch_array($sql))
		{
			$idoglas=$row['idoglas'];
			$naslov=$row['naslov'];
			$data_add = strftime("%d,%b %Y", strtotime($row["data_add"]));
			$cena=$row['cena'];
			$godina=$row['godina'];
			//$opis=$row['opis'];
			 $sqlImages=mysqli_query($sConn,"SELECT * FROM pictures INNER JOIN oglas ON pictures.idog = oglas.idoglas WHERE oglas.idoglas = '$idoglas' LIMIT 1");
			$oglasImage=mysqli_num_rows($sqlImages);
			if($oglasImage>0)
			{
				while($rowImage=mysqli_fetch_array($sqlImages))
				{
				    $idp=$rowImage['idp'];
					header("Content-type: text/html");
					$type ="Content-type: ".$rowImage['type'];
					header($type);
					//echo $row['data'];
					$dynamicList.='<table width="100%" border="0" cellspacing="0"cellpadding="6">
					<tr>
						<td width="17%" valign="top">
							<a href=image.php?idp=' .$rowImage['idp']. '>
								<img src=image.php?idp=' .$idp. ' width="77" height="102" border="1" />
							</a>
						</td>';
				}
			}else
			{
				$dynamicList.='<table width="100%" border="0" cellspacing="0"cellpadding="6">
				<tr>
					<td width="17%" valign="top">
						<a href="#"><img src="#" width="77" height="102" border="1" /></a>
					</td>';
			} 
				$dynamicList.='
					<td width="83%" valign="center" style="line-height: 25px;">' . $naslov . '<br/> $' . $cena . '<br/>
						<a href="oglas.php?idoglas=' .$idoglas . '">Погледај детали за огласот</a>
					</td>
				</tr>
			</table></br>';
		}
	}else
	{
		$dynamicList="Нема таков оглас";
	}
	//mysql_close(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reklama</title>
        <link rel="stylesheet" href="css/style.css">
		
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<link rel="stylesheet" href="css/pajinate.css">
		
	
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
		<div class="mainbody">
			<div id="paging_container8"  align="left" style="margin-left: 100px;">
				<div class="content">
					<?php echo"$dynamicList";?>
					</br>
				</div>
				</br>
				<div class="page_navigation"></div>
				
			</div>
			</br></br>
		</div>
		
		<?php
			include("includes/rightNavbar.php");
			include("includes/footer.php");
		?>
	</div>
    </body>
</html>

<script type="text/javascript" src="js/pajinate.js"></script>
<script type="text/javascript">
	//$(function(){
		$('#paging_container8').pajinate({
			num_page_links_to_display : 3,
			items_per_page : 8	
		});
	//});
</script>
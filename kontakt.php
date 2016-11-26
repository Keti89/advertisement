<?php 

			$dynamicList='<span style="padding:15px;">Доколку сакате да не контактирате пополнете ја следната форма:</span>
      <form id="form1" method="post" class="contact_us" action="http://all-free-download.com/free-website-templates/">
        <table>
		<tr>
          <td style="padding:10px 5px;">Име</td>
          <td style="padding:10px 5px;"><input type="text" name="textfield" /></td>
        </tr>  
        <tr>
          <td style="padding:10px 5px;">Е-маил</td> 
           <td style="padding:10px 5px;"><input type="text"  name="textfield1" /></td>
        </tr>
		<tr>
          <td valign="top" style="padding:10px 5px;">Вашето прашање</td>
	      <td style="padding:10px 5px;"><textarea name="textarea" cols="28" rows="12"></textarea></td>
        </tr>
        <tr>
          <td><a href="index.php"><input type="submit"  name="Submit1" value="Прати" /></a></td>
        </tr>
       </table>
      </form>';

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


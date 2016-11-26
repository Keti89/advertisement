
<script type="text/javascript">
	$(function(){
 		$("#Profil").click(function(){
			$(".mainbody1").empty();
			$.get('profil.php', function(data) {
				//console.log(data);
				$('.mainbody1').html(data);
			//	alert('Load was performed.');
			});
		});
		$("#Oglasi").click(function(){
			$(".mainbody1").empty();
			$.get('mainbody1.php', function(data) {
				//console.log(data);
				$('.mainbody1').html(data);
			});
		});
	});
</script>
<div align="center" style="text-align: right; margin-top: 20px; margin-bottom: 20px;">
<a href="#"id="Profil" style="font-size:20px;">Профил</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="index.php" id="Oglasi" style="font-size:20px;">Ваши огласи</a>
</div>
<div class="mainbody1" >
<!--div align="center" style="font-size: 25px; ">Ваши огласи</div-->
<div align="left" style="margin-left:32px; margin-top: 20px;">
</br>
 <?php echo $product_list;?>
</div>
</div>

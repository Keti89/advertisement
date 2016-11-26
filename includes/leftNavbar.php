
<?php 
include "store/connect_to_db.php";
$array = array("Недвижнини","Возила");
for( $i=0; $i<count($array); $i++ )
	{
		$test=$array[$i];
		$sql=mysqli_query($sConn,"SELECT COUNT(podVid) FROM oglas WHERE Vid =  '$test'");
		while($row=mysqli_fetch_assoc($sql))
		{
			$vidCount  = $row['COUNT(podVid)'];	
?>	
		<script type="text/javascript">
			$(function(){
				<?php
					$var = (string)$test;
				?>
				var vid = $(<?php echo (string)$test;?>).attr('id') + " (" + <?php echo $vidCount;?> + ")"
				$(<?php echo (string)$test;?>).text(vid);
				
				
				/* $(function(){
 		$("vid").click(function(){
			$(".mainbody").empty();
			var Vid='Nedviznini';
			$.ajax({
						type:'POST',
						url:'includes/katerina.php',
						data:Vid,
						success:function(dateTest){
							$('.mainbody').html(dateTest);
						}
					});
			});
		}); */
		});
		</script>
		<?php	
		}  
	}
		?>
	<script type="text/javascript">
		$(function(){
			$(".klasa").click(function(){
				var groupValue = $(this).text().split(" ")[0];
				//console.log(groupValue);
				var datastr = '&groupValue=' + groupValue;
					$.ajax({
						type:'POST',
						url:'includes/klasa.php',
						data:datastr,
						success:function(dateTest){
							$('.mainbody').html(dateTest);
						}
					});
				
				}); 
		});
	</script>
		<script type="text/javascript">
		$(function(){
			$(".klasa1").click(function(){
				var groupValuee = $(this).text().split(" ")[0];
				//console.log(groupValue);
				var datastrr = '&groupValuee=' + groupValuee;
					$.ajax({
						type:'POST',
						url:'includes/klasa1.php',
						data:datastrr,
						success:function(dateTest){
							$('.mainbody').html(dateTest);
						}
					});
				
				}); 
		});
	</script>
<?php
$podVid = array("ПродавамКуќа","ПродавамСтан","ПродавамВила","ИздавамКуќа","ИздавамСоби","ИздавамСтан","ИздавамВила","Автомобил","Моторцикл","Комбе","Автобус","Камион","Трактор","Комбањ");
for($j=0;$j<count($podVid);$j++)
	{
		$podVidValue = $podVid[$j];
		$sqlPodVid=mysqli_query($sConn,"SELECT COUNT(podVid) FROM oglas WHERE podVid= '$podVidValue'");
		while($rowPodVid=mysqli_fetch_assoc($sqlPodVid))
		{
			$podVidCount  = $rowPodVid['COUNT(podVid)'];	
?>
			<script type="text/javascript">
				
				$(function(){
					<?php
						$podVidKate = (string)$podVidValue;
					?>
					var podVid = $(<?php echo (string)$podVidValue;?>).attr('id') + " (" + <?php echo $podVidCount;?> + ")"
					$(<?php echo (string)$podVidValue;?>).text(podVid);
				});
				
			</script>
			<?php
		} 
	}
			?>	

<div class="leftNavbar">
	<span><h2>Огласи</h2></span>
	</br>
	<span><a href="#"><h3 id='Недвижнини' class='klasa1'></h3></a></span>
	<span><a href="#"><p id='ПродавамКуќа' class='klasa'></p></a></span>
	<span><a href="#"><p id='ПродавамСтан' class='klasa'></p></a></span>
	<span><a href="#"><p id='ПродавамВила' class='klasa'></p></a></span>
	<span><a href="#"><p id='ИздавамКуќа' class='klasa'></p></a></span>
	<a href="#"><p id='ИздавамСоби' class='klasa'></p></a>
	<a href="#"><p id='ИздавамСтан' class='klasa'></p></a>
	<a href="#"><p id='ИздавамВила' class='klasa'></p></a>
	</br>
	<span><a href="#"><h3 id='Возила' class='klasa1'></h3></a></span>
	<span><a href="#"><p id='Автомобил' class='klasa'></p></a></span>
	<span><a href="#"><p id='Моторцикл' class='klasa'></p></a></span>
	<span><a href="#"><p id='Комбе' class='klasa'></p></a></span>
	<span><a href="#"><p id='Автобус' class='klasa'></p></a></span>
	<span><a href="#"><p id='Камион' class='klasa'></p></a></span>
	<span><a href="#"><p id='Трактор' class='klasa'></p></a></span>
	<span><a href="#"><p id='Комбањ' class='klasa'></p></a></span>
	</br>
</div>
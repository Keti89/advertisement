<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$(function(){
 		$(".Nedviznini").click(function(){
			$(".mainbody1").empty();
			$.get('nedviznini.php', function(data) {
				//console.log(data);
				$('.mainbody1').html(data);
			//	alert('Load was performed.');
			});
		});
		
		$(".Avtomobil").click(function(){
			$(".mainbody1").empty();
			$.get('avtomobili.php', function(data) {
				//console.log(data);
				$('.mainbody1').html(data);
			//	alert('Load was performed.');
			});
		});
	});
</script>

<div class="leftNavbar1">
<span><h2>Внеси оглас</h2></span>
</br>
<span><a href="#" class="Nedviznini"><h3>Недвижнини </h3></a></span>
<span><a href="#" class="Nedviznini"><p>Продавам куќа</p></a></span>
<span><a href="#" class="Nedviznini"><p>Продавам стан</p></a></span>
<span><a href="#" class="Nedviznini"><p>Продавам вила</p></a></span>
<span><a href="#" class="Nedviznini"><p>Издавам куќа</p></a></span>
<span><a href="#" class="Nedviznini"><p>Издавам соби</p></a></span>
<span><a href="#" class="Nedviznini"><p>Издавам стан</p></a></span>
<span><a href="#" class="Nedviznini"><p>Издавам вила</p></a></span>
</br>
<span><a href="#" class="Avtomobil"><h3>Возила</h3></a></span>
<span><a href="#" class="Avtomobil"><p>Автомобили</p></a></span>
<span><a href="#" class="Avtomobil"><p>Моторцикл</p></a></span>
<span><a href="#" class="Avtomobil"><p>Автобус</p></a></span>
<span><a href="#" class="Avtomobil"><p>Комбе</p></a></span>
<span><a href="#" class="Avtomobil"><p>Камион</p></a></span>
<span><a href="#" class="Avtomobil"><p>Трактор</p></a></span>
</br>
</div>
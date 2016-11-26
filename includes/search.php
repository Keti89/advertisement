<script type="text/javascript">
	var value;
	$(function(){
		$("#search").click(function(){
			
			value = $("#kategorii option:selected").text();
			if(value=='Возила'){
				var naslov = $("#naslov").val();
				var grad = $("#grad").val();
				var podVidVozila = $("#podVidVozila").val();
				var marka = $("#marka").val();
				var km = $("#km").val();
				var gorivo = $("#gorivo").val();
				var registracija = $("#registracija").val();
					$(".mainbody").empty();	
					var datastr = 'naslov=' + naslov + '&grad=' + grad + '&marka=' + marka + '&podVidVozila=' + podVidVozila + '&km=' + km + '&gorivo=' + gorivo + '&registracija=' + registracija;
					$.ajax({
						type:'POST',
						url:'includes/kate.php',
						data:datastr,
						success:function(dateTest){
							$('.mainbody').html(dateTest);
						}
					});
				
			}else if(value=='Недвижнини'){
				var naslov = $("#naslov").val();
				var grad = $("#grad").val();
				var podVidNedviznini = $("#podVidNedviznini").val();
				var sprat = $("#sprat").val();
				var sobi = $("#sobi").val();
					$(".mainbody").empty();	
					var datastr1 = 'naslov=' + naslov + '&grad=' + grad + '&podVidNedviznini=' + podVidNedviznini + '&sprat=' + sprat + '&sobi=' + sobi;
					$.ajax({
						type:'POST',
						url:'includes/kate1.php',
						data:datastr1,
						success:function(dateTest){
							$('.mainbody').html(dateTest);
					}
				});
			}else{
				var naslov = $("#naslov").val();
				var grad = $("#grad").val();
					$(".mainbody").empty();	
					var datastr2 = 'naslov=' + naslov + '&grad=' + grad;
					$.ajax({
						type:'POST',
						url:'includes/keti.php',
						data:datastr2,
						success:function(dateTest){
							$('.mainbody').html(dateTest);
					}
				});
			}
		});
	});

</script>

<div class="search">
	<span class="spaseLeft">Пребарувај: <input type="text" id="naslov"></span>
	<span class="spaseLeft">Категории: 
           <select id="kategorii">
			<option value='1'>Сите категории..</option>
			<option value='2'>Недвижнини</option>
			<option value='3'>Возила</option>
	        </select>
	</span>
	<span> Градови: 
	        <select id="grad">
			<option>Сите градови</option>
			<option>Битола</option>
			<option>Берово</option>
			<option>Валандово</option>
			<option>Велес</option>
			<option>Виница</option>
			<option>Гевгелија</option>
			<option>Гостивар</option>
			<option>Дебар</option>
			<option>Демир Хисар</option>
			<option>Делчево</option>
			<option>Кавадарци</option>
			<option>Кратово</option>
			<option>Крушево</option>
			<option>Крива Паланка</option>
			<option>Кичево</option>
			<option>Кочани</option>
			<option>Куманово</option>
			<option>Македонски Брод</option>
			<option>Македонска Каменица</option>
			<option>Неготино</option>
			<option>Охрид</option>
			<option>Прилеп</option>
			<option>Пехчево</option>
			<option>Пробиштип</option>
			<option>Радовиш</option>
			<option>Ресен</option>
			<option>Струга</option>
			<option>Струмица</option>
			<option>Свети Николе</option>
			<option>Скопје</option>
			<option>Тетово</option>
			<option>Штип</option>
		    </select>
	</span>
	<input type="button" id="search" value="ОК"/>
</div>
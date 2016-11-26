<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

<div class="rightNavbar">
	<script type="text/javascript">
	
		function getName(){
			$.post('login.php', {Ime:form.Ime.value, Password:form.Password.value}, 
			function(output){
				console.log(output);
				//if(output=="Please enter a name!"){
				//	alert("Please enter a name!");
				//}else if(output=="Name does not exist!"){
				//	alert("Name does not exist!");
				//}else{
				//	$('#login').hide();
				//	$('.login_img').show();
			//		$('#loginName').html(output).show();
				//}
				
			});
		}
	
	</script>
	
	
	<div class="right_content">
		<div class="right_content_login">
			<form name="form" method="POST" action="admin/index.php" >
			<fieldset>  
				<legend>Логирање:</legend>  
				<table> 
                <tr></tr> 
				<tr>  
					<td><label for="Ime">Име:</label></td>
                </tr>
                <tr>    
                    <td><input name="Ime" type="text" id="username" size="20"></td>  
				</tr>  
				<tr>  
					<td><label for="Ime">Пасворд:</label></td>
                </tr> 
                <tr>   
                    <td><input name="Password" type="password" id="Password" size="20"></td>  
				</tr>
                <tr>
                </tr>  
				<tr>  
                    <td><input type="submit" name="button" value="Логирај се"></td>  
				</tr> 
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><a href="registracija.php">Регистрирај се!</a></td>
				</tr>
				</table>  
				</fieldset>  
				
				
		</form>
		
		</div>
	</div> 
	
<!--
	<div class="login" style="text-align:center;">
		<div><h1 style="background-color:blueviolet; ">Login in:</h1></div>
		<br/>
		<form id= "form1" name="form1" method="POST" action="admin/index.php">
			<div style="background-color:blueviolet; float:right; margin-right:20px; margin-bottom: 15px;">
			Ime:<input name="Ime" type="text"  size="20" />
			</div>
			<br/>
			<div style="background-color:blueviolet; float:right; margin-right:20px; margin-bottom: 15px;"> 
			Password:<input name="Password" type="password"  size="20" /> 
			</div>
			<br/>
			
			<div style="text-align: center; margin-bottom: 15px;">  
				<input type="submit" name="button"  value="Log In" />
			</div>
		</form>
		<div style=" text-align:center"> <a href="admin/registracija.php">Registriraj se:</a></div>
		<div style=" text-align:center"> <a href="#">Zaboravena lozinka:</a></div>
    </div>
-->	
</div>

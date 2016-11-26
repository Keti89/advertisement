 <?php 
	session_start();
	if(!isset($_SESSION["manager"]))
	{
		header("location:index.php");
		exit();
	}
	$managerID = preg_replace('#(^0-9)#i','',$_SESSION["id_korisnik"]);
	$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Ime"]);
	$Password = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Password"]);
	include "../store/connect_to_db.php";
	$sql= mysqli_query($sConn,"SELECT * FROM korisnik WHERE id_korisnik='$managerID' AND Ime='$Ime' AND Password='$Password' LIMIT 1");
	$existCount = mysqli_num_rows($sql);
	if($existCount == 0)
	{
		echo"Your login sesion data is not on record in the database";
		exit();
	} 
?>

<?php 
			$product_list='<span style="padding:15px;">Доколку сакате да не контактирате пополнете ја следната форма:</span>
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
        <link rel="stylesheet" href="../css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
		
    </head>
    <body>
	<div class='wrapper'>
		<?php
		include("../includes/header1.php"); 
		include("../includes/navbar1.php"); 
		include("../includes/leftNavbar1.php");
		include("../includes/mainbody1.php");
		include("../includes/footer1.php");
		?>
	</div>
    </body>

</html>


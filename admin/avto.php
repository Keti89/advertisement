<?php 
	session_start();
	if(!isset($_SESSION["manager"]))
	{
		header("location:index.php");
		exit();
	}
	include "../store/connect_to_db.php";
	$managerID = preg_replace('#(^0-9)#i','',$_SESSION["id_korisnik"]);
	$Ime = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Ime"]);
	$Password = preg_replace('#(^A-Za-z0-9)#i','',$_SESSION["Password"]);
	$sql= mysqli_query($sConn,"SELECT * FROM korisnik WHERE id_korisnik='$managerID' AND Ime='$Ime' AND Password='$Password' LIMIT 1");
	$existCount = mysqli_num_rows($sql);
	if($existCount == 0)
		{
			echo"Your login sesion data is not on record in the database";
			exit(); 
		} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Оглас</title>
<link rel="stylesheet" href="../css/style.css">
</head>
		
<?php
function validataCC($cc_num, $type)
	{
		if($type=="American Express")
		{
			$denum="American Express";
		} else if($type=="Diner's Club")
		{
			$denum="Diner's Club";
		}else if($type=="Discover")
		{
			$denum="Discover";
		}else if($type=="Master")
		{
			$denum="Master";
		}else if($type=="Visa Card")
		{
			$denum="Visa Card";
		}	
		if($type == "American Express") {
			//$pattern = "/^([34|37]{2})([0-9]{13})$/";//American Express
			$pattern = "/^3[4,7]\d{13}$/";
			if (preg_match($pattern,$cc_num)) {
					$verified = true;
			} else {
				$verified = false;
			}
			} elseif($type == "Diner's Club") {
				//$pattern = "/^([30|36|38]{2})([0-9]{12})$/";//Diner's Club
				$pattern = "/^3[0,6,8]\d{12}$/";
				if (preg_match($pattern,$cc_num)) {
					$verified = true;
			} else {
				$verified = false;
			}
			} elseif($type == "Discover") {
				//$pattern = "/^([6011]{4})([0-9]{12})$/";//Discover Card
				$pattern = "/^6011-?\d{4}-?\d{4}-?\d{4}$/";//Discover Card
				if (preg_match($pattern,$cc_num)) {
					$verified = true;
			} else {
				$verified = false;
			}
			} elseif($type == "Master") {
				//$pattern = "/^([51|52|53|54|55]{2})([0-9]{14})$/";//Mastercard
				$pattern = "/^5[1-5]\d{2}-?\d{4}-?\d{4}-?\d{4}$/";//Mastercard
				if (preg_match($pattern,$cc_num)) {
					$verified = true;
				} else {
					$verified = false;
				}
			} elseif($type == "Visa Card") {
				//$pattern = "/^([4]{1})([0-9]{12,15})$/";//Visa
				$pattern = "/^4\d{3}-?\d{4}-?\d{4}-?\d{4}$/";//Visa
				if (preg_match($pattern,$cc_num)) {
					$verified = true;
				} else {
					$verified = false;
				}
			}else if($type == ""){
				$verified = false;
			}

			if($verified == false) {
				//Do something here in case the validation fails
				return false;
				//echo "Credit card invalid. Please make sure that you entered a valid <em>" . $denum . "</em> credit card ";
			} else { //if it will pass...do something
			return true;
				//echo "Your <em>" . $denum . "</em> credit card is valid";
			}
		}
if (isset($_POST['button'])) 
	{
	
		$naslov=$_POST['naslov'];
		$podVid=$_POST['podVid'];
		$cena=$_POST['cena'];
		$godina=$_POST['godina'];
		$opis=$_POST['opis'];
		$marka=$_POST['marka'];
		$km=$_POST['km'];
		$gorivo=$_POST['gorivo'];
		$karoserija=$_POST['karoserija'];
		$registracija=$_POST['registracija'];
		$ccnumber=$_POST['ccnumber'];
		$cctypes=$_POST['cctypes'];
		$test = validataCC("$ccnumber","$cctypes");
		$oglass="";
		if( $naslov=="" ||$podVid=="" || $cena=="" || $godina=="" || $opis=="" ||$ccnumber==""||$cctypes=="") 
			{
				$oglass .='Имате празно место <a href=nedviznini.php><button>Врати се назад</button>  </a>';  //return 0;
			}
		else
			{
				if(!$test){
					$oglass .='Не валидна кредитна картичка <a href=nedviznini.php><button>Врати се назад</button>  </a>';
				}else
				{	
				$sql =mysqli_query($sConn,"INSERT INTO oglas (naslov,Vid,podVid,cena,godina,opis,id_korisnik, data_add) VALUES ('$naslov','Возила','$podVid', '$cena', '$godina','$opis','$managerID',now())")or die(mysqli_error($sConn)); 
				$last_id = mysqli_insert_id($sConn);
				$exec = mysqli_query($sConn,$sql);
				$sql_2 =mysqli_query($sConn,"INSERT INTO avto (marka,km,gorivo,karoserija,registracija,id) VALUES ('$marka','$km','$gorivo','$karoserija','$registracija','$last_id')")or die(mysqli_error($sConn)); 
				$exec = mysqli_query($sConn, $sql_2);
			}
			$img = $_FILES["image"]["name"];
			foreach ($img as $key => $value) 
			{
				$photo= addslashes(file_get_contents($_FILES['image']['tmp_name'][$key]));
				$image= getimagesize ($_FILES['image']['tmp_name'][$key]);
				$qry = mysqli_query($sConn,"INSERT INTO pictures (data, type, idog, date) VALUES ('$photo', '$image', '$last_id', NOW())");
				$exec=  mysqli_query($sConn,$qry );
			}
			$oglass .='<table width="50%" border="0" cellspacing="0"cellpadding="6"><tr>';
				$sqlImagess=mysqli_query($sConn,"SELECT * FROM pictures INNER JOIN oglas ON pictures.idog = oglas.idoglas WHERE idoglas='$last_id'");
				$oglasImages=mysqli_num_rows($sqlImagess); 
				if($oglasImages>0)
				{
					while($rowImages=mysqli_fetch_array($sqlImagess))
					{
						$idp=$rowImages['idp'];
						//header("Content-type: text/html");
						$type ="Content-type: ".$rowImages['type'];
						//header($type);
						//echo $row['data'];
						
						$oglass .='<td width="17%" valign="top"><a href=image.php?idp=' .$rowImages['idp']. '><img src=image.php?idp=' .$idp. ' width="77" height="102" border="1" />
				</a></td>';
					}
					
				}
				$oglass .='</tr></table>';
			$oglass .="</br>Наслов: $naslov </br> Под вид: $podVid</br> Цена: $cena</br> Година: $godina </br> Марка: $marka</br>Километража: $km</br> Гориво: $gorivo</br> Каросерија: $karoserija</br> Регистрација: $registracija</br> Опис: $opis</br>";
			
	}	
	}
	//header("location:index.php");
	mysqli_close($sConn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<div class='wrapper'>
<?php
        include("../includes/header1.php"); 
		include("../includes/navbar1.php"); 
	    include("../includes/leftNavbar1.php");
		
?>
<div class="mainbody1" align="center" style="margin-top: 45px;">
<?php echo $oglass;?>
</div>

<?php include_once("../includes/footer.php"); ?>

</body>
</html>
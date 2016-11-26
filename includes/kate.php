<?php
		include "../store/connect_to_db.php";
		$dynamicList='';
		$naslov=$_POST['naslov'];
		$grad=$_POST['grad'];
		$podVidVozila=$_POST['podVidVozila'];
		$marka=$_POST['marka'];
		$km=$_POST['km'];
		$gorivo=$_POST['gorivo'];
		$registracija=$_POST['registracija'];
		$query="";
		//if($grad=='Site gradovi'&& $naslov=='' && $podVidVozila=='Vid' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'";
		} else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad'AND naslov='$naslov'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad'AND marka='$marka'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad'AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov' AND podVid= '$podVidVozila'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov' AND marka='$marka'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov' AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid= '$podVidVozila' AND marka='$marka'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid= '$podVidVozila' AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid= '$podVidVozila' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid= '$podVidVozila' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND km= '$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND km= '$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND km= '$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila'AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND km='$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND km= '$km'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND km='$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND km='$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND marka='$marka' AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND km= '$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND km= '$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND naslov= '$naslov'  AND podVid= '$podVidVozila' AND marka='$marka' AND km= '$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}
		else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND km='$km'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND km='$km'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND km='$km'AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND km='$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND km='$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND podVid='$podVidVozila' AND marka='$marka'AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND km= '$km' AND gorivo= '$gorivo'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND km= '$km' AND registracija= '$registracija'";
		}else if($grad!='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND Grad ='$grad' AND marka='$marka' AND km= '$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}
		
		
		
		else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' ";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila'";
		}
		else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND marka='$marka'";
		}
		else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND km= '$km'";
		}
		else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND gorivo= '$gorivo' ";
		}
		else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila'AND km= '$km'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila'  AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND marka='$marka' AND km= '$km'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND marka='$marka' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND marka='$marka' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND km= '$km' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND km= '$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND km= '$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka'AND km= '$km'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka'AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila'AND km= '$km'AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila'AND km= '$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila'  AND gorivo= '$gorivo'AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka' AND km= '$km' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka' AND km= '$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov' AND podVid= '$podVidVozila' AND marka='$marka'AND km= '$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov'  AND marka='$marka'AND km= '$km'AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov'  AND marka='$marka'AND km= '$km'AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov'  AND marka='$marka' AND gorivo= '$gorivo' 'AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov!='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND naslov= '$naslov'  AND marka='$marka'AND km= '$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}
		
		
		else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila'  ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND km='$km' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND gorivo= '$gorivo' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND registracija= '$registracija' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka'AND km='$km' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka'AND gorivo= '$gorivo' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka'AND registracija= '$registracija' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka'AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka'AND km='$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka'AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND marka='$marka' AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND km='$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila!='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND podVid= '$podVidVozila' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND marka='$marka'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND marka='$marka'AND km='$km'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND marka='$marka'AND km='$km' AND gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND marka='$marka'AND km='$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND marka='$marka'AND km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила'AND  marka='$marka' AND gorivo= '$gorivo' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND  marka='$marka' AND gorivo= '$gorivo' AND registracija= '$registracija' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka!='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила'AND  marka='$marka' AND registracija= '$registracija' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила' AND  km='$km' ";
		} else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила' AND  km='$km' AND gorivo= '$gorivo' ";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила' AND  km='$km' AND gorivo= '$gorivo' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km!='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила' AND  km='$km' AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija=='Одбери')
		{
			$query ="Vid='Возила' AND  gorivo= '$gorivo'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo!='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила' AND  gorivo= '$gorivo'AND registracija= '$registracija'";
		}else if($grad=='Сите градови' && $naslov=='' && $podVidVozila=='Под вид' && $marka=='Одбери' && $km=='Одбери' && $gorivo=='Одбери' && $registracija!='Одбери')
		{
			$query ="Vid='Возила' AND  registracija= '$registracija' ";
		}
		
		
		$sql=mysqli_query($sConn,"SELECT * FROM korisnik INNER JOIN oglas ON korisnik.id_korisnik = oglas.id_korisnik INNER JOIN avto ON oglas.idoglas = avto.id WHERE $query  ORDER BY data_add DESC");
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
				$dynamicList.='<div align="left" style="margin-left:120px;">
	</br>
				<table width="100%" border="0" cellspacing="0"cellpadding="6">
					<tr>
						<td width="17%" valign="top"><a href= oglas.php? = ' .$idoglas .' ><img style="border#666 1px solid;" src=image.php?idp=' .$idp. '  width="77" height="102" border="1" /></a></td>
						<td width="83%" valign="center" style="line-height: 25px;">'.  $naslov .'<br/> $'. $cena  .'<br/><a href=oglas.php?idoglas='. $idoglas .'>Погледај детали за огласот</a></td>
					</tr>
				</table>
	</br></div>';
	
				}	
			}
			else
			{
			$dynamicList.='<div align="left" style="margin-left:120px;">
	</br>
				<table width="100%" border="0" cellspacing="0"cellpadding="6">
					<tr>
						<td width="17%" valign="top"><a href= oglas.php? = ' .$idoglas .' ><img style="border#666 1px solid;" src="#"  width="77" height="102" border="1" /></a></td>
						<td width="83%" valign="center" style="line-height: 25px;">'.  $naslov .'<br/> $'. $cena  .'<br/><a href=oglas.php?idoglas='. $idoglas .'>Погледај детали за огласот</a></td>
					</tr>
				</table>
	</br></div>';
			
			}
       
			}
			echo $dynamicList;
		}else
		{
			echo "Нема таков оглас";
		}
		mysqli_close($sConn); 
	
?>

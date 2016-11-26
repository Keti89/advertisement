<?php
		include "../store/connect_to_db.php";
		$dynamicList='';
		$naslov=$_POST['naslov'];
		$grad=$_POST['grad'];
		$podVidNedviznini=$_POST['podVidNedviznini'];
		$sprat=$_POST['sprat'];
		$sobi=$_POST['sobi'];
		$query="";
		//if($grad=='Site gradovi' && $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat=='Odberi' && $sobi=='Odberi')
		//echo 'Pod ' . $naslov;
		if($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини'";
		//echo $query;
		}
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad'";
		}
		else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov'";
		}
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND podVid='$podVidNedviznini'";
		}
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND sprat='$sprat'";
		}
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND sobi='$sobi'";
		}
		
		
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND naslov='$naslov'";
		}
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND naslov='$naslov' AND podVid='$podVidNedviznini'";
		}
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND naslov='$naslov'AND sprat='$sprat'";
		}
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND naslov='$naslov'AND sobi='$sobi'";
		}
		
		
		
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND podVid='$podVidNedviznini'";
		}
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND podVid='$podVidNedviznini'AND sprat='$sprat' ";
		}
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND podVid='$podVidNedviznini' AND sobi='$sobi'";
		}
		
		
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND sprat='$sprat'";
		}
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND sprat='$sprat' AND sobi='$sobi'";
		}
		
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND sobi='$sobi'";
		}
		
		else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov' AND podVid='$podVidNedviznini'";
		}
		else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov' AND sprat='$sprat'";
		}
		else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov' AND  sobi='$sobi'";
		}
		
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND podVid='$podVidNedviznini' AND  sprat='$sprat'";
		}else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND podVid='$podVidNedviznini'  AND  sobi='$sobi'";
		}
		
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND sprat='$sprat' AND  sobi='$sobi'";
		}
		
		else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad'AND naslov='$naslov' AND sprat='$sprat' AND  sobi='$sobi'";
		}else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov' AND  podVid='$podVidNedviznini' AND  sprat='$sprat'";
		}else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov' AND  podVid='$podVidNedviznini' AND  sobi='$sobi'";
		}
		
		
		else if ($grad!='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad'  AND  podVid='$podVidNedviznini' AND  sprat='$sprat' AND  sobi='$sobi'";
		}
		
		
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi=='Одбери')
		{
			$query ="Vid='Недвижнини'  AND naslov='$naslov' AND podVid='$podVidNedviznini' AND sprat='$sprat'";
		} 
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat=='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини'  AND naslov='$naslov' AND podVid='$podVidNedviznini' AND sobi='$sobi'";
		}
		
		
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini=='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини'  AND naslov='$naslov' AND sprat='$sprat'AND sobi='$sobi'";
		}
		
		
		else if ($grad=='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
				$query ="Vid='Недвижнини'  AND naslov='$naslov' AND podVid='$podVidNedviznini' AND sprat='$sprat'AND sobi='$sobi'";
		}
		
		else if ($grad=='Сите градови'&& $naslov=='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини'  AND podVid='$podVidNedviznini' AND sprat='$sprat'AND sobi='$sobi'";
		}
		
		else if ($grad!='Сите градови'&& $naslov!='' && $podVidNedviznini!='Под Вид' && $sprat!='Одбери' && $sobi!='Одбери')
		{
			$query ="Vid='Недвижнини' AND Grad ='$grad' AND naslov='$naslov'  AND podVid='$podVidNedviznini' AND sprat='$sprat'AND sobi='$sobi'";
		}
		
		$sql=mysqli_query($sConn,"SELECT * FROM korisnik INNER JOIN oglas ON korisnik.id_korisnik = oglas.id_korisnik INNER JOIN nedviznini ON oglas.idoglas = nedviznini.ido WHERE $query ORDER BY data_add DESC");
		//$sql=mysql_query("SELECT * FROM korisnik INNER JOIN oglas ON korisnik.id_korisnik = oglas.id_korisnik INNER JOIN nedviznini ON oglas.idoglas = nedviznini.ido WHERE Vid='Nedviznini' OR Grad ='$grad' OR  naslov='$naslov' OR podVid='$podVidNedviznini' AND sprat='$sprat' OR sobi='$sobi' ORDER BY data_add DESC");
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

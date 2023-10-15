<html>
<head>
<title>Millennium Shopping</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	//$mysqli = new mysqli('localhost', 'root', 'patanscio', 'articoli');
?>
<div align="center">
      <table width="980" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
      </table>
      <table width="980" height="545" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr>
      <td height="18" colspan="3" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="19" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      </td>
    <td width="867" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <?php
	  	$cerca='';
		if(isset($_GET['cerca'])){
			$cerca=$_GET['cerca'];
			$search= "FROM artic WHERE (titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%') ORDER BY prezzo";
			$togli= "FROM artic WHERE (genere3 LIKE 'out') AND ((titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%'))";
		}else if(isset($_POST['cerca'])){
			$cerca=$_POST['cerca'];
			$search= "FROM artic WHERE (titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%') ORDER BY prezzo";
			$togli= "FROM artic WHERE ((genere3 LIKE 'out') AND (titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%'))";		
		}else {
		 $search="FROM artic ORDER BY prezzo";
		 $togli="FROM artic WHERE genere3='out'";	
		}
		$conta = "SELECT COUNT(*) AS conto " . $search;
		$escludi = "SELECT COUNT(*) AS escl " . $togli;
		$temporany = "SELECT * " . $search;
		$search = $temporany;
		//echo $escludi;
		if($numero=$mysqli->query($conta)){
		    $totalrow = $numero->fetch_assoc();
			//echo "<p>",$totalrow['conto'], "<p>";
		}
		if($meno=$mysqli->query($escludi)){
		   $eliminati = $meno->fetch_assoc();
			//echo "<p>",$eliminati['escl'], "<p>";
		}
		$currentpage=1;
		if(isset($_GET['page'])){
			if($_GET['page']>1) //$search .= " LIMIT 10";
			{
				$currentpage=$_GET['page'];
				$pag=$_GET['page'];
				$pag-=1;
				//$pag *=10;
				//$search .= " LIMIT ". $pag . ",10";
			}
		}//else $search .= " LIMIT 10";
		
		$totaltrue=$totalrow['conto'] - $eliminati['escl']; 
		$pagtot = $totaltrue/10;
		$temp = ceil($pagtot);
		
		if($temp<$pagtot) $temp += 1;
		$pagtot=$temp;
		//echo $pagtot;
		$prec=$currentpage-1;
		$indexpage="&nbsp;";
		$cerc="&cerca=";
		if($cerca != '') $cerc .=$cerca;
		else $cerc='';
		if($currentpage>1)$indexpage="<a href='listacompleta.php?page=".$prec . $cerc."'>Precedente</a>&nbsp;&nbsp;";
		
		$x=1;
		//echo $pagtot;
		do{
			//echo $x;
			$indexpage .= "<a href='listacompleta.php?page=" . $x . $cerc."'>" . $x . "</a>&nbsp;";  
			$x++;
		}while($x<=$pagtot);
		
		$succ=$currentpage+1;
		if($currentpage<$pagtot)$indexpage.="&nbsp;<a href='listacompleta.php?page=" . $succ . $cerc ."'>Successiva</a>";
		echo "<p align='center'>", $indexpage, "</p>";
		$delays=0;
		$pagec=$currentpage;
		$pagec-=1;
		$pagec *=10;
		$pagec +=1;
		$limiti=1;
		$nores=1;
		if($result=$mysqli->query($search)){
			while($row = $result->fetch_assoc())
				{
					if($row['genere3']!="out"){
						if($currentpage==1) $delays=1;
						else{
							if($nores>=$pagec) $delays=1;
							else $nores++;	
						}
						if($delays){
							if($limiti<=10){
									if($row['disponibili']>0){
										if($row['cent']>=10)echo "<p><a href='index.php?articolo=$row[id]#vetro'><img src='imm_articoli/$row[foto1].jpg' height='70' border='1'></a>&nbsp;&nbsp;<a href='index.php?articolo=$row[id]#vetro'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$row[prezzo],$row[cent]&nbsp;</strong><a href='carrello.php?codarticolo=$row[id]'><img src='carrello.png' width='80' height='20'><a></font></p>";
										else echo "<p><a href='index.php?articolo=$row[id]#vetro'><img src='imm_articoli/$row[foto1].jpg' height='70' border='1'></a>&nbsp;&nbsp;<a href='index.php?articolo=$row[id]#vetro'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$row[prezzo],0$row[cent]&nbsp;</strong><a href='carrello.php?codarticolo=$row[id]'><img src='carrello.png' width='80' height='20'><a></font></p>"; 
										echo "<hr>";
									}else {
										if($row['cent']>=10)echo "<p><a href='index.php?articolo=$row[id]#vetro'><img src='imm_articoli/$row[foto1].jpg'  height='70' border='1'></a>&nbsp;&nbsp;<a href='index.php?articolo=$row[id]#vetro'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$row[prezzo],$row[cent]&nbsp;</strong><font color='#0000FF'>Disponibile a Giorni</font></font>";
										else echo "<p><a href='index.php?articolo=$row[id]#vetro'><img src='imm_articoli/$row[foto1].jpg'  height='70' border='1'></a>&nbsp;&nbsp;<a href='index.php?articolo=$row[id]#vetro'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$row[prezzo],0$row[cent]&nbsp;</strong><font color='#0000FF'>Disponibile a Giorni</font></font></p>"; 
										echo "<hr>";
									}
								$limiti++;
								}
							
							
						}
					}
				}
			}else echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Elementi trovati: 0</strong></font></p>";
	  		echo "<p align='center'>", $indexpage, "</p>";
	  ?>
      
      
      </td>
    <td width="19" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    <tr bordercolor="#000000">
      <td height="26" colspan="3" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
  </table>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center"></p>
  <p>&nbsp;</p>
</div>
</body>
</html>

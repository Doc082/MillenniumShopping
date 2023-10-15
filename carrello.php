<?php 
	session_start();	
?>
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
<style type="text/css">
@import url(style.css)
</style>
</head>

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	
?>
<table width="980" height="450" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr valign="top" width="418" height="110">
	  <td height="110" colspan="4" bgcolor="#FFFFFF"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="980" height="110">
        <param name="movie" value="titolo.swf">
        <param name="quality" value="high">
        <embed src="titolo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="980" height="110"></embed>
      </object></td>
  </tr>
  <tr width="418" height="25">
	  <td height="20" colspan="4" valign="top" bgcolor="#FFFFFF">
	  <div id="navigation">
  	<ul>
  	  <li><a href="index.php" title="Home">Home</a></li>
  	  <li><a href="accedi.php" title="Accedi">Accedi</a></li>
 	   <li><a href="register.php" title="Registrati">Registrati</a></li>
 	   <li><a href="prodotti.php" title="Prodotti">Prodotti</a></li>
	    <li><a class=active href="carrello.php" title="Carrello">Carrello</a></li>
  	  <li><a href="archiviordini.php" title="Archivio Ordini">Archivio Ordini</a></li>
  	  <li class="last"><a href="chisiamo.php" title="Contatti">Contatti</a></li>
	  </ul>
	</div>

	</td>
  </tr>
  <tr width="418" height="200">
		<td width="131" valign="top" bgcolor="#FFFFFF">
			<div id=menubox align="center">
				<form action="accedi2.php" method="post">User:<br><input id=button name="user" type="text" size="10"><br>Password<br>
				  <input id=button name="passw" type="password" size="10"><br><input id=button name="submit" type="submit" value="Accedi"></form>
			</div>
			<div id=menubox>
				<ul>
  				    <li><a href="listaprodotti.php?categ=fotografia" title="fotografia">Fotografia</a></li>
  	  				<li><a href="listaprodotti.php?categ=videocamera" title="videocamera">Videocamera</a></li>
 	   				<li><a href="listaprodotti.php?categ=immagine%20e%20suono" title="immagine e suono">Immagine e Suono</a></li>
 	   				<li><a href="listaprodotti.php?categ=telefonia" title="telefonia">Telefonia</a></li>
	    			<li><a href="listaprodotti.php?categ=audio" title="audio">Audio</a></li>
  	  				<li><a href="listaprodotti.php?categ=informatica" title="informatica">Informatica</a></li>
  	  				<li><a href="listacompleta.php?search=mondo apple" title="mondo apple">Mondo Apple</a></li>
					<li><a href="listaprodotti.php?categ=gps" title="gps">Gps</a></li>
					<li><a href="listaprodotti.php?categ=videogiochi" title="console">Console e Videogiochi</a></li>
					<li><a href="listaprodotti.php?categ=consumabile" title="consumabile">Consumabile</a></li>
					<li><a href="listaprodotti.php?categ=giardino" title="giardino">Casa e Giardino</a></li>
					<li><a href="listaprodotti.php?categ=tuning%20auto" title="tuning">Automobile</a></li>
					<li><a href="listaprodotti.php?categ=piccoli%20elettrodomestici" title="elettrodomestici">Piccoli Elettrodomestici</a></li>
	  				<li><a href="listaprodotti.php?categ=aria%20aperta" title="giochi">Giochi e Giocattoli</a></li>
					<li><a href="listaprodotti.php?categ=Valigie,%20Trolley,%20Borse" title="valigeria">Valigeria</a></li>
					<li><a href="listaprodotti.php?categ=pasto,%20seggiolone" title="puericultura">Puericultura</a></li>
	  			</ul>
			</div>
		</td>
    <td width="17" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      </td>
    <td width="872" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p>
        <?php
	  	if(isset($_SESSION['peso']))	$_SESSION['peso']=0;
		$totalecomp=0;	
		//aggiunge artocolo millenniumweb
		if(isset($_GET['codarticolo'])){
		 if(isset($_SESSION['nrarticoli'])) $_SESSION['nrarticoli']=$_SESSION['nrarticoli']+1;
		 else $_SESSION['nrarticoli']=1;
		 $temp = $_GET['codarticolo']." ";
		 if(!isset($_SESSION['listarticoli']))$_SESSION['listarticoli']=$temp;
		 else{
		 	$_SESSION['listarticoli']=$_SESSION['listarticoli'].$temp;
		 }
		}
		//aggiunge articolo egross
		if(isset($_GET['egrossarticolo'])){
		 if(isset($_SESSION['egarticoli'])) $_SESSION['egarticoli']=$_SESSION['egarticoli']+1;
		 else $_SESSION['egarticoli']=1;
		 $temp = $_GET['egrossarticolo']." ";
		 if(!isset($_SESSION['listegross']))$_SESSION['listegross']=$temp;
		 else{
		 	$_SESSION['listegross']=$_SESSION['listegross'].$temp;
		 }
		}
		//aggiunge articolo pixmania
		if(isset($_GET['pixarticolo'])){
		 if(isset($_SESSION['pxarticoli'])) $_SESSION['pxarticoli']=$_SESSION['pxarticoli']+1;
		 else $_SESSION['pxarticoli']=1;
		 $temp = $_GET['pixarticolo']." ";
		 if(!isset($_SESSION['listpix']))$_SESSION['listpix']=$temp;
		 else{
		 	$_SESSION['listpix']=$_SESSION['listpix'].$temp;
		 }
		}
		//gestisce la lista Millenniumweb
		if(!isset($_SESSION['nrarticoli'])) echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun articolo del Catalogo 1 presente nel carrello</strong></font></p>";
		else{
			if($_SESSION['nrarticoli']<1){
				//echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun elemento presente nel carrello</strong></font>";
				$_SESSION['nrarticoli']='';
				$_SESSION['listarticoli']="";
			}else{
				$earticoli=explode(' ',$_SESSION['listarticoli']);
				if(isset($_GET['elimarticolo'])){
					if($_SESSION['nrarticoli']==1) $_SESSION['nrarticoli']='';
					else{
						$tempart=$_SESSION['listarticoli'];
						$_SESSION['listarticoli']="";
						$examinate=1;
						for($x=0; $x<=$_SESSION['nrarticoli'];$x++){
							if(($earticoli[$x]!=$_GET['elimarticolo']) || ($examinate==0)){
								$_SESSION['listarticoli']=$_SESSION['listarticoli'].$earticoli[$x].' ';
																
							}else{
								if($examinate!=0) $nrarticoli=$_SESSION['nrarticoli']-1;
								$examinate=0;
								
							}
						}
										
						$_SESSION['nrarticoli']=$nrarticoli;
					}		
				}
				//echo $_SESSION['listarticoli'];
				$numart=1;
				if($_SESSION['nrarticoli']<1){
					echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun articolo del Catalogo 1 presente nel carrello</strong></font></p>";
					$numart=0;
					$_SESSION['nrarticoli']='';
					$_SESSION['listarticoli']="";
			    }else echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Ci sono $_SESSION[nrarticoli]&nbsp;articoli del Catalogo 1 nel carrello</strong></font></p>";	
		 		$larticoli=explode(' ',$_SESSION['listarticoli']);
				//$_SESSION['nrarticoli']= count($larticoli);
				$totale=0;
				for($x=0; $x<$_SESSION['nrarticoli'];$x++){
					if($result=$mysqli->query("SELECT * FROM artic WHERE id='$larticoli[$x]'")){
						$row=$result->fetch_assoc();
						$price=$row['prezzo'];
						$price=round($price,1);
						$totale += $price;
						$prezel = sprintf("%01.2f", $price);
						$prezel=str_replace('.', ',', $prezel);
												
					echo "<p><a href='index.php?articolo=$row[id]'><img src='imm_articoli/$row[foto1].jpg' height='70' border='1'></a><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>&nbsp;&nbsp;$row[titolo]</strong></font><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$prezel&nbsp;<a href='carrello.php?elimarticolo=$row[id]'>Elimina elemento</a></strong></font></p>"; 
				}
								
				}
				$totalecomp=$totale;
				if($numart){
				echo "<p>&nbsp;</p>";
				$prezel = sprintf("%01.2f", $totale);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Totale articoli del Catalogo 1: €$prezel</strong></font></p>";
								
				}
			}
			
			}
			//gestisce la lista Pixmania
		if(!isset($_SESSION['pxarticoli'])) echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun articolo del Catalogo 2 presente nel carrello</strong></font></p>";
		else{
			if($_SESSION['pxarticoli']<1){
				//echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun elemento presente nel carrello</strong></font>";
				$_SESSION['pxarticoli']='';
				$_SESSION['listpix']="";
			}else{
				$earticoli=explode(' ',$_SESSION['listpix']);
				if(isset($_GET['elimpix'])){
					if($_SESSION['pxarticoli']==1) $_SESSION['pxarticoli']='';
					else{
						$tempart=$_SESSION['listpix'];
						$_SESSION['listpix']="";
						$examinate=1;
						for($x=0; $x<=$_SESSION['pxarticoli'];$x++){
							if(($earticoli[$x]!=$_GET['elimpix']) || ($examinate==0)){
								$_SESSION['listpix']=$_SESSION['listpix'].$earticoli[$x].' ';
																
							}else{
								if($examinate!=0) $nrarticoli=$_SESSION['pxarticoli']-1;
								$examinate=0;
								
							}
						}
										
						$_SESSION['pxarticoli']=$nrarticoli;
					}		
				}
				//echo $_SESSION['listarticoli'];
				$numart=1;
				if($_SESSION['pxarticoli']<1){
					echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun articolo del Catalogo 2 presente nel carrello</strong></font></p>";
					$numart=0;
					$_SESSION['pxarticoli']='';
					$_SESSION['listpix']="";
			    }else echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Ci sono $_SESSION[pxarticoli]&nbsp;articoli del Catalogo 2 nel carrello</strong></font></p>";	
		 		$larticoli=explode(' ',$_SESSION['listpix']);
				//$_SESSION['nrarticoli']= count($larticoli);
				$totale=0;
				for($x=0; $x<$_SESSION['pxarticoli'];$x++){
					if($result=$mysqli->query("SELECT * FROM pixmania WHERE codice LIKE '$larticoli[$x]' ")){
						$row=$result->fetch_assoc();
						$price=$row['prezzo'];
						$price*=1.2;
						$price*=1.2;
						$price=round($price,1);
						$totale += $price;
						$prezel = sprintf("%01.2f", $price);
						$prezel=str_replace('.', ',', $prezel);
						$_SESSION['peso']+=$row['peso'];						
					echo "<p><a href='vetrina.php?codpix=$row[codice]'><img src='$row[foto]' height='70' border='1'></a><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>&nbsp;&nbsp;$row[marca]</strong></font><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[titolo]&nbsp;&nbsp;&nbsp;<strong>€$prezel&nbsp;<a href='carrello.php?elimpix=$row[codice]'>Elimina elemento</a></strong></font></p>"; 
				}
								
				}
				$totalecomp+=$totale;
				$totalecomp+=$row['trasporto'];
				if($numart){
				echo "<p>&nbsp;</p>";
				$prezel = sprintf("%01.2f", $totale);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Totale articoli Catalogo 2: €$prezel</strong></font></p>";
								
				}
			}
			
			}
			//gestisce la lista egross
			if(!isset($_SESSION['egarticoli'])) echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun articolo di Catalogo 3 presente nel carrello</strong></font></p>";
		else{
			if($_SESSION['egarticoli']<1){
				//echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun elemento presente nel carrello</strong></font>";
				$_SESSION['egarticoli']='';
				$_SESSION['listegross']="";
			}else{
				$earticoli=explode(' ',$_SESSION['listegross']);
				if(isset($_GET['elimegross'])){
					if($_SESSION['egarticoli']==1) $_SESSION['egarticoli']='';
					else{
						$tempart=$_SESSION['listegross'];
						$_SESSION['listegross']="";
						$examinate=1;
						for($x=0; $x<=$_SESSION['egarticoli'];$x++){
							if(($earticoli[$x]!=$_GET['elimegross']) || ($examinate==0)){
								$_SESSION['listegross']=$_SESSION['listegross'].$earticoli[$x].' ';
																
							}else{
								if($examinate!=0) $nrarticoli=$_SESSION['egarticoli']-1;
								$examinate=0;
								
							}
						}
										
						$_SESSION['egarticoli']=$nrarticoli;
					}		
				}
				//echo $_SESSION['listarticoli'];
				$numart=1;
				if($_SESSION['egarticoli']<1){
					echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun articolo del Catalogo 3 presente nel carrello</strong></font></p>";
					$numart=0;
					$_SESSION['egarticoli']='';
					$_SESSION['listegross']="";
			    }else echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Ci sono $_SESSION[egarticoli]&nbsp;articoli del Catalogo 3 nel carrello</strong></font></p>";	
		 		$larticoli=explode(' ',$_SESSION['listegross']);
				//$_SESSION['nrarticoli']= count($larticoli);
				$totale=0;
				
				$_SESSION['peso']=0;
				for($x=0; $x<$_SESSION['egarticoli'];$x++){
					//echo $larticoli[$x];
					if($result=$mysqli->query("SELECT * FROM egross WHERE codice LIKE '$larticoli[$x]'")){
						$row=$result->fetch_assoc();
						$price=$row['prezzo'];
						$price *=1.2;
						if(($row['categoria']=="MONDO APPLE")||($row['categoria']=="CONSOLLE"))$price *=1.1;
						else $price *=1.2;
						
						$price=round($price,1);
						$totale += $price;
						$prezel = sprintf("%01.2f", $price);	//calcolo e formattazione prezzo
						$prezel=str_replace('.', ',', $prezel);
						
						$_SESSION['peso']+=$row['peso'];
						$peso=str_replace('.', ',', $_SESSION['peso']);						
					echo "<p><a href='index.php?codice=$row[codice]'><img src='http://ecommerce.sitiwebsumisura.com/listino/foto/$row[foto].jpg' height='70' border='1'></a><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>&nbsp;&nbsp;$row[titolo]</strong></font><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[marca]&nbsp;&nbsp;&nbsp;<strong>€$prezel&nbsp;<a href='carrello.php?elimegross=$row[codice]'>Elimina elemento</a></strong></font></p>"; 
				}
								
				}
				$totalecomp+=$totale;
				if($numart){
				echo "<p>&nbsp;</p>";
				$prezel = sprintf("%01.2f", $totale);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Totale articoli del Catalogo 3: €$prezel</strong></font></p>";
				
				
				}
			}
			
			}
			$prezel = sprintf("%01.2f", $totalecomp);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p>&nbsp;</p>";
			echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Totale Complessivo: €$prezel  -  Peso: Kg $peso</strong></font></p>";
				
				if($totale>=30)echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><a href='javascript:history.back()'>Indietro</a>&nbsp;&nbsp;<a href='confermaordine.php?&totale=$totalecomp'>Conferma Ordine</a></font></p>";
				else  echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><a href='javascript:history.back()'>Indietro</a>&nbsp;&nbsp;Ordine Minimo €30</font></p>";
		
	  ?>
      </p>
      <p>&nbsp;</p></td>
    </tr>
	</table>
  <p>&nbsp;</p>
  
</body>
</html>

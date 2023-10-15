<?php 
	session_start();
	
?>
<html>
<head>
<title>Millennium Shopping - Negozio online di elettronica e computer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Negozio on-line specializzato in elettronica e computer, gadget di ogni tipo al miglior prezzo.">
<meta name="KeyWords" content="lettori, mp3, usb, flash, drive, harddisk, flashdrive, laptop, computer, chiavette usb, fotocamere, videocamere, telecamere, elettronica, periferiche, schede, microscopio, webcam, tastiere, mouse, e-cigarette, tabacco, sigaretta elettronica, pendrive, 16gb, card drive, dispenser sapone, automatico, shop, shopping, cina elettronica, elettronica cina, elettronica cinese, cinafonini, cinafonino">
<META name="author" content="Mirko 'Doc' Fenu">
<meta name="google-site-verification" content="Qalret_-ejsRVBi8KMzR6455imCi084zxiZSYQhLB8g" />
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


<body background="texture/texture2.jpg" >
<?php
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	//prima colonna
	$art01="10555937";
	$data01="pixmania";
	
	$art02="LX.EDU0F.002";
	$data02="egross";
	
	$art03=69;
	$data03="artic";
	
	//seconda colonna
	$art04="10749067";
	$data04="pixmania";
	
	$art05="2101449";
	$data05="egross";
	
	$art06=37;
	$data06="artic";
	
	//terza colonna
	$art07="10647928";
	$data07="pixmania";
	
	$art08="VPAD7_E1";
	$data08="egross";
	
	$art09=70;
	$data09="artic";		
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
  	  <li><a class=active href="index.php" title="Home">Home</a></li>
  	  <li><a href="accedi.php" title="Accedi">Accedi</a></li>
 	   <li><a href="register.php" title="Registrati">Registrati</a></li>
 	   <li><a href="prodotti.php" title="Prodotti">Prodotti</a></li>
	    <li><a href="carrello.php" title="Carrella">Carrello</a></li>
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
			<div id=menubox align="center">
				<form action="listacompleta.php" method="get">Cerca tra i prodotti:<br><input id=button name="seleziona" type="text" size="10"><input id=button name="submit" type="submit" value="Cerca"></form>
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
	    <td width="280" align="center" valign="top" bgcolor="#FFFFFF"><div id=box>
				<?php
					$dati=$data01;
					$arti=$art01;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div>
				<div id=box>
				<?php
					$dati=$data02;
					$arti=$art02;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div>
				<div id=box>
				<?php
					$dati=$data03;
					$arti=$art03;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div>
	  </td>
	    <td width="280" align="center" valign="top" bgcolor="#FFFFFF"><div id=box>
				<?php
					$dati=$data04;
					$arti=$art04;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div>
				<div id=box>
				<?php
					$dati=$data05;
					$arti=$art05;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div>
				<div id=box>
				<?php
					$dati=$data06;
					$arti=$art06;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}
				$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div></td>
	    <td width="280" align="center" valign="top" bgcolor="#FFFFFF">          
			<div id=box>
				<?php
					$dati=$data07;
					$arti=$art07;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}
				$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
		  </div>
				<div id=box>
				<?php
					$dati=$data08;
					$arti=$art08;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
				</div>
				<div id=box>
				<?php
					$dati=$data09;
					$arti=$art09;
					if($dati=="artic") $result=$mysqli->query("SELECT * FROM $dati WHERE id = $arti");
	 				else $result=$mysqli->query("SELECT * FROM $dati WHERE codice LIKE '$arti'");				
					$vetrina=$result->fetch_assoc();
				
				if($dati=="egross")echo "<p><img id=imagebox src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg'  alt='$vetrina[marca]'></p>";
				if($dati=="artic")echo "<p><img id=imagebox src='imm_articoli/$vetrina[foto1].jpg'  alt='$vetrina[titolo]'></p>";
				if($dati=="pixmania")echo "<p><img id=imagebox src='$vetrina[foto]'  alt='$vetrina[titolo]'></p>";
				$price=$vetrina['prezzo'];
				if($dati=="artic")$prezel=$price;
				else{
					$price *= 1.2;
					if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *= 1.2;
					$price=round($price,1);
					
				}
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				$titolo="";
				if(($dati=="artic")||($dati=="pixmania")) $titolo=$vetrina['titolo'];
				else $titolo=$vetrina['sottocategoria'];
				echo"<p>$vetrina[marca] <br> $titolo <br>&nbsp;<br> a soli <strong>€ $prezel</strong><br></p>";
				$addtocart="carrello.php?";
				$dettagli="vetrina.php?";
				if($dati=="artic") {
					$addtocart .= "codarticolo=$vetrina[id]";
					$dettagli .="mweb=$vetrina[id]";
				}
				else if($dati=="pixmania") {
					$addtocart .= "pixarticolo=$vetrina[codice]";
					$dettagli .="pmania=$vetrina[codice]";
				}
				else {
					$addtocart .= "egrossarticolo=$vetrina[codice]";
					$dettagli .= "egross=$vetrina[codice]";
				}
				echo"<p><a id=buynow href='$addtocart'>Compra</a>&nbsp;<a id=buynow href='$dettagli'>Dettagli</a></p>";
				?>
			</div> 
				 
	  </td>
    </tr>
</table>



<div align="center">
<p><hr></p>
		<p>&nbsp;</p>
		<p><script src="http://www.grix.it/sitePromo/grixPromo.php?un=Doc82&ck=5XxUXNhC14"></script></p>
		<p>&nbsp;</p>
		<p><a href="http://www.happyclick.it" target="_blank"
		title="Pubblicità">Happyclick Pubblicità <br>Gratuita</a> </p>
		<p>&nbsp;</p>
		<p><a hfer="http://www.AbcItaly.com"><img src="abcbanner.gif" width="72" height="30"></a></p>
		<p>&nbsp;</p>
		<p><a href="http://www.aristotele.net" target="_blank" ><img src="bannerino.gif" width="150" height="40"></a>	</p>
		<p>&nbsp;</p>
		<p><a href="http://www.thespider.it"><img src="http://www.thespider.it/images/segnalato.gif" alt="TheSpider.it - web directory italiana" border=0></a></p>
		<p>&nbsp;</p>
		<p><hr></p>
<p>
      <!--Begin NewClick scambio banner code-->
    <iframe src="http://www.newclick.com/it/asp/banner.asp?id=11518" width=468 height=60 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no title="scambio banner"> </iframe>
    <br /> 
    <a HREF="http://www.newclick.com" TARGET="scambio_banner" alt="scambio banner">Scambio Banner</a>
    <!--End NewClick scambio banner code--> 
  </p>
  
  <p>&nbsp;</p>
 <!-- Inizio Codice ShinyStat -->
	<script type="text/javascript" language="JavaScript" src="http://codice.shinystat.com/cgi-bin/getcod.cgi?USER=Doc0082"></script>
  <noscript>
	<a href="http://www.shinystat.com/it" target="_top">
	<img src="http://www.shinystat.com/cgi-bin/shinystat.cgi?USER=Doc0082" alt="Statistiche" border="0" /></a>
  </noscript>
<!-- Fine Codice ShinyStat -->
</div>
</body>
</html>

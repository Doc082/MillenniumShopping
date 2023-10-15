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
@import url(style.css);

#descrizione {
	width:350px;
	background:#FFFFFF;
	border-width:1px 1px 1px 1px;
	border-color:#000000;
	border-style:solid;
	font-family: arial, Verdana, sans-serif;
	font-size:15px;
	color:#000000;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding:10px;
	margin:15px;
	box-shadow: 5px 5px 10px 2px #333333 ;
	-webkit-box-shadow: 5px 5px 10px 2px #333333;
	-moz-box-shadow: 5px 5px 10px 2px #333333;
}

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
 	   <li><a class=active href="prodotti.php" title="Prodotti">Prodotti</a></li>
	    <li><a href="carrello.php" title="Carrello">Carrello</a></li>
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
   <td width="1018" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      
      <p>&nbsp;</p>
      <div id=descrizione>
	  	<?php
			if(isset($_GET['mweb'])) {
				$result = $mysqli->query("SELECT * FROM artic WHERE id LIKE '$_GET[mweb]'"); 
				$vetrina=$result->fetch_assoc();
				echo "<p><img src='imm_articoli/$vetrina[foto1].jpg' width='200'></p>";
				echo "<p>&nbsp;</p>";
				echo "<p><font color='#FF0000'><strong>$vetrina[titolo]</strong></font></p>";
				echo "<p>$vetrina[descrizione]</p>";
				$price=$vetrina['prezzo'];
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><strong>Prezzo € $prezel</strong></p>";
				echo "<p><a id=buynow href='carrello.php?codarticolo=$vetrina[id]'>Compra subito</a></p>";
				echo "<p>&nbsp;</p>";
				echo "<p>$vetrina[testo]</p>";
				echo "<p>&nbsp;</p>";
				echo "<p><strong>Prezzo € $prezel</strong></p>";
				echo "<p><a id=buynow href='carrello.php?codarticolo=$vetrina[id]'>Compra subito</a></p>";
			}
			else if(isset($_GET['pmania'])){
				$result = $mysqli->query("SELECT * FROM pixmania WHERE codice LIKE '$_GET[pmania]'"); 
				$vetrina=$result->fetch_assoc();
				echo "<p><img src='$vetrina[foto]' width='200'></p>";
				echo "<p>&nbsp;</p>";
				echo "<p><font color='#FF0000'><strong>$vetrina[marca]</strong></font></p>";
				echo "<p><strong>$vetrina[titolo]</strong></p>";
				$price=$vetrina['prezzo'];
				$price *= 1.2;
				if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
				else $price *= 1.2;
				$price=round($price,1);
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><strong>Prezzo € $prezel</strong></p>";
				echo "<p><a id=buynow href='carrello.php?pixarticolo=$vetrina[codice]'>Compra subito</a></p>";
				echo "<p>&nbsp;</p>";
				echo "<p>$vetrina[descrizione]</p>";
				echo "<p>&nbsp;</p>";
				
				echo "<p><strong>Prezzo € $prezel</strong></p>";
				echo "<p>Disponibilità: $vetrina[disponibili]</p>";
				echo "<p><a id=buynow href='carrello.php?pixarticolo=$vetrina[codice]'>Compra subito</a></p>";
			}
			else if(isset($_GET['egross'])) {
				$result = $mysqli->query("SELECT * FROM egross WHERE codice LIKE '$_GET[egross]'"); 
				$vetrina=$result->fetch_assoc();
				echo "<p><img src='http://ecommerce.sitiwebsumisura.com/listino/foto/$vetrina[foto].jpg' width='200'></p>";
				echo "<p>&nbsp;</p>";
				echo "<p><font color='#FF0000'><strong>$vetrina[marca]</strong></font></p>";
				echo "<p><strong>$vetrina[titolo]</strong></p>";
				$price=$vetrina['prezzo'];
				$price *= 1.2;
				if(($vetrina['categoria']=="MONDO APPLE")||($vetrina['categoria']=="CONSOLLE"))$price *=1.1;
				else $price *= 1.2;
				$price=round($price,1);
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><strong>Prezzo € $prezel</strong></p>";
				echo "<p><a id=buynow href='carrello.php?egrossarticolo=$vetrina[codice]'>Compra subito</a></p>";
				echo "<p>&nbsp;</p>";
				echo "<p>$vetrina[descrizione]</p>";
				echo "<p>&nbsp;</p>";
				
				echo "<p><strong>Prezzo € $prezel</strong></p>";
				echo "<p><a id=buynow href='carrello.php?egrossarticolo=$vetrina[codice]'>Compra subito</a></p>";
			}
			else header("location:index.php");
			
			
		?>
	  
	    	  </div>    
    </td>
    </tr>
	</table>
  <p>&nbsp;</p>
  
 
</body>
</html>

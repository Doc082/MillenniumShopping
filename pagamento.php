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
    <td width="1018" align="center" valign="top" bordercolor="#FFFFFF"  bgcolor="#FFFFFF"><p>&nbsp;</p>
      <div id=accedibox>
	  <p><font color="#00FF00" face="Arial, Helvetica, sans-serif"><strong>Riepilogo Ordine</strong></font></p>
      <?php 
	   	//echo "<p>$_GET[paga];</p>";
	  		$price=$_SESSION[tot];
			$price=round($price,1);
			$prezel = sprintf("%01.2f", $price);
			$prezel=str_replace('.', ',', $prezel);
		
		echo "<p>Totale €$prezel</p>";
		echo "<p>$_SESSION[indirizzo]</p>";
		if($_SESSION['indirizzoalt']!=''){
			echo "<p>Spediremo a:</p>";
			echo "<p>$_SESSION[indirizzoalt]</p>";
		}
		$testo = "Lista codici prodotto: ";
		$testo .= $_SESSION['lista'] . " Indirizzo: " . $_SESSION['indirizzo']. " - Indirizzo Alt.: " . $_SESSION['indirizzoalt'] . " totale euro " . $prezel;
		$pagamento= $price;
		
		
		
			
	  	$larticoli=explode(' ',$_SESSION['listarticoli']);
		for($x=0; $x<$_SESSION['nrarticoli'];$x++){
					if($result=$mysqli->query("SELECT * FROM artic WHERE id=$larticoli[$x]")){
						$row=$result->fetch_assoc();
						$disp= $row['disponibili']-1;
						$mysqli->query("UPDATE artic SET foto2 = NULL ,foto3 = NULL ,genere1 = NULL ,genere2 = NULL ,genere3 = NULL ,
										disponibili = '$disp' WHERE id = $larticoli[$x] LIMIT 1");	
					}
					
		}
				
				
				
			
	  
	  $query=sprintf("INSERT INTO ordini (nrcliente, descrizione, statosped) VALUES ('%s', '%s','%s')", $_SESSION['idutente'], $testo, "In attesa di Spedizione");
	  if(!$mysqli->query($query)) echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Errore archivio ordini, prego contattare webmaster: info@millennumshopping.it</font></strong></p>";  
      mail("info@millenniumshopping.it", "Spedizione", $testo);
	  $_SESSION['nrarticoli']='';
	  $_SESSION['listarticoli']='';
	  $_SESSION['egarticoli']='';
	  $_SESSION['listegross']='';
	  $_SESSION['pxarticoli']='';
	  $_SESSION['listpix']='';
	  if($_GET['paga']=="paypal"){
	  	$_SESSION['test']= $testo;	
		echo "<p><font face='Arial, Helvetica, sans-serif'><strong>Clicca sul pulsante qui sotto per pagare con Paypal o Carta di credito</strong></font></p>";	
		echo "<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>";
		echo "<input type='hidden' name='cmd' value='_ext-enter'>";
		echo "<input type='hidden' name='redirect_cmd' value='_xclick'>";
		echo "<input type='hidden' name='return' value='http://www.millenniumshopping.it/okorder.php?transition=ok'>";
		echo "<input type='hidden' name='business' value='mirkofenu@tiscali.it'>";
		echo "<input type='hidden' name='item_name' value='Articoli vari'>";
		echo "<input type='hidden' name='currency_code' value='EUR'>";
		echo "<input type='hidden' name='amount' value='$pagamento'>";
		echo "<input type='image' src='https://www.paypal.com/it_IT/IT/i/btn/btn_buynow_LG.gif' name='submit' alt='Paga con Paypal!'>";
		echo "</form>";
		echo "<p><img src='paypal.jpg' width='250' height='62'></p>";
	}else{
	  
	  
	  echo "<p>&nbsp;</p>";
      echo "<p><font face='Arial, Helvetica, sans-serif'><strong>Riceverete un email con i dati per effettuare il pagamento.</strong></font></p>";
      //echo "<p><font face='Arial, Helvetica, sans-serif'><strong>Gli articoli saranno spediti appena ricevuto il pagamento</strong></font></p>";
	  echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Grazie per aver acquistato su MillenniumShopping</font></strong></p></td>";
    }
	?>
	</div>
	</td>
	</tr>
	</table>
  <p>&nbsp;</p>
  
</body>
</html>

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
	$_SERVER['PHP_SELF'];
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
    <td width="1018" align="center" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p>
	  <?php 
	  	if(!isset($_SESSION['nomeut'])) header("location:accedi.php?request='carrello.php'");
		else{
			echo"<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Completa L'ordine con i dettagli sulla spedizione</strong></font></p>";
			if(isset($_GET['totale'])){
				$_SESSION['tot']=$_GET['totale'];
				$price=$_SESSION['tot'];
				$price=round($price,1);
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Il totale escluse le spese di spedizione è €$prezel</strong></font></p>";			
			} else echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Errore, prego tornare indietro e ripetere l'ordine</strong></font></p>";
			
		}
	  ?></p>      
      <p>&nbsp;</p>
      <div id=accedibox>
	  <form action="inviaordine.php" name="form1">
      	
		<p><font color="#00FF00" face="Arial, Helvetica, sans-serif"><strong>Modalit&agrave; di
	      spedizione</strong></font></p>
		<?php if(isset($_SESSION['egarticoli'])){
				if($_SESSION['egarticoli']>0) {
					echo "<p><font color='#00FF00' face='Arial, Helvetica, sans-serif'>Spedizione Articoli Catalogo 2:</font></p>";
					$peso=0;
					$dhl=0;
					if(isset($_SESSION['peso'])) $peso=$_SESSION['peso'];
					if($peso<3)$dhl=5.72;
					else if($peso<5) $dhl=7.05;
					else if($peso<10) $dhl=7.81;
					else if($peso<20) $dhl=9.48;
					else if($peso<30) $dhl=12.04;
					else if($peso<50) $dhl=17.29;
					else $dhl=40;
					$dhl*=1.2;
					$dhl+=2;
					$dhl=round($dhl,1);
					$prezel = sprintf("%01.2f", $dhl);
					$prezel=str_replace('.', ',', $prezel);
					echo "<p><font face='Arial, Helvetica, sans-serif'>Corriere espresso DHL  €$prezel</font></p>";
					echo "<p>&nbsp;</p>";
					$_SESSION['tot']+=$dhl;
				}
			}
			if(isset($_SESSION['nrarticoli'])){
				if($_SESSION['nrarticoli']>0) {
					echo "<p><font color='#00FF00' face='Arial, Helvetica, sans-serif'>Spedizione Articoli Catalogo 1:</font></p>";
					echo "<p><font face='Arial, Helvetica, sans-serif'>Corriere espresso DHL € 8,90</font></p>";
					echo "<p>&nbsp;</p>";
					$_SESSION['tot']+=8.90;
				}
			}
		?>
		
		
      <p><strong><font color="#00FF00" face="Arial, Helvetica, sans-serif">Metodo di pagamento:</font></strong></p>
      <p>
        <label><img src="paypal.jpg" width="250" height="62"></label>
      </p>
      <p>
          <label>
          <input id=button name="pagamento" type="radio" value="paypal" checked>
  Paypal o Carta di credito</label>
          <label></label>
            <br>
            <label>
            <input id=button type="radio" name="pagamento" value="bonifico">
            Bonifico Bancario</label>
            <br>
            <label>
            <input id=button type="radio" name="pagamento" value="vaglia">
            Vaglia Postale</label>
            <br>
            <label>
            <input id=button type="radio" name="pagamento" value="postepay">
            Ricarica Postepay</label>
            <br>
      </p>
      
      <p>&nbsp;</p>
      <p><strong><font color="#00FF00" face="Arial, Helvetica, sans-serif">Conferma
                      indirizzo:</font></strong></p>
      <?php
	   	$nomeu=$_SESSION['nomeut'];
		if($result=$mysqli->query("SELECT * FROM clienti WHERE user = '$nomeu'")){	
		$utente=$result->fetch_assoc();
				//echo $utente['nome'];
		echo "<p><font size='3' face='Arial, Helvetica, sans-serif'>",$utente['nome'], ",&nbsp;", $utente['cognome'], "</font></p>";
  	   	echo "<p><font size='3' face='Arial, Helvetica, sans-serif'>",$utente['via'],"</font></p>";
	  	echo "<p><font size='3' face='Arial, Helvetica, sans-serif'>",$utente['cap'], ",&nbsp;", $utente['citta'],",&nbsp;(", $utente['provincia'], ")</font></p>";
	  	$_SESSION['indirizzo']='';
		$_SESSION['indirizzo'] = $utente['nome'] . ' ' . $utente['cognome'] . ' ' . $utente['via'] . ' ' . $utente['cap'] . ' ' . $utente['citta'] . " (" . $utente['provincia'] . ')';
	  }	
	  ?>
	  <p>&nbsp;</p>
      <p><strong><font color="#00FF00" face="Arial, Helvetica, sans-serif">O inserisci un indirizzo alternativo:</font></strong></p>
      <p><strong><font face="Arial, Helvetica, sans-serif">
        <textarea id=button name="indirizzoalt" rows="6"></textarea>
      </font></strong></p>
      <p><strong><font face="Arial, Helvetica, sans-serif">
        <input id=button type="submit" name="Submit" value="Vai al Totale">
      </font></strong></p>
      </form>
	  </div></td>
    </tr>
	</table>
  <p>&nbsp;</p>
 
</div>
</body>
</html>

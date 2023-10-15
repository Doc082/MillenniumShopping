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
    <td width="1018" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <?php
	  	$listart='';	
		if(isset($_SESSION['listpix'])){
			$listart.="Articoli Pixmania: ";
			$listart.=$_SESSION['listpix'];
		}
		if(isset($_SESSION['listegross'])){
			$listart.="Articoli Egross: ";
			$listart.=$_SESSION['listegross'];	
		}	
		if(isset($_SESSION['listarticoli'])){	
		$listart.=" Articoli MillenniumWeb: ";
		$listart.=$_SESSION['listarticoli'];
		$nomeu=$_SESSION['nomeut'];
		if($result=$mysqli->query("SELECT * FROM clienti WHERE user = '$nomeu'"))  
		$utente=$result->fetch_assoc();
		$idut=$utente['id'];
		if(!isset($_GET['Submit'])) echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Errore, Prego trornare indietro e riprovare</font></strong></p>";
		else{
			//echo $listart;
			echo"<div id=accedibox>";
			echo "<p><strong><font color='#00FF00' face='Arial, Helvetica, sans-serif'>L'Ordine è Quasi Completo!</font></strong></p>";
			if(isset($_GET['indirizzoalt']) && $_GET['indirizzoalt']!='') {
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>La Spedizione verrà effettuata a:</font></strong></p>";
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>",$_GET['indirizzoalt'],"</font></strong></p>";		
				$_SESSION['indirizzoalt']=$_GET['indirizzoalt'];
			}
			$listart .=" - Tipo Spedizione: ";
			$listart .= " Corriere Espresso DHL ";
			
							
				$listart .= " - ";
				if($_GET['pagamento']=="postepay") {
					$metodop="Ricarica Postepay";
					$listart .= " Pagamento Ricarica Postepay";
				}else if($_GET['pagamento']=="bonifico") {
					$metodop="Bonifico Bancario";
					$listart .= " Pagamento Bonifico Bancario";
				}else if($_GET['pagamento']=="vaglia") {
					$metodop="Vaglia Postale";
					$listart .= " Pagamento Vaglia Postale";
				} else if($_GET['pagamento']=="paypal") {
					$metodop="Paypal o Carta Di credito";
					$listart .= " Pagamento Paypal o Carta di Credito";
				}
				
				
				$price=$_SESSION['tot'];
				$price=round($price,1);
				$prezel = sprintf("%01.2f", $price);
				$prezel=str_replace('.', ',', $prezel);
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Totale: €$prezel</font></strong></p>";
				echo "<p>&nbsp;</p>";
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Hai Scelto di pagare con: $metodop</font></strong></p>";
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Clicca su conferma per completare l'ordine</font></strong></p>";
				$tot=$_SESSION['tot'];
				
				$_SESSION['idutente']=$idut;
				$_SESSION['lista']='';
				$_SESSION['lista']=$listart;
				//$_SESSION['nrarticoli']='';
				//$_SESSION['listarticoli']='';
				echo "</div>";
				echo "<p>&nbsp;</p>";
				if($_GET['pagamento']=="paypal"){
					echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong><a href='pagamento.php?paga=paypal'>Conferma ordine</a><strong></font></p>";	
				} else echo "<p><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'><strong><a id=button href='pagamento.php?paga=$_GET[pagamento]'>Conferma ordine</a></strong></font></p>";	
				echo "<p><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'><a href='index.php'>Torna allo shopping!</a></font></p>";
					
			}
		}
		
	  ?>
	  <p>&nbsp;</p>      <p>&nbsp;</p></td>
    </tr>
	</table>
  <p>&nbsp;</p>
  
</body>
</html>

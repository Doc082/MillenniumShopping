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
</head>

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	
?>
<div align="center">
      <table width="1018" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
  </table>
      <table height="545" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr>
      <td height="18" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="1018" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p><font face="Arial, Helvetica, sans-serif"><strong>Riepilogo Ordine</strong></font></p>
      <?php 
	   	//echo "<p>$_GET[paga];</p>";
	  	if($_SESSION['cent']>=10)echo "<p>Totale €$_SESSION[tot],$_SESSION[cent]</p>";
		else echo "<p>Totale €$_SESSION[tot],0$_SESSION[cent]</p>";
		echo "<p>$_SESSION[indirizzo]</p>";
		if($_SESSION['indirizzoalt']!=''){
			echo "<p>Spediremo a:</p>";
			echo "<p>$_SESSION[indirizzoalt]</p>";
		}
		$testo = "Lista codici prodotto: ";
		$testo .= $_SESSION['lista'] . " Indirizzo: " . $_SESSION['indirizzo']. " - Indirizzo Alt.: " . $_SESSION['indirizzoalt'] . " totale euro" . $_SESSION['tot'] . ',';
		$pagamento= $_SESSION['tot'] . '.';
		if($_SESSION['cent']>=10){
		 $testo .= $_SESSION['cent'];
		 $pagamento.=$_SESSION['cent'];	
		}
		else {
		 $testo .= '0';  
		 $testo .= $_SESSION['cent'];
		 $pagamento .='0';
		 $pagamento .= $_SESSION['cent'];	
		}
		
		
			
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
	  if($_GET['paga']!="contrassegno"){
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
		echo "<p><img src='paypal.jpg' width='335' height='72'></p>";
	}else{
	  
	  
	  echo "<p>&nbsp;</p>";
      echo "<p><font face='Arial, Helvetica, sans-serif'><strong>Riceverete un email di conferma dell'avvenuta spedizione</strong></font></p>";
      echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Grazie per aver acquistato su MillenniumShopping</font></strong></p></td>";
    }
	?>
	<tr bordercolor="#000000">
      <td height="26" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
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

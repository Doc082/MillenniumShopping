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
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	
?>
<div align="center">
      <table width="980" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
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
      <p>
	  <?php 
	  	if(!isset($_SESSION['nomeut'])) header("location:accedi.php?request='carrello.php'");
		else{
			echo"<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Completa L'ordine con i dettagli sulla spedizione</strong></font></p>";
			if(isset($_GET['totale'])){
				$_SESSION['tot']=$_GET['totale'];
				$_SESSION['cent']=$_GET['cent'];
				if($_SESSION['cent']>=10)echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Il totale escluse le spese di spedizione è €$_SESSION[tot],$_SESSION[cent]</strong></font></p>";
				else echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Il totale escluse le spese di spedizione è €$_SESSION[tot],0$_SESSION[cent]</strong></font></p>";			
			} else echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Errore, prego tornare indietro e ripetere l'ordine</strong></font></p>";
			
		}
	  ?></p>      
      <p>&nbsp;</p>
      <form action="inviaordine.php" name="form1">
      	
		<p><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Scegli modalit&agrave; di spedizione: 
        </strong></font></p>
      	<p><font face="Arial, Helvetica, sans-serif"><strong>
      	</strong></font>
        <label>
        <input name="TipoSped" type="radio" value="radio1" checked>
        <font face="Arial, Helvetica, sans-serif">Pacco Ordinario <?php if($_SESSION[tot]<50)echo"€7,00"; else echo"Gratis!";?></font></label>
        <font face="Arial, Helvetica, sans-serif">
        <br>
        <label>
        <input type="radio" name="TipoSped" value="radio2">
        Pacco Celere 3 €11,40</label>
        <br>
        <label>
        <input type="radio" name="TipoSped" value="radio3">
        Pacco Celere1 €12,00</label>
        </font><br>
      	</p>
		
      <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Metodo di pagamento:</font></strong></p>
      <p>
        <label><img src="paypal.jpg" width="335" height="72"></label>
      </p>
      <p>
          <label>
          <input name="pagamento" type="radio" value="paypal" checked>
  Paypal o Carta di credito</label>
          <label></label>
            <br>
            <label>
            <input type="radio" name="pagamento" value="contrassegno">
            Contrassegno €5,00</label>
            <br>
      </p>
      <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Opzioni Aggiuntive</font></strong></p>
      <p>
        <input type="checkbox" name="regalo" value="1">
        Imballaggio Regalo + Fiocco</p>
      <p>&nbsp;</p>
      <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Conferma
                      indirizzo:</font></strong></p>
      <?php
	   	$nomeu=$_SESSION['nomeut'];
		if($result=$mysqli->query("SELECT * FROM clienti WHERE user = '$nomeu'")){	
		$utente=$result->fetch_assoc();
				//echo $utente['nome'];
		echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>",$utente['nome'], ",&nbsp;", $utente['cognome'], "</font></p>";
  	   	echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>",$utente['via'],"</font></p>";
	  	echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>",$utente['cap'], ",&nbsp;", $utente['citta'],",&nbsp;(", $utente['provincia'], ")</font></p>";
	  	$_SESSION['indirizzo']='';
		$_SESSION['indirizzo'] = $utente['nome'] . ' ' . $utente['cognome'] . ' ' . $utente['via'] . ' ' . $utente['cap'] . ' ' . $utente['citta'] . " (" . $utente['provincia'] . ')';
	  }	
	  ?>
	  <p>&nbsp;</p>
      <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">O inserisci un indirizzo alternativo:</font></strong></p>
      <p><strong><font face="Arial, Helvetica, sans-serif">
        <textarea name="indirizzoalt" rows="6"></textarea>
      </font></strong></p>
      <p><strong><font face="Arial, Helvetica, sans-serif">
        <input type="submit" name="Submit" value="Vai al Totale">
      </font></strong></p>
      </form></td>
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

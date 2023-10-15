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
          <td width="1048" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            
            <p>&nbsp;
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
      <?php
	  	if(isset($_SESSION['listarticoli'])){	
		$listart=$_SESSION['listarticoli'];
		$nomeu=$_SESSION['nomeut'];
		if($result=$mysqli->query("SELECT * FROM clienti WHERE user = '$nomeu'"))  
		$utente=$result->fetch_assoc();
		$idut=$utente['id'];
		if(!isset($_GET['Submit'])) echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Errore, Prego trornare indietro e riprovare</font></strong></p>";
		else{
			echo "<p><strong><font color='#FF0000' face='Arial, Helvetica, sans-serif'>Ordine ultimato con successo!</font></strong></p>";
			if(isset($_GET['indirizzoalt']) && $_GET['indirizzoalt']!='') {
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>La Spedizione verrà effettuata a:</font></strong></p>";
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>",$_GET['indirizzoalt'],"</font></strong></p>";		
				$_SESSION['indirizzoalt']=$_GET['indirizzoalt'];
			}
			$listart .=" - Tipo Spedizione: ";
			if(isset($_GET['TipoSped'])){
				if($_GET['TipoSped']=="radio1") {
					if($_SESSION['tot']<50)$_SESSION['tot']+= 7;
					$listart .= "Pacco ordinario";
					$tempi=10;
				}
				if($_GET['TipoSped']=="radio2"){
					$_SESSION['cent']+=40;
					if($_SESSION['cent']>=100){
						$_SESSION['cent']-=100;
						$_SESSION['tot'] +=1;
					}
					$_SESSION['tot']+= 11;
					
					$listart .= "Pacco celere 3";
					$tempi=5;
				}
				if($_GET['TipoSped']=="radio3"){
					$_SESSION['tot']+= 12;
					$listart .= "Pacco celere 1";
					$tempi=3;
				}
				$listart .= " - ";
				if($_GET['pagamento']=="contrassegno") {
					$_SESSION['tot'] += 5;
					$listart .= " Pagamento Contrassegno";
				}else $listart .= " Pagamento Paypal";
				if(isset($_GET['regalo'])){
					if($_GET['regalo']) $listart .= " - Imballaggio Pacchetto regalo - ";
				}
				if($_SESSION['cent']>=10 )echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Totale: €",$_SESSION['tot'],",",$_SESSION['cent'],"</font></strong></p>";
				else echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Totale: €",$_SESSION['tot'],",0",$_SESSION['cent'],"</font></strong></p>";
				echo "<p>&nbsp;</p>";
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>Tempi di consegna stimati:</font></strong></p>";
				echo "<p><strong><font face='Arial, Helvetica, sans-serif'>$tempi Giorni lavorativi</font></strong></p>";
				$tot=$_SESSION['tot'];
				
				$_SESSION['idutente']=$idut;
				$_SESSION['lista']='';
				$_SESSION['lista']=$listart;
				//$_SESSION['nrarticoli']='';
				//$_SESSION['listarticoli']='';
				if($_GET['pagamento']=="contrassegno"){
					echo "<p><font color='#000000' size='-1' face='Arial, Helvetica, sans-serif'><a href='pagamento.php?paga=contrassegno'>Conferma ordine</a></font></p>";	
				}else if($_GET['pagamento']=="credit"){
					echo "<p><font color='#000000' size='-1' face='Arial, Helvetica, sans-serif'><a href='pagamento.php?paga=credit'>Conferma ordine</a></font></p>";	
				}else if($_GET['pagamento']=="paypal"){
					echo "<p><font color='#000000' size='-1' face='Arial, Helvetica, sans-serif'><a href='pagamento.php?paga=paypal'>Conferma ordine</a></font></p>";	
				}
				echo "<p><font color='#000000' size='-1' face='Arial, Helvetica, sans-serif'><a href='index.php'>Torna allo shopping!</a></font></p>";
					
			}
		}
		}
	  ?>
	  <p>&nbsp;</p>      <p>&nbsp;</p></td>
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

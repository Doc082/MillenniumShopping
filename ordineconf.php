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
a {text-decoration:none}
a:hover {text-decoration:underline}
</style> 
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
      <td height="18" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="categorie.php">Categorie</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="1018" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <?php
	  	$listart='';	
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
			echo "<p><strong><font color='#FF0000' face='Arial, Helvetica, sans-serif'>L'Ordine è Quasi Completo!</font></strong></p>";
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
				if(isset($_GET['regalo'])){
					if($_GET['regalo']) $listart .= " - Imballaggio Pacchetto regalo - ";
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
				if($_GET['pagamento']=="paypal"){
					echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong><a href='pagamento.php?paga=paypal'>Conferma ordine</a><strong></font></p>";	
				} else echo "<p><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'><strong><a href='pagamento.php?paga=$_GET[pagamento]'>Conferma ordine</a></strong></font></p>";	
				echo "<p><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'><a href='index.php'>Torna allo shopping!</a></font></p>";
					
			}
		}
		
	  ?>
	  <p>&nbsp;</p>      <p>&nbsp;</p></td>
    <tr bordercolor="#000000">
      <td height="26" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="categorie.php">Categorie</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
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

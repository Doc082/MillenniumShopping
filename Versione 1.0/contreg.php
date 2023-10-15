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
	function GestError($coderr)
	{
		if($coderr=="ok"){
			echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'><strong>Registrazione Completa!</strong></font></p>"; 
			echo "<p><font color='#000000' size='-1' face='Arial, Helvetica, sans-serif'>Benvenuti nella nostro sito!</font></p>";
			echo "<p>&nbsp</p>";
			echo "<p><font color='#000000' size='-1' face='Arial, Helvetica, sans-serif'><a href='accedi.php'>Accedi e inizia lo Shopping!</a></font></p>";
		}else{
			echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'>Alcuni campi non sono stati inseriti correttamente</font></p>"; 
			echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'>Errore:&nbsp;", $coderr, "</font></p>";
			echo "<p>&nbsp</p>";
			echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'><a href='index.php'>Home</a> - <a href='register.php'>Indietro</a></font></p>";
		}	
	}
?>
<div align="center">
      <table width="1016" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="1016" height="80" align="center" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
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
      <?php $_SERVER['PHP_SELF'];
	  		if(!$_POST['nome']) GestError('Nome non inserito');
			else if(!$_POST['cognome']) GestError('Cognome non inserito');
			else if(!$_POST['via']) GestError('Via non inserita');
			else if(!$_POST['cap']) GestError('CAP non inserita');
			else if(!$_POST['citta']) GestError('Città non inserita');
			else if(!$_POST['provincia']) GestError('Provincia non inserita');
			else if(!$_POST['email']) GestError('Email non inserita');
			else if(!$_POST['user']) GestError('Username non inserita');
			else if(!$_POST['passw']) GestError('Password non inserita');
			else if($_POST['passw']!=$_POST['passw1']) GestError('Password Sbagliata');
			else{
				$result = $mysqli->query("SELECT * FROM clienti", MYSQLI_USE_RESULT);
				$err=0;
				while($row = $result->fetch_assoc())
				{
					if($row['user'] == $_POST['user']){
						GestError('Username già in uso da un altro utente');
						$err=1;			
					}
				}
				$result->close();
				if($err==0) {
					$query = sprintf("INSERT INTO clienti (nome, cognome, via, cap, citta, provincia, email, user, passw) VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $_POST['nome'], $_POST['cognome'], $_POST['via'], $_POST['cap'], $_POST['citta'], $_POST['provincia'], $_POST['email'], $_POST['user'], $_POST['passw']);
					if(!$mysqli->query($query))GestError("Registrazione non riuscita, prego riprovare più tardi");
					else GestError("ok");
				}
			}
	  ?>	  <p><font size="-1" face="Arial, Helvetica, sans-serif"><?php echo $_POST["nome"], ",", $_POST['cognome'];?></font></p>	  
	  <p><font size="-1" face="Arial, Helvetica, sans-serif"><?php echo $_POST['via'];?></font></p>
	  <p><font size="-1" face="Arial, Helvetica, sans-serif"><?php echo $_POST['cap'], "&nbsp;", $_POST['citta'], "&nbsp;",$_POST['provincia'];?></font></p>
	  <p><font size="-1" face="Arial, Helvetica, sans-serif"><?php echo $_POST['email'];?></font></p>
	  <p><font size="-1" face="Arial, Helvetica, sans-serif"><?php echo $_POST['user'];?></font></p>
	  <p><font size="-1" face="Arial, Helvetica, sans-serif"><?php echo $_POST['passw'];?></font></p>
	  <p>&nbsp;</p></td>
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

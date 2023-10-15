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

	function GestError()
	{
		echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'><strong>Errore!</strong></font></p>"; 
		echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'>Nome utente o Password errata </font></p>";
		echo "<p>&nbsp</p>";
		echo "<p><font color='#FF0000' size='-1' face='Arial, Helvetica, sans-serif'><a href='accedi.php'>indietro</a></font></p>";
	}
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
       <?php $_SERVER['PHP_SELF'];
	  	$result = $mysqli->query("SELECT * FROM clienti", MYSQLI_USE_RESULT);
				$err=1;
				while($row = $result->fetch_assoc())
				{
					if(isset($_POST['user'])) if(($row['user'] == $_POST['user']) && ($row['passw'] == $_POST['passw']))$err=0;
					if(isset($_GET['user'])) if(($row['user'] == $_GET['user']) && ($row['passw'] == $_GET['passw']))$err=0;
				}
				$result->close();
				if($err) GestError();
				else {
					if(isset($_POST['user']))$_SESSION['nomeut']=$_POST['user'];	
					if(isset($_GET['user']))$_SESSION['nomeut']=$_GET['user'];
					echo "<p><strong><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Accesso Effettuato!</strong></font></strong></p>";
					if(isset($_POST['rec'])) echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><a href=$_POST[rec]>Indietro</a></font></p>";
	  				else echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><a href='index.php'>Indietro</a></font></p>";			
				}
	  ?>
	  </td>
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

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
      <p><strong><font color="#FF0000">Prego inserire Nome utente e Password</font></strong></p>
      <p>&nbsp;</p>
      <form name="form1" method="post" action="accedi2.php">
      <p>Nome Utente:
          <input name="user" type="text" maxlength="16">
</p>
      <p>Password: 
        <input name="passw" type="password" maxlength="16">
        </p>
      <p>
        <?php 
		 if(isset($_GET['request'])) echo "<input type='hidden' name='rec' value=$_GET[request]>";
		?>
		<input name="accedi" type="submit" id="accedi" value="Accedi"> 
        &nbsp;<font color="#0000FF" size="+1" face="Arial, Helvetica, sans-serif">Sei nuovo? <a href="register.php">Registrati</a></font></p>
      </form>      
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

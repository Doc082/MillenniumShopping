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
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
  </table>
      <table height="545" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr>
      <td height="18" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> -
            <a href="categorie.php">Categorie</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="1018" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p><font color="#FF0000" size="6">Categorie Egross Elettronica</font></p>
      <p>
          <?php
  		$result=$mysqli->query("SELECT * FROM egross ORDER BY categoria");		
		$categoria="";
		while($row = $result->fetch_assoc())
		{
			if($row['id']!=1){
				if($categoria!=$row['categoria']){
					echo "<p><font color='#FF0000' size=4>".$row['categoria']."</font></p>";
					$res=$mysqli->query("SELECT * FROM egross WHERE categoria = '$row[categoria]' ORDER BY sottocategoria");
					echo"<p><font size='2' color='#000000'>";
					$sottoc="";
					while($rowe = $res->fetch_assoc())
					{
					 	if($sottoc!=$rowe['sottocategoria']) {
							if($sottoc!="") echo " - ";
							echo "<a href='listacompleta.php?sottocategoria=$rowe[sottocategoria]'>".$rowe['sottocategoria']."</a>";
						}
						
						$sottoc=$rowe['sottocategoria'];	
					}
					echo"</font></p>";
				}
				$categoria=$row['categoria'];
			}
		}
  ?>
</p>
      <p>&nbsp;</p>
      <p><font color="#FF0000" size="6">Categorie MillenniumWeb</font></p>
      <p><p><font size='3' color='#000000'><a href="listacompleta.php?cerca=netbook">Netbook</a> - <a href="listacompleta.php?cerca=mp3">Lettori Mp3</a> - <a href="listacompleta.php?cerca=flash">Pendrive Usb</a> - <a href="listacompleta.php?cerca=foto">Fotocamere</a> - <a href="listacompleta.php?cerca=webcam">Webcam</a> - <a href="listacompleta.php?cerca=altro">Varie</a></font></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
      
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

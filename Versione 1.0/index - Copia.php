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

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	if(isset($_GET['articolo'])) $art=$_GET['articolo'];
	else $art=rand(4,19);
	$result=$mysqli->query("SELECT * FROM artic WHERE id = $art");
	$vetrina=$result->fetch_assoc();
	
?>
<div align="center">
      <table width="980" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
      </table>
      <table height="550" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <td height="20" colspan="2" valign="top">        <p><strong><font color="#000000" size="-1" face="Arial, Helvetica, sans-serif">Benvenuto! <?php if (isset($_SESSION['nomeut'])) echo $_SESSION['nomeut'];?>
            sei il visitatore n</font></strong><font size="-1" face="Arial, Helvetica, sans-serif"></font></font><font face="Arial, Helvetica, sans-serif"><font color="#000000" size="-1"><strong>&deg;</strong></font></font><font color="#000000" size="-1"><strong>
			<?php
				
				$fconta=fopen('conta.cnt','r+');
				$numb=fread($fconta, 10);
				$numb=$numb+1;
				fseek($fconta, 0, SEEK_SET);
				fwrite($fconta, $numb);
				fclose($fconta);
				print($numb);				
			?>
            </strong></font></p>
      </td>
    <tr>
      <td height="23" colspan="2" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif">
      <a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> -
      <a href="listacompleta.php">Lista articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
      ordini</a> - <a href="chisiamo.php">Chi
      siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="150" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p><img src="login.jpg" width="150" height="25"></p>
    <form name="form1" method="post" action="accedi2.php">
    <p align="center"><font color="#000000" size="-1" face="Arial, Helvetica, sans-serif">Username:</font><font color="#00FF00" size="-1">&nbsp;
</font></p>
    <p align="center"><font color="#00FF00" size="-1">      
      <input name="user" type="text" id="user" size="15">
    </font></p>
    <p align="center"><font color="#00FF00" size="-1"><font color="#000000" face="Arial, Helvetica, sans-serif">Password:</font></font></p>
    <p align="center"><font color="#00FF00">
      <input name="passw" type="password" id="passw" size="15">
    </font></p>
    <p align="center"><font color="#00FF00">
        <input name="accedi" type="submit" id="accedi" value="Accedi">
        <strong>        <font color="#0000FF" size="-1" face="Arial, Helvetica, sans-serif">o <a href="register.php">registrati</a></font></strong></font> </p>
    </form>
      <strong><font color="#0000FF" size="-1" face="Arial, Helvetica, sans-serif"><img src="lente.jpg" width="150" height="25"></font></strong>
      <form name="form2" method="post" action="listacompleta.php">
        <p align="center">
          <input name="cerca" type="text" id="cerca" size="15">
</p>
        <p align="center">          
          <input name="cerca2" type="submit" id="cerca2" value="Cerca">
        </p>
      </form>      
        <p><strong><img src="carrello.jpg" width="150" height="25"></strong></p>
      
	  	<?php 
			if(!isset($_SESSION['nrarticoli']))echo "<p align='center'><font size='-1' face='Arial, Helvetica, sans-serif'><strong>Il carrello &egrave; vuoto!</strong></font></p>";
			else if($_SESSION['nrarticoli']=='') echo "<p align='center'><font size='-1' face='Arial, Helvetica, sans-serif'><strong>Il carrello &egrave; vuoto!</strong></font></p>";
			else echo "<a href='carrello.php'><p align='center'><font size='-1' face='Arial, Helvetica, sans-serif'><strong>Ci sono ", $_SESSION['nrarticoli'], "&nbsp;nel carrello"; 
		 ?>
        <p>&nbsp;</p>
        <p><img src="categorie.jpg" width="150" height="25"></p>
      <form name="form3"> 
        <strong><font color="#0000FF" size="-1" face="Arial, Helvetica, sans-serif">&nbsp;</font></strong>
		<select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
		<option>Scegli...
        <option value="listacompleta.php?cerca=orologi">Orologi
        <option value="listacompleta.php?cerca=flash">Chiavette USB
        <option value="listacompleta.php?cerca=mp3">Lettori Mp3-Mp4
        <option value="listacompleta.php?cerca=foto">Fotocamere
        <option value="listacompleta.php?cerca=cam">Web Cam
        <option value="listacompleta.php?cerca=altro">Varie
        </select>
      </form>      <p>&nbsp;</p></td>
    <td width="832" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif"><strong>In
        Vetrina!</strong></font></p>      <p><font color="#0000CC" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $vetrina['titolo']; ?></strong></font></p>
      <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $vetrina['descrizione']; ?></strong></font></p>
      <p><?php print("<img src=imm_articoli/$vetrina[foto1].jpg width=224 height=219>");?></p>
      <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php //echo $vetrina['genere1']; ?></strong></font></p>
      <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><?php echo $vetrina['testo']; ?></font></p>
      <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo 'Prezzo: ','�',$vetrina['prezzo'], ',';
	  																					if($vetrina['cent']>=10)echo $vetrina['cent']; 
																						else echo "0",$vetrina['cent'];
																						?></strong></font></p>

      <p>&nbsp;</p>
      <p><?php echo "<a href='carrello.php?codarticolo=",$vetrina['id'],"'><img src='carrello.png' width='115' height='30'><a>";?></p>
      <p></p></td>
    <tr bordercolor="#000000">
      <td height="26" valign="top" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"></div></td>
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

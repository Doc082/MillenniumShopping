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

<body bgproperties="fixed">
<?php
	$mysqli = new mysqli('localhost', 'root', 'patanscio', 'articoli');
	$result=$mysqli->query("SELECT * FROM artic WHERE id = 2");
	$vetrina=$result->fetch_assoc();
?>
<div align="center">
  <p><font color="#000000">Millennium Shopping</font></p>
  <p>&nbsp;</p>
  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
  <tr bgcolor="#FFFFFF"><td colspan="3"><div align="left"><font color="#00FF00" size="-1"><strong><font color="#000000">Benvenuto!
            sei il visitatore n</font></strong></font><font color="#000000" size="-1"><strong>&deg;</strong></font><font color="#000000" size="-1"><strong>
			<?php
				$fconta=fopen('conta.cnt','r+');
				$numb=fread($fconta, 10);
				$numb=$numb+1;
				fseek($fconta, 0, SEEK_SET);
				fwrite($fconta, $numb);
				fclose($fconta);
				print($numb);
			?>
			</strong></font></div></td>
  <tr bgcolor="#AFEFB9">
    <td colspan="3"><div align="center"><font size="-1">Home - accedi
          - registrati - cerca - carrello - chi siamo - contattaci</font></div>
    </td>
  <tr>
    <td width="187" height="21" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0">        <p><font color="#000000" size="-1">Login</font></p>
      </td>
    <td width="639" rowspan="3" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">
      <p><font color="#0000FF" size="3"><strong>In
          Vetrina:</strong></font></p>
      <p><?php echo $vetrina['titolo']; ?></p>
      <p><?php echo $vetrina['descrizione']; ?></p>
      <p><?php print("<img src=imm_articoli/$vetrina[foto1].jpg width=224 height=219>");?></p>
      <p><?php echo $vetrina['genere1']; ?></p>
      <p><?php echo $vetrina['testo']; ?></p>
      <p><?php echo 'Prezzo: ','€',$vetrina['prezzo']; ?></p>
      <p><?php echo 'Scontato del ', $vetrina['sconto'], '%'; ?></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div></td>
    <td width="148" valign="top" bordercolor="#FFFFFF" bgcolor="#c0c0c0">      <p><font color="#000000" size="-1">Cerca
          nel sito</font></p>
      </td>
  <tr bordercolor="#000000" bgcolor="#FFFFFF">
    <td valign="middle"><form name="form1" method="post" action="">
      <p><font color="#FF0000" size="-1">Username:
      </font><font color="#00FF00" size="-1">            
    <input type="text" name="textfield">
    <font color="#FF0000">Password:</font></font><font color="#00FF00">
    <input type="text" name="textfield2">
  </font></p>
      <p><font color="#00FF00">
        <input name="accedi" type="submit" id="accedi" value="Accedi">
      </font> </p>
    </form>
      </td>
    <td valign="middle" bgcolor="#FFFFFF"><form name="form2" method="post" action="">
        <p>
          <input type="text" name="textfield3">
        </p>
        <p>
          <input name="cerca" type="submit" id="cerca2" value="Cerca">
        </p>
      </form>
      </td>
  <tr bgcolor="#FFFFFF">
    <td valign="top" bordercolor="#FFFFFF">&nbsp;</td>
    <td valign="top" bordercolor="#FFFFFF">&nbsp;</td>
  <tr bgcolor="#AFEFB9">
    <td colspan="3"><div align="center"><font size="-1">Home - accedi - registrati -
      cerca - chi siamo - contattaci</font></div></td>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>

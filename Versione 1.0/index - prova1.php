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

<body background="backg.jpg" bgproperties="fixed">
<?php
	$mysqli = new mysqli('localhost', 'root', 'patanscio', 'articoli');
	$result=$mysqli->query("SELECT * FROM artic WHERE id = 2");
	$vetrina=$result->fetch_assoc();
?>
<div align="center">
  <p><font color="#FFFFFF">Millennium Shopping</font></p>
  <p>&nbsp;</p>
  <table width="894" height="418" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
  <tr><td height="20" colspan="3"><div align="left"><font color="#00FF00" size="-1"><strong>Benvenuto!
            sei il visitatore n</strong></font><font color="#00FF00" size="-1"><strong>&deg;
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
    <td height="17" colspan="3"><div align="center"><font size="-1">Home - accedi
          - registrati - cerca - carrello - chi siamo - contattaci</font></div>
    </td>
  <tr>
    <td width="156" height="17" valign="top" bordercolor="#FFFFFF">        <p><font color="#00FF00" size="-1">Login</font>    </p>
      </td>
    <td width="586" rowspan="2" valign="top" bordercolor="#000000" bgcolor="#FFFFFF"><div align="center">
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
    </div></td>
    <td width="144" valign="top" bordercolor="#FFFFFF">      <p><font color="#00FF00" size="-1">Cerca
          nel sito</font></p>
      </td>
  <tr bgcolor="#FFFFFF">
    <td height="280" valign="top" bordercolor="#FFFFFF"><form name="form1" method="post" action="">
      <p><font color="#00FF00" size="-1">Username:
            <input type="text" name="textfield">
    Password:</font><font color="#00FF00">
    <input type="text" name="textfield2">
  </font></p>
      <p><font color="#00FF00">
        <input name="accedi" type="submit" id="accedi" value="Accedi">
      </font> </p>
    </form>
      <hr></td>
    <td width="144" valign="top" bordercolor="#FFFFFF"><form name="form2" method="post" action="">
        <p>
          <input type="text" name="textfield3">
        </p>
        <p>
          <input name="cerca" type="submit" id="cerca2" value="Cerca">
        </p>
      </form>
      <hr></td>
  <tr>
    <td height="17" colspan="3"><div align="center"><font size="-1">Home - accedi - registrati -
      cerca - chi siamo - contattaci</font></div></td>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>

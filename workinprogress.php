<?php 
	session_start();
	
?>
<html>
<head>
<title>Millennium Shopping</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Negozio on-line specializzato in articoli elettronici, La Miglior Qualità a basso costo!">
<meta name="KeyWords" content="lettori, mp3, usb, flash, drive, harddisk, flashdrive, laptop, computer, chiavette usb, fotocamere, videocamere, telecamere, elettronica, periferiche, schede, microscopio, webcam, tastiere, mouse, e-cigarette, tabacco, sigaretta elettronica, pendrive, 16gb, card drive, dispenser sapone, automatico, shop, shopping, cina elettronica, elettronica cina, elettronica cinese, cinafonini, cinafonino">
<META name="author" content="Mirko 'Doc' Fenu">

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
	$totart=71;
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	$firstpage=0;
	if(isset($_GET['articolo'])){
	 $art=$_GET['articolo'];
	 $firstpage=1;
	 $result=$mysqli->query("SELECT * FROM artic WHERE id = $art");
	 $vetrina=$result->fetch_assoc();
	}
	else {
		$art=rand(4,$totart);
	do{
	 $result=$mysqli->query("SELECT * FROM artic WHERE id = $art");
	 $vetrina=$result->fetch_assoc();
	 $art=rand(4,$totart);
	}while($vetrina['genere3']!=NULL);
	}
	do{
		$me1=rand(4,$totart);
		$lato1=$mysqli->query("SELECT * FROM artic WHERE id = $me1");
		$messlato1=$lato1->fetch_assoc();
	}while(($me1==$art) || ($messlato1['genere3']!=NULL));
	do{
		$me2=rand(4,$totart);
		$lato2=$mysqli->query("SELECT * FROM artic WHERE id = $me2");
		$messlato2=$lato2->fetch_assoc();
	}while(($me2==$art) || ($me2==$me1) || ($messlato2['genere3']!=NULL));
	do{
		$me3=rand(4,$totart);
		$lato3=$mysqli->query("SELECT * FROM artic WHERE id = $me3");
	    $messlato3=$lato3->fetch_assoc();
	}while(($me3==$me2) || ($me3==$me1) || ($me3==$art) || ($messlato3['genere3']!=NULL));
	do{
		$me4=rand(4,$totart);
		$hot=$mysqli->query("SELECT * FROM artic WHERE id = $me4");
	    $messhot=$hot->fetch_assoc();
	}while(($me4==$me2) || ($me4==$me1) || ($me4==$me3) || ($me4==$art) || ($messhot['genere3']!=NULL));
	
		
?>
<div align="center">
      <table width="980" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="980" height="110">
              <param name="movie" value="titolo.swf">
              <param name="quality" value="high">
              <embed src="titolo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="980" height="110"></embed>
            </object>
          </p>            </td>
      </table>
      
      <table width="980" height="1113" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
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
    <tr bordercolor="#000000">
      <td width="642" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
	  <p>&nbsp;</p>
	  <p><img src="workinprogress.jpg" width="474" height="280"></p>	  <p><font size="4" face="Arial, Helvetica, sans-serif">Sito
        in fase di aggiornamento                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </font> </p>
	  <p><font size="4" face="Arial, Helvetica, sans-serif">Scusate per il disagio </font> </td>
      <td width="188" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><strong>Siti consigliati:</strong></p>
		<p><a href="http://www.happyclick.it" target="_blank"
		title="Pubblicità">Happyclick Pubblicità Gratuita</a> </p>
		<p><a hfer="http://www.AbcItaly.com"><img src="abcbanner.gif" width="72" height="30"></a></p>
<a href="http://www.aristotele.net" target="_blank" ><img src="bannerino.gif" width="150" height="40"></a>	<p><a href="http://www.thespider.it"><img src="http://www.thespider.it/images/segnalato.gif" alt="TheSpider.it - web directory italiana" border=0></a></p>
		</td>
  </table>
  <p><a href="listacompleta.php?cerca=eee pc">eee pc</a> - <a href="listacompleta.php?cerca=notebook">notebook</a>
    - <a href="listacompleta.php?cerca=elettronica">elettronica</a> - <a href="listacompleta.php?cerca=svago">svago</a> - <a href="listacompleta.php?cerca=tempolibero">tempolibero</a> - <a href="listacompleta.php?cerca=flash">chiavette usb</a></p>
  <p>
      <!--Begin NewClick scambio banner code-->
    <iframe src="http://www.newclick.com/it/asp/banner.asp?id=11518" width=468 height=60 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no title="scambio banner"> </iframe>
    <br /> 
    <a HREF="http://www.newclick.com" TARGET="scambio_banner" alt="scambio banner">Scambio Banner</a>
    <!--End NewClick scambio banner code--> 
  </p>
  <p>&nbsp;</p>
  <p align="center">
  <!-- Inizio Codice ShinyStat -->
	<script type="text/javascript" language="JavaScript" src="http://codice.shinystat.com/cgi-bin/getcod.cgi?USER=Doc0082"></script>
  <noscript>
	<a href="http://www.shinystat.com/it" target="_top">
	<img src="http://www.shinystat.com/cgi-bin/shinystat.cgi?USER=Doc0082" alt="Statistiche" border="0" /></a>
  </noscript>
<!-- Fine Codice ShinyStat -->
  &nbsp;</p>
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

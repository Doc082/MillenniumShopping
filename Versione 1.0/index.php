<?php 
	session_start();
	
?>
<html>
<head>
<title>Millennium Shopping</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Negozio on-line specializzato in articoli elettronici, La Miglior Qualità a basso costo!">
<meta name="KeyWords" content="lettori, mp3, usb, flash, drive, harddisk, flashdrive, computer, laptop, mini pc, chiavette usb, fotocamere, videocamere, telecamere, elettronica, periferiche, schede, microscopio, webcam, tastiere, mouse">
<META name="author" content="Mirko 'Doc' Fenu">

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
	$totart=62;
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
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
      </table>
      
      <table width="980" height="671" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <td height="20" colspan="3" valign="top">        <p><strong><font color="#000000" size="-1" face="Arial, Helvetica, sans-serif">Benvenuto! <?php if (isset($_SESSION['nomeut'])) echo $_SESSION['nomeut'];?>
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
      <td height="23" colspan="3" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif">
      <a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> -
      <a href="listacompleta.php">Lista articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
      ordini</a> - <a href="chisiamo.php">Chi
      siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="150" rowspan="2" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p align="center"><img src="login.jpg">
    </p>
    <form name="form1" method="post" action="accedi2.php">
    <p align="center"><font color="#000000" size="-1" face="Arial, Helvetica, sans-serif">Username:&nbsp;<BR><font color="#00FF00" size="-1">      
      <input name="user" type="text" id="user" size="15">
    </font></p>
    <p align="center"><font color="#000000" size"-1" face="Arial, Helvetica, sans-serif">Password:&nbsp;<BR><font color="#00FF00">
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
			else echo "<a href='carrello.php'><p align='center'><font size='-1' face='Arial, Helvetica, sans-serif'><strong>Ci sono ", $_SESSION['nrarticoli'], "&nbsp;nel carrello</strong></font></a>"; 
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
        <option value="listacompleta.php?cerca=memory">Memory Card</option>
        <option value="listacompleta.php?cerca=altro">Varie
        </select>
      </form>      <p>&nbsp;</p></td>
    <td height="48" colspan="2" align="center" valign="middle" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
 <p><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="450" height="70" id="tastoprova" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="tastoprova.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="tastoprova.swf" quality="high" bgcolor="#ffffff" width="450" height="70" name="tastoprova" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object></p>
<p><hr></p>
<p>          <?php
		//if($firstpage==1){
			$mess=rand(1,3);
		//}
		//else $mess=4;
		if($mess==1) echo"<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>L'elettronica a basso costo</strong></font></p>";																																		 
		if($mess==2) echo"<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Spese di spedizione Gratuite!</strong><BR> Per ordini superiori a 50 euro</font></p>";
		if($mess==3) echo"<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong>Garanzia 12 mesi su tutti gli articoli!</strong></font></p>";
		//if(($mess==4)){ 
		 //echo "<p><img src='imm_articoli/art0034.jpg' width='257' height='196'></p>";
		 //echo "<p><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#FF0000'>Prezzo Promozionale: ASUS EeePC 1201N</font></strong><BR>Intel Atom Dual core, 2 Gb di RAM, HDD 250GB<BR><strong>A Sole 249 euro!!!<BR></strong>Solo 20 pezzi in arrivo, Per prenotazioni o per info manda un'email a:<a href='mailto:info@millenniumshopping.it'>info@millenniumshopping.it</a> </font></p>";
		
		//}
	?>
        </p>
	  <p><hr></p>
	  </td>
    <tr bordercolor="#000000">
      <td width="642" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
	  <p><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif"><strong>Super Offerta!</strong></font></p>
        <p><font color="#0000CC" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $messhot['titolo']; ?></strong></font></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $messhot['descrizione']; ?></strong></font></p>
        <p><?php print("<img src=imm_articoli/$messhot[foto1].jpg height=219>");?></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong>
          <?php //echo $vetrina['genere1']; ?>
        </strong></font></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><?php echo $messhot['testo']; ?></font></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo 'Prezzo: ','€',$messhot['prezzo'], ',';
	  																					if($messhot['cent']>=10)echo $messhot['cent']; 
																						else echo "0",$messhot['cent'];
																						?></strong></font></p>
        <p>&nbsp;</p>
        <p><font color="#0000FF" size="3" face="Arial, Helvetica, sans-serif"><strong>
          <?php if($messhot['disponibili']>0)echo "<a href='carrello.php?codarticolo=",$messhot['id'],"'><img src='carrello.png' width='115' height='30'><a>";
	  			else echo "Disponibile a Giorni";?>
	  <p>&nbsp;</p>
	  <p><HR></p>
	  <p>&nbsp;</p>
        <p><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif"><strong><a name="vetro"></a>In
              Vetrina!</strong></font></p>
        <p><font color="#0000CC" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $vetrina['titolo']; ?></strong></font></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $vetrina['descrizione']; ?></strong></font></p>
        <p><?php print("<img src=imm_articoli/$vetrina[foto1].jpg height=219>");?></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong>
          <?php //echo $vetrina['genere1']; ?>
        </strong></font></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><?php echo $vetrina['testo']; ?></font></p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo 'Prezzo: ','€',$vetrina['prezzo'], ',';
	  																					if($vetrina['cent']>=10)echo $vetrina['cent']; 
																						else echo "0",$vetrina['cent'];
																						?></strong></font></p>
        <p>&nbsp;</p>
        <p><font color="#0000FF" size="3" face="Arial, Helvetica, sans-serif"><strong>
          <?php if($vetrina['disponibili']>0)echo "<a href='carrello.php?codarticolo=",$vetrina['id'],"'><img src='carrello.png' width='115' height='30'><a>";
	  			else echo "Disponibile a Giorni";?>
      </strong></font></p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  </td>
      <td width="188" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
	  	
		<?php	
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>", $messlato1['titolo'],"</font></p>";
			echo "<p><a href='index.php?articolo=$messlato1[id]#vetro'><img src=imm_articoli/$messlato1[foto1].jpg height=70 border ='0'></a></p>";
			if($messlato1['cent']>=10)echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$messlato1[prezzo],$messlato1[cent]</font></p>";
			else echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$messlato1[prezzo],0$messlato1[cent]</font></p>";
			echo "<p>&nbsp;</p>";
			
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>", $messlato2['titolo'],"</font></p>";
			echo "<p><a href='index.php?articolo=$messlato2[id]#vetro'><img src=imm_articoli/$messlato2[foto1].jpg height=70 border ='0'></a></p>";
			if($messlato2['cent']>=10)echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$messlato2[prezzo],$messlato2[cent]</font></p>";
			else echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$messlato2[prezzo],0$messlato2[cent]</font></p>";
			echo "<p>&nbsp;</p>";
			
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>", $messlato3['titolo'],"</font></p>";
			echo "<p><a href='index.php?articolo=$messlato3[id]#vetro'><img src=imm_articoli/$messlato3[foto1].jpg height=70 border ='0'></a></p>";
			if($messlato3['cent']>=10)echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$messlato3[prezzo],$messlato3[cent]</font></p>";
			else echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$messlato3[prezzo],0$messlato3[cent]</font></p>";
			
		?>
		<p>&nbsp;</p>
		<p>Paga Sicuro con Paypal!<BR><img src="paypal.jpg" width="183" height="39"></p>
		<p>&nbsp;</p>
		<a href="http://www.happyclick.it" target="_blank"
		title="Pubblicità">Happyclick Pubblicità Gratuita</a>                  </td>
    <tr bordercolor="#000000">
      <td height="26" valign="top" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"></div></td>
      <td height="26" colspan="2" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
  </table>
  <p>
	  <!--Begin NewClick scambio banner code-->
<iframe src="http://www.newclick.com/it/asp/banner.asp?id=11518" width=468 height=60 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no title="scambio banner"> </iframe><br /> <a HREF="http://www.newclick.com" TARGET="scambio_banner" alt="scambio banner">Scambio Banner</a>
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

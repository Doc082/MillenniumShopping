<?php 
	session_start();
	
?>
<html>
<head>
<title>Millennium Shopping - Negozio online di elettronica e computer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Negozio on-line specializzato in elettronica e computer, gadget di ogni tipo al miglior prezzo.">
<meta name="KeyWords" content="lettori, mp3, usb, flash, drive, harddisk, flashdrive, laptop, computer, chiavette usb, fotocamere, videocamere, telecamere, elettronica, periferiche, schede, microscopio, webcam, tastiere, mouse, e-cigarette, tabacco, sigaretta elettronica, pendrive, 16gb, card drive, dispenser sapone, automatico, shop, shopping, cina elettronica, elettronica cina, elettronica cinese, cinafonini, cinafonino">
<META name="author" content="Mirko 'Doc' Fenu">
<meta name="google-site-verification" content="Qalret_-ejsRVBi8KMzR6455imCi084zxiZSYQhLB8g" />
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
<!-- Google Website Optimizer Control Script -->
<script>
function utmx_section(){}function utmx(){}
(function(){var k='2682113074',d=document,l=d.location,c=d.cookie;function f(n){
if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.indexOf(';',i);return escape(c.substring(i+n.
length+1,j<0?c.length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;
d.write('<sc'+'ript src="'+
'http'+(l.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com'
+'/siteopt.js?v=1&utmxkey='+k+'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='
+new Date().valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"></sc'+'ript>')})();
</script><script>utmx("url",'A/B');</script>
<!-- End of Google Website Optimizer Control Script -->
<!-- Google Website Optimizer Tracking Script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['gwo._setAccount', 'UA-23587764-1']);
  _gaq.push(['gwo._trackPageview', '/2682113074/test']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>

<!-- End of Google Website Optimizer Tracking Script -->
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
	if(isset($_GET['codice'])){
	 $code=$_GET['codice'];
	 $hot=$mysqli->query("SELECT * FROM egross WHERE codice LIKE '$code'");
	 $messhot=$hot->fetch_assoc();
	} else {
		$me4=rand(4,830);
		$hot=$mysqli->query("SELECT * FROM egross WHERE id = $me4");
		$messhot=$hot->fetch_assoc();
	}
	
		
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
      <a href="categorie.php" title="shopping categorie">Categorie</a> - <a href="carrello.php" title="shopping carrello">Carrello</a> - <a href="archiviordini.php">Archivio
      ordini</a> - <a href="chisiamo.php">Chi
      siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="150" rowspan="2" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
	<?php 
			if(!isset($_SESSION['nrarticoli'])) $_SESSION['nrarticoli']=0;
			else if($_SESSION['nrarticoli']=='') $_SESSION['nrarticoli']=0; 
			if(!isset($_SESSION['egarticoli'])) $_SESSION['egarticoli']=0;
			else if($_SESSION['egarticoli']=='') $_SESSION['egarticoli']=0;
			$totarticoli=$_SESSION['nrarticoli'] + $_SESSION['egarticoli']; 
		 ?>
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="150" height="1000">
      <param name="movie" value="menums.swf">
      <param name="quality" value="high">
	  <param name=FlashVars value="nart=<?php echo $totarticoli;?>">
      <embed src="menums.swf" FlashVars="nart=<?php echo $totarticoli;?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="150" height="1000"></embed>
	  </object>
	<p align="center">&nbsp;</p>
    <p>&nbsp;</p></td>
    <td height="180" colspan="2" align="center" valign="middle" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
 <p>
   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="650" height="130">
     <param name="movie" value="tastoprova.swf">
     <param name="quality" value="high">
     <embed src="tastoprova.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="650" height="130"></embed>
   </object>
   <hr></p>
 </td>
    <tr bordercolor="#000000">
      <td width="642" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF">
	  <p><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif"><strong><a name="egro"></a>Outlet Elettronica</strong></font></p>
        <p><font color="#0000CC" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $messhot['titolo']; ?></strong></font></p>
		<h1><p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $messhot['marca']; ?></strong></font></p></h1>
        <p><?php print("<img src='http://ecommerce.sitiwebsumisura.com/listino/foto/$messhot[foto]' height=219 alt='$messhot[titolo]'>");?></p>
        <p>&nbsp;</p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><?php echo $messhot['descrizione']; ?></font></p>
        <?php 
			$price=$messhot['prezzo'];
			$price *= 1.2;
			if(($messhot['categoria']=="MONDO APPLE")||($messhot['categoria']=="CONSOLLE"))$price *=1.1;
			else $price *= 1.2;
			$price=round($price,1);
			$prezel = sprintf("%01.2f", $price);
			$prezel=str_replace('.', ',', $prezel);
		?>
		<p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo "Prezzo: € $prezel";?></strong></font></p>
        <p><iframe src="http://www.facebook.com/plugins/like.php?href=www.millenniumshopping.it/index.php?articolo=<?php echo $messhot['id']?>&amp;send=true&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></p>
		<p><font color="#0000FF" size="3" face="Arial, Helvetica, sans-serif"><strong>
          <?php //if($messhot['disponibili']>0)
		  		echo "<a href='carrello.php?egrossarticolo=",$messhot['codice'],"'><img src='carrello.png' width='115' height='30'><a>";
	  			//else echo "Disponibile a Giorni";?>
				</strong></font></p>
	  <p>&nbsp;</p>
	  <p><HR></p>
	  <p>&nbsp;</p>
        <p><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif"><strong><a name="vetro"></a>In
              Vetrina!</strong></font></p>
        <p><font color="#0000CC" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $vetrina['titolo']; ?></strong></font></p>
        <h3><p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo $vetrina['descrizione']; ?></strong></font></p></h3>
        <p><?php print("<img src=imm_articoli/$vetrina[foto1].jpg height=219 alt='$vetrina[titolo]'>");?></p>
        <p>&nbsp;</p>
        <p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><?php echo $vetrina['testo']; ?></font></p>
        <?php
			$price=$vetrina['prezzo'];
			$price=round($price,1);
			$prezel = sprintf("%01.2f", $price);
			$prezel=str_replace('.', ',', $prezel);
		?>
		<p><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"><strong><?php echo 'Prezzo: ','€',$prezel;?></strong></font></p>
        <p><iframe src="http://www.facebook.com/plugins/like.php?href=www.millenniumshopping.it/index.php?articolo=<?php echo $vetrina['id']?>#vetro&amp;send=true&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></p>
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
			echo "<p><a href='index.php?articolo=$messlato1[id]#vetro'><img src=imm_articoli/$messlato1[foto1].jpg height=70 border ='0' alt='$messlato1[titolo]'></a></p>"; 
			$price=$messlato1['prezzo'];
			$price=round($price,1);
			$prezel = sprintf("%01.2f", $price);
			$prezel=str_replace('.', ',', $prezel);
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$prezel</font></p>";
			echo "<p>&nbsp;</p>";
			
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>", $messlato2['titolo'],"</font></p>";
			echo "<p><a href='index.php?articolo=$messlato2[id]#vetro'><img src=imm_articoli/$messlato2[foto1].jpg height=70 border ='0' alt='$messlato2[titolo]'></a></p>";
			$price=$messlato2['prezzo'];
			$price=round($price,1);
			$prezel = sprintf("%01.2f", $price);
			$prezel=str_replace('.', ',', $prezel);
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$prezel</font></p>";
			echo "<p>&nbsp;</p>";
			
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>", $messlato3['titolo'],"</font></p>";
			echo "<p><a href='index.php?articolo=$messlato3[id]#vetro'><img src=imm_articoli/$messlato3[foto1].jpg height=70 border ='0' alt='$messlato3[titolo]'></a></p>";
			$price=$messlato3['prezzo'];
			$price=round($price,1);
			$prezel = sprintf("%01.2f", $price);
			$prezel=str_replace('.', ',', $prezel);
			echo "<p><font color='#0000FF' size='-1' face='Arial, Helvetica, sans-serif'>€$prezel</font></p>";
			
		?>
		<p><hr></p>
		<p><font size="-1" face="Arial, Helvetica, sans-serif"><strong>Siti Consigliati:</strong></font></p>
		<p>&nbsp;</p>
		<p><script src="http://www.grix.it/sitePromo/grixPromo.php?un=Doc82&ck=5XxUXNhC14"></script></p>
		<p>&nbsp;</p>
		<p><a href="http://www.happyclick.it" target="_blank"
		title="Pubblicità">Happyclick Pubblicità <br>Gratuita</a> </p>
		<p>&nbsp;</p>
		<p><a hfer="http://www.AbcItaly.com"><img src="abcbanner.gif" width="72" height="30"></a></p>
		<p>&nbsp;</p>
		<p><a href="http://www.aristotele.net" target="_blank" ><img src="bannerino.gif" width="150" height="40"></a>	</p>
		<p>&nbsp;</p>
		<p><a href="http://www.thespider.it"><img src="http://www.thespider.it/images/segnalato.gif" alt="TheSpider.it - web directory italiana" border=0></a></p>
		<p>&nbsp;</p>
		<p><hr></p>
<p><font size="-1" face="Arial, Helvetica, sans-serif"><strong>Questo sito usa:<BR>
  <img src="paypal.jpg" width="183" height="39"><br>
  come metodo di pagamento.</strong></font></p>
<p>&nbsp;</p></td>
    <tr bordercolor="#000000">
      <td height="26" valign="top" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"></div></td>
      <td height="26" colspan="2" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
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

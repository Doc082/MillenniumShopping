<html>
<head>
<title>Negozio online - elettronica - computer - gadget</title>
<meta name="description" content="Negozio on-line specializzato in elettronica e computer, gadget di ogni tipo al miglior prezzo.">
<meta name="KeyWords" content="lettori, mp3, usb, flash, drive, harddisk, flashdrive, laptop, computer, chiavette usb, fotocamere, videocamere, telecamere, elettronica, periferiche, schede, microscopio, webcam, tastiere, mouse, e-cigarette, tabacco, sigaretta elettronica, pendrive, 16gb, card drive, dispenser sapone, automatico, shop, shopping, cina elettronica, elettronica cina, elettronica cinese, cinafonini, cinafonino">
<META name="author" content="Mirko 'Doc' Fenu">
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

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	//$mysqli = new mysqli('localhost', 'root', 'patanscio', 'articoli');
?>
<div align="center">
      <table width="980" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
      </table>
      <table width="980" height="545" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr>
      <td height="18" colspan="3" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="categorie.php">Categorie</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="19" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      </td>
    <td width="867" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <?php
	  	$cerca='';
		$togli='';
		$eglista=0;
		$egross='';
		if(isset($_GET['cerca'])){
			$cerca=$_GET['cerca'];
			$search= "FROM artic WHERE (titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%') ORDER BY prezzo";
			$togli= "FROM artic WHERE (genere3 LIKE 'out') AND ((titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%'))";
		}else if(isset($_POST['cerca'])){
			$cerca=$_POST['cerca'];
			$search= "FROM artic WHERE (titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%') ORDER BY prezzo";
			$togli= "FROM artic WHERE ((genere3 LIKE 'out') AND (titolo LIKE '%$cerca%') OR (descrizione LIKE '%$cerca%') OR (testo LIKE '%$cerca%') OR (genere1 LIKE '%$cerca%'))";		
		}else if(isset($_GET['cercaegross'])){
			$cerca=strtoupper($_GET['cercaegross']);
			$egross = "FROM egross WHERE (sottocategoria LIKE '$cerca') OR (categoria LIKE '$cerca') OR (titolo LIKE '$cerca') OR (marca LIKE '$cerca') ORDER BY prezzo";
			$eglista=2;
		}else if(isset($_POST['cercaegross'])){
			$cerca=strtoupper($_POST['cercaegross']);
			$egross = "FROM egross WHERE (sottocategoria LIKE '$cerca') OR (categoria LIKE '$cerca') OR (titolo LIKE '$cerca') OR (marca LIKE '$cerca') ORDER BY prezzo";
			$eglista=2;
		}else if (isset($_POST['sottocategoria'])){
			$cerca=strtoupper($_POST['sottocategoria']);
			$egross="FROM egross WHERE sottocategoria LIKE '$cerca' ORDER BY prezzo";
			$eglista=1;
		}else if (isset($_GET['sottocategoria'])){
			$cerca=strtoupper($_GET['sottocategoria']);
			$egross="FROM egross WHERE sottocategoria LIKE '$cerca' ORDER BY prezzo";
			$eglista=1;
		}else if (isset($_GET['categross'])){
			$cerca=$_GET['categross'];
			$cat=$_GET['categross'];
			if($cat=='ao10')$egross="FROM egross WHERE categoria LIKE 'MULTIMEDIA'";	
			if($cat=='bj11')$egross="FROM egross WHERE categoria LIKE 'BORSE E CUSTODIE'";	
			if($cat=='hk12')$egross="FROM egross WHERE (categoria LIKE 'COMPUTER') OR (sottocategoria LIKE 'NOTEBOOK')";
			if($cat=='zc13')$egross="FROM egross WHERE sottocategoria LIKE 'NETBOOK'";
			if($cat=='yj14')$egross="FROM egross WHERE categoria LIKE 'CONSOLLE'";
			if($cat=='ch15')$egross="FROM egross WHERE categoria LIKE 'GPS'";
			if($cat=='mm16')$egross="FROM egross WHERE categoria LIKE 'MONDO APPLE'";
			if($cat=='ck17')$egross="FROM egross WHERE categoria LIKE 'MONITOR'";
			if($cat=='eg18')$egross="FROM egross WHERE (categoria LIKE 'SCANNER') OR (categoria LIKE 'STAMPANTI')";
			if($cat=='tm19')$egross="FROM egross WHERE categoria LIKE 'TASTIERE E MOUSE'";
			if($cat=='kk20')$egross="FROM egross WHERE categoria LIKE 'TELEFONIA'";
			if($cat=='mv21')$egross="FROM egross WHERE categoria LIKE 'VIDEOSORVEGLIANZA'";
			if($cat=='sm01')$egross="FROM egross WHERE categoria LIKE 'SK. MADRE'";
			if($cat=='sg02')$egross="FROM egross WHERE categoria LIKE 'SK. GRAFICHE'";
			if($cat=='mr03')$egross="FROM egross WHERE categoria LIKE 'RAM'";
			if($cat=='mp04')$egross="FROM egross WHERE categoria LIKE 'PROCESSORI'";
			if($cat=='ca05')$egross="FROM egross WHERE (sottocategoria LIKE 'ALIMENTATORI ATX PC') OR (categoria LIKE 'CASE')";
			if($cat=='vm06')$egross="FROM egross WHERE categoria LIKE 'VENTOLE E DISSIPATORI'";
			$egross .= " ORDER BY 'prezzo'";
			$eglista=3;
		}else {
		 $search="FROM artic ORDER BY prezzo";
		 $togli="FROM artic WHERE genere3='out'";	
		}
		$conta = "SELECT COUNT(*) AS conto " . $search;
		$escludi = "SELECT COUNT(*) AS escl " . $togli;
		$temporany = "SELECT * " . $search;
		$search = $temporany;
		$contegross = "SELECT COUNT(*) AS cegross ". $egross;
		$temp= "SELECT * " . $egross;
		$egross=$temp;
		
		//echo $escludi;
		if($numero=$mysqli->query($conta)){
		    $totalrow = $numero->fetch_assoc();
			//echo "<p>",$totalrow['conto'], "<p>";
		}
		if($numegross=$mysqli->query($contegross)){
		    $egrossrow = $numegross->fetch_assoc();
			//echo "<p>",$totalrow['conto'], "<p>";
		}
		if($meno=$mysqli->query($escludi)){
		   $eliminati = $meno->fetch_assoc();
			//echo "<p>",$eliminati['escl'], "<p>";
		}
		$currentpage=1;
		if(isset($_GET['page'])){
			if($_GET['page']>1) //$search .= " LIMIT 10";
			{
				$currentpage=$_GET['page'];
				$pag=$_GET['page'];
				$pag-=1;
				//$pag *=10;
				//$search .= " LIMIT ". $pag . ",10";
			}
		}//else $search .= " LIMIT 10";
		
		if(!$eglista)$totaltrue=$totalrow['conto'] - $eliminati['escl']; 
		else $totaltrue=$egrossrow['cegross'];
		$pagtot = $totaltrue/10;
		$temp = ceil($pagtot);
		
		if($temp<$pagtot) $temp += 1;
		$pagtot=$temp;
		//echo $pagtot;
		$prec=$currentpage-1;
		$indexpage="&nbsp;";
		if(!$eglista)$cerc="&cerca=";
		else if($eglista==1) $cerc="&sottocategoria=";
		else if($eglista==2) $cerc="&cercaegross=";
		else if($eglista==3) $cerc="&categross=";
		if($cerca != '') $cerc .=$cerca;
		else $cerc.='';
		if($currentpage>1)$indexpage="<a href='listacompleta.php?page=".$prec . $cerc."'>Precedente</a>&nbsp;&nbsp;";
		
		$x=1;
		//echo $pagtot;
		do{
			//echo $x;
			$indexpage .= "<a href='listacompleta.php?page=" . $x . $cerc."'>" . $x . "</a>&nbsp;";  
			$x++;
		}while($x<=$pagtot);
		
		$succ=$currentpage+1;
		if($currentpage<$pagtot)$indexpage.="&nbsp;<a href='listacompleta.php?page=" . $succ . $cerc ."'>Successiva</a>";
		echo "<p align='center'>", $indexpage, "</p>";
		$delays=0;
		$pagec=$currentpage;
		$pagec-=1;
		$pagec *=10;
		$pagec +=1;
		$limiti=1;
		$nores=1;
		if($result=$mysqli->query($search)){
			while($row = $result->fetch_assoc())
				{
					$price=$row['prezzo'];
					$price=round($price,1);
					$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
					
					if($row['genere3']!="out"){
						if($currentpage==1) $delays=1;
						else{
							if($nores>=$pagec) $delays=1;
							else $nores++;	
						}
						if($delays){
							if($limiti<=10){
									if($row['disponibili']>0){
										echo "<h1><p><a href='index.php?articolo=$row[id]#vetro' title='elettronica - gadget - computer'><img src='imm_articoli/$row[foto1].jpg' height='70' border='1' alt='$row[descrizione]'></a>&nbsp;&nbsp;<a href='index.php?articolo=$row[id]#vetro' title='tablet - portatili - console'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$prezel&nbsp;</strong><a href='carrello.php?codarticolo=$row[id]'><img src='carrello.png' width='80' height='20'><a></font></p></h1>"; 
										echo "<hr>";
									}else {
										echo "<h1><p><a href='index.php?articolo=$row[id]#vetro' title='pendrive - webcam - minipc'><img src='imm_articoli/$row[foto1].jpg'  height='70' border='1' alt='$row[descrizione]'></a>&nbsp;&nbsp;<a href='index.php?articolo=$row[id]#vetro' title='flashdrive - multimedia - nintendo'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$prezel&nbsp;</strong><font color='#0000FF'>Disponibile a Giorni</font></font></p></h1>"; 
										echo "<hr>";
									}
								$limiti++;
								}
							
							
						}
					}
				}
			}else if($result=$mysqli->query($egross)){
				while($row = $result->fetch_assoc()){	
					$price=$row['prezzo'];
					$price *=1.2;
					if(($row['categoria']=="MONDO APPLE")||($row['categoria']=="CONSOLLE"))$price *=1.1;
					else $price *=1.2;
					$price=round($price,1);
					$prezel = sprintf("%01.2f", $price);
					$prezel=str_replace('.', ',', $prezel);
					
					if($row['disponibili']!=0){
						if($currentpage==1) $delays=1;
						else{
							if($nores>=$pagec) $delays=1;
							else $nores++;	
						}
						if($delays){
							if($limiti<=10){
										echo "<h1><p><a href='index.php?codice=$row[codice]#egro' title='elettronica - computer - gadget'><img src='http://ecommerce.sitiwebsumisura.com/listino/foto/$row[foto]' height='70' border='1' alt='$row[marca]'></a>&nbsp;&nbsp;<a href='index.php?codice=$row[codice]#egro' title='pendrive - webcam - minipc'><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>$row[titolo]</strong></font></a><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[marca]&nbsp;&nbsp;&nbsp;<strong>€$prezel&nbsp;</strong><a href='carrello.php?egrossarticolo=$row[codice]'><img src='carrello.png' width='80' height='20'><a></font></p></h2>"; 
										echo "<hr>";
										
									}
								$limiti++;
								}
							
						}	
						
					}
				}	else echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Elementi trovati: 0</strong></font></p>";
	  		echo "<p align='center'>", $indexpage, "</p>";
	  ?>
      
      
      </td>
    <td width="19" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    <tr bordercolor="#000000">
      <td height="26" colspan="3" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="categorie.php">Categorie</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
  </table>
  <p><script src="http://www.grix.it/sitePromo/grixPromo.php?un=Doc82&ck=5XxUXNhC14"></script></p>
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

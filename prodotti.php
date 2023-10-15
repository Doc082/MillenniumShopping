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
@import url(style.css);
#probox{
	width:120px;
	height:100px;
	margin-bottom: -15px;
	position:relative;	
}

#boxpro{
	background-color:#FFFFFF;
	width:170px;
	height: 170px;
	font-family: arial, Verdana, sans-serif;
	font-size:15px;
	margin-right:20px;
	margin-left:20px;
	margin-top:40px;
	margin-bottom:40px;
	padding:10px;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	border-right: 1px solid black;
	border-left: 1px solid black; 
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	box-shadow: -5px -5px 10px 2px #333333 inset;
	-webkit-box-shadow: -5px -5px 10px 2px #333333 inset;
	-moz-box-shadow: -5px -5px 10px 2px #333333 inset;
}
#boxpro:hover{
	color:#FF0000;
	box-shadow: 5px 5px 10px 2px #333333 inset;
	-webkit-box-shadow: 5px 5px 10px 2px #333333 inset;
	-moz-box-shadow: 5px 5px 10px 2px #333333 inset;
	
}
</style>


</head>


<body background="texture/texture2.jpg" >
<?php
	$_SERVER['PHP_SELF'];
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
			
?>
<table width="980" height="450" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr valign="top" width="418" height="110">
	  <td height="110" colspan="4" bgcolor="#FFFFFF"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="980" height="110">
        <param name="movie" value="titolo.swf">
        <param name="quality" value="high">
        <embed src="titolo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="980" height="110"></embed>
      </object></td>
  </tr>
	<tr width="418" height="25">
	  <td height="20" colspan="4" valign="top" bgcolor="#FFFFFF">
	  <div id="navigation">
  	<ul>
  	  <li><a href="index.php" title="Home">Home</a></li>
  	  <li><a href="accedi.php" title="Accedi">Accedi</a></li>
 	   <li><a href="register.php" title="Registrati">Registrati</a></li>
 	   <li><a class=active href="prodotti.php" title="Prodotti">Prodotti</a></li>
	    <li><a href="carrello.php" title="Carrella">Carrello</a></li>
  	  <li><a href="archiviordini.php" title="Archivio Ordini">Archivio Ordini</a></li>
  	  <li class="last"><a href="chisiamo.php" title="Contatti">Contatti</a></li>
	  </ul>
	</div>

	</td>
  </tr>
	<tr width="418" height="200">
		<td width="131" valign="top" bgcolor="#FFFFFF">
			<div id=menubox align="center">
				<form action="accedi2.php" method="post">User:<br><input id=button name="user" type="text" size="10"><br>Password<br>
				  <input id=button name="passw" type="password" size="10"><br><input id=button name="submit" type="submit" value="Accedi"></form>
			</div>
			<div id=menubox>
				<ul>
  				    <li><a href="listaprodotti.php?categ=fotografia" title="fotografia">Fotografia</a></li>
  	  				<li><a href="listaprodotti.php?categ=videocamera" title="videocamera">Videocamera</a></li>
 	   				<li><a href="listaprodotti.php?categ=immagine%20e%20suono" title="immagine e suono">Immagine e Suono</a></li>
 	   				<li><a href="listaprodotti.php?categ=telefonia" title="telefonia">Telefonia</a></li>
	    			<li><a href="listaprodotti.php?categ=audio" title="audio">Audio</a></li>
  	  				<li><a href="listaprodotti.php?categ=informatica" title="informatica">Informatica</a></li>
  	  				<li><a href="listacompleta.php?search=mondo apple" title="mondo apple">Mondo Apple</a></li>
					<li><a href="listaprodotti.php?categ=gps" title="gps">Gps</a></li>
					<li><a href="listaprodotti.php?categ=videogiochi" title="console">Console e Videogiochi</a></li>
					<li><a href="listaprodotti.php?categ=consumabile" title="consumabile">Consumabile</a></li>
					<li><a href="listaprodotti.php?categ=giardino" title="giardino">Casa e Giardino</a></li>
					<li><a href="listaprodotti.php?categ=tuning%20auto" title="tuning">Automobile</a></li>
					<li><a href="listaprodotti.php?categ=piccoli%20elettrodomestici" title="elettrodomestici">Piccoli Elettrodomestici</a></li>
	  				<li><a href="listaprodotti.php?categ=aria%20aperta" title="giochi">Giochi e Giocattoli</a></li>
					<li><a href="listaprodotti.php?categ=Valigie,%20Trolley,%20Borse" title="valigeria">Valigeria</a></li>
					<li><a href="listaprodotti.php?categ=pasto,%20seggiolone" title="puericultura">Puericultura</a></li>
	  			</ul>
			</div>
		</td>
	    <td width="280" align="center" valign="top" bgcolor="#FFFFFF"><div id=boxpro>
					<p><a href="listaprodotti.php?categ=fotografia"><img id=probox src="categorie/fotografia.jpg"  alt="fotografia"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=fotografia"><strong>Fotografia</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=videocamera"><img id=probox src="categorie/videocamera.jpg"  alt="videocamera"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=videocamera"><strong>Videocamera</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listacompleta.php?search=mondo%20apple"><img id=probox src="categorie/apple.jpg"  alt="apple"></a></p>
					<p>&nbsp;</p>
					<p><a href="listacompleta.php?search=mondo%20apple"><strong>Mondo Apple</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=consumabile"><img id=probox src="categorie/consumabile.jpg"  alt="consumabili"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=consumabile"><strong>Consumabile</strong></a></p>
			</div>
			<div id=boxpro>
				<p><a href="listaprodotti.php?categ=piccoli elettrodomestici"><img id=probox src="categorie/piccoli elettrodomestici.jpg"  alt="elettrodomestici"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=piccoli elettrodomestici"><strong>Piccoli Elettrodomestici</strong></a></p>
			</div>
				</td>
	    <td width="280" align="center" valign="top" bgcolor="#FFFFFF"><div id=boxpro>
				<p><a href="listaprodotti.php?categ=immagine e suono"><img id=probox src="categorie/immagine e suono.jpg"  alt="immagine e suono"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=immagine e suono"><strong>Immagine e Suono</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=audio"><img id=probox src="categorie/audio.jpg"  alt="audio"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=audio"><strong>Audio</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=gps"><img id=probox src="categorie/gps.jpg"  alt="gps"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=gps"><strong>Gps</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=giardino"><img id=probox src="categorie/giardino.jpg"  alt="giardino"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=giardino"><strong>Casa e Giardino</strong></a></p>
			</div>
			<div id=boxpro>
				<p><a href="listaprodotti.php?categ=aria aperta"><img id=probox src="categorie/aria aperta.jpg"  alt="giocattoli"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=aria aperta"><strong>Giochi e Giocattoli</strong></a></p>
			</div>
			<div id=boxpro>
				<p><a href="listaprodotti.php?categ=pasto, seggiolone"><img id=probox src="categorie/pasto, seggiolone.jpg"  alt="puericoltura"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=pasto, seggiolone"><strong>Puericultura</strong></a></p>
			</div>
				</td>
	    <td width="280" align="center" valign="top" bgcolor="#FFFFFF">          
			<div id=boxpro>
				<p><a href="listaprodotti.php?categ=telefonia"><img id=probox src="categorie/telefonia.jpg"  alt="telefonia"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=telefonia"><strong>Telefonia</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=informatica"><img id=probox src="categorie/informatica.jpg"  alt="informatica"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=informatica"><strong>Informatica</strong></a></p>
				</div>
				<div id=boxpro>
				<p><a href="listaprodotti.php?categ=videogiochi"><img id=probox src="categorie/videogiochi.jpg"  alt="videogiochi"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=videogiochi"><strong>Console e Videogiochi</strong></a></p>
			</div>
			<div id=boxpro>
				<p><a href="listaprodotti.php?categ=tuning auto"><img id=probox src="categorie/tuning auto.jpg"  alt="automobile"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=tuning auto"><strong>Automobile</strong></a></p>
			</div>
			<div id=boxpro>
				<p><a href="listaprodotti.php?categ=Valigie, Trolley, Borse"><img id=probox src="categorie/Valigie, Trolley, Borse.jpg"  alt="valigeria"></a></p>
					<p>&nbsp;</p>
					<p><a href="listaprodotti.php?categ=Valigie, Trolley, Borse"><strong>Valigeria</strong></a></p>
			</div>
	  </td>
    </tr>
</table>

</body>
</html>

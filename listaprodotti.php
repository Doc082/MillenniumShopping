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

#pronav {
	background:#FFFFFF;
	border-width:1px 1px 1px 1px;
	border-color:#000000;
	border-style:solid;
	font-family: arial, Verdana, sans-serif;
	font-size:15px;
	color:#FFFFFF;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding:10px;
	margin:15px;
	box-shadow: 5px 5px 10px 2px #333333 ;
	-webkit-box-shadow: 5px 5px 10px 2px #333333;
	-moz-box-shadow: 5px 5px 10px 2px #333333;
}

#pronav ul, #navigation ul li {  
	list-style:none;
	margin:0;
	padding:0;
}



#pronav ul li a {
	
	display:block;
   	margin:0 0.25em;
   	padding:0.5em 1em;
	font-family: arial, Verdana, sans-serif;
	color:#000000;
	border-width:1px 1px 1px 1px;
	border-color:#000000;
	border-style:solid;
	background:#80C8FF url(roundbar-blue.gif) 0 25% repeat;
	text-decoration:none;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	box-shadow: -3px -3px 2px 2px #006699 inset;
	-webkit-box-shadow: -3px -3px 2px 2px #006699 inset;
	-moz-box-shadow: -3px -3px 5px 2px #006699 inset;
}

#pronav ul li a:hover {
	color:#003366;
	background:#80C8FF url(roundbar-blue.gif) 0 75% repeat;
	box-shadow: 3px 3px 2px 2px #006699 inset;
	-webkit-box-shadow: 3px 3px 2px 2px #006699 inset;
	-moz-box-shadow: 3px 3px 5px 2px #006699 inset;
}

</style>
</head>

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
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
	    <li><a href="carrello.php" title="Carrello">Carrello</a></li>
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
   <td width="1018" align="center" valign="top" bordercolor="#FFFFFF"  bgcolor="#FFFFFF"><p>&nbsp;</p>
    <?php
		if(isset($_GET['categ'])){
			$categoria="";
			if($_GET['categ']=="fotografia"){
				$categoria=$_GET['categ'];
				$titolo="Fotografia";
			}
			if($_GET['categ']=="videocamera"){
				$categoria=$_GET['categ'];
				$titolo="Videocamera";
			}
			if($_GET['categ']=="consumabile"){
				$categoria=$_GET['categ'];
				$titolo="Consumabile";
			}
			if($_GET['categ']=="immagine e suono"){
				$categoria=$_GET['categ'];
				$titolo="Immagine e Suono";
			}
			if($_GET['categ']=="audio"){
				$categoria=$_GET['categ'];
				$titolo="Audio";
			}
			if($_GET['categ']=="informatica"){
				$categoria=$_GET['categ'];
				$titolo="Informatica";
			}
			if($_GET['categ']=="telefonia"){
				$categoria=$_GET['categ'];
				$titolo="Telefonia";
			}
			if($_GET['categ']=="gps"){
				$categoria=$_GET['categ'];
				$titolo="Gps";
			}
			if($_GET['categ']=="piccoli elettrodomestici"){
				$categoria=$_GET['categ'];
				$titolo="Piccoli Elettrodomestici";
			}	
			if($_GET['categ']=="videogiochi"){
				$categoria=$_GET['categ'];
				$titolo="Console e Vodeogiochi";
			}
			if($_GET['categ']=="apple"){
				$categoria=$_GET['categ'];
				$titolo="Mondo Apple";
			}
			if($_GET['categ']=="giardino"){
				$categoria=$_GET['categ'];
				$titolo="Casa e Giardino";
			}
			if($_GET['categ']=="aria aperta"){
				$categoria=$_GET['categ'];
				$titolo="Giochi e Giocattoli";
			}
			if($_GET['categ']=="pasto, seggiolone"){
				$categoria=$_GET['categ'];
				$titolo="Puericultura";
			}
			if($_GET['categ']=="tuning auto"){
				$categoria=$_GET['categ'];
				$titolo="Automobile";
			}
			if($_GET['categ']=="Valigie, Trolley, Borse"){
				$categoria=$_GET['categ'];
				$titolo="Valigeria";
			}
			
			
			echo "<div id=boxpro align='center'>";
			echo "<p><img id=probox src='categorie/$categoria.jpg'  alt='$categoria'></p>";
			echo "<p>&nbsp;</p>";
			echo "<p><strong>$titolo</strong></p>";
			echo "</div>";
			echo "<div id='pronav'>";
  			echo "<ul>";
			//$categoria= strtoupper($categoria);
			$result=$mysqli->query("SELECT * FROM pixmania WHERE universo like '%$categoria' ORDER BY categoria");		
			$sottoc="";
			while($rowe = $result->fetch_assoc())
						{
						 	if($sottoc!=$rowe['categoria']) {
								if($sottoc!="") echo "<li><strong><a href='listacompleta.php?search=$rowe[categoria]' title='$rowe[categoria]'>$rowe[categoria]</a></strong></li>";
							}
						
							$sottoc=$rowe['categoria'];	
						}
						
  	  
  	  		echo "</ul>";
			echo "</div>";
		}else  header("location:prodotti.php'");
	?> 
    </td>
    </tr>
	</table>
  <p>&nbsp;</p>
  
 
</body>
</html>

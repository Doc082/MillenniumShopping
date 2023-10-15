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
</head>

<body background="texture/texture2.jpg" bgproperties="fixed">
<?php
	$mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping');
	
?>
<div align="center">
      <table width="983" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="983" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            
            <p>&nbsp;
          </p>
          </td>
      </table>
      <table width="980" height="545" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
    <tr>
      <td height="18" colspan="3" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="17" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      </td>
    <td width="872" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p>
        <?php
	  	if(isset($_GET['codarticolo'])){
		 if(isset($_SESSION['nrarticoli'])) $_SESSION['nrarticoli']=$_SESSION['nrarticoli']+1;
		 else $_SESSION['nrarticoli']=1;
		 $temp = $_GET['codarticolo']." ";
		 if(!isset($_SESSION['listarticoli']))$_SESSION['listarticoli']=$temp;
		 else{
		 	$_SESSION['listarticoli']=$_SESSION['listarticoli'].$temp;
		 }
		}
		
		if(!isset($_SESSION['nrarticoli'])) echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun elemento presente nel carrello</strong></font>";
		else{
			if($_SESSION['nrarticoli']<1){
				//echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun elemento presente nel carrello</strong></font>";
				$_SESSION['nrarticoli']='';
				$_SESSION['listarticoli']="";
			}else{
				$earticoli=explode(' ',$_SESSION['listarticoli']);
				if(isset($_GET['elimarticolo'])){
					if($_SESSION['nrarticoli']==1) $_SESSION['nrarticoli']='';
					else{
						$tempart=$_SESSION['listarticoli'];
						$_SESSION['listarticoli']="";
						$examinate=1;
						for($x=0; $x<=$_SESSION['nrarticoli'];$x++){
							if(($earticoli[$x]!=$_GET['elimarticolo']) || ($examinate==0)){
								$_SESSION['listarticoli']=$_SESSION['listarticoli'].$earticoli[$x].' ';
																
							}else{
								if($examinate!=0) $nrarticoli=$_SESSION['nrarticoli']-1;
								$examinate=0;
								
							}
						}
										
						$_SESSION['nrarticoli']=$nrarticoli;
					}		
				}
				//echo $_SESSION['listarticoli'];
				$numart=1;
				if($_SESSION['nrarticoli']<1){
					echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Nessun elemento presente nel carrello</strong></font>";
					$numart=0;
					$_SESSION['nrarticoli']='';
					$_SESSION['listarticoli']="";
			    }else echo "<font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>Ci sono $_SESSION[nrarticoli]&nbsp;elementi nel carrello</strong></font>";	
		 		$larticoli=explode(' ',$_SESSION['listarticoli']);
				//$_SESSION['nrarticoli']= count($larticoli);
				$totale=0;
				$cent=0;
				for($x=0; $x<$_SESSION['nrarticoli'];$x++){
					if($result=$mysqli->query("SELECT * FROM artic WHERE id=$larticoli[$x]")){
						$row=$result->fetch_assoc();
						$cent=$cent+$row['cent'];
						if($cent>=100){
							$cent-=100;
							$totale +=1;
						}
						$totale=$totale+$row['prezzo'];
						
						if($row['cent']>=10) echo "<p><a href='index.php?articolo=$row[id]'><img src='imm_articoli/$row[foto1].jpg' height='70' border='1'></a><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>&nbsp;&nbsp;$row[titolo]</strong></font><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$row[prezzo],$row[cent]&nbsp;<a href='carrello.php?elimarticolo=$row[id]'>Elimina elemento<a></strong></font></p>";
						else echo "<p><a href='index.php?articolo=$row[id]'><img src='imm_articoli/$row[foto1].jpg' height='70' border='1'></a><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'><strong>&nbsp;&nbsp;$row[titolo]</strong></font><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'>&nbsp;$row[descrizione]&nbsp;&nbsp;&nbsp;<strong>€$row[prezzo],0$row[cent]&nbsp;<a href='carrello.php?elimarticolo=$row[id]'>Elimina elemento<a></strong></font></p>"; 
				}
								
				}
				if($numart){
				echo "<p>&nbsp;</p>";
				if ($cent>=10)echo "<font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Totale: €$totale,$cent</strong></font>";
				else echo "<font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><strong>Totale: €$totale,0$cent</strong></font>";
				echo "<p><font color='#000000' size='3' face='Arial, Helvetica, sans-serif'><a href='javascript:history.back()'>Indietro</a>&nbsp;&nbsp;<a href='confermaordine.php?cent=$cent&totale=$totale'>Conferma Ordine</a></font></p>";
				}
			}
			
			}
		
	  ?>
      </p>
      <p>&nbsp;</p></td>
    <td width="16" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    <tr bordercolor="#000000">
      <td height="26" colspan="3" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
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

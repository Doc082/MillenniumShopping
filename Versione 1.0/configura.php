<?php
 //crea ed azzera il contavisite
 $contatore=fopen('conta.cnt','w');
 if(fwrite($contatore,'0')) print("Scrittura file contavisite ok <hr />");
 else print("Scrittura file contavisite non riuscita<hr />");
 fclose($contatore);
 
 //Crea la tabella per gli articoli
 if($mysqli = new mysqli('localhost', 'millennium', 'X1k2N3w8', 'millenniumshopping'))print('Apertura database riuscito <hr />');
 else print('Apertura database non riuscito<hr />');
 
 $mysqli->autocommit(true);
 //$mysqli->query("DROP TABLE artic");
 if($mysqli->query("CREATE TABLE artic(
 					id INT UNSIGNED AUTO_INCREMENT NOT NULL,
 					codice INT(10) NOT NULL,						
					foto1 VARCHAR(10),
					foto2 VARCHAR(10),
					foto3 VARCHAR(10),
					titolo VARCHAR(32),
					descrizione VARCHAR(160),
					testo TEXT,
					genere1 VARCHAR(32),
					genere2 VARCHAR(32),
					genere3 VARCHAR(32),
					prezzo FLOAT(1) NOT NULL,
					cent INT(5),
					disponibili INT(10),
					PRIMARY KEY(id));")
 )print('Creazione tabella articoli riuscita <hr />');
 else print('Creazione tabella articoli non riuscita <hr />');
 $mysqli->query("DROP TABLE clienti"); 
  if($mysqli->query("CREATE TABLE clienti(
 					id INT UNSIGNED AUTO_INCREMENT NOT NULL,
 					nome VARCHAR(16),
					cognome VARCHAR(16),
					email VARCHAR(32),
					via VARCHAR(60),
					cap VARCHAR(6),
					citta VARCHAR(32),
					provincia VARCHAR(2),
					user VARCHAR(16),
					passw VARCHAR(16),
					PRIMARY KEY(id));")
 )print('Creazione tabella clienti riuscita <hr />');
 else print('Creazione tabella clienti non riuscita <hr />');
 
 if($mysqli->query("CREATE TABLE ordini(
 					id INT UNSIGNED AUTO_INCREMENT NOT NULL,
 					nrcliente INT(10),
					descrizione TEXT,
					totale VARCHAR(10),
					statosped VARCHAR(32),
					PRIMARY KEY(id));")
 )print('Creazione tabella ordini riuscita <hr />');
 else print('Creazione tabella ordini non riuscita <hr />');
 $mysqli->close();
 
 
?>
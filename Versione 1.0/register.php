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
	$result=$mysqli->query("SELECT * FROM artic WHERE id = 3");
	$vetrina=$result->fetch_assoc();
?>
<div align="center">
      <table width="980" height="100" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <tr bordercolor="#000000">
          <td width="438" height="80" valign="top" bordercolor="#FFFFFF" background="title.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>            <p>&nbsp;
          </p>            <p>&nbsp;
          </p>
          </td>
      </table>
      <table height="545" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#000066">
        <!--DWLayoutTable-->
    <tr>
      <td height="18" valign="top" bordercolor="#FFFFFF" bgcolor="#C0C0C0"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
              articoli</a> - <a href="carrello.php">Carrello</a> - <a href="archiviordini.php">Archivio
              ordini</a> - <a href="chisiamo.php">Chi siamo</a> - <a href="chisiamo.php">Contattaci</a></font></div></td>
    <tr bordercolor="#000000">
    <td width="976" align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p><font color="#FF0000" face="Arial, Helvetica, sans-serif"><strong>Benvenuti,
            inserite qui i vostri dati!</strong></font></p>
      <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">
      </font></strong></p>      
      <form name="form1" method="post" action="contreg.php">
      <p><font face="Arial, Helvetica, sans-serif"><strong><font size="-1"> Nome: 
            <input name="nome" type="text" id="nome" size="20" maxlength="16">
        </font></strong></font></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Cognome:   
            <input name="cognome" type="text" id="cognome" size="20" maxlength="16">
      </font></strong>
          </p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Indirizzo</font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Via: 
        <input name="via" type="text" id="via">
      </font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Citt&agrave;: 
        <input name="citta" type="text" id="citta">
      </font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Provincia: 
        <input name="provincia" type="text" id="provincia" size="4" maxlength="2">
 Cap: 
 <input name="cap" type="text" id="cap" size="6" maxlength="5">
      </font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Email: 
        <input name="email" type="text" id="email">
      </font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Username: 
        <input name="user" type="text" id="user">
      </font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Password: 
        <input name="passw" type="password" id="passw">
      </font></strong></p>
      <p><strong><font size="-1" face="Arial, Helvetica, sans-serif">Ripeti password:
        <input name="passw1" type="password" id="passw1">
      </font></strong></p>
      <p>
        <textarea name="textarea" cols="100" wrap="OFF">D.Lgs 30/06/2003 n.196 (codice privacy)
Art. 13
Codice Parte I - Parte I Titolo III
Art. 13. Informativa1.
L'interessato o la persona presso la quale sono raccolti i dati personali sono previamente 

informati oralmente o per iscritto circa:
a) le finalità e le modalità del trattamento cui sono destinati i dati;
b) la natura obbligatoria o facoltativa del conferimento dei dati;
c) le conseguenze di un eventuale rifiuto di rispondere;
d) i soggetti o le categorie di soggetti ai quali i dati personali possono essere comunicati o 

che possono venirne a conoscenza in qualità di responsabili o incaricati, e l'ambito di 

diffusione dei dati medesimi;
e) i diritti di cui all'articolo 7;
f) gli estremi identificativi del titolare e, se designati, del rappresentante nel territorio 

dello Stato ai sensi dell'articolo 5 e del responsabile. Quando il titolare ha designato più 

responsabili è indicato almeno uno di essi, indicando il sito della rete di comunicazione o le 

modalità attraverso le quali è conoscibile in modo agevole l'elenco aggiornato dei responsabili. 

Quando è stato designato un responsabile per il riscontro all'interessato in caso di esercizio 

dei diritti di cui all'articolo 7, è indicato tale responsabile.


Benvenuti
Ai sensi dell'articolo 13 del Decreto legislativo 30 giugno 2003, n. 196  (codice privacy) la 

informiamo circa:
a) le finalità e le modalità del trattamento cui sono destinati i dati;
Finalità:
I dati da te conferiti (user, soprannome, email e password) sono finalizzati all'accesso 

all'area riservata del nostro sito dove potrà usufruire dei seguenti servizi:
a-Acquistare on line

Modalità:
I tuoi dati sono memorizzati in formato elettonico nel database del sito sul server ospitante, 

non vengono resi noti a terzi e sono protetti dai rischi  di perdita, accessi non autorizzati e 

sottrazione dolosa con adeguate misure di sicurezza.
b) la natura obbligatoria o facoltativa del conferimento dei dati;
Il conferimento dei dati è facoltativo  è condizione essenziale per la registrazione al sito.
c) le conseguenze di un eventuale rifiuto di rispondere;
 Il  mancato o irregolare conferimento comporta l'impossibilità di registrarsi al sito.

d) i soggetti o le categorie di soggetti ai quali i dati personali possono essere comunicati o 

che possono venirne a conoscenza in qualità di responsabili o incaricati, e l'ambito di 

diffusione dei dati medesimi;
Il titolare del trattamento la informa che avranno accesso ai suoi dati  i responsabili e gli 

incaricati qualora nominati ed i tecnici e i consulenti preposti alla gestione del sito web,  i 

tuoi dati  non saranno diffusi a terzi.
e) i diritti di cui all'articolo 7;
(riporto l'integrale art 7, eviterei di sintetizzarlo, e per opportuna conoscenza nostra anche 

gli altri dello stesso titolo)
1. L'interessato ha diritto di ottenere la conferma dell'esistenza o meno di dati personali che 

lo riguardano, anche se non ancora registrati, e la loro comunicazione in forma intelligibile.
2. L'interessato ha diritto di ottenere l'indicazione:
a) dell'origine dei dati personali;
b) delle finalità e modalità del trattamento;
c) della logica applicata in caso di trattamento effettuato con l'ausilio di strumenti 

elettronici;
d) degli estremi identificativi del titolare, dei responsabili e del rappresentante designato ai 

sensi dell'articolo 5, comma 2;
e) dei soggetti o delle categorie di soggetti ai quali i dati personali possono essere 

comunicati o che possono venirne a conoscenza in qualità di rappresentante designato nel 

territorio dello Stato, di responsabili o incaricati.
3. L'interessato ha diritto di ottenere:
a) l'aggiornamento, la rettificazione ovvero, quando vi ha interesse, l'integrazione dei dati;
b) la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in 

violazione di legge, compresi quelli di cui non è necessaria la conservazione in relazione agli 

scopi per i quali i dati sono stati raccolti o successivamente trattati;
c) l'attestazione che le operazioni di cui alle lettere a) e b) sono state portate a conoscenza, 

anche per quanto riguarda il loro contenuto, di coloro ai quali i dati sono stati comunicati o 

diffusi, eccettuato il caso in cui tale adempimento si rivela impossibile o comporta un impiego 

di mezzi manifestamente sproporzionato rispetto al diritto tutelato.
4. L'interessato ha diritto di opporsi, in tutto o in parte:
a) per motivi legittimi al trattamento dei dati personali che lo riguardano, ancorché pertinenti 

allo scopo della raccolta;
b) al trattamento di dati personali che lo riguardano a fini di invio di materiale pubblicitario 

o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale.
Art. 8. Esercizio dei diritti
1. I diritti di cui all'articolo 7 sono esercitati con richiesta rivolta senza formalità al 

titolare o al responsabile, anche per il tramite di un incaricato, alla quale è fornito idoneo 

riscontro senza ritardo.
2. I diritti di cui all'articolo 7 non possono essere esercitati con richiesta al titolare o al 

responsabile o con ricorso ai sensi dell'articolo 145, se i trattamenti di dati personali sono 

effettuati:
a) in base alle disposizioni del decreto-legge 3 maggio 1991, n. 143, convertito, con 

modificazioni, dalla legge 5 luglio 1991, n. 197, e successive modificazioni, in materia di 

riciclaggio;
b) in base alle disposizioni del decreto-legge 31 dicembre 1991, n. 419, convertito, con 

modificazioni, dalla legge 18 febbraio 1992, n. 172, e successive modificazioni, in materia di 

sostegno alle vittime di richieste estorsive;
c) da Commissioni parlamentari d'inchiesta istituite ai sensi dell'articolo 82 della 

Costituzione;
d) da un soggetto pubblico, diverso dagli enti pubblici economici, in base ad espressa 

disposizione di legge, per esclusive finalità inerenti alla politica monetaria e valutaria, al 

sistema dei pagamenti, al controllo degli intermediari e dei mercati creditizi e finanziari, 

nonché alla tutela della loro stabilità;
e) ai sensi dell'articolo 24, comma 1, lettera f), limitatamente al periodo durante il quale 

potrebbe derivarne un pregiudizio effettivo e concreto per lo svolgimento delle investigazioni 

difensive o per l'esercizio del diritto in sede giudiziaria;
f) da fornitori di servizi di comunicazione elettronica accessibili al pubblico relativamente a 

comunicazioni telefoniche in entrata, salvo che possa derivarne un pregiudizio effettivo e 

concreto per lo svolgimento delle investigazioni difensive di cui alla legge 7 dicembre 2000, n. 

397;
g) per ragioni di giustizia, presso uffici giudiziari di ogni ordine e grado o il Consiglio 

superiore della magistratura o altri organi di autogoverno o il Ministero della giustizia;
h) ai sensi dell'articolo 53, fermo restando quanto previsto dalla legge 1 aprile 1981, n. 121.
3. Il Garante, anche su segnalazione dell'interessato, nei casi di cui al comma 2, lettere a), 

b), d), e) ed f) provvede nei modi di cui agli articoli 157, 158 e 159 e, nei casi di cui alle 

lettere c), g) ed h) del medesimo comma, provvede nei modi di cui all'articolo 160.
4. L'esercizio dei diritti di cui all'articolo 7, quando non riguarda dati di carattere 

oggettivo, può avere luogo salvo che concerna la rettificazione o l'integrazione di dati 

personali di tipo valutativo, relativi a giudizi, opinioni o ad altri apprezzamenti di tipo 

soggettivo, nonché l'indicazione di condotte da tenersi o di decisioni in via di assunzione da 

parte del titolare del trattamento.
Art. 9. Modalità di esercizio
1. La richiesta rivolta al titolare o al responsabile può essere trasmessa anche mediante 

lettera raccomandata, telefax o posta elettronica. Il Garante può individuare altro idoneo 

sistema in riferimento a nuove soluzioni tecnologiche. Quando riguarda l'esercizio dei diritti 

di cui all'articolo 7, commi 1 e 2, la richiesta può essere formulata anche oralmente e in tal 

caso è annotata sinteticamente a cura dell'incaricato o del responsabile.
2. Nell'esercizio dei diritti di cui all'articolo 7 l'interessato può conferire, per iscritto, 

delega o procura a persone fisiche, enti, associazioni od organismi. L'interessato può, altresì, 

farsi assistere da una persona di fiducia.
3. I diritti di cui all'articolo 7 riferiti a dati personali concernenti persone decedute 

possono essere esercitati da chi ha un interesse proprio, o agisce a tutela dell'interessato o 

per ragioni familiari meritevoli di protezione.
4. L'identità dell'interessato è verificata sulla base di idonei elementi di valutazione, anche 

mediante atti o documenti disponibili o esibizione o allegazione di copia di un documento di 

riconoscimento. La persona che agisce per conto dell'interessato esibisce o allega copia della 

procura, ovvero della delega sottoscritta in presenza di un incaricato o sottoscritta e 

presentata unitamente a copia fotostatica non autenticata di un documento di riconoscimento 

dell'interessato. Se l'interessato è una persona giuridica, un ente o un'associazione, la 

richiesta è avanzata dalla persona fisica legittimata in base ai rispettivi statuti od 

ordinamenti.
5. La richiesta di cui all'articolo 7, commi 1 e 2, è formulata liberamente e senza costrizioni 

e può essere rinnovata, salva l'esistenza di giustificati motivi, con intervallo non minore di 

novanta giorni.


f) gli estremi identificativi del titolare e, se designati, del rappresentante nel territorio 

dello Stato ai sensi dell'articolo 5 e del responsabile. Quando il titolare ha designato più 

responsabili è indicato almeno uno di essi, indicando il sito della rete di comunicazione o le 

modalità attraverso le quali è conoscibile in modo agevole l'elenco aggiornato dei responsabili. 

Quando è stato designato un responsabile per il riscontro all'interessato in caso di esercizio 

dei diritti di cui all'articolo 7, è indicato tale responsabile.

Titolare del trattamento è:   

MillenniumWeb di Fadda Majla</textarea>
      </p>
      <p>
          <input name="registrati" type="submit" id="registrati" value="Accetto">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="annulla" type="reset" id="annulla" value="Cancella">
      </p>
      </form>      <p>&nbsp;</p></td>
    <tr bordercolor="#000000">
      <td align="center" valign="top" bordercolor="#FFFFFF" background="latbar.jpg" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <tr bordercolor="#000000">
      <td height="26" valign="middle" bordercolor="#FFFFFF" background="downbar.jpg" bgcolor="#FFFFFF"><div align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="index.php">Home</a> - <a href="accedi.php">Accedi</a> - <a href="register.php">Registrati</a> - <a href="listacompleta.php">Lista
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

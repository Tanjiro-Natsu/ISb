<?php

/** @var yii\web\View $this */

$this->title = 'Nascondere';
?>
<body background="https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:white;font-family:Impact;">Nascondere</h1>
    </div>

    <br>
<br>
<div style="width:100%;
 box-shadow:5px 5px 3px #a3a0a1;
 background-color: rgba(255,255,255,0.8);
 vertical-align:middle;
 text-align:center;
 border:ridge;">
 <br><br><br>
    <p>Proteggere i dati personali o renderli non collegabili o non osservabili
. Assicurati che non diventino pubblici o conosciuti.
Questa importante strategia mira alla riservatezza, alla non collegabilità e alla non 
osservabilità dei dati personali. Ciò è in contrasto con la strategia di minimizzazione
 che è finalizzata a decidere esplicitamente se elaborare o meno determinati
dati personali in alcun modo. La protezione adeguata dei dati personali è un atto giuridico.</p>

<br>
<br>
<br>
<h1 style="font-family:Impact;">Strategia</h1>
<br>
<p>La minimizzazione dei dati personali può essere ottenuta raccogliendo dati da
meno persone o raccogliendo meno dati sulle persone. Esistono diverse tattiche
applicabile.</p>
<br>
<h2 style="text-align:left;font-family:Impact;">-Offuscare</h2>
<br>
<p>Impedire la comprensibilità dei dati personali a chi  è sprovvisto
della capacità di decifrarli. Crittografare i dati in modo che diventino 
non leggibili senza la chiave. Hashing dati personali, ad es. creare uno pseudo-
nym.</p>
<br>

<h2 style="text-align:left;font-family:Impact;">-Restringere</h2>
<br>
<p>Limitare l'accesso ai dati personali. Garantire che i dati personali siano propriamente 
 protetti. Imposta una rigorosa politica di controllo degli accessi. Consenti solo 
accesso a coloro che ne hanno realmente bisogno (principio del “bisogno di sapere”). Rendere
difficile condividere o divulgare accidentalmente dati personali.</p>
<br>
<h2 style="text-align:left;font-family:Impact;">-Dissociare</h2>
<br>
<p>Spezza il collegamento e rimuovi la correlazione tra gli eventi,
persone e dati. Rimuovere i dati identificativi diretti.</p>
<br>
<h2 style="text-align:left;font-family:Impact;">-Mescolare</h2>
<br>
<p>Mescolare dati personali per nascondere la fonte o le loro interrelazioni. Nascondi i dati in una “nuvola” di altri dati. Rompi la 
correlazione tra due eventi, ad esempio non rispondendo immediatamente. Raccogli prima alcuni eventi, quindi elaborali in blocco.</p>
<br>
<br>
<br>
<br>
<h5>È possibile nascondere i dati personali proteggendoli (sai che sono lì
ma non puoi accedervi), rendendoli non collegabili (conosci i dati, ma
non a quale persona appartiene), o rendendoli inosservabili (non  sei
nemmeno a conoscenza dell'esistenza dei dati). Solo quest’ultimo aspetto è rilevante
ai dati comportamentali (metadati), come dati sulla posizione o informazioni su
chi comunica con chi.

In genere viene utilizzata una combinazione delle tattiche di cui sopra elencate per nascondere  particolari dati.
</h5>
<br>
<br>
<br>  

<br>

<h1 style="font-family:Impact;">Esempi</h1>

<br>
<br>
<p>L'hashing e la crittografia sono tecniche crittografiche standard
 utilizzate per proteggere i dati personali. Usatete entrambi per i dati trasmessi in 
reti ("dati in transito") come per i dati archiviati da qualche parte ("dati a riposo"),
e prestare la dovuta attenzione anche alla gestione delle chiavi.
Alcuni servizi di comunicazione e servizi di archiviazione cloud utilizzano la modalità end-to-end
crittografata. In questo caso gli utenti concordano, in modo sicuro, le chiavi di accesso da
utilizzare per la crittografia in modo tale che il fornitore di servizi non venga a conoscenza di quest'ultime. Ciò garantisce che il fornitore di servizi non possa decrittografare e leggere
i dati che memorizza o inoltra. I dati sono disponibili solo agli “endpoint”
(ovvero lo smartphone o il laptop) degli utenti stessi.</p>
<br>
<br>
<p style="font-size:160%;">
<a style="color:green;" href="https://www.torproject.org/">Tor</a>
</p>
<p>Il router Onion, rende anonima la navigazione web. Il tuo browser
non si connette più direttamente al web server. Invece la connessione  è
stabilita attraverso tre diversi nodi Tor. Questi 
connessioni sono tutte crittografate. In questo modo il web server, il tuo servizio Internet
provider, qualsiasi nodo intermedio, anche i nodi Tor che usi, non possono sapere
quali siti web stai visitando.
Si noti che in pratica non esistono set di dati completamente anonimi: si possono utilizzare gli elementi di dati conservati per dedurre l'identità della
persona a cui si riferiscono. Pertanto non fare affidamento interamente sull’anonimizzazione.</p>

            <br>
<br>
<p style="font-size:160%;"><a style="color:green;" href="https://privacybydesign.foundation/">Attribute-based credentials (ABCs)</a></p>
<p>Consente una forma di identificazione rispettosa della privacy. Gli attributi sono qualità personali, come nome, età,
peso, reddito, ecc. Usando l'ABC puoi dimostrare di possedere un tale attribbuto, ad esempio che hai più di diciotto anni, senza rivelarne alcuno
altra informazione su di te. Inoltre, gli ABC sono scollegati
: il riutilizzo di una credenziale non può essere rilevato. Se  dimostri cento
volte allo stesso fornitore di servizi che hai più di diciotto anni, 
al fornitore del servizio risulterà che  un centinaio di persone diverse con età maggiore di 
diciotto anni  hanno utilizzato il suo servizio.</p>
<br>
<br>
<div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            <h11 style="text-align:right">The little Blue Book,Jaap-Henk Hoepman,2022.

</h11>
            </div>
          
            </div>

            <br>
<br>
</div>
</div>
</body>

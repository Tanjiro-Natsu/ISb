
<?php

/** @var yii\web\View $this */

$this->title = 'Strip invisible metadata';
?>
<body background="https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:white;font-family:Impact;"><strong>Strip invisible metadata</strong> </h1>
    </div>

    <br>
<br>
<div style="width:100%;
 box-shadow:5px 5px 3px #a3a0a1;
 background-color: rgba(255,255,255,0.8);
 vertical-align:middle;
 text-align:center;
 border:ridge;">
 <br><br>
<h3 style="text-align:left;font-family:Impact;margin:15px;" >Descrizione</h3>
<br>
<p style="text-align:left;margin:15px;">Elimina i metadati potenzialmente sensibili che non sono direttamente visibili all'utente finale.

</p>

<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Privacy by Design Strategies</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="http://localhost:8080/index.php?r=site%2Fminimize">-Minimizzare</a></p>
<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Principi Privacy by Design </h3>
<br>
<p style="text-align:left;margin:30px;">   -Rispetto per l'utente</p>

<p style="text-align:left;margin:30px;">   -Visibilià e trasparenza</p>

<p style="text-align:left;margin:30px;">   -Incorporato nel design</p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Contesto</h3>
<br>
<p style="text-align:left;margin:15px;">Quando un servizio richiede a un utente di importare dati da fonti esterne (ad esempio immagini, tweet, documenti), possono essere trasmessi diversi tipi di metadati. Gli utenti potrebbero non essere a conoscenza dei metadati poiché potrebbero essere generati automaticamente o non direttamente visibili. I servizi potrebbero essere involontariamente responsabili di esporre metadati privati ​​o di andare contro le aspettative degli utenti.</p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Collocazione MVC</h3>
<br>
<p style="text-align:left;margin:30px;">-Controller</p>

<p style="text-align:left;margin:30px;">-Model</p>
<br>         
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">ISO 9241-210 Phase</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cdn.standards.iteh.ai/samples/77520/8cac787a9e1549e1a7ffa0171dfa33e0/ISO-9241-210-2019.pdf">-7.4 Producing design solutions</a></p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Articoli conformità al regolamento GDPR </h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://gdpr-info.eu/art-5-gdpr/">- Article 5 – Principles relating to processing of personal data</a></p>

<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://gdpr-info.eu/art-25-gdpr/">- Article 25 – Data protection by design and by default</a></p>
<br>         
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Categorie OWASP Top Ten</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/A05_2021-Security_Misconfiguration/">-A05:Security Misconfiguration</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/it/A04_2021-Insecure_Design/">-A04:Insecure Design</a></p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">CWE Top 25 Most Dangerous Software Weaknesses OWASP Categories Associated</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/269.html">   -CWE-269: Improper Privilege Management</a></p>
<br>    
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/434.html">   -CWE-434: Unrestricted Upload of File with Dangerous Type</a></p>
<br>        
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Esempi</h3>
<br>
<h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 1</h5>
<br>
<p style="text-align:left;margin:15px;">Twitter.com rimuove i dati EXIF ​​dalle immagini caricate sul proprio servizio di condivisione di immagini. In precedenza si sono verificate numerose violazioni della posizione personale utilizzando i dati EXIF ​​condivisi dai servizi di condivisione di immagini.</p>

<br><h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 2</h5>
<br>
<p style="text-align:left;margin:15px;">Flickr.com è un sistema basato sui metadati, la condivisione dei metadati è una parte importante della comunità di utenti. Flickr.com consente agli utenti di nascondere i propri dati EXIF ​​dalla visualizzazione pubblica e fornisce inoltre un'interfaccia affinché gli utenti possano vedere facilmente se stanno condividendo la posizione come parte del caricamento delle proprie immagini.</p>

<br><br><br></div><br> <br> <br> <br> <br> <br> <br> <br> <br> 
</div>
</body>
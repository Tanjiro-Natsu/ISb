
<?php

/** @var yii\web\View $this */

$this->title = 'Location granularity';
?>
<body background="https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:white;font-family:Impact;"><strong>Location granularity</strong> </h1>
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
<p style="text-align:left;margin:15px;">Supportare la minimizzazione della raccolta e distribuzione dei dati. Importante quando un servizio raccoglie dati sulla posizione da o su un utente oppure trasmette dati sulla posizione di un utente a terze parti.</p>

<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Privacy by Design Strategies</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="http://localhost:8080/index.php?r=site%2Fabstract">-Astrarre</a></p>
<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Principi Privacy by Design </h3>
<br>
<p style="text-align:left;margin:30px;">   -Rispetto per l'utente</p>
<p style="text-align:left;margin:30px;">   -Incorporato nel design</p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Contesto</h3>
<br>
<p style="text-align:left;margin:15px;">Quando un servizio raccoglie dati sulla posizione da o su un utente o trasmette dati sulla posizione di un utente a terze parti.</p>
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
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/it/A01_2021-Broken_Access_Control/">-A01:Broken Access Control</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/A05_2021-Security_Misconfiguration/">-A05:Security Misconfiguration</a></p>

<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">CWE Top 25 Most Dangerous Software Weaknesses OWASP Categories Associated</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/276.html">   -CWE-276: Incorrect Default Permissions</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/22.html">   -CWE-22: Improper Limitation of a Pathname to a Restricted Directory ('Path Traversal')</a></p>    
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/862.html">   -CWE-862: Missing Authorization</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/863.html">   -CWE-863: Incorrect Authorization</a></p>
<br>        
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Esempi</h3>
<br>
<h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 1</h5>
<br>
<p style="text-align:left;margin:15px;">Yahoo! Fire Eagle consente all'utente di fornire informazioni sulla posizione alle applicazioni utilizzando otto diversi "livelli" di granularità nella loro gerarchia: Nessuna informazione, Il più preciso possibile, Codice postale, Quartiere, Città, Regione, Stato e Paese. Fire Eagle richiede specificamente che le applicazioni destinatarie siano scritte per gestire i dati a qualsiasi livello e consente l'aggiornamento della posizione dell'utente a qualsiasi livello di granularità.</p>

<br><h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 2</h5>
<br>
<p style="text-align:left;margin:15px;">Twitter consente agli utenti di taggare un tweet con coordinate esatte, un "luogo" Twitter (una città, un quartiere o un luogo) o entrambi.</p>
<br><h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 3</h5>
<br>
<p style="text-align:left;margin:15px;">Uno dei precursori dell'API di geolocalizzazione del W3C, la funzione sperimentale Geode di Firefox consentiva l'accesso JavaScript alla posizione corrente a quattro diversi livelli di granularità.</p>

<br><br><br></div><br> <br> <br> <br> <br> <br> <br> <br> <br> 
</div>
</body>
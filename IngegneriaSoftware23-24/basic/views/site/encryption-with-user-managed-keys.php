
<?php

/** @var yii\web\View $this */

$this->title = 'Encryption with user managed keys';
?>
<body background="https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:white;font-family:Impact;"><strong>Encryption with user managed keys</strong> </h1>
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
<p style="text-align:left;margin:15px;">Utilizzare la crittografia in modo tale che il fornitore di servizi non possa decrittografare le informazioni dell'utente perché è l'utente a gestire le chiavi.</p>

<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Privacy by Design Strategies</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="http://localhost:8080/index.php?r=site%2Fhide">-Nascondere</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="http://localhost:8080/index.php?r=site%2Fcontrol">-Controllare</a></p>
<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Principi Privacy by Design </h3>
<br>
<p style="text-align:left;margin:30px;">   -Sicurezza End-to-End</p>

<p style="text-align:left;margin:30px;">   -Positive Sum</p>

<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Contesto</h3>
<br>
<p style="text-align:left;margin:15px;">L'utente desidera archiviare o trasferire i propri dati personali tramite un servizio online e desidera proteggere la propria privacy, e in particolare la riservatezza delle proprie informazioni personali. I rischi di accesso non autorizzato possono includere lo stesso fornitore di servizi online o terze parti come i suoi partner, ad esempio per il backup, o la sorveglianza governativa a seconda delle aree geografiche in cui i dati vengono archiviati o trasferiti.</p>
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
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://gdpr-info.eu/art-25-gdpr/">- Article 25 – Data protection by design and by default</a></p>
<br>         
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Categorie OWASP Top Ten</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/A02_2021-Cryptographic_Failures/">-A02:Cryptographic Failures</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/it/A04_2021-Insecure_Design/">-A04:Insecure Design</a></p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">CWE Top 25 Most Dangerous Software Weaknesses OWASP Categories Associated</h3>
<br>
<p style="text-align:left;margin:15px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/269.html">   -CWE-269: Improper Privilege Management</a></p>
<br>    
<p style="text-align:left;margin:15px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/434.html">   -CWE-434: Unrestricted Upload of File with Dangerous Type</a></p>
<br>        
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Esempi</h3>
<br>
<h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 1</h5>
<br>
<p style="text-align:left;margin:15px;">Autorità minima: sistema di backup sicuro off-site con crittografia lato client.</p>

<br><h6 style="text-align:left;font-family:Impact;margin:15px;"> Esempio 2</h5>
<br>
<p style="text-align:left;margin:15px;">LastPass: credenziali crittografate e database di informazioni personali con chiavi di crittografia gestite dall'utente.</p>

<br><br><br></div><br> <br> <br> <br> <br> <br> <br> <br> <br> 
</div>
</body>
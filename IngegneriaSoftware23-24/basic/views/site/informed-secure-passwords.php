
<?php

/** @var yii\web\View $this */

$this->title = 'Informed secure passwords';
?>
<body background="https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg">
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:white;font-family:Impact;"><strong>Informed secure passwords</strong> </h1>
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
<p style="text-align:left;margin:15px;">Garantire che gli utenti mantengano sane abitudini di autenticazione attraverso la consapevolezza e la comprensione.

</p>

<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Privacy by Design Strategies</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="http://localhost:8080/index.php?r=site%2Finform">-Informare</a></p>
<br>        
<br>
<br>

<h3 style="text-align:left;font-family:Impact;margin:15px;">Principi Privacy by Design </h3>
<br>
<p style="text-align:left;margin:30px;">   -Visibilià e trasparenza</p>

<p style="text-align:left;margin:30px;">   -Incorporato nel design</p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Contesto</h3>
<br>
<p style="text-align:left;margin:15px;">Le credenziali sono richieste da numerosi servizi (e prodotti) per garantire che solo gli utenti autenticati e autorizzati abbiano accesso a determinate funzionalità. I controllori in genere forniscono meccanismi di autenticazione sotto forma di nomi utente e password. Sebbene forniscano una forma di sicurezza debole se utilizzati in modo errato, sono più convenienti per gli utenti rispetto a molte alternative meno popolari e più sicure. I controllori spesso cercano di aggirare le carenze delle password incoraggiando gli utenti a cambiarle frequentemente, a utilizzare varianti più forti, a controllarle e a impedirne la divulgazione e il riutilizzo. Tuttavia gli utenti utilizzano molti servizi e utilizzano molte password, scoraggiando così una corretta applicazione. Questa applicazione errata può comportare l'accesso ai dati personali da parte di persone non autorizzate.</p>
<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Collocazione MVC</h3>
<br>
<p style="text-align:left;margin:30px;">-Controller</p>

<p style="text-align:left;margin:30px;">-View</p>
<br>         
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">ISO 9241-210 Phase</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cdn.standards.iteh.ai/samples/77520/8cac787a9e1549e1a7ffa0171dfa33e0/ISO-9241-210-2019.pdf">-7.2 Understanding and specifying the context of use</a></p>
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
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/it/A02_2021-Cryptographic_Failures/">-A02:Cryptographic Failures</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/it/A03_2021-Injection/">-A03:Injection</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://owasp.org/Top10/A05_2021-Security_Misconfiguration/">-A05:Security Misconfiguration</a></p>

<br>            
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">CWE Top 25 Most Dangerous Software Weaknesses OWASP Categories Associated</h3>
<br>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/94.html">   -CWE-94: Improper Control of Generation of Code ('Code Injection')t</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/79.html">   -CWE-79: Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting')</a></p>    
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/89.html">   -CWE-89: Improper Neutralization of Special Elements used in an SQL Command ('SQL Injection')</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/78.html">   - CWE-78: Improper Neutralization of Special Elements used in an OS Command ('OS Command Injection')</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/20.html">   -CWE-20: Improper Input Validation</a></p>
<p style="text-align:left;margin:30px;"><a  style="color:green;" href="https://cwe.mitre.org/data/definitions/77.html">   -CWE-77: Improper Neutralization of Special Elements used in a Command ('Command Injection')</a></p>
<br>        
<br>
<br>
<h3 style="text-align:left;font-family:Impact;margin:15px;">Esempi</h3>
<br>

<p style="text-align:left;margin:15px;">Ogni sistema che prevede l'uso di una password per proteggere i dati personali dovrebbe implementare uno strumento di generazione di password. Questo sistema, oltre a generare password, deve educare gli utenti a creare password sicure.</p>

<br><br><br></div><br> <br> <br> <br> <br> <br> <br> <br> <br> 
</div>
</body>
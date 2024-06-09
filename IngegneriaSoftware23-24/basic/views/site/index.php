<?php

/** @var yii\web\View $this */

$this->title = 'Home';
function runMyFunction() {
    $a='C:\WINDOWS\system32\cmd.exe /c Start C:\xampp\htdocs\IngegneriaSoftware23-24\basic\views\site\runnable\algoritmo';
    $a.=' ';
    $a.="\"";
    $a.=$_GET['mioTesto'];
    $a.="\"";
    exec($a);
    header('Location: http://localhost:8080/index.php?r=site%2Feseguibile');
    die();
  }

  if (isset($_GET['run'])) {
    runMyFunction();
  }

?>

<body background="https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg">
<div class="site-index">


    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="font-family:Impact;color:white;">Welcome to Pkb tool</h1>

        <p class="lead" style="font-family:Impact;color:white;">Inserire qui quello che stai cercando</p>

<form  method="get">
    <input name="mioTesto" type="text"  size="40" maxlength="200" />
<button type="submit" name="run">Cerca</button>
</form>

    </div>

    <div class="body-content">
<br><br><br><br><br><br><br>
<div class="row">
       
            <div class="col-lg-4 mb-3">
            <div style="width:100%;
 box-shadow:5px 5px 3px #a3a0a1;
 background-color:rgb(3, 192, 74,0.5);
 vertical-align:middle;
 text-align:center;
 border:ridge;">
                <h2 style="font-family:Impact;color:white;">Principle of Privacy by Design</h2>

                <p style="font-family:Impact;">In questa sezione verranno spiegati i vari principi della Privacy by Design (PbD)</p>

                <p><a class="btn btn-outline-secondary" style="color:white;" href="http://localhost:8080/index.php?r=site%2Fpbd">PbD Documentation &raquo;</a></p>
            </div>
</div>
            <div class="col-lg-4 mb-3">
            <div style="width:100%;
 box-shadow:5px 5px 3px #a3a0a1;
 background-color:rgb(3, 192, 74,0.5);
 vertical-align:middle;
 text-align:center;
 border:ridge;">
                <h2 style="font-family:Impact;color:white;">Privacy Design Strategies</h2>

                <p style="font-family:Impact;">In questa sezione verranno spiegate le varie strategie adottate per rispettare i vari principi di PbD</p>

                <p><a class="btn btn-outline-secondary" style="color:white;" href="http://localhost:8080/index.php?r=site%2Fpds">Privacy Design Strategies Documentation &raquo;</a></p>
            </div>
</div>
            <div class="col-lg-4">
            <div style="width:100%;
 box-shadow:5px 5px 3px #a3a0a1;
 background-color:rgb(3, 192, 74,0.5);
 vertical-align:middle;
 text-align:center;
 border:ridge;">
                <h2 style="font-family:Impact;color:white;">Privacy Patterns</h2>

                <p style="font-family:Impact;">In questa sezione verranno spiegati i pattern da attuare in base alla Privacy Design Strategies scelta</p>

                <p><a class="btn btn-outline-secondary"  style="color:white;" href="http://localhost:8080/index.php?r=site%2Fpp">Privacy Patterns Documentation &raquo;</a></p>
            </div>
</div>
        </div>

    </div>
    <br><br><br><br>
</div>
</body>
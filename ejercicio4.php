<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<html lang="en">
<head>
    
</head>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">EDAD DE DEPORTISTA</h1>
    <p class="lead">EDADES</p>
  </div>
</div>
<body>
<form method="post" action="ejercicio4.php" />
  <input type="text" name="dia" placeholder="dia" required />
  <input type="text" name="mes" placeholder="mes" required />
  <input type="text" name="anio" placeholder="año" required />
  <input type="submit" value="Mostrar" />
 </form>
    
    </form>




</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html> 
<?php

 

 if(isset($_POST['mes'])){
  
  $dia = $_POST['dia'];
  $mes = $_POST['mes']; 
  $anio = $_POST['anio'];
  
  $diaAC=date("j");
  $mesAC=date("n");
  $anoAC=date("Y");

  if (($mes == $mesAC) && ($dia > $diaAC)) {
  $anoAC=($anoAC-1); }

  if ($mes > $mesAC) {
  $anoAC=($anoAC-1);}
   
  $edad=($anoAC-$anio);
  
  echo "Tiene ".$edad." años";
 }
 
?>
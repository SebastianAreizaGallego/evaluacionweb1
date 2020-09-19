<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<html lang="en">
<head>
    
</head>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">ALMACEN SPRING STEP</h1>
    <p class="lead">CALZADO</p>
  </div>
</div>
<body>

    <form action="index.php" method="POST">

        <div class="form-group">
            <label class="esp" >ingrese cantidad de zapatos</label> <input type="text" name='cantidadzapatos' id='cantidadzapatos'><br>
            <input type="submit" value="Calcular">
        </div>
    </form>




</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html> 
<?php


$cantidadzapatos=$_POST['cantidadzapatos'];
$descuento=0; 
$preciozapatos=300000;
$valortotal=$preciozapatos*$cantidadzapatos;

    if ($cantidadzapatos == 3) 
    {
        $descuento=$valortotal*0.10;

    }else if (($cantidadzapatos > 3) && ($cantidadzapatos <= 8))
    {
        $descuento=$valortotal*0.20;
    } elseif($cantidadzapatos > 8){
            $descuento=$valortotal*0.50;
    }
    $totalcompra=$valortotal-$descuento;
    echo('El valor con el  descuento es de : ' .$descuento.  'El valor de la compra es de :  '  .$totalcompra);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">CALCULADORA PESO CORPORAL GYM</h1>
    <p class="lead">Iindice de masa corporal</p>
  </div>
</div>

<form action="ejercicio2.php" method="POST">

    <div class="form-group">
        <label class=""><b> <p> ingrese su peso :</p> </b>  </label><input type="text" name="peso" class="form-control form-control-lg" ><br>
        <label class=""><b><p> ingrese su altura : </p> </b>  </label><input type="text" name="altura"class="form-control form-control-lg" ><br>
        

        <input type="submit" name="imc" value="calcular">
</div>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html> 
<?php

function resultado ( $altura , $peso , $imc ) {
    $imc = ( $peso / ( $altura * $altura ));
    return  $imc ;
}

$altura =$_POST [ 'altura' ];
$peso = $_POST[ 'peso' ];
$imc = resultado ( $altura , $peso , $imc );

if ( $altura == "" && $peso == "" )
{
    echo ( ' ingresar los dos datos ' );
}
else
{
    switch ( $imc ) {

        case   $imc < 18.5 :
               
                echo ( ' PESO INSUFICIENTE '. $imc . "<br />" );
                break ;
        case   $imc >= 18.5 and $imc <=    24.9 :  
                
                echo ( ' NORMOPESO ' . $imc . "<br />");
                break ;
        case   $imc >= 25 and $imc <= 26.9 :
                
                echo ( '  SOBREPESO DE GRADO 1 '. $imc . "<br />" );
                break ;
        case   $imc >= 27 and $imc <= 29.9 :
               
                echo ( ' SOBREPESO DE GRADO 2 (Preobesidad) '. $imc . "<br />" );
                break ;
        case   $imc >= 30 and $imc <= 34.9 :
                
                echo ( ' OBESIDAD DE TIPO 1 '. $imc . "<br />" );
                break ;
        case   $imc > 35 and $imc < 39.9 :
                
                echo ( 'OBESIDAD DE TIPO 2 '. $imc . "<br />" );
                break ;
        case   $imc > 40 and $imc < 49.9 :
               
                echo ( ' OBESIDAD DE TIPO 3 (Morbida) '. $imc . "<br />" );
                break ;
        case   $imc > 50   :
                
                echo ( 'OBESIDAD DE TIPO IV (Extrema) '. $imc . "<br />" );
                break ;
    }
}



?>

             




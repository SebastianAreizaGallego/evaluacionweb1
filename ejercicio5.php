


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>nomina postobon</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
</nav>
  <h1 class="jumbotron"> nomina empleado postobon</h1>

  <form action="ejercicio5.php" method="POST">
  <div class="form-group">
    <label>nombre del empleado</label><input type="text" name="nombre" readolny class="form-control form-contro-sm" id="">
    <label>cantidad de horas trbajadas semana</label><input type="number" name="numerodehoras" readolny class="form-control form-contro-sm" id="">
    <input type="submit" value="calcular">
  </div>
  <div>
     <?php
     echo(calcularSalario());
     ?>
  </div>
  
</form>

    
</body>
</html>

<?php
function calcularSalario(){
    $horasTrabajadas = $_POST [ 'numerodehoras' ];
    $nombre = $_POST [ 'nombre' ];
    

    
    $horasBase =40;
    $valorBase=20000;
    $valorExtraPorHora=25000;
    $horasExtras;
    $totalNomina;
    $valorHoraExtra;
    
    if(isset($_POST [ 'nombre' ]) and isset($_POST [ 'numerodehoras' ])){
        
        if ( $nombre == '' or $horasTrabajadas == '' ) {
            return  ' ingresar  nombre y la cantidad de horas:' ;
          
        }
        
        if ( $horasTrabajadas <= $horasBase ) {
            $totalNomina  = $valorBase ;
        } else {
            $horasExtras = $horasTrabajadas - $horasBase ;
            $valorHoraExtra =  $horasExtras * $valorExtraPorHora;
            $totalNomina = $valorBase + $valorHoraExtra  ;
        }
        return ' El valor a pagar a ' . $nombre . ' Es la suma semanal de: $ ' . $totalNomina ;
            
    }else{
        return 'porfavor ingrese valores';
    }

}




?>
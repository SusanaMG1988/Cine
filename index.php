<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINEs</title>
</head>
<body>
    <?php 
    
    require_once 'Pelicula.php';
    require_once 'Cine.php';
    require_once 'Butaca.php';
    require_once 'Espectadores.php';
    $peli = new Pelicula("Lo que el código se llevó",120 ,89 , "Pepito Grillo");
    //$cine = new Butaca();
 
    //Crea una función que imprima una tabla html que en cada celda aparezca la fila y la columna de la butaca 
    //la fila y la columna de la butaca 
    function printButacas($c){
        $arrayButacas = $c->getButacas();

    echo "<table>";
    for($i=0; $i < $c->getFilas(); $i++){
        echo "<tr>";
        for($j=0; $j < $c->getLEtra(); $j++){
            $butaca = $arrayButacas;
            echo "<td>{$butaca->getFila()},{$butaca->getLetra()}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>

</body>
</html>
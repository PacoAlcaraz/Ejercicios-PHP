<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php 
function recursividad($a){
    if ($a<20){
        echo "$a\n";
        recursividad($a+1);
    }
}

function recursividad2($a){
    if ($a<20) {
        recursividad2($a+1);
    }
    echo "$a\n";
}
?>

</head>
<body>
    <?php 
    recursividad(17);
    /* funciones recurrentes son las que se llaman a si mismas, en este caso se pinta 17 y llega a recursividad 18, se ejecuta y n
    no termina hasta que terminen todas las llamadas a recursividad
    */ 
    echo "<br>";
    recursividad2(17);
    ?>
    
</body>
</html>





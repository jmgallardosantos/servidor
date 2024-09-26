<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>
</head>
<body>
    Configurar php para que el entorno de ejecucion sea desarrollo y poder ver los mensajes de error.
<?= "hola" ?>
    <p> Este es el resultado del formulario </p>
    <?= 24 ?>
    <?php
 

 /*isset(); si existe
 is_null(); si es null
 empty();  si esta vacio
 < <=  > >= <=> == ===
?? fusion de null;
operador ternario;
?: operador elvis
funcion de manipulacion de cadenas
trim
substr
funciones mb ( multibyte) para manipulacio de caracteres poque no cuenta byte lo que cuenta son caracteres (mb_substr)
$x[i] => mb_substr($x,i,1);
arrays 
arrays numericos
arrays asocitativos


*/
$a = ['a', 'b', 'c', 'd', 'e', 'f',];
    echo $a[2];
$b = ["gato" => "cat", "perro" => "dog"];

echo $b["gato"];

//añadir

$b["caballo"] = "horse";

//eliminar un elemento
unset($a["perro"]);
    
// modificar un elemento

$a["perro"]= "hound";


//añade por el final

$c = [1, 2];
$c[] = 5;

//variables superglobales o arrays superglobales (es lo mismo)  $_GET  $_POST recoger datos del formulario mediante post y get
    ?>

</body>
</html>
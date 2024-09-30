<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php

    $operando = ['+', '-', '*', '/'];

    if (isset($_GET['op1'])) {
        $op1 = $_GET['op1'];
        if (empty($op1) || !is_numeric($op1)) {
            echo "<h2>El primer operando no es correcto.<h2>";
        }
    }
    if (isset($_GET['op2'])) {
        $op2 = $_GET['op2'];
        if (empty($op2) || !is_numeric($op2)) {
            echo "<h2>El segundo operando no es correcto.<h2>";
        }
    }
    if (isset($_GET['op'])) {
        $op = $_GET['op'];
        foreach ($operando as $operandos) {
            if($operandos ===$op){
                $op=$operandos;
            }
        }
        }



    $res = $op1.$op.$op2;
    ?>
    <p>
        La suma de <?= $_GET['op1'] ?> y <?= $_GET['op2'] ?>
        es <?= $res ?>
    </p>
    
</body>
</html>
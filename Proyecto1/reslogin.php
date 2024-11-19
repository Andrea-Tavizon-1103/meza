<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if($usuario=="emma" and $contrasena=="9595"){
        header("Location: Inicio.php");
    }else{
        header("Location: login.php");
    }
    ?>
</body>
</html>
<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: login.php");
}else{

echo "<h1>Bienvenido $usuario</h1>";

echo "<a href='controller/logout.php'>Salir</a>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <br><br>
    <a href="#">Solicitar Vacaciones</a>
    <br>
    <a href="#">Aprobar Vacaciones</a>
</body>
</html>
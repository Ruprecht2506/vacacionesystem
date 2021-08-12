<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'vacaciones';
$num_solicitante=25; 
$fecha_programada= "2020-02-01"; 
$num_aprobador=592;
$num_empleado=779;

$conexion = new mysqli($server, $user, $password, $db);

if($conexion->connect_error){
    die("Conexion Fallida: " . $conexion->connect_error);
}

$sql = "SELECT * FROM usuarios where num_empleado = $num_empleado";
$resultado = mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($resultado)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
  <table>
      <tr>
         <td>Num_empleado</td>
         <td>Password</td>
         <td>Id-autorizador</td> 
      </tr>
      <tr>
          <td><?php echo $mostrar['num_empleado']; ?></td>
          <td><?php echo $mostrar['password']; ?></td>
          <td><?php echo $mostrar['id_autorizador']; ?></td>
      </tr>
      <?php
    }
      ?>
  </table>
</body>
</html>
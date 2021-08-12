<?php 

require_once '../model/loginModel.php';

session_start();

$num_empleado = $_POST['num_empleado'];
$password = $_POST['pass'];

$loginModel = new loginModel();

$resultado = $loginModel->exists($num_empleado,$password);
if($resultado){

    $_SESSION['username']=$num_empleado;
    header('Location: ../dashboard.php');
}else{
    header('Location: ../login.php');
}

?>
<?php

require_once '../model/sol_vacacionesModel.php';

$fecha_programada = '2020-02-01';


$Sol_VacacionesModel= new Sol_VacacionesModel();

$usuario = $Sol_VacacionesModel->getUser(12);

$Sol_VacacionesModel->save( $usuario['num_empleado'],$fecha_programada, $usuario['id_autorizador']);
?>


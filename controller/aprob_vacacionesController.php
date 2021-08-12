<?php
require_once '../model/aprob_vacacionesModel.php';
$Aprob_VacacionesModel= new Aprob_VacacionesModel();

echo $Aprob_VacacionesModel->getAll(592);



?>


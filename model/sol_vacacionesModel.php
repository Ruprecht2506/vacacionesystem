<?php
require_once '../libs/database.php';
require_once '../libs/model.php';

class Sol_VacacionesModel extends Model{

    function __construct(){
        parent::__construct();

    }

    public function save($num_solicitante, $fecha_programada, $num_aprobador){
        try {
     
            $query = $this->prepare("INSERT INTO `sol_vacaciones` (`id_solicitud`, `num_solicitante`, `fecha_programada`, `num_aprobador`, `status`, `descripcion`) VALUES (NULL, :num_solicitante, :fecha_programada, :num_aprobador,'' ,'' )");
            $query->execute([
                'num_solicitante'=>$num_solicitante,
                'fecha_programada'=>$fecha_programada,
                'num_aprobador'=>$num_aprobador
            ]);
            
            
        }catch(PDOException $e){
            error_log('USERMODEL::exists->PDOException' . $e);
            return false;
        }
    }

    public function getUser($id){

        try{
            $query = $this->prepare("SELECT * FROM usuarios WHERE num_empleado = :id");
            $query->execute([
                'id' => $id
            ]);

            $user = $query->fetch(PDO::FETCH_ASSOC);

                
                return $user;

        }catch(PDOException $e){

            error_log('USERMODEL::getId->PDOException' . $e);

        }

    }

}

?>
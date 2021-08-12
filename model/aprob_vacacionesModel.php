<?php
require_once '../libs/database.php';
require_once '../libs/model.php';

class Aprob_VacacionesModel extends Model{

    function __construct(){
        parent::__construct();

    }

    public function getAll($id){

        try{
            $query = $this->prepare("SELECT * FROM usuarios WHERE num_aprobador = :id");
            $query->execute([
                'id' => $id
            ]);
            $coleccion = [];
            $i=0;
            while($user = $query->fetch(PDO::FETCH_ASSOC)){

                $coleccion[$i]=$user;
                $i=$i+1;
            }
            
                
                return $coleccion;

        }catch(PDOException $e){

            error_log('USERMODEL::getId->PDOException' . $e);

        }

    }

}

?>
<?php
require_once '../libs/database.php';
require_once '../libs/model.php';

    class LoginModel extends Model {
        function __construct() {
            parent::__construct();
        }

        public function exists($num_empleado, $password){
            try {
                $query = $this->prepare('SELECT num_empleado FROM usuarios WHERE num_empleado = :num_empleado and password = :password');
                $query->execute([
                    'num_empleado'=>$num_empleado,
                    'password'=>$password
                ]);
                if($query->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }
    
            }catch(PDOException $e){
                error_log('USERMODEL::exists->PDOException' . $e);
                return false;
            }
        }


    }

?>
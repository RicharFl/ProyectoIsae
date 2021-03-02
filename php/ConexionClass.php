<?php 

class ConexionClass{	
    private $host= "localhost:3306";
    private $user= "root";  
    private $password= ""; 
    private $db="Proyecto_Isae_Tikets";
    private $Connect; 
    
            public function __construct (){
                echo $this->host;
                $ConexionString ="mysql:hos=".$this->$host.";dbname=".$this->$db.";charset=utf8";
                //$ConexionString = $this->$host.",".$this->$db;

                try { 
                    //Comenzamos la conexion con la base de datos
                    $this->$Connect =new PDO ($ConexionString,$this->$user,$this->$password);
                    //Nos ayuda a detectar los errores
                    $this->$Connect ->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                } catch (Exception $e) {
                    $this->$Connect = 'Error de Conexion';
                    echo "ERROR: ".$e->getMessage();
                }
            }

}
$conn=new ConexionClass();
<?php

class DataBase {
public $sqlBase;

public function  __construct ($dire)  //declaramos constructor 
{
$this->sqlBase=$dire;
}

public function CrearQuery ($Query)
{
    //echo $Query;
    include '../php/Conexion.php';
    
    $resultado1= mysqli_query($conexion,$Query);  
    //var_dump ($resultado1);
    $fin=mysqli_fetch_array($resultado1);
    // var_dump ($fin);
if ($fin==NULL)
{
    return 'SinRes';
}
else 
    return $fin[0];

}

public function Insertar_Registro ($Query)
{
    //echo $Query;
    include '../php/Conexion.php';
    
    $resultado1=mysqli_query($conexion,$Query);  
    //var_dump ($resultado1);
    // var_dump ($fin);
if (!$resultado1)
{
    return 'SinRes';
}
else 
    return 'Exitoso';

}


}

?>
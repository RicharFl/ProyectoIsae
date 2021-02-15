<?php

class DataBase {
public $sqlBase;

public function  __construct ($dire)  //declaramos constructor 
{
$this->sqlBase=$dire;
}

public function CrearQuery ($Query)
{
    include 'Conexion.php';
    $resultado1=mysqli_query($conexion,$Query);  
    //var_dump ($resultado1);
    $fin=mysqli_fetch_array($resultado1);
var_dump ($fin);
if ($fin[0]='NULL')
{
    return 'SinRes';
}
else 
    return $fin[0];

}


}

?>
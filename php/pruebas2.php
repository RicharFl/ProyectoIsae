<?php

include 'DataBase.php';


$nameCoord='mex';
//echo $nameCoord;

$QUERY="SELECT Nombre FROM Coordinadores
 where Coordinadores.Nombre LIKE '%".$nameCoord."%'";
 //ECHO $QUERY;
$NameCoordinador= new DataBase($QUERY);
$nameres=$NameCoordinador-> CrearQuery ($QUERY);
echo $nameres;


/*

$total = mysqli_num_rows(mysqli_query($conexion,"SELECT Nombre FROM Coordinadores
 where Coordinadores.Nombre LIKE '%".$nameCoord."%'")); //Comprobar si ya está registrado el usuario
echo $total;



$sql="SELECT Nombre FROM Coordinadores where Coordinadores.Nombre LIKE '%".$nameCoord."%'";
 $resultado1=(mysqli_query($conexion,$sql));

 $fin=mysqli_fetch_array($resultado1);
echo $fin ['Nombre'] ;


        
            
         
            
            
            $sql = "insert into Alumnos (IdUserA, Nombre, APaterno, AMaterno, IdCarrera, Semestre, Sexo, Celular, CorreoElectronico) values ('$Boleta1','$Nombres1','$AP1','$AM1','$Carrera1','$Semestre1','$Gen1','$Tel','$Email1')";

            $resultado1=mysqli_query($conexion,$sql);

            if(!$resultado1){
               $var = "Error de registro 2";
                echo "<script> alert('".$var."'); </script>";
                echo '<meta http-equiv="Refresh" content="0;URL=../RegistroA.html">';
             
                
            }else{
                $var = "Registrado exitosamente";
                echo "<script> alert('".$var."'); </script>";   
                echo '<meta http-equiv="Refresh" content="0;URL=../Login.html">';
                
            }
        
   
    
  */  

?>
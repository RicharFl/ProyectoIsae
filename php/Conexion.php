<?php
//PDO PHP. CLASS 
//123456 : pswd

$conexion=mysqli_connect("localhost:3306","root","123456","Proyecto_Isae_Tikets");

if(!$conexion)    
{
    echo '<script type="text/javascript">
    alert("Hubo un error al conectar a la base de datos ");
    </script>;';
   
}
else {
    
 //ECHO 'CORRECTA CONEXsION';
}

?>
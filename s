[33mcommit 3e3a7b8dc2e1b63a9f5fe9aed1dda11e5ae3d87a[m[33m ([m[1;36mHEAD -> [m[1;32mmain[m[33m, [m[1;31morigin/main[m[33m, [m[1;31morigin/HEAD[m[33m)[m
Author: Richarfl <ricardo_6_11@hotmail.com>
Date:   Sun Mar 7 11:12:59 2021 -0600

    Instale Nuevamente Todo

[1mdiff --git a/php/Pruebas.php b/php/Pruebas.php[m
[1mindex 1d79a90..dc5be0a 100644[m
[1m--- a/php/Pruebas.php[m
[1m+++ b/php/Pruebas.php[m
[36m@@ -1,57 +1,61 @@[m
[31m-[m
[31m-<?php[m
[31m-include 'Conexion.php';[m
[31m-[m
[31m-[m
[31m-$nameCoord='J';[m
[31m-//echo $nameCoord;[m
[31m-$valor_a_buscar='Soporte ';[m
[31m-$valor_de_reemplazo ='';[m
[31m-$string='Soporte PROSPERA';[m
[31m-[m
[31m-$Numevo=str_replace ( $valor_a_buscar , $valor_de_reemplazo , $string  );[m
[31m-var_dump ($Numevo);[m
[31m-$mes=date("m");[m
[31m-$mes=(int ) $mes;[m
[31m-var_dump ($mes);[m
[31m-[m
[31m-/*[m
[31m-hola como estan. [m
[31m-[m
[31m-$total = mysqli_num_rows(mysqli_query($conexion,"SELECT Nombre FROM Coordinadores[m
[31m- where Coordinadores.Nombre LIKE '%".$nameCoord."%'")); //Comprobar si ya está registrado el usuario[m
[31m-echo $total;[m
[31m-[m
[31m-[m
[31m-[m
[31m-$sql="select IDCategoria from Categoria where Tipo like "%BACLOG%";[m
[31m-select  IDPagos from Pagos where DescPagos LIKE "%PA%" ;";[m
[31m- $resultado1=(mysqli_query($conexion,$sql));[m
[31m-[m
[31m- $fin=mysqli_fetch_array($resultado1);[m
[31m-echo $fin ['Nombre'] ;*/[m
[31m-/*[m
[31m-[m
[31m-        [m
[31m-            [m
[31m-         [m
[31m-            [m
[31m-            [m
[31m-            $sql = "insert into Alumnos (IdUserA, Nombre, APaterno, AMaterno, IdCarrera, Semestre, Sexo, Celular, CorreoElectronico) values ('$Boleta1','$Nombres1','$AP1','$AM1','$Carrera1','$Semestre1','$Gen1','$Tel','$Email1')";[m
[31m-[m
[31m-            $resultado1=mysqli_query($conexion,$sql);[m
[31m-[m
[31m-            if(!$resultado1){[m
[31m-               $var = "Error de registro 2";[m
[31m-                echo "<script> alert('".$var."'); </script>";[m
[31m-                echo '<meta http-equiv="Refresh" content="0;URL=../RegistroA.html">';[m
[31m-             [m
[31m-                [m
[31m-            }else{[m
[31m-                $var = "Registrado exitosamente";[m
[31m-                echo "<script> alert('".$var."'); </script>";   [m
[31m-                echo '<meta http-equiv="Refresh" content="0;URL=../Login.html">';[m
[31m-                [m
[31m-            }[m
[31m-        [m
[31m-   [m
\ No newline at end of file[m
[32m+[m
[32m+[m[32m<?php[m
[32m+[m[32minclude 'Conexion.php';[m
[32m+[m
[32m+[m
[32m+[m[32m$nameCoord='J';[m
[32m+[m[32m//echo $nameCoord;[m
[32m+[m[32m$valor_a_buscar='Soporte ';[m
[32m+[m[32m$valor_de_reemplazo ='';[m
[32m+[m[32m$string='Soporte PROSPERA';[m
[32m+[m
[32m+[m[32m$Numevo=str_replace ( $valor_a_buscar , $valor_de_reemplazo , $string  );[m
[32m+[m[32mvar_dump ($Numevo);[m
[32m+[m[32m$mes=date("m");[m
[32m+[m[32m$mes=(int ) $mes;[m
[32m+[m[32mvar_dump ($mes);[m
[32m+[m
[32m+[m[32m/*[m
[32m+[m[32mhola como estan.[m[41m [m
[32m+[m
[32m+[m[32m$total = mysqli_num_rows(mysqli_query($conexion,"SELECT Nombre FROM Coordinadores[m
[32m+[m[32m where Coordinadores.Nombre LIKE '%".$nameCoord."%'")); //Comprobar si ya está registrado el usuario[m
[32m+[m[32mecho $total;[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m$sql="select IDCategoria from Categoria where Tipo like "%BACLOG%";[m
[32m+[m[32mselect  IDPagos from Pagos where DescPagos LIKE "%PA%" ;";[m
[32m+[m[32m $resultado1=(mysqli_query($conexion,$sql));[m
[32m+[m
[32m+[m[32m $fin=mysqli_fetch_array($resultado1);[m
[32m+[m[32mecho $fin ['Nombre'] ;*/[m
[32m+[m[32m/*[m
[32m+[m
[32m+[m[41m        [m
[32m+[m[41m            [m
[32m+[m[41m         [m
[32m+[m[41m            [m
[32m+[m[41m            [m
[32m+[m[32m            $sql = "insert into Alumnos (IdUserA, Nombre, APaterno, AMaterno, IdCarrera, Semestre, Sexo, Celular, CorreoElectronico) values ('$Boleta1','$Nombres1','$AP1','$AM1','$Carrera1','$Semestre1','$Gen1','$Tel','$Email1')";[m
[32m+[m
[32m+[m[32m            $resultado1=mysqli_query($conexion,$sql);[m
[32m+[m
[32m+[m[32m            if(!$resultado1){[m
[32m+[m[32m               $var = "Error de registro 2";[m
[32m+[m[32m                echo "<script> alert('".$var."'); </script>";[m
[32m+[m[32m                echo '<meta http-equiv="Refresh" content="0;URL=../RegistroA.html">';[m
[32m+[m[41m             [m
[32m+[m[41m                [m
[32m+[m[32m            }else{[m
[32m+[m[32m                $var = "Registrado exitosamente";[m
[32m+[m[32m                echo "<script> alert('".$var."'); </script>";[m[41m   [m
[32m+[m[32m                echo '<meta http-equiv="Refresh" content="0;URL=../Login.html">';[m
[32m+[m[41m                [m
[32m+[m[32m            }[m
[32m+[m[41m        [m
[32m+[m[41m   [m
[32m+[m[41m    [m
[32m+[m[32m  */[m[41m  [m
[32m+[m
[32m+[m[32m?>[m
\ No newline at end of file[m

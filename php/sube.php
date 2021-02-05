<?php 

require 'Conexion.php';

 require '../lib/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

	

//print_r($_FILES); //me da los datos de la estructura del Array.

$nameFiles=$_FILES['ArchivoExcelCoor']['name'];
$Save=$_FILES['ArchivoExcelCoor']['tmp_name'];

$save_new='../files/ArchiCoord';
if (!file_exists($save_new))
{
mkdir($save_new,0777,true); // crera las carpetas si no existen 

    if  (!file_exists($save_new))
        {
            if (move_uploaded_file($Save,$save_new.'/'.$nameFiles))
                {
                     echo "Archivo Subido con exito";
            }else {
                    echo "Error al subir el Archivo";
                }

        }   
}else { 
if (move_uploaded_file($Save,$save_new.'/'.$nameFiles))
                {
                    echo "Archivo Subido con exito";
                    '<br>';
                     $validar=1;
                     //var_dump ($validar);
            }else {
                    echo "Error al subir el Archivo";
                }
}

$directorio= $save_new.'/'.$nameFiles ; //directorio con el nombre del archivo 

	// Cargo la hoja de cálculo
	$objPHPExcel  = PHPExcel_IOFactory :: load($directorio);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	echo $numRows;
	echo '<table 
	border=1><tr>
		<td>num</td>
		<td>CORRDINADOR</td>
		<td>CATEGORIA</td>
		<td>PAGOS</td>
		<td>SEGUIMIENTO POR CLIENTE</td>
		<td>CORTE </td>
		<td>ID de la incidencia*+</td>
		<td>Fecha de última modificación</td>
		<td>ultima </td>
		<td>CI+</td>
		<td>Estado </td>
		<td>Comentario</td>
		<td>DETALLE</td>
		<td>SOLICITUD</td>
		<td>guia</td>
		<td>STATUS</td>
		<td>guia de retorno</td>
		<td>STATUS DE ENTREGA</td>
		<td>Estado o provincia</td>
		<td>Ciudad</td>
		<td>Empresa</td>
		<td>Resumen*</td>
		<td>Tipo de ticket</td>
		<td>Nombre+</td>
		<td>Apellidos+</td>
		<td>Grupo asignado*+</td>
		<td>Usuario asignado+</td>
		<td>Fecha de Atención</td>
		<td>Fecha de Resolución</td>
		<td>Fecha de cierre</td>
		<td>Fecha de notificación+</td>
		<td>Fecha de respuesta+</td>
		<td>Fecha y hora de resolución requeridas</td>
		<td>Teléfono del cliente*+</td>
		<td>Calle</td>
		<td>Estado SLM en tiempo real</td>
		<td>TABLA </td>

	</tr>';
	
	for ($i =2 ; $i <= $numRows; $i ++)
	{
        $A=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        
		$B=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$C=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$D=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$E=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		$F=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		$G=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		$H=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		$I=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		$J=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		$K=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
		$L=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		$M=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
		$N=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		$O=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
		$P=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		$Q=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		$R=$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
		$S=$objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
		$T=$objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
		$U=$objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
		$V=$objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
		$W=$objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
		$X=$objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
		$Y=$objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
		$Z=$objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
		$AA=$objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
		$AB=$objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
		$AC=$objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
		$AD=$objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
		$AE=$objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
		$AF=$objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
		$AG=$objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
		$AH=$objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
		$AI=$objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
		$AJ=$objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
		
echo '<tr>';
echo '<td>'.$i.'</td>';
echo '<td>'.$A.'</td>';
echo '<td>'.$B.'</td>';
echo '<td>'.$C.'</td>';
echo '<td>'.$D.'</td>';
echo '<td>'.$E.'</td>';
echo '<td>'.$F.'</td>';
echo '<td>'.$G.'</td>';
echo '<td>'.$H.'</td>';
echo '<td>'.$I.'</td>';
echo '<td>'.$J.'</td>';
echo '<td>'.$K.'</td>';
echo '<td>'.$L.'</td>';
echo '<td>'.$M.'</td>';
echo '<td>'.$N.'</td>';
echo '<td>'.$O.'</td>';
echo '<td>'.$P.'</td>';
echo '<td>'.$Q.'</td>';
echo '<td>'.$R.'</td>';
echo '<td>'.$S.'</td>';
echo '<td>'.$T.'</td>';
echo '<td>'.$U.'</td>';
echo '<td>'.$V.'</td>';
echo '<td>'.$W.'</td>';
echo '<td>'.$X.'</td>';
echo '<td>'.$Y.'</td>';
echo '<td>'.$Z.'</td>';
echo '<td>'.$AA.'</td>';
echo '<td>'.$AB.'</td>';
echo '<td>'.$AC.'</td>';
echo '<td>'.$AD.'</td>';
echo '<td>'.$AE.'</td>';
echo '<td>'.$AF.'</td>';
echo '<td>'.$AG.'</td>';
echo '<td>'.$AH.'</td>';
echo '<td>'.$AI.'</td>';
echo '<td>'.$AJ.'</td>';



echo '</tr>';
	}

	echo '</table>'

















?>
<?php 


 require 'Conexion.php';

 echo 'Todo Bien ';
 require 'PHPExcel/IOFactory.php';

 $directorio='BaseGeneralSubir/';
 $nameFiles='BaseGeneral.xlsx';
 $file=$directorio.$nameFiles;


  $nombreArchivo ='BaseGeneral.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($file);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
?>




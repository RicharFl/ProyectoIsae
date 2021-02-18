<?php 


 require 'Conexion.php';
 include 'GeneraArray.php';
 include 'DataBase.php';
 require '../lib/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

 $directorio='../files/ArchiCoord/nom.xlsx'; //directorio con el nombre del archivo 



	// Cargo la hoja de cálculo
	$objPHPExcel  = PHPExcel_IOFactory :: load($directorio);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow(); //NUMERO DE FILAS 
	$LetColum = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn(); // LETRA DE LA ULTIMA COLUMNA
	// Se calcula el numero de Columna 
	$Valo=new GeneraArray ($LetColum); //Saber el numero de comulnas del excel 
	$numCols=$Valo ->Num_Colum($LetColum);
	//Se inicializa el metodo para nuestras Consultas con la base de Datos
	$Query_Con= new DataBase('Inicio');

	$i=2;

	//for ($i =2 ; $i <= $numRows; $i ++)
	//{

		$A=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(); //Coordinador
		$A=str_split($A,3);
		$A=$A[0];
		$SQL="SELECT Nombre FROM Coordinadores where Coordinadores.Nombre LIKE '%".$A."%'";
        $nameres=$Query_Con-> CrearQuery ($SQL);
		
			
		$B=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$B=str_split($B,3);
		$B=$B[0];
		$SQL="SELECT IDCategoria FROM Categoria where Categoria.Tipo LIKE '%".$B."%'";
		$B=$Query_Con-> CrearQuery ($SQL);
		

		$C=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$C=str_split($C,3);
		$C=$C[0];	
		$SQL="SELECT IDPagos FROM Pagos where DescPagos LIKE '%".$C."%'";
		$C=$Query_Con-> CrearQuery ($SQL);
	

		$D=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$D=str_split($D,2);
		$D=$D[0];
		$SQL="SELECT IDSeClien FROM SegPorClien where DescSegClient LIKE '%".$D."%'";
		$D=$Query_Con-> CrearQuery ($SQL);

		
		$F=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(); // Dato importante IDgENERAL 

		$G=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
	
		$mes=['/01/','/02/','/03/','/04/','/05/','/06/',
		'/07/','/08/','/09/','/10/','/11/','/12/'];
		//Se el caracter del mes en la cadena que nos da la lectura de la celda. 
		$pos1[0] = stripos($G, $mes[0]); 
		$pos1[1] = stripos($G, $mes[1]);	
		$pos1[2] = stripos($G, $mes[2]); 
		$pos1[3] = stripos($G, $mes[3]);
		$pos1[4] = stripos($G, $mes[4]); 
		$pos1[5] = stripos($G, $mes[5]);
		$pos1[6] = stripos($G, $mes[6]); 
		$pos1[7] = stripos($G, $mes[7]);
		$pos1[8] = stripos($G, $mes[8]); 
		$pos1[9] = stripos($G, $mes[9]);
		$pos1[10] = stripos($G, $mes[10]); 
		$pos1[11] = stripos($G, $mes[11]);
		
           //pos1 -> retorna un falso si no lo encuentra y un int con la posicion donde lo encuentra 
		if ($pos1[0] !== false) {$CorMen=1;
		}else if ($pos1[1] !== false){$CorMen=2;
		}else if ($pos1[2] !== false){$CorMen=3;
		}else if ($pos1[3] !== false){$CorMen=4;
		}else if ($pos1[4] !== false){$CorMen=5;
		}else if ($pos1[5] !== false){$CorMen=6;
		}else if ($pos1[6] !== false){$CorMen=7;
		}else if ($pos1[7] !== false){$CorMen=8;
		}else if ($pos1[8] !== false){$CorMen=9;
		}else if ($pos1[9] !== false){$CorMen=10;
		}else if ($pos1[10] !== false){$CorMen=11;
		}else if ($pos1[11] !== false){$CorMen=12;
		}
	//	echo $CorMen;
		// ULTIMO EN MODIFICAR 
		$H=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		$H=str_split($H,4);
		$H=$H[0];
		$SQL="SELECT IDUltMod FROM UltModificador where NombreMod LIKE '%".$H."%'";
		$D=$Query_Con-> CrearQuery ($SQL);
			//CI+
		$I=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		// Estado de Tiket 	
		$J=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		$J=str_split($J,4);
		$J=$J[0];
		$SQL="SELECT IDStatusTiket FROM StatusTiket where TipoStatus LIKE '%".$J."%'";
		$J=$Query_Con-> CrearQuery ($SQL);
				//Comentario
		$K=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
				// DETALLE
		$L=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		//SOLICITUD
		$M=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
		//guia
		$N=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		//STATUS
		$O=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
		//guia de retorno
		$P=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		//STATUS DE ENTREGA
		$Q=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		//Estado o provincia
		$R=$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
		$R=str_split($R,4);
		$R=$R[0];
		$SQL="SELECT IDEstadosRepu FROM EstadosRepu where NombreEstado LIKE '%".$R."%'";
		$R=$Query_Con-> CrearQuery ($SQL);
		//Ciudad
		$S=$objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
		//Empresa
		$T=$objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
		$T=str_split($T,4);
		$T=$T[0];
		$SQL="SELECT IDCuenta FROM Cuenta where NombreCuenta LIKE '%".$T."%'";
		$T=$Query_Con-> CrearQuery ($SQL);
		//Resumen*
		$U=$objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
		//Tipo de ticket
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
	/*	

	// E-> FECHA CORTE DEPENDE DE LA FECHA DE NOTIFICAICON.
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



echo '</tr>';*/
	//}

	//echo '</table>'
	
?>




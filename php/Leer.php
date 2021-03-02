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
	$exito=1;
	$error=1;
	$time_sleep=1;
	set_time_limit(300); 
	for ($i =2 ; $i <= $numRows; $i ++)
	{

		//CATEGORIA

		$B=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		if ($B==NULL) $B='-';
			$B=str_split($B,3);
			$B=$B[0];
			$SQL="SELECT IDCategoria FROM Categoria where Categoria.Tipo LIKE '%".$B."%'";
			$B=$Query_Con-> CrearQuery ($SQL);
			$B=(int)$B;
			//PAGOS

		$C=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		if ($C==NULL) $C='-';
			$C=str_split($C,3);
			$C=$C[0];	
			$SQL="SELECT IDPagos FROM Pagos where DescPagos LIKE '%".$C."%'";
			$C=$Query_Con-> CrearQuery ($SQL);
			$C=(int)$C;
			//SEGUIMIENTO POR CLIENTE
		$D=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		if ($D==NULL) $D='-';
			$D=str_split($D,2);
			$D=$D[0];
			$SQL="SELECT IDSeClien FROM SegPorClien where DescSegClient LIKE '%".$D."%'";
			$D=$Query_Con-> CrearQuery ($SQL);
			$D=(int)$D;
			//CORTE 
		$F=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(); // Dato importante IDgENERAL 
		if ($F==NULL) $F='-';
		$G=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		if ($G==NULL) $G='-';
		
		// ULTIMO EN MODIFICAR 
		$H=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		if ($H==NULL) $H='-';
			$H=str_split($H,4);
			$H=$H[0];
			$SQL="SELECT IDUltMod FROM UltModificador where NombreMod LIKE '%".$H."%'";
			$H=$Query_Con-> CrearQuery ($SQL);
			$H=(int)$H;
			//CI+
		$I=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		if ($I==NULL) $I='-';
		// Estado de Tiket 	
		$J=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		if ($J==NULL) $J='-';
			$J=str_split($J,4);
			$J=$J[0];
			$SQL="SELECT IDStatusTiket FROM StatusTiket where TipoStatus LIKE '%".$J."%'";
			$J=$Query_Con-> CrearQuery ($SQL);
			$J=(int)$J;
				//Comentario
		$K=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
		if ($K==NULL) $K='-';
				// DETALLE
		$L=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		if ($L==NULL) $L='-';
		//SOLICITUD
		$M=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
		if ($M==NULL) $M='-';
		//guia
		$N=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		if ($N==NULL) $N='-';
		//STATUS
		$O=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
		if ($O==NULL) $O='-';
		//guia de retorno
		$P=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		//STATUS DE ENTREGA
		$Q=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		if ($Q==NULL) $Q='-';
		//Estado o provincia
		$R=$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
		if ($R==NULL) $R='-';
			$R=str_split($R,4);
			$R=$R[0];
			$SQL="SELECT IDEstadosRepu FROM EstadosRepu where NombreEstado LIKE '%".$R."%'";
			$R=$Query_Con-> CrearQuery ($SQL);
			$R=(int)$R;
			$SQL="SELECT IDZonEstaEs FROM EstadosRepu where IDEstadosRepu = $R ";
			$A=$Query_Con-> CrearQuery ($SQL);
			$A=(int)$A;
		//Ciudad
		$S=$objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
		if ($S==NULL) $S='-';
		//Empresa
		$T=$objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
		if ($T==NULL) $T='-';
			$T=str_split($T,4);
			$T=$T[0];
			$SQL="SELECT IDCuenta FROM Cuenta where NombreCuenta LIKE '%".$T."%'";
			$T=$Query_Con-> CrearQuery ($SQL);
			$T=(int)$T;
		//Resumen*
		$U=$objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
		if ($U==NULL) $U='-';
		//Tipo de ticket
		$V=$objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
		if ($V==NULL) $V='-';
		
			$V=str_split($V,4);
			
			$V=$V[0];	
			$SQL="SELECT IDTypeTiket FROM TypeTiket where TypeTikets LIKE '%".$V."%'";
			$V=$Query_Con-> CrearQuery ($SQL);
			$V=(int)$V;
		//Nombre+
		$W=$objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
		if ($W==NULL) $W='-';
		//Apellidos+
		$X=$objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
		if ($X==NULL) $X='-';
		//Grupo asignado*+
		$Y=$objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
		if ($Y==NULL) $Y='-';
			$valor_a_buscar='Soporte ';
			$valor_de_reemplazo ='';
			$Y=str_replace ( $valor_a_buscar , $valor_de_reemplazo , $Y); //Resplaso el strig 
			$Y=str_split($Y,4);
			$Y=$Y[0];
			$SQL="SELECT IDGrupoAsig FROM GrupoAsig where NombreGrup LIKE '%".$Y."%'";
			$Y=$Query_Con-> CrearQuery ($SQL);
			$Y=(int)$Y;
			
		//Usuario asignado+
		$Z=$objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
		if ($Z==NULL) $Z='-';
		//Fecha de Atención
		$AA=$objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
		if ($AA==NULL) $AA='-';
		//Fecha de Resolución
		$AB=$objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
		if ($AB==NULL) $AB='-';
		//Fecha de cierre
		$AC=$objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
		if ($AC==NULL) $AC='-';
		//Fecha de notificación+
		$AD=$objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
		if ($AD==NULL) {
			$AD='-'; 
			$CorMen=date("m");
			$CorMen=(int ) $CorMen;}
else {
	$mes=['/01/','/02/','/03/','/04/','/05/','/06/',
	'/07/','/08/','/09/','/10/','/11/','/12/'];
	//Se el caracter del mes en la cadena que nos da la lectura de la celda. 
	$pos1[0] = stripos($AD, $mes[0]); 
	$pos1[1] = stripos($AD, $mes[1]);	
	$pos1[2] = stripos($AD, $mes[2]); 
	$pos1[3] = stripos($AD, $mes[3]);
	$pos1[4] = stripos($AD, $mes[4]); 
	$pos1[5] = stripos($AD, $mes[5]);
	$pos1[6] = stripos($AD, $mes[6]); 
	$pos1[7] = stripos($AD, $mes[7]);
	$pos1[8] = stripos($AD, $mes[8]); 
	$pos1[9] = stripos($AD, $mes[9]);
	$pos1[10] = stripos($AD, $mes[10]); 
	$pos1[11] = stripos($AD, $mes[11]);
	
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
	# code...
}

		//Fecha de respuesta+
		$AE=$objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
		if ($AE==NULL) $AE='-';
		//Fecha y hora de resolución requeridas
		$AF=$objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
		if ($AF==NULL) $AF='-';
		//Teléfono del cliente*+
		$AG=$objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
		if ($AG==NULL) $AG='-';
		//Calle
		$AH=$objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
		if ($AH==NULL) $AH='-';
		//Estado SLM en tiempo real
		$AI=$objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
		if ($AI==NULL) $AI='-';
		$AI=str_split($AI,5);
		$AI=$AI[0];	
		$SQL="SELECT IDEstadoLMS FROM EstadoLMS where DesEstLMS LIKE '%".$AI."%'";
		$AI=$Query_Con-> CrearQuery ($SQL);
		$AI=(int)$AI;
		//TABLA 
		$AJ=$objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
		if ($AJ==NULL) $AJ='-';
		$AJ=str_split($AJ,3);
		$AJ=$AJ[0];	
		$SQL="SELECT IDTabla FROM Tabla where DesTabla LIKE '%".$AJ."%'";
		$AJ=$Query_Con-> CrearQuery ($SQL);
		$AJ=(int)$AJ;
			/*
		var_dump ($A);echo "<br><br>";
		var_dump ($B);echo "<br><br>";
		var_dump ($C);echo "<br><br>";
		var_dump ($D);echo "<br><br>";
		var_dump ($CorMen);echo "<br><br>";
		var_dump ($F);echo "<br><br>";
		var_dump ($G);echo "<br><br>";
		var_dump ($H);echo "<br><br>";
		var_dump ($I);echo "<br><br>";
		var_dump ($J);echo "<br><br>";
		var_dump ($K);echo "<br><br>";
		var_dump ($L);echo "<br><br>";
		var_dump ($M);echo "<br><br>";
		var_dump ($N);echo "<br><br>";
		var_dump ($O);echo "<br><br>";
		var_dump ($P);echo "<br><br>";
		var_dump ($Q);echo "<br><br>";
		var_dump ($R);echo "<br><br>";
		var_dump ($S);echo "<br><br>";
		var_dump ($T);echo "<br><br>";
		var_dump ($U);echo "<br><br>";
		var_dump ($V);echo "<br><br>";
		var_dump ($W);echo "<br><br>";
		var_dump ($X);echo "<br><br>";
		var_dump ($Y);echo "<br><br>";
		var_dump ($Z);echo "<br><br>";
		var_dump ($AA);echo "<br><br>";
		var_dump ($AB);echo "<br><br>";
		var_dump ($AC);echo "<br><br>";
		var_dump ($AD);echo "<br><br>";
		var_dump ($AE);echo "<br><br>";
		var_dump ($AF);echo "<br><br>";
		var_dump ($AG);echo "<br><br>";
		var_dump ($AH);echo "<br><br>";
		var_dump ($AI);echo "<br><br>";
		var_dump ($AJ);echo "<br><br>";
		
		*/
 			/* ------>>>> insercion completa <<<<<------- */
					 $AR='SIN ASIGNAR';
					 
			 $SQL="INSERT INTO BaseGeneral (IDCoordinadorBG, IDCategoriaBG, IDPagosBG, IDSeClienBG, IDCorteMesBG, IDIncidente, UltFechaModi, IDUltModBG, CL, IDStatusTiketBG, Comentarios, Detalles, SoliComponente, GuiaEnvio, StaGuia, GuiaRetorno, StatusEntrega, IDEstadosRepuBG, Ciudad, IDCuentaBG, Resumen, IDTypeTiketBG, NombreBG, ApellidoBG, IDGrupoAsigBG, Usuario, FecAtencion, FecSolucion, FecCierre, FecNotificacion, FecRespuesta, FecSoluRequerimiento, TelClient, Calle, IDEstadoLMSBG, IDTablaBG, AsigancionTec) VALUES ('$A','$B','$C','$D','$CorMen','$F','$G','$H','$I','$J','$K','$L','$M','$N','$O','$P','$Q','$R','$S','$T','$U','$V','$W','$X','$Y','$Z','$AA','$AB','$AC','$AD','$AE','$AF','$AG','$AH','$AI','$AJ','$AR')";
			
				 
		
			
			$resultado1= $Query_Con->Insertar_Registro ($SQL);  
           		if ($resultado1=='Exitoso')
				   {
					echo "<br> iteracion --- $i  numero de exitos es: $exito ";
					$exito++; 
				   }
				   else{
					echo "<br> iteracion --- $i  numero de Errores es:  $error ";
					$error++; 
				   }
      $time_sleep ++;
	  if ($time_sleep==100)
	  {
		sleep(2);
		$time_sleep=1;
	  }
	 

	}

	

	//echo '</table>'
	
?>




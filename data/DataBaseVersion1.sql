drop database if exists Proyecto_Isae_Tikets;
create database Proyecto_Isae_Tikets;
use Proyecto_Isae_Tikets;

DROP TABLE IF EXISTS  Coordinadores;
create table Coordinadores(
		IDCoordinador  int AUTO_INCREMENT ,
		Nombre varchar(40) not null,
        tel varchar(10) not null, 
		primary key(IDCoordinador)
        );


DROP TABLE IF EXISTS  Categoria;
create table Categoria(
		IDCategoria  int AUTO_INCREMENT,
		Tipo varchar(40) not null,
		primary key(IDCategoria)
        );
DROP TABLE IF EXISTS  Pagos;
create table Pagos(
		IDPagos int AUTO_INCREMENT,
		DescPagos varchar(40) not null,
		primary key(IDPagos)
        );
DROP TABLE IF EXISTS  SegPorClien;
create table SegPorClien(
		IDSeClien int AUTO_INCREMENT ,
		DescSegClient varchar(2) not null,
		primary key(IDSeClien)
        );
 DROP TABLE IF EXISTS  CorteMes;       
create table CorteMes(
		IDCorteMes int AUTO_INCREMENT ,
		Mes varchar(11) not null,
		primary key(IDCorteMes)
        );
        
 DROP TABLE IF EXISTS  StatusTiket;             
create table StatusTiket(
		IDStatusTiket int AUTO_INCREMENT ,
		TipoStatus varchar(20) not null,
		primary key(IDStatusTiket)
        );
       DROP TABLE IF EXISTS  ZonaEstados;   
create table ZonaEstados(
		IDZonEsta int AUTO_INCREMENT,
		Nombre varchar(20) not null,
		primary key(IDZonEsta)
        );
        
 DROP TABLE IF EXISTS  EstadosRepu;    
create table EstadosRepu(
		IDEstadosRepu int AUTO_INCREMENT ,
		NombreEstado varchar(20) not null,
        IDZonEstaEs int not null,
		primary key(IDEstadosRepu),
  foreign key(IDZonEstaEs) references ZonaEstados(IDZonEsta) on delete cascade on update cascade		
        );
        
 DROP TABLE IF EXISTS  Cuenta;    
create table Cuenta(
		IDCuenta int AUTO_INCREMENT ,
		NombreCuenta varchar(20) not null,
		primary key(IDCuenta)	
        );
 DROP TABLE IF EXISTS  TypeTiket;    
create table TypeTiket(
		IDTypeTiket int AUTO_INCREMENT ,
		TypeTikets varchar(20) not null,
		primary key(IDTypeTiket)	
        );
 DROP TABLE IF EXISTS  UltModificador;    
create table UltModificador(
		IDUltMod int AUTO_INCREMENT ,
		NombreMod varchar(20) not null,
		primary key(IDUltMod)	
        );
         DROP TABLE IF EXISTS  GrupoAsig;    
create table GrupoAsig(
		IDGrupoAsig int AUTO_INCREMENT ,
		NombreGrup varchar(35) not null,
		primary key(IDGrupoAsig)	
        );
DROP TABLE IF EXISTS  EstadoLMS;    
create table EstadoLMS(
		IDEstadoLMS int AUTO_INCREMENT ,
		DesEstLMS varchar(45) not null,
		primary key(IDEstadoLMS)	
        );
     DROP TABLE IF EXISTS  Tabla;       
	create table Tabla(
		IDTabla int AUTO_INCREMENT ,
		DesTabla varchar(25) not null,
		primary key(IDTabla)	
        );

  DROP TABLE IF EXISTS  BaseGeneral;  
	create table BaseGeneral(
		IDCoordinadorBG int  ,
        IDCategoriaBG int,
		IDPagosBG int ,
		IDSeClienBG int , 
        IDCorteMesBG int , 
		IDIncidente varchar (9) not null,  
        UltFechaModi varchar (26) not null,
		IDUltModBG int ,
        CL varchar (26),
		IDStatusTiketBG int ,
		Comentarios varchar (255),
		Detalles varchar (90),
        SoliComponente varchar (20), /*No esta en Excel*/
        GuiaEnvio Varchar (25),   /*No esta en Excel*/
        StaGuia varchar(15), /*No esta en Excel*/
        GuiaRetorno Varchar (25),/*No esta en Excel*/
        StatusEntrega Varchar (25), /*No esta en Excel*/
		IDEstadosRepuBG int , 
        Ciudad Varchar (35), 
        IDCuentaBG int, 
        Resumen varchar (255),
		IDTypeTiketBG int,
		NombreBG varchar (35),
        ApellidoBG varchar (35),
       IDGrupoAsigBG int, 
       Usuario varchar (90),
       FecAtencion Varchar (26),
       FecSolucion Varchar (26),
	   FecCierre Varchar (26),
       FecNotificacion Varchar (26),
       FecRespuesta Varchar (26),
       FecSoluRequerimiento Varchar (26),
       TelClient Varchar (26),
       Calle Varchar (200),
       IDEstadoLMSBG int, 
       IDTablaBG int,
       AsigancionTec VARCHAR (51),
         foreign key(IDCoordinadorBG) references Coordinadores(IDCoordinador) on delete cascade on update cascade,
         foreign key(IDCategoriaBG) references Categoria(IDCategoria) on delete cascade on update cascade,
         foreign key(IDPagosBG) references Pagos(IDPagos) on delete cascade on update cascade,
		 foreign key(IDSeClienBG) references SegPorClien(IDSeClien) on delete cascade on update cascade,
		 foreign key(IDCorteMesBG) references CorteMes(IDCorteMes) on delete cascade on update cascade,
		 foreign key(IDUltModBG) references UltModificador(IDUltMod) on delete cascade on update cascade,
		 foreign key(IDStatusTiketBG) references StatusTiket(IDStatusTiket) on delete cascade on update cascade,
         
         foreign key(IDEstadosRepuBG) references EstadosRepu(IDEstadosRepu) on delete cascade on update cascade,
         foreign key(IDCuentaBG) references Cuenta(IDCuenta) on delete cascade on update cascade,
         foreign key(IDTypeTiketBG) references TypeTiket(IDTypeTiket) on delete cascade on update cascade,
         foreign key(IDGrupoAsigBG) references GrupoAsig(IDGrupoAsig) on delete cascade on update cascade,
         foreign key(IDEstadoLMSBG) references EstadoLMS(IDEstadoLMS) on delete cascade on update cascade,
        foreign key(IDTablaBG) references Tabla(IDTabla) on delete cascade on update cascade,
		primary key(IDIncidente)	
        );
        
        
insert into Coordinadores (Nombre,tel) values 
        ("JUAN","5519531429"),
        ("ALEJANDRA","5516542549"),
        ("ALDAHIR","5519364581"),
        ("CARMEN","5519364581");
        
        
   insert into ZonaEstados (Nombre) values 
        ("NORTE"),
        ("CENTRO"),
        ("METRO"),
        ("SUR");
        
insert into EstadosRepu (NombreEstado,IDZonEstaEs) values 
("Aguascalientes",2),
("Baja California",1),
("Baja California Sur",1),
("Campeche",4),
("Coahuila",1),
("Colima",2),
("Chiapas",4),
("Chihuahua",1),
("Distrito Federal",3),
("Durango",1),
("Guanajuato",2),
("Guerrero",2),
("Hidalgo",3),
("Jalisco",2),
("Mexico",3),
("Michoacan",2),
("Morelos",3),
("Nayarit",2),
("Nuevo Leon",1),
("Oaxaca",2),
("Puebla",3),
("Querétaro",3),
("Quintana Roo",4),
("San Luis Potosí",1),
("Sinaloa",1),
("Sonora",1),
("Tabasco",4),
("Tamaulipas",1),
("Tlaxcala",3),
("Veracruz",2),
("Yucatan",4),
("Zacatecas",1),
("CDMX",3),
("Estado de Mexico",3),
("-",3);

insert into EstadoLMS(DesEstLMS) values 
("Advertencia de objetivo de servicio"),
("Dentro del Objetivo de servicio"),
("Objetivos de servicio incumplidos"),
("-");

insert into CorteMes(Mes) values 
("ENERO"),
("FEBRERO"),
("MARZO"),
("ABRIL"),
("MAYO"),
("JUNIO"),
("JULIO"),
("AGOSTO"),
("SEPTIEMBRE"),
("OCTUBRE"),
("NOVIEMBRE"),
("DICIEMBRE");

insert into Cuenta (NombreCuenta)  Values 
("DICONSA"),
("PROSPERA"),
("FOVISSSTE COMPUTO"),
("SEDESOL"),
("-");

insert into SegPorClien (DescSegClient) values 
("-"),
("SI")
;
 insert into Categoria (Tipo) values 
 ("DIA A DIA"),
 ("BACKLOG"),
 ("RECUPERACION DE DOCUMENTACION"),
 ("-");
 
 insert into GrupoAsig (NombreGrup) values 
 ("Almacen"),
 ("Garantias"),
 ("Giovanni Álvarez Ríos."),
 ("Mesa de Servicio"),
 ("Soporte Aguascalientes"),
 ("Soporte Baja California"),
 ("Soporte Baja California Sur"),
 ("Soporte Campeche"),
 ("Soporte Chiapas Tuxtla"),
 ("Soporte Chihuahua"),
 ("Soporte Coahuila, Saltillo"),
 ("Soporte Coahuila, Torreón"),
 ("Soporte Colima"),
 ("Soporte DICONSA"),
 ("Soporte Durango"),
 ("Soporte Estado De Mexico Poniente"),
 ("Soporte FONART"),
 ("Soporte FOVISSSTE"),
 ("Soporte Guanajuato"),
 ("Soporte Guerrero"),
 ("Soporte Hidalgo"),
 ("Soporte Jalisco"),
 ("Soporte Michoacan"),
 ("Soporte Morelos"),
 ("Soporte Nayarit"),
 ("Soporte Nuevo Leon"),
 ("Soporte Oaxaca"),
 ("Soporte PROSPERA"),
 ("Soporte Puebla"),
 ("Soporte Queretaro"),
 ("Soporte Quintana Roo"),
 ("Soporte San Luis Potosí"),
 ("Soporte SEDESOL"),
 ("Soporte Sinaloa"),
 ("Soporte Sonora"),
 ("Soporte Tabasco"),
 ("Soporte Tamaulipas"),
 ("Soporte Tlaxcala"),
 ("Soporte Veracruz"),
 ("Soporte Yucatan"),
 ("Soporte Zacatecas"),
 ("-");
 
 

 insert into UltModificador (NombreMod) values 
("alex.rodriguez"),
("yanira.mayen"),
("clemente.bautista"),
("luis.perez"),
("kevin.jimenez"),
("maria.nahuatlato"),
("giovanni.alvarez"),
("carina.flores"),
("AR_ESCALATOR"),
("luis.vera"),
("sharon.mendez"),
("mayra.ocampo"),
("jesus.guapo"),
("gabriel.sol"),
("ricardo.marin"),
("edgar.jesus"),
("alejandra.paredes"),
("juan.zaldivar"),
("daniel.ocampo"),
("aldo.zarraga"),
("alfonso.garcia"),
("kelly.nabor"),
("blanca.guzman"),
("stephanie.zarraga"),
("alexis.rivera"),
("abraham.sanchez"),
("oscar.gonzalez"),
("-");

insert into TypeTiket(TypeTikets)   values 
("Incidencia"),
("Jesus Antonio"),
("-");

insert into Pagos(DescPagos)   values 
("-"),
("PAGADO");


INSERT INTO StatusTiket (TipoStatus) values 
("CERRADO"),
("RESUELTO"),
("CANCELADO "),
("COMPRAS"),
("GARANTIAS"),
("PENDIENTE"),
("ASIGNADO"),
("EN CURSO"),
("ALMACEN"),
("-");

insert into Tabla (DesTabla) VALUES 
("RESOLUCION"),
("ALMACEN"),
("PROGRAMACION");

 
 
 
        SELECT *FROM Coordinadores;
		SELECT *FROM ZonaEstados;
        select *From EstadosRepu;
		select *From EstadoLMS;
        select *from CorteMes;
        select *From Cuenta;
        select *from SegPorClien;
        select *from Categoria;
		SELECT *from GrupoAsig;
        select *from UltModificador;
        select *From TypeTiket;
        select *from Pagos;
        SELECT *FROM StatusTiket;
		select *from Tabla;
		SELECT *from BaseGeneral;
		select * from Categoria  ;
select IDCategoria from Categoria where Tipo like "%BACLOG%";
select  IDPagos from Pagos where DescPagos LIKE "%PA%" ;
select * from Categoria where Tipo like "%BACKLOG%";
select IDSeClien from SegPorClien where DescSegClient like "%S%";
select IDUltMod from UltModificador where NombreMod like "%Bla%";
SELECT IDStatusTiket FROM StatusTiket where TipoStatus like "%CERR%";
select IDEstadosRepu From EstadosRepu where NombreEstado like "%Mex%" ;
select IDCuenta From Cuenta where NombreCuenta like "%pro%";
select IDTypeTiket From TypeTiket where TypeTikets like "%inc%";
SELECT IDGrupoAsig from GrupoAsig where NombreGrup like "%Soporte%";
    select IDEstadoLMS From EstadoLMS where DesEstLMS like "%DENT%";
select IDTabla from Tabla where DesTabla like "%Resol%";

	select IDZonEstaEs From EstadosRepu WHERE IDEstadosRepu =5;
    
    SELECT *from BaseGeneral;
    SELECT count(IDincidente) FROM BaseGeneral;
 drop view if exists BaseCompleta;	
	create view BaseCompleta as 
    select  
    Coordinadores.Nombre as "Coordinador",
    Categoria.Tipo as "CATEGORIA",
	Pagos.DescPagos as "PAGOS",
    SegPorClien.DescSegClient as "SEGUIMIENTO POR EL CLIENTE",
    CorteMes.Mes as "CORTE DEL MES",
    BaseGeneral.IDIncidente as "INCIDENCIA",
    BaseGeneral.UltFechaModi as "FECHA ULT. MODIF.",
    UltModificador.NombreMod as "MODOFICADOR",
    BaseGeneral.CL,
    StatusTiket.TipoStatus,
    Comentarios,
    Detalles,
    SoliComponente,
    GuiaEnvio,
    StaGuia,
    GuiaRetorno,
    StatusEntrega,
    EstadosRepu.NombreEstado,
    Ciudad,
    Cuenta.NombreCuenta,
    Resumen,
    TypeTiket.TypeTikets,
    NombreBG,
    ApellidoBG,
    GrupoAsig.NombreGrup,
    Usuario,
    FecAtencion,
    FecSolucion,
    FecCierre,
    FecNotificacion,
    FecRespuesta,
    FecSoluRequerimiento,
    TelClient,
    Calle,
    EstadoLMS.DesEstLMS,
    Tabla.DesTabla,
    AsigancionTec

    from BaseGeneral inner join Coordinadores 
						on BaseGeneral.IDCoordinadorBG =Coordinadores.IDCoordinador
                     inner join  Categoria
						on BaseGeneral.IDCategoriaBG=Categoria.IDCategoria
					 inner join  Pagos
						on BaseGeneral.IDPagosBG=Pagos.IDPagos
					 inner join SegPorClien
						on  BaseGeneral.IDSeClienBG=SegPorClien.IDSeClien
					 inner join CorteMes
						on BaseGeneral.IDCorteMesBG=CorteMes.IDCorteMes
					 inner join UltModificador
						on BaseGeneral.IDUltModBG=UltModificador.IDUltMod
					 inner join StatusTiket
						on BaseGeneral.IDStatusTiketBG=StatusTiket.IDStatusTiket
					 inner join EstadosRepu
                       on BaseGeneral.IDEstadosRepuBG=EstadosRepu.IDEstadosRepu
					 inner join Cuenta
                       on BaseGeneral.IDCuentaBG=Cuenta.IDCuenta
					 inner join TypeTiket
					   on BaseGeneral.IDTypeTiketBG=TypeTiket.IDTypeTiket
					 inner join GrupoAsig
					   on BaseGeneral.IDGrupoAsigBG=GrupoAsig.IDGrupoAsig
					 inner join EstadoLMS
					   on  BaseGeneral.IDEstadoLMSBG= EstadoLMS.IDEstadoLMS
					 inner join Tabla
					   on  BaseGeneral.IDTablaBG= Tabla.IDTabla;
   
   
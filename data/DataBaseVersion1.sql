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
		DescPagos varchar(2) not null,
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
		NombreGrup varchar(25) not null,
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
        SoliComponente varchar (20),
        GuiaEnvio Varchar (25),   
        StaGuia varchar(15), 
        GuiaRetorno Varchar (25),
        StatusEntrega Varchar (25),
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
        ("ALDAHIR","5519364581");
        
        
   insert into ZonaEstados (Nombre) values 
        ("CENTRO"),
        ("NORTE"),
        ("SUR"),
        ("METRO");
        
          insert into EstadosRepu (NombreEstado,IDZonEstaEs) values 
       
        
        EstadosRepu
    
    
    
        SELECT *FROM Coordinadores;
         SELECT *FROM ZonaEstados;
        



drop database blog_hardware;
create database blog_hardware;
use blog_hardware;

create table procesadores (
ID int,
Familia varchar(6),
Generacion varchar (10),
Frecuencia varchar (10),
Nucleos int(4),
Precio decimal(50)
);

create table tarjetas_graficas (
ID int,
Familia varchar(10),
Fabricante varchar(20),
Modelo varchar (20),
Frecuencia varchar (10),
Arquitectura varchar (20),
VRAM varchar (10),
Precio decimal(50)
);

create table blaca_base (
ID int,
Chipset varchar(10),
Fabricante varchar(20),
Modelo varchar (20),
Puertos_USB varchar (10),
Puertos_expansion varchar (20),
Tipo_ram varchar (10),
Precio decimal(50)
);

create table memoria_ram (
ID int,
Fabricante varchar(20),
Modelo varchar (20),
Frecuencia varchar (10),
Arquitectura varchar (20),
RAM varchar (10),
Precio decimal(50)
);

create table almacenamiento (
ID int,
Fabricante varchar(20),
Modelo varchar (20),
Tipo varchar (10),
Conexion varchar (20),
Capacidad varchar (10),
Precio decimal(50)
);

insert into procesadores values(1,"Intel",7,3.4,8,200),(2,"AMD",4,4.0,12,250);
insert into tarjetas_graficas values(1,"NVIDIA","Gigabyte","GTX 1080",4,"Pascal",8,800),(2,"AMD","ASUS","r9 270x",4,"Ryzen",6,250);
insert into blaca_base values(1,"b250","MSI","B250M BAZOOKA",5,"PCI-E","DDR4",72),(2,"b350","MSI","B350M BAZOOKA",5,"PCI-E","DDR4",72);
insert into memoria_ram values(1,"Gskill","Aegis ddr4 2133",2133,"DDR4",4,45),(2,"Gskill","Aegis ddr4 2133",2133,"DDR4",8,88);
insert into almacenamiento values(1,"Seagate","BarraCuda","HDD","SATA","1tb",42),(2,"Samsung","850 Evo","SSD","SATA",500,125);

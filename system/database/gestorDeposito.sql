drop database gestorDeposito;
create database gestorDeposito;
use gestorDeposito;
create table deposito(
id int not null auto_increment primary key,
nombre varchar(20),
contenido varchar (10),
cantidad int(4),
precio float(6,2)
)
create table carrito(
id int not null auto_increment primary key,
nombre varchar(20),
contenido varchar (10),
cantidad int(4),
precio float(6,2),
cliente varchar(20),
fecha date,
hora time
)
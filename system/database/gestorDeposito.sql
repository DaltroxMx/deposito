drop database gestorDeposito;
create database gestorDeposito;
use gestorDeposito;
create table deposito(
id int not null auto_increment primary key,
nombre varchar(20),
precio float(6,2)
)
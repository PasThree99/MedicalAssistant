create database mediHelper;
use mediHelper;
create table paciente(
	curp varchar(18) primary key,
    nombre varchar(50) not null,
    apellido_paterno varchar(50) not null,
    apellido_materno varchar(50) not null,
    fecha_de_nacimiento date not null,
    estatura decimal(3,2) not null
);

select * from paciente;
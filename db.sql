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

insert into paciente (curp,nombre,apellido_paterno,apellido_materno,fecha_de_nacimiento,estatura)
values ("curp1","Sebastian","Gonzalez","Pastrana","1999-11-13",1.67);

insert into paciente (curp,nombre,apellido_paterno,apellido_materno,fecha_de_nacimiento,estatura)
values ("curp2","Juan","Perez","Gomes","2000-01-12",1.80);

insert into paciente (curp,nombre,apellido_paterno,apellido_materno,fecha_de_nacimiento,estatura)
values ("curp3","Karla","Rodriguez","Hernandez","2001-08-18",1.67);

select * from pacpaiente;
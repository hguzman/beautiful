create database dbbeautisurprise;

use dbbeautisurprise;

create table perfiles(
	perfil int not null AUTO_INCREMENT,
	nombrePerfil varchar(50),
	primary key(perfil)
);

create table usuarios(
	usuario varchar(20),
	contrasena varchar(20),
	perfil int,
	primary key (usuario),
	FOREIGN KEY(perfil) REFERENCES perfiles(perfil)
);



insert into perfiles (nombrePerfil) value("ADMINISTRADOR");

insert into usuarios value("hguzman","12345",1); 
insert into usuarios value("luis","12345",1); 
insert into usuarios value("carlos","12345",1); 



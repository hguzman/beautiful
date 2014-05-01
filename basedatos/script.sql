create database dbbeautisurprise;

use dbbeautisurprise;

create table usuarios(
usuario varchar(20),
contrasena varchar(20),
perfil int,
primary key (usuario));

insert into usuarios value("hguzman","12345",1); 

insert into usuarios value("luis","12345",2); 

insert into usuarios value("carlos","12345",3); 

insert into usuarios value("maria","12345",4); 

insert into usuario value("osmar","12345",1);

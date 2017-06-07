drop database crud_db;
create database crud_db;

use crud_db;


CREATE TABLE roles (
	id int not null auto_increment primary key,
	nombre varchar(100)
);

insert into roles (id,nombre) values  (1,"usuario"),(2,"administrador"),(3,"editor");

CREATE TABLE users (
  id int(11) NOT NULL auto_increment PRIMARY KEY ,
  name varchar(100) NOT NULL,
  age int(3) NOT NULL,
  email varchar(100) NOT NULL, 
  id_roles int not null default 1,
	foreign key (id_roles) references roles(id)
);
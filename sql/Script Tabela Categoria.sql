create database db_classic_burguer;

show databases;

use db_classic_burguer;

create table tbl_categoria(
	id_categoria int not null auto_increment primary key,
    nome varchar (100) not null,
    unique index (id_categoria)
);

show tables;

desc tbl_categoria;

select * from tbl_categoria;

/*
Fazer algumas revisões antes de começar a usar, 
talvez criar umas fogeign keys e 
falta modelo de quarto em hospedagem.
*/

create database hotelaula;
use hotelaula;

create table geral(
requi int(15) not null primary_key auto increment,
titlo varchar(255) not null,
descr longtext not null,
image varchar(255) not null
);

create table estadias(
requi int(15) not null primary_key auto increment,
titlo varchar(255) not null,
descr longtext not null,
image varchar(255) not null,
valor decimal(20,2) not null,
vagas int(4) not null
);

create table cliente(
codig int not null primary_key auto increment,
nome varchar(255) not null,
telef int(10),
celul int(11) not null,
email varchar(255) not null,
cpf varchar(11) not null unique,
sexo varchar(1) not null,
ender text not null
);

create table hospedagem(
requi int not null auto increment primary_key,
dcheg date not null,
nnoit int(6) not null,
nhosp int(3) not null,
mensg longtext not null,
perso bit not null,
encon varchar(6) not null
);

create table transac(
requi int not null auto increment primary_key,
requihosp int not null unique,
codigclie int not null unique,
salvo timestamp
);
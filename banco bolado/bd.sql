create database if not exists clinica_vet;
use clinica_vet;

create table if not exists Cliente
(
	id_cli int auto_increment,
    nome_cli varchar(100) not null,
    cpf_cli char(11) not null unique,
    data_nasc_cli date,
    data_cad_cli datetime default now(),
    constraint pk_cli primary key (id_cli)
);

insert into Cliente(nome_cli, cpf_cli, data_nasc_cli)
values
("Josney","88373647283","2005-04-12"),
("Mirosmar","33829384738","1967-03-23");

select * from Cliente;
desc Cliente;
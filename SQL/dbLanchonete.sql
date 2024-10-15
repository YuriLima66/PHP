drop database dbLanchonete;
 
create database dbLanchonete;
 
use dbLanchonete;


 create table tbFuncionarios(
codFunc int not null auto_increment,
nome varchar(100),
email varchar(100),
telCel char(10),
sexo char (1),
salario decimal(9,2),
primary key(codFunc));



create table tbclientes(
codCli int not null auto_increment,
nome varchar(100),
email varchar(100),
telCel char(10),
primary key(codCli));



create table tbFornecedores(
codForn int NOT NULL auto_increment,
nome varchar(100),
email varchar(100),
telCel CHAR(10),
PRIMARY key (codForn));


create table tbProdutos(
codProd int not null auto_increment,
descricao varchar(100),
quantidade int,
valor decimal(9,2),
dataEntr date,
horaEntr time,
codForn int NOT NULL,
primary key(codProd),
foreign key (codForn) REFERENCES tbFornecedores(codForn));




CREATE TABLE tbUsuarios(
codUsu int not NULL auto_increment,
nome VARCHAR (50)NOT NULL,
senha VARCHAR(20) not NULL,
codFunc int not NULL,
PRIMARY KEY(codUsu),
FOREIGN KEY(codFunc) REFERENCES tbFuncionarios(codFunc));

 

 
create table tbVendas(
codVenda int not null auto_increment,
dataVenda date,
horaVenda time,
valor decimal(9,2),
codCli int not null,
codProd int not null,
codUsu int not null,
primary key(codVenda),
foreign key(codCli)references tbclientes(codCli),
foreign key(codProd)references tbProdutos(codProd),
FOREIGN KEY(codUsu)REFERENCES tbUsuarios(codUsu));

 
 
-- INSERINDO OS DADOS
-- FUNCIONARIOS
insert into tbFuncionarios(nome,email,telcel,sexo,salario )
VALUES('Yuri Lima','yrflima@gmail.com','949501078','M',3500.00);

-- CLIENTES
insert into tbclientes( nome,email,telcel)
VALUES('Yuri Lima','yrflima@gmail.com','949501078');

-- FORNECEDORES
insert into tbFornecedores( nome,email,telcel)
VALUES('Verduraria','verdura@gmail.com','987120637');

-- PRODUTOS
insert into tbProdutos(descricao,quantidade,valor,dataEntr,horaEntr,codForn )
VALUES('Banana','12',5.50,'2024/10/15','16:05:01',1);

-- USUARIOS
insert into tbUsuarios( nome,senha,codFunc)
VALUES('Jesus Nazaré','123456',1);

-- VENDAS
insert into tbVendas(dataVenda,horaVenda,valor,codCli,codProd,codUsu )
VALUES('2024/10/15','16:20:02',5.50,1,1,1);

-- Visualiazando as tabelas 
SELECT * FROM tbFuncionarios;
SELECT * FROM tbclientes;
SELECT * FROM tbFornecedores;
SELECT * FROM tbProdutos; 
SELECT * FROM tbUsuarios;
SELECT * FROM tbVendas; 

-- UTILIZANDO O JOIN

select cli.nome as 'Nome do cliente',
prod.descricao as 'Nome do produto',
usu.nome as 'Nome do usuário' from tbVendas as vend
inner join tbclientes as cli on vend.codCli = cli.codCli
inner join tbProdutos as prod on vend.codProd = prod.codProd
inner join tbUsuarios as usu on vend.codUsu = usu.codUsu
where vend.codVenda = 1;

-- ALTERANDO VALORES DAS TABELAS

UPDATE tbclientes SET nome ='mariazinha ', email='inhainhainha@gmail.com', telCel= '1158059029' WHERE codCli=1;

-- DELETANDO REGISTROS DA TABELA

DELETE FROM tbclientes WHERE codCli= 1;





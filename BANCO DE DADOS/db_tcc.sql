CREATE DATABASE db_tcc;
USE db_tcc;
CREATE TABLE Cliente(
Cod_Cliente INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
fone VARCHAR(20),
genero VARCHAR(9) NOT NULL,
nascimento DATE,
senha VARCHAR(10) NOT NULL
);
CREATE TABLE servico (
cod_servico INT PRIMARY KEY AUTO_INCREMENT,
descricao Varchar(80) NULL,
preco FLOAT,
imagem VARCHAR(30),
tipo_servico VARCHAR(30)
);


DELETE FROM Cliente
WHERE Cod_Cliente > 1;
CREATE TABLE Agenda_Usuario (
Cod_Agenda INT PRIMARY KEY AUTO_INCREMENT,
data_1 DATE NOT NULL,
horario TIME NOT NULL,
obs VARCHAR(80) NULL
);
CREATE TABLE AgendaUsu (
Cod_Agenda INT PRIMARY KEY AUTO_INCREMENT,
cod_Cliente TEXT NOT NULL,
data_1 DATE NOT NULL,
horario TIME NOT NULL,
obs VARCHAR(80) NULL
);
CREATE TABLE Funcionario1 (
cod_func INT PRIMARY KEY AUTO_INCREMENT,
emai_func VARCHAR(40) NOT NULL,
senha_func VARCHAR(9) NOT NULL
);


insert into Funcionario1 (emai_func, senha_func)
values ('jucimara.acucena@gmail.com', 'acucena15');

select * from funcionario1;

drop table Funcionario1;

CREATE TABLE servico_funcionario(
cod_servico_funcionario INT PRIMARY KEY AUTO_INCREMENT,
cod_func INT, tipo_servico VARCHAR(30),
CONSTRAINT fk_tipo_servico FOREIGN KEY (tipo_servico) REFERENCES servico (tipo_servico),
CONSTRAINT fk_cod_func FOREIGN KEY (cod_func) REFERENCES Funcionario1 (cod_func)
);

drop table servico_funcionario;

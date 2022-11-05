CREATE DATABASE gnotes;

CREATE TABLE professor(
	cpf char(14) PRIMARY KEY NOT NULL,
    nome_professor varchar(90) NOT NULL,
    telefone char(15) UNIQUE NOT NULL,
    sexo varchar(9) NOT NULL,
    senha varchar(50) NOT NULL
);

CREATE TABLE carrinho(
	numero_carrinho char(7) PRIMARY KEY NOT NULL,
    patrimonio_carrinho int(20) UNIQUE NOT NULL,
    cpf char(14),
    FOREIGN KEY (cpf) REFERENCES professor (cpf)
);

CREATE TABLE notebook(
    numero_notebook char(5) PRIMARY KEY NOT NULL,
	patrimonio_notebook int(20) UNIQUE NOT NULL,
    modelo varchar(15) NOT NULL,
    marca varchar(10) NOT NULL,
    numero_carrinho char(7) NOT NULL,
    FOREIGN KEY (numero_carrinho) REFERENCES carrinho (numero_carrinho)
);

CREATE TABLE historico(
    cod_historico int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    acao varchar(9) NOT NULL,
    data_retirada char(10) NOT NULL,
    hora_retirada char(5) NOT NULL,
    data_devolvida char(10),
    hora_devolvida char(8),
    cpf char(14) NOT NULL,
    FOREIGN KEY (cpf) REFERENCES professor (cpf),
    numero_carrinho char(7) NOT NULL,
    FOREIGN KEY (numero_carrinho) REFERENCES carrinho (numero_carrinho)
);
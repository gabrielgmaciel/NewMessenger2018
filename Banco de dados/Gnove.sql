drop database gnove;

create database gnove charset = UTF8 COLLATE = utf8_general_ci;

use gnove;

create table Usuario(
  cod_usuario INTEGER NOT NULL AUTO_INCREMENT,
  nome varchar(70) not null,
  email varchar(60) not null,
  senha varchar(255)not null,
  primary key(cod_usuario)
);

create table Endereco(
  cod_usuario integer not null,
  cod_endereco integer not null auto_increment,
  lougradouro VARCHAR(255) NOT NULL,
  cidade VARCHAR(50) NOT NULL,
  estado CHAR (3) NOT NULL,
  CEP VARCHAR(20) NOT NULL,
  primary key (cod_endereco),
  foreign key (cod_usuario) references Usuario (cod_usuario) on delete cascade on update cascade
);

create table Dados_veiculo(
  cod_usuario INTEGER NOT NULL,
  tipo_veiculo VARCHAR(10) not null,
  placa varchar(8) not null,
  modelo varchar(60) not null,
  primary key (placa),
  foreign key (cod_usuario) references Usuario (cod_usuario) on delete cascade on update cascade
);

CREATE TABLE Cartao_credito(
  opcao_pagamento VARCHAR(10) NOT NULL ,
  numero_cartao VARCHAR(16) NOT NULL,
  nome_titular VARCHAR(255) NOT NULL ,
  data_vencimento DATE NOT NULL,
  cod_seguranca int (5) NOT NULL,
  cod_usuario INTEGER NOT NULL,
  PRIMARY KEY (numero_cartao),
  FOREIGN KEY (cod_usuario) REFERENCES Usuario (cod_usuario) on delete cascade on update cascade
);

create table Mensagem(
  cod_mensagem INTEGER not null auto_increment,
  mensagem varchar(150),
  primary key (cod_mensagem)
);

create table Mensagem_usuario(
  cod_usuario INTEGER NOT NULL,
  placa varchar (60) not null,
  cod_mensagem_recebida INTEGER not null auto_increment,
  mensagem VARCHAR(60) not null,
  tempo timestamp default current_timestamp(),
  status int not null,
  primary key (cod_mensagem_recebida),
  foreign key (cod_usuario) references Usuario (cod_usuario) on delete cascade on update cascade,
  foreign key (placa) references Dados_veiculo (placa) on delete cascade on update cascade
);

create table Telefone(
cod_telefone integer not null auto_increment,
telefone varchar(15) not null,
cod_usuario integer,
primary key (cod_telefone),
foreign key (cod_usuario) references Usuario (cod_usuario) on delete cascade on update cascade
);

CREATE TABLE Loja(
  cod_loja INTEGER NOT NULL AUTO_INCREMENT,
  CNPJ VARCHAR(14) NOT NULL,
  nome_loja VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  logradouro_loja VARCHAR(255) NOT NULL,
  telefone_loja VARCHAR(50) NOT NULL,
  PRIMARY KEY (cod_loja)
);

create table Categoria(
cod_categoria integer not null auto_increment,
nome varchar(255),
primary key (cod_categoria)
);

create table Marca(
cod_marca integer not null auto_increment,
nome varchar(255),
primary key (cod_marca)
);

CREATE TABLE Produto(
  cod_produto INTEGER AUTO_INCREMENT NOT NULL,
  cod_loja INTEGER NOT NULL,
  imagen_produto BLOB,
  nome_produto VARCHAR(255) NOT NULL,
  preco_produto float(5,2) NOT NULL,
  cod_categoria integer not null,
  cod_marca integer not null,
  promocao BOOLEAN NOT NULL,
  descricao_produto LONGTEXT NOT NULL,
  PRIMARY KEY (cod_produto),
  FOREIGN KEY (cod_loja) REFERENCES Loja (cod_loja) on delete cascade on update cascade,
  foreign key (cod_categoria) references Categoria (cod_categoria),
  foreign key (cod_marca) references Marca (cod_marca)
);

CREATE TABLE Compra_produto(
  cod_compra INTEGER AUTO_INCREMENT NOT NULL,
  cod_produto INTEGER NOT NULL,
  cod_usuario INTEGER NOT NULL,
  data_compra TIMESTAMP DEFAULT current_timestamp(),
  data_vencimento DATE AS (DATE_ADD(data_compra, interval 05 DAY)),
  valor FLOAT(7,2) NOT NULL,
  parcela INTEGER NOT NULL,
  forma_pagamento VARCHAR(10) NOT NULL,
  PRIMARY KEY (cod_compra),
  FOREIGN KEY (cod_produto) REFERENCES Produto (cod_produto) on delete cascade on update cascade,
  FOREIGN KEY (cod_usuario) REFERENCES Usuario (cod_usuario) on delete cascade on update cascade
);

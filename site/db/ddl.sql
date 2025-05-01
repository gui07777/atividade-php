CREATE DATABASE IF NOT EXISTS db_pw2;
USE db_pw2;

CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(100) NOT NULL,
    idade VARCHAR(40),
    id_login INT NOT NULL,
    FOREIGN KEY (id_login) REFERENCES login(id) ON DELETE CASCADE
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    marca VARCHAR(100),
    preco INT,
    descricao VARCHAR (100),
	quantidade INT,
    categoria VARCHAR(100),
    caminho_do_produto VARCHAR(100), 
    data_cadastro DATE,
    ativo VARCHAR (100)
);
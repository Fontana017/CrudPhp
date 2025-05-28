CREATE DATABASE crudPHP;
use crudPHP;


CREATE TABLE Departamentos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE Cargos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL UNIQUE,
    salario_base DECIMAL(10, 2) NOT NULL
);

CREATE TABLE Funcionarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    id_departamento INT NOT NULL,
    id_cargo INT NOT NULL,
    data_admissao DATE NOT NULL,
    ativo TINYINT(1) DEFAULT 1,

    FOREIGN KEY (id_departamento) REFERENCES Departamentos(id),
    FOREIGN KEY (id_cargo) REFERENCES Cargos(id)
);

create table func_ativo(
id int primary key auto_increment,
id_func int,
nome varchar(100) not null
);


insert into Departamentos(nome)values
		("RH"),
        ("TI"),
        ("SUPORTE"),
        ("PROCUÇÃO"),
        ("DP");
        
insert into Cargos(nome, salario_base)values
		("ESTÁGIARIO", 1000.00),
        ("ASSISTENTE", 1500.00),
        ("AUXILIAR", 2000.00),
        ("ANALISTA JN", 3000.00),
        ("ANALISTA PL", 5000.00),
        ("ANALISTA SN", 10000.00);
        
insert into Funcionarios VALUES
		(null, "matheus", "matheus@gmail.com", 1, 2, "2025/05/23", 1),
        (null, "msantos", "mataaaaa@gmail.com", 2, 2, "2025/05/23", 0),
        (null, "FONTANA", "FONTANA@gmail.com", 3, 4, "2025/05/23", 1);
        
        drop table Funcionarios;
        
        
        select * from Funcionarios;
        select * from func_ativo;
        
        drop database crudPHP;
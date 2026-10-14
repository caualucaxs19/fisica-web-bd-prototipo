CREATE DATABASE projeto_IFBA;

USE projeto_IFBA;

CREATE TABLE usuario (
    id_usuario INT NOT NULL,
    data_cadastro DATE,

    PRIMARY KEY (id_usuario)
);

CREATE TABLE tecnico (
    id_usuario INT NOT NULL,
    nome VARCHAR(50),
    email VARCHAR(250),
    senha VARCHAR(250),

    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE administrador (
    id_usuario INT NOT NULL,
    nome VARCHAR(50),
    email VARCHAR(250),
    senha VARCHAR(250),

    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE sala (
    id_sala INT NOT NULL,
    codigo_sala INT,
    bloco INT,
    andar INT,
    tipo_ambiente CHAR,
    area_m2 FLOAT,
    capacidade_pessoas INT,

    PRIMARY KEY (id_sala)
);

CREATE TABLE equipamento (
    id_equipamento INT NOT NULL,
    capacidade_btu INT,
    tensao_v INT,
    potencia_w INT,
    status_atual CHAR,
    CHECK (status_atual in (Ativo, Inativo, Defeito)),

    PRIMARY KEY (id_equipamento)
);

CREATE TABLE ar_condicionado (
    id_equipamento INT NOT NULL,
    modelo CHAR,
    numero_serie INT,
    marca CHAR,

    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento)
);

CREATE TABLE televisao (
    id_equipamento INT NOT NULL,
    modelo CHAR,
    numero_serie INT,
    marca CHAR,

    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento)
);

CREATE TABLE ventilador (
    id_equipamento INT NOT NULL,
    modelo CHAR,
    numero_serie INT,
    marca CHAR,

    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento)
);

CREATE TABLE tomada (
    id_equipamento INT NOT NULL,
    
    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento)
);

CREATE TABLE alocacao (
    id_alocacao INT NOT NULL,
    id_equipamento INT NOT NULL,
    id_sala INT NOT NULL,
    data_instalacao DATE,
    data_remocao DATE,
    status_alocacao CHAR,

    PRIMARY KEY (id_alocacao),
    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento),
    FOREIGN KEY (id_sala) REFERENCES sala (id_sala)
);

CREATE TABLE manutencao (
    id_manutencao INT NOT NULL,
    id_equipamento INT NOT NULL, 
    id_usuario INT NOT NULL,
    data_manutencao DATE,
    tipo CHAR,
    CHECK (tipo in (Preventiva, Corretiva)),
    descricao_servico TEXT,
    custo FLOAT,
    proxima_manutencao DATE,

    PRIMARY KEY (id_manutencao),
    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento),
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);

CREATE DATABASE projeto_IFBA;

USE projeto_IFBA;

CREATE TABLE Bloco (
    id_bloco INT NOT NULL,

    PRIMARY KEY (id_bloco)
);

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
    id_bloco INT,
    codigo_sala INT,
    andar INT,
    tipo_ambiente VARCHAR(50),
    area_m2 FLOAT,
    capacidade_pessoas INT,

    PRIMARY KEY (id_sala),
    FOREIGN KEY (id_bloco) REFERENCES Bloco (id_bloco)
);

CREATE TABLE equipamento (
    id_equipamento INT NOT NULL,
    capacidade_btu INT,
    tensao_v INT,
    potencia_w INT,
    status_atual VARCHAR(50)
    CHECK (status_atual in ("Ativo", "Inativo", "Defeito")),

    PRIMARY KEY (id_equipamento)
);

CREATE TABLE ar_condicionado (
    id_equipamento INT NOT NULL,
    modelo_ar VARCHAR(50),
    numero_serie_ar INT,
    marca_ar VARCHAR(50),

    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento)
);

CREATE TABLE televisao (
    id_equipamento INT NOT NULL,
    modelo_tv VARCHAR(50),
    numero_serie_tv INT,
    marca_tv VARCHAR(50),

    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento)
);

CREATE TABLE ventilador (
    id_equipamento INT NOT NULL,
    modelo_vent VARCHAR(50),
    numero_serie_vent INT,
    marca_vent VARCHAR(50),

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
    status_alocacao VARCHAR(50),

    PRIMARY KEY (id_alocacao),
    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento),
    FOREIGN KEY (id_sala) REFERENCES sala (id_sala)
);

CREATE TABLE manutencao (
    id_manutencao INT NOT NULL,
    id_equipamento INT NOT NULL, 
    id_usuario INT NOT NULL,
    data_manutencao DATE,
    tipo VARCHAR(50)
    CHECK (tipo in ("Preventiva", "Corretiva")),
    descricao_servico TEXT,
    custo FLOAT,
    proxima_manutencao DATE,

    PRIMARY KEY (id_manutencao),
    FOREIGN KEY (id_equipamento) REFERENCES equipamento (id_equipamento),
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);

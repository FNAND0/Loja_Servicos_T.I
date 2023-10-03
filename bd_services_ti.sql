CREATE TABLE servico (
    numero NUMERIC(10, 0) PRIMARY KEY,
    local CHAR(255),
    horario TIME,
    descricao VARCHAR(255),
    redes BOOLEAN,
    limpeza BOOLEAN,
    fk_tecnico_codigo NUMERIC(10, 0)
);

CREATE TABLE cliente (
    nome VARCHAR(255),
    senha VARCHAR(255),
    telefone NUMERIC(10, 0),
    e_mail VARCHAR(255),
    codigo NUMERIC(10, 0) PRIMARY KEY,
    fk_servico_numero NUMERIC(10, 0)
);

CREATE TABLE tecnico (
    nome VARCHAR(255),
    e_mail VARCHAR(255),
    telefone NUMERIC(10, 0),
    senha VARCHAR(255),
    codigo NUMERIC(10, 0) PRIMARY KEY
);

ALTER TABLE servico ADD CONSTRAINT FK_servico_2
    FOREIGN KEY (fk_tecnico_codigo)
    REFERENCES tecnico (codigo)
    ON DELETE CASCADE;

ALTER TABLE cliente ADD CONSTRAINT FK_cliente_2
    FOREIGN KEY (fk_servico_numero)
    REFERENCES servico (numero)
    ON DELETE CASCADE;

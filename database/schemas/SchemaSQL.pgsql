/* Criando database verificando se não existe. */
CREATE DATABASE if not exists db_cadastro;

/* Alterando para o tipo de db. */
ALTER DATABASE 'db_cadastro' COLLATE utf8_general_ci;

CREATE TABLE if not exists tb_clientes(
    id    serial       NOT NULL,
    nome  varchar(40)  NOT NULL,
    email varchar(50)  NOT NULL UNIQUE,
    telefone varchar(15)  NOT NULL,
    PRIMARY KEY (id)
);

ALTER TABLE 'tb_clientes' COLLATE utf8_general_ci;

SELECT * FROM tb_clientes;

INSERT INTO tb_clientes(nome, email, telefone) VALUES('Vinicius','vinimattos.rj@gmail.com', '21988770011');

INSERT INTO tb_clientes(nome, email, telefone) VALUES('Fernanda','teste@gmail.com','21988770011');

/* Apagando database */
DROP DATABASE db_cadastro;

/* Limpando as informações */
DELETE DATABASE db_cadastro;


/* Criando usuário e alterando permissões */
CREATE USER vinicius WITH PASSWORD '123456A';

GRANT ALL PRIVILEGES ON DATABASE db_cadastro to vinicius;

ALTER ROLE vinicius WITH PASSWORD '123456A';

ALTER ROLE vinicius CREATEROLE CREATEDB;

DROP USER vinicius;-- remove a database role


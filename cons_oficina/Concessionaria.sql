CREATE DATABASE concessionaria;
USE concessionaria;
CREATE TABLE cad_oficina (
  nome VARCHAR(50) NOT NULL,
  cpf BIGINT NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  email VARCHAR(50) NOT NULL,
  fabricante VARCHAR(50) NOT NULL,
  modelo VARCHAR(50) NOT NULL,
  ano VARCHAR(50) NOT NULL,
  cor VARCHAR(50) NOT NULL,
  placa VARCHAR(50) NOT NULL,
  observacoes TEXT NOT NULL
) ENGINE=InnoDB;

SELECT * FROM cad_oficina;

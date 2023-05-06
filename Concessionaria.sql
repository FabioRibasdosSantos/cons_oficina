CREATE DATABASE concessionaria;
use concessionaria;
CREATE TABLE cad_oficina (
  nome VARCHAR(50) NOT NULL,
  cpf number(11) NOT NULL,
  endereco INT NOT NULL,
  email VARCHAR(50) NOT NULL,
  fabricante VARCHAR(50) NOT NULL,
  modelo VARCHAR(50) NOT NULL,
  ano VARCHAR(50) NOT NULL,
  cor VARCHAR(50) NOT NULL,
  placa VARCHAR(50) NOT NULL,
  observacoes TEXT NOT NULL  
  )ENGINE=INNODB;
  
select * from cad_oficina;
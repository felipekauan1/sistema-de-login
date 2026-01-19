-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS `formulario-felipe`;
USE `formulario-felipe`;

-- Criação da Tabela de Usuários
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(110) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `sexo` VARCHAR(15) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
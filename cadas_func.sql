-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2021 às 00:47
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestao_hotel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadas_func`
--

CREATE TABLE `cadas_func` (
  `nome` varchar(30) NOT NULL,
  `cpf` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` int(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefone` int(15) DEFAULT NULL,
  `celular` int(15) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `grupo_func` varchar(30) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `pis` int(20) DEFAULT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadas_func`
--
ALTER TABLE `cadas_func`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

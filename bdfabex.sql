-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2023 às 02:34
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdfabex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `pk_id_cliente` int(11) NOT NULL,
  `uk_nm_cliente` varchar(50) NOT NULL,
  `dt_nascimento_cliente` date NOT NULL,
  `cat_sexo_cliente` char(1) NOT NULL,
  `end_logradouro_cliente` varchar(80) NOT NULL,
  `end_bairro_cliente` varchar(40) NOT NULL,
  `end_cidade_cliente` varchar(40) NOT NULL,
  `sg_estado_cliente` char(2) NOT NULL,
  `nu_telefone_cliente` varchar(15) DEFAULT NULL,
  `email_cliente` varchar(80) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`pk_id_cliente`, `uk_nm_cliente`, `dt_nascimento_cliente`, `cat_sexo_cliente`, `end_logradouro_cliente`, `end_bairro_cliente`, `end_cidade_cliente`, `sg_estado_cliente`, `nu_telefone_cliente`, `email_cliente`, `senha`) VALUES
(2, 'Israel', '1998-11-01', 'M', 'Rua do nada, 123', 'Marco zero', 'Saoviselva', 'SP', '13996280335', 'rael.teste', 'rael123'),
(3, 'Teste', '2000-12-01', 'm', 'Rua do nada', 'asdadsa', '', 'sp', '12996280335', 'teste@tester', '123456'),
(4, 'Teste 2', '2001-11-11', 'M', 'Rua Biroliro', 'farc', 'grozza', 'sp', '13996280335', 'teste@testador', 'Y??)]҃5'),
(5, 'leandro', '1990-10-10', 'M', 'Rua Blablabla', 'Xxx', 'Praia Grande', 'SP', '13999999999', 'leandro@gmail.com', '?ob????');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`pk_id_cliente`),
  ADD UNIQUE KEY `email_cliente` (`email_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `pk_id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

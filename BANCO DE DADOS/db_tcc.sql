-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2022 às 03:31
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
-- Banco de dados: `db_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendausu`
--

CREATE DATABASE DB_TCC;

USE DB_TCC;

CREATE TABLE `agendausu` (
  `Cod_Agenda` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_servico` int(11) NOT NULL,
  `data_1` date NOT NULL,
  `horario` time NOT NULL,
  `obs` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_usuario`
--

CREATE TABLE `agenda_usuario` (
  `Cod_Agenda` int(11) NOT NULL,
  `data_1` date NOT NULL,
  `horario` time NOT NULL,
  `obs` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `genero` varchar(9) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario1`
--

CREATE TABLE `funcionario1` (
  `cod_func` int(11) NOT NULL,
  `emai_func` varchar(40) NOT NULL,
  `senha_func` varchar(9) NOT NULL,
  `cod_servico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario1`
--

INSERT INTO `funcionario1` (`cod_func`, `emai_func`, `senha_func`, `cod_servico`) VALUES
(1, 'jucimara.acucena@gmail.com', 'acucena15', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `cod_servico` int(11) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `tipo_servico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`cod_servico`, `descricao`, `preco`, `imagem`, `tipo_servico`) VALUES
(1, 'Cabelo', 49.9, NULL, NULL),
(2, 'Unhas', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_funcionario`
--

CREATE TABLE `servico_funcionario` (
  `cod_servico_funcionario` int(11) NOT NULL,
  `cod_func` int(11) DEFAULT NULL,
  `tipo_servico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_servico`
--

CREATE TABLE `tipo_servico` (
  `cod_tipo_servico` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_servico`
--

INSERT INTO `tipo_servico` (`cod_tipo_servico`, `descricao`) VALUES
(1, 'Unhas'),
(2, 'Cabelo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendausu`
--
ALTER TABLE `agendausu`
  ADD PRIMARY KEY (`Cod_Agenda`),
  ADD KEY `fk_cod_cliente_agenda` (`cod_cliente`),
  ADD KEY `fk_cod_servico` (`cod_servico`);

--
-- Índices para tabela `agenda_usuario`
--
ALTER TABLE `agenda_usuario`
  ADD PRIMARY KEY (`Cod_Agenda`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Índices para tabela `funcionario1`
--
ALTER TABLE `funcionario1`
  ADD PRIMARY KEY (`cod_func`),
  ADD KEY `fk_cod_ser_func` (`cod_servico`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod_servico`),
  ADD KEY `fk_tipo_servico` (`tipo_servico`);

--
-- Índices para tabela `servico_funcionario`
--
ALTER TABLE `servico_funcionario`
  ADD PRIMARY KEY (`cod_servico_funcionario`),
  ADD KEY `fk_tipo_servico_func` (`tipo_servico`),
  ADD KEY `fk_cod_func` (`cod_func`);

--
-- Índices para tabela `tipo_servico`
--
ALTER TABLE `tipo_servico`
  ADD PRIMARY KEY (`cod_tipo_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendausu`
--
ALTER TABLE `agendausu`
  MODIFY `Cod_Agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `agenda_usuario`
--
ALTER TABLE `agenda_usuario`
  MODIFY `Cod_Agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionario1`
--
ALTER TABLE `funcionario1`
  MODIFY `cod_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servico_funcionario`
--
ALTER TABLE `servico_funcionario`
  MODIFY `cod_servico_funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_servico`
--
ALTER TABLE `tipo_servico`
  MODIFY `cod_tipo_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendausu`
--
ALTER TABLE `agendausu`
  ADD CONSTRAINT `fk_cod_cliente_agenda` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`Cod_Cliente`),
  ADD CONSTRAINT `fk_cod_servico` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod_servico`);

--
-- Limitadores para a tabela `funcionario1`
--
ALTER TABLE `funcionario1`
  ADD CONSTRAINT `fk_cod_ser_func` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod_servico`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `fk_tipo_servico` FOREIGN KEY (`tipo_servico`) REFERENCES `tipo_servico` (`cod_tipo_servico`);

--
-- Limitadores para a tabela `servico_funcionario`
--
ALTER TABLE `servico_funcionario`
  ADD CONSTRAINT `fk_cod_func` FOREIGN KEY (`cod_func`) REFERENCES `funcionario1` (`cod_func`),
  ADD CONSTRAINT `fk_tipo_servico_func` FOREIGN KEY (`tipo_servico`) REFERENCES `tipo_servico` (`cod_tipo_servico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

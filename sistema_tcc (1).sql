-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2025 às 20:41
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_aluno`
--

CREATE TABLE `agenda_aluno` (
  `id` int(11) NOT NULL,
  `agenda_id` int(11) DEFAULT NULL,
  `aluno_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_tcc`
--

CREATE TABLE `agenda_tcc` (
  `id` int(11) NOT NULL,
  `data_hora` datetime NOT NULL,
  `local` varchar(100) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `nota_final` decimal(4,2) DEFAULT NULL,
  `aprovado` enum('Sim','Não') DEFAULT NULL,
  `tipo_tcc_id` int(11) DEFAULT NULL,
  `orientador_id` int(11) DEFAULT NULL,
  `convidado1_id` int(11) DEFAULT NULL,
  `convidado2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ra` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_tcc`
--

CREATE TABLE `tipo_tcc` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda_aluno`
--
ALTER TABLE `agenda_aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agenda_id` (`agenda_id`),
  ADD KEY `aluno_id` (`aluno_id`);

--
-- Índices para tabela `agenda_tcc`
--
ALTER TABLE `agenda_tcc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_tcc_id` (`tipo_tcc_id`),
  ADD KEY `orientador_id` (`orientador_id`),
  ADD KEY `convidado1_id` (`convidado1_id`),
  ADD KEY `convidado2_id` (`convidado2_id`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ra` (`ra`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_tcc`
--
ALTER TABLE `tipo_tcc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda_aluno`
--
ALTER TABLE `agenda_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `agenda_tcc`
--
ALTER TABLE `agenda_tcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_tcc`
--
ALTER TABLE `tipo_tcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda_aluno`
--
ALTER TABLE `agenda_aluno`
  ADD CONSTRAINT `agenda_aluno_ibfk_1` FOREIGN KEY (`agenda_id`) REFERENCES `agenda_tcc` (`id`),
  ADD CONSTRAINT `agenda_aluno_ibfk_2` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`id`);

--
-- Limitadores para a tabela `agenda_tcc`
--
ALTER TABLE `agenda_tcc`
  ADD CONSTRAINT `agenda_tcc_ibfk_1` FOREIGN KEY (`tipo_tcc_id`) REFERENCES `tipo_tcc` (`id`),
  ADD CONSTRAINT `agenda_tcc_ibfk_2` FOREIGN KEY (`orientador_id`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `agenda_tcc_ibfk_3` FOREIGN KEY (`convidado1_id`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `agenda_tcc_ibfk_4` FOREIGN KEY (`convidado2_id`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

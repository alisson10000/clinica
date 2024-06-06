-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2024 às 23:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `idDependente` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `nomeDependente` varchar(100) NOT NULL,
  `nascimentoDependente` date NOT NULL,
  `emailDependente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `dependentes`
--

INSERT INTO `dependentes` (`idDependente`, `idPaciente`, `nomeDependente`, `nascimentoDependente`, `emailDependente`) VALUES
(7, 3, 'Lucas', '2024-05-07', 'l@l');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicos`
--

CREATE TABLE `medicos` (
  `idMedico` int(11) NOT NULL,
  `nomeMedico` varchar(100) NOT NULL,
  `crmMedico` varchar(30) NOT NULL,
  `nascimentoMedico` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `medicos`
--

INSERT INTO `medicos` (`idMedico`, `nomeMedico`, `crmMedico`, `nascimentoMedico`) VALUES
(4, 'o', 'o', '2024-05-16'),
(5, 'teste', 'teste ', '2024-05-16'),
(6, 'teste', 'teste ', '2024-05-16'),
(8, 'teste', 'teste ', '2024-05-16'),
(9, 'teste', 'teste ', '2024-05-16'),
(10, 'teste', 'teste ', '2024-05-16'),
(11, 'teste', 'teste ', '2024-05-16'),
(12, 'teste', 'teste ', '2024-05-16'),
(13, 'teste', 'teste ', '2024-05-16'),
(14, 'qwer', 'qwer ', '2024-05-15'),
(16, 'asdf', 'asdfasf ', '2024-05-16'),
(17, 'zxcv', 'zxcv ', '2024-05-16'),
(18, 'sdfg', 'sdfg ', '2024-05-01'),
(19, 'sdfg', 'sdfg ', '2024-05-16'),
(20, 'teste', 'teste2 ', '2024-05-16'),
(21, 'testes', 'teste ', '2024-05-16'),
(22, 'testes', 'testesdfgsdfgdfsg ', '2024-05-16'),
(23, 'agora', 'agora ', '2024-05-16'),
(24, '', ' ', '0000-00-00'),
(25, 'sdgf', '34534 ', '2024-05-22'),
(26, 'asdfdas', '456456 ', '2024-05-15'),
(27, 'twerwetewrt', '8768678687676876768 ', '2024-05-01'),
(28, 'adsf', '1231231 ', '2024-05-08'),
(29, 'wert', 'werte ', '2024-05-01'),
(30, 'wert235', '34252 ', '2024-05-01'),
(31, 'erwtwer', 'wetrwe ', '2024-05-15'),
(32, 'asf', '4564 ', '2024-05-21'),
(33, 'marcelo', '3245345345 ', '2001-05-21'),
(34, 'dfgh', 'dfgh ', '2024-06-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicos_consultam_pacientes`
--

CREATE TABLE `medicos_consultam_pacientes` (
  `idMedicoConsultamPaciente` int(11) NOT NULL,
  `idMedico` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `dataConsulta` date NOT NULL,
  `descricaoConsulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `nomePaciente` varchar(100) NOT NULL,
  `nascimentoPaciente` date NOT NULL,
  `emailPaciente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `nomePaciente`, `nascimentoPaciente`, `emailPaciente`) VALUES
(3, 'João', '1999-05-14', 'j@j'),
(4, 'asdf', '2024-05-21', 'asdf'),
(5, 'asdfadsf', '2024-05-14', 'a@a'),
(7, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `loginUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(50) NOT NULL,
  `roleUsuario` enum('ADMINISTRADOR','BASICO','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `loginUsuario`, `senhaUsuario`, `roleUsuario`) VALUES
(1, 'Alisson Lima De Souza', 'a', 'a', 'ADMINISTRADOR'),
(7, 'maria', 'b', 'b', 'BASICO'),
(9, 'eryter', 'c', 'c', 'ADMINISTRADOR');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dependentes`
--
ALTER TABLE `dependentes`
  ADD PRIMARY KEY (`idDependente`),
  ADD KEY `indexIdPaciente` (`idPaciente`);

--
-- Índices de tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idMedico`);

--
-- Índices de tabela `medicos_consultam_pacientes`
--
ALTER TABLE `medicos_consultam_pacientes`
  ADD PRIMARY KEY (`idMedicoConsultamPaciente`),
  ADD KEY `indexIdMedico` (`idMedico`),
  ADD KEY `indexIdPaciente` (`idPaciente`);

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `loginUsuario` (`loginUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dependentes`
--
ALTER TABLE `dependentes`
  MODIFY `idDependente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `medicos_consultam_pacientes`
--
ALTER TABLE `medicos_consultam_pacientes`
  MODIFY `idMedicoConsultamPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `dependentes`
--
ALTER TABLE `dependentes`
  ADD CONSTRAINT `dependentes_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `medicos_consultam_pacientes`
--
ALTER TABLE `medicos_consultam_pacientes`
  ADD CONSTRAINT `medicos_consultam_pacientes_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicos_consultam_pacientes_ibfk_2` FOREIGN KEY (`idMedico`) REFERENCES `medicos` (`idMedico`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

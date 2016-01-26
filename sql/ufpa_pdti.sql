-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Jan 25, 2016 as 01:49 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.4.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ufpa_pdti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `objetivo` varchar(40) NOT NULL,
  `observacao` text NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFim` date NOT NULL,
  `ordem` int(11) NOT NULL,
  `idProcesso` int(11) NOT NULL,
  `idPerfilResponsavel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPerfilResponsavel` (`idPerfilResponsavel`),
  KEY `idProcesso` (`idProcesso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `atividade`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `modeloprocessosisp`
--

CREATE TABLE IF NOT EXISTS `modeloprocessosisp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `modeloprocessosisp`
--

INSERT INTO `modeloprocessosisp` (`id`, `descricao`, `status`) VALUES
(1, 'Elaboração', 'ativo'),
(2, 'Acompanhamento', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelosubprocessosisp`
--

CREATE TABLE IF NOT EXISTS `modelosubprocessosisp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(40) NOT NULL,
  `ordem` int(11) NOT NULL,
  `idProcessoSISP` int(11) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProcessoSISP` (`idProcessoSISP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `modelosubprocessosisp`
--

INSERT INTO `modelosubprocessosisp` (`id`, `descricao`, `ordem`, `idProcessoSISP`, `dataCadastro`) VALUES
(1, 'Preparação', 1, 1, '2016-01-25 09:12:01'),
(2, 'Diagnóstico', 2, 1, '2016-01-25 09:12:01'),
(3, 'Planejamento', 3, 1, '2016-01-25 09:12:01'),
(4, 'Planejamento', 1, 2, '2016-01-25 09:12:01'),
(5, 'Monitoramento', 2, 2, '2016-01-25 09:12:01'),
(6, 'Avaliação Parcial', 3, 2, '2016-01-25 09:12:01'),
(7, 'Avaliação Final', 4, 2, '2016-01-25 09:12:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pdti`
--

CREATE TABLE IF NOT EXISTS `pdti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `anoInicial` int(4) NOT NULL,
  `anoFinal` int(4) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pdti`
--

INSERT INTO `pdti` (`id`, `identificador`, `descricao`, `anoInicial`, `anoFinal`, `status`) VALUES
(1, 'PDTI 2016-2021', 'Este é o PDTI vigente da universidade', 2016, 2021, 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `descricao`) VALUES
(1, 'Autoridade Máxima'),
(2, 'Equipe de Elaboração do PDTI'),
(3, 'Comitê de TI'),
(4, 'Consultas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE IF NOT EXISTS `processo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(40) NOT NULL,
  `idModeloSubProcesso` int(11) NOT NULL,
  `idPDTI` int(11) NOT NULL,
  `idStatus` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idModeloSubProcesso` (`idModeloSubProcesso`),
  KEY `idPDTI` (`idPDTI`),
  KEY `idStatus` (`idStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`id`, `status`, `idModeloSubProcesso`, `idPDTI`, `idStatus`) VALUES
(1, '1', 1, 1, 1),
(2, '1', 1, 1, 1),
(3, '1', 1, 1, 1),
(4, '1', 2, 1, 1),
(5, '1', 2, 1, 1),
(6, '1', 2, 1, 1),
(7, '1', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacaoprocesso`
--

CREATE TABLE IF NOT EXISTS `situacaoprocesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `situacaoprocesso`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `descricao`) VALUES
(1, 'Não Iniciado'),
(2, 'Em andamento'),
(3, 'Concluído'),
(4, 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `idAtividade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAtividade` (`idAtividade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `tarefas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `admin` smallint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `login`, `senha`, `status`, `dataCadastro`, `admin`) VALUES
(1, 'Jorge Luiz Vasconcelos', 'jorge@ufpa.br', 'jorge', '123', 'ativo', '2016-01-01 00:00:00', 1),
(2, 'Joana Vasconcelos de Lima', 'joana@ufpa.br', 'joana', '123', 'ativo', '2016-01-01 00:00:00', 0),
(3, 'Ana Vasconcelos de Lima', 'ana@ufpa.br', 'ana', '123', 'ativo', '2016-01-01 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariopdti`
--

CREATE TABLE IF NOT EXISTS `usuariopdti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idPdti` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idPdti` (`idPdti`),
  KEY `idPerfil` (`idPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuariopdti`
--

INSERT INTO `usuariopdti` (`id`, `idUsuario`, `idPdti`, `idPerfil`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_ibfk_3` FOREIGN KEY (`idProcesso`) REFERENCES `processo` (`id`),
  ADD CONSTRAINT `atividade_ibfk_2` FOREIGN KEY (`idPerfilResponsavel`) REFERENCES `perfil` (`id`);

--
-- Restrições para a tabela `modelosubprocessosisp`
--
ALTER TABLE `modelosubprocessosisp`
  ADD CONSTRAINT `modelosubprocessosisp_ibfk_1` FOREIGN KEY (`idProcessoSISP`) REFERENCES `modeloprocessosisp` (`id`);

--
-- Restrições para a tabela `processo`
--
ALTER TABLE `processo`
  ADD CONSTRAINT `processo_ibfk_3` FOREIGN KEY (`idStatus`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `processo_ibfk_1` FOREIGN KEY (`idModeloSubProcesso`) REFERENCES `modelosubprocessosisp` (`id`),
  ADD CONSTRAINT `processo_ibfk_2` FOREIGN KEY (`idPDTI`) REFERENCES `pdti` (`id`);

--
-- Restrições para a tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD CONSTRAINT `tarefas_ibfk_1` FOREIGN KEY (`idAtividade`) REFERENCES `atividade` (`id`);

--
-- Restrições para a tabela `usuariopdti`
--
ALTER TABLE `usuariopdti`
  ADD CONSTRAINT `usuariopdti_ibfk_3` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`id`),
  ADD CONSTRAINT `usuariopdti_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuariopdti_ibfk_2` FOREIGN KEY (`idPdti`) REFERENCES `pdti` (`id`);

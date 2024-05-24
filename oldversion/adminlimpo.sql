-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Maio-2023 às 12:16
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adminlimpo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adminuser`
--

DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE IF NOT EXISTS `adminuser` (
  `Codadminuser` int(11) NOT NULL AUTO_INCREMENT,
  `Login` text CHARACTER SET latin1 NOT NULL,
  `Senha` text CHARACTER SET latin1 NOT NULL,
  `Nivel` int(11) NOT NULL,
  `CPF` text CHARACTER SET latin1 NOT NULL,
  `NomeCompleto` text CHARACTER SET latin1 NOT NULL,
  `Telefone` text CHARACTER SET latin1 NOT NULL,
  `Celular` text CHARACTER SET latin1 NOT NULL,
  `Email` text CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  `dataCriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CodUnidade` int(11) NOT NULL,
  PRIMARY KEY (`Codadminuser`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adminuser`
--

INSERT INTO `adminuser` (`Codadminuser`, `Login`, `Senha`, `Nivel`, `CPF`, `NomeCompleto`, `Telefone`, `Celular`, `Email`, `status`, `dataCriado`, `CodUnidade`) VALUES
(1, 'administrador', '$2y$10$U6aq5//vcmZVn7.O0sLKZOe6RNXuSHTzII0XP2.T.o5FsttNkuPr2', 1, '418.307.748-67', 'Admintrador1', '(11) 4400-4400', '', 'Projab@gmail.com', 1, '2017-09-19 21:24:03', 1),
(7, '000.000.000-00', '$2y$10$DlIz9k1YigKQvrnPf6EB4OVYAC3hjqoGDZINlW5e8bESYAYT4J5my', 2, '418.307.748-67', 'LUIZA SOARES SANTOS', '(11) 98227-4180', '(11) 11111-1111', 'celsojrbr@gmail.com', 0, '2023-05-19 22:00:33', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loghistorico`
--

DROP TABLE IF EXISTS `loghistorico`;
CREATE TABLE IF NOT EXISTS `loghistorico` (
  `CodLog` int(11) NOT NULL AUTO_INCREMENT,
  `Ip` text NOT NULL,
  `CodUser` int(11) NOT NULL,
  `User` text NOT NULL,
  `Pc` text NOT NULL,
  `comando` text NOT NULL,
  `data` timestamp NOT NULL,
  `texto` text NOT NULL,
  `DadosAtualizados` text,
  `DadosAnteriores` text,
  PRIMARY KEY (`CodLog`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loghistorico`
--

INSERT INTO `loghistorico` (`CodLog`, `Ip`, `CodUser`, `User`, `Pc`, `comando`, `data`, `texto`, `DadosAtualizados`, `DadosAnteriores`) VALUES
(1, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:15:27', 'Administrador logado:1', NULL, NULL),
(2, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:15:28', 'Administrador logado:1', NULL, NULL),
(3, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:15:30', 'Administrador logado:1', NULL, NULL),
(4, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:17:07', 'Administrador logado:1', NULL, NULL),
(5, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:19:08', 'Administrador logado:1', NULL, NULL),
(6, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:19:08', 'Administrador logado:1', NULL, NULL),
(7, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:19:09', 'Administrador logado:1', NULL, NULL),
(8, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:22:50', 'Administrador logado:1', NULL, NULL),
(9, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:24:54', 'Administrador logado:1', NULL, NULL),
(10, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:37:53', 'Administrador logado:1', NULL, NULL),
(11, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:37:56', 'Administrador logado:1', NULL, NULL),
(12, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:41:30', 'Administrador logado:1', NULL, NULL),
(13, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:57:06', 'Administrador logado:1', NULL, NULL),
(14, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:58:14', 'Administrador logado:1', NULL, NULL),
(15, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 20:59:15', 'Administrador logado:1', NULL, NULL),
(16, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 21:19:07', 'Administrador logado:1', NULL, NULL),
(17, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 21:23:59', 'Administrador logado:1', NULL, NULL),
(18, 'publicidade05', 1, 'Admintrador', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 21:24:30', 'Administrador logado:1', NULL, NULL),
(19, '127.0.0.1 port >61673', 1, 'Admintrador', 'publicidade05', '5', '2023-05-19 21:57:14', 'Adicionou o administrador', NULL, NULL),
(20, '127.0.0.1 port >61695', 1, 'Admintrador', 'publicidade05', '5', '2023-05-19 22:00:33', 'Adicionou o administrador', NULL, NULL),
(21, '127.0.0.1 port >61695', 1, 'Admintrador', 'publicidade05', '5', '2023-05-19 22:00:37', 'Excluio o administrador :7', NULL, NULL),
(22, '127.0.0.1 port >61747', 1, 'Admintrador', 'publicidade05', '5', '2023-05-19 22:07:20', 'Editou o administrador :1', NULL, NULL),
(23, '127.0.0.1 port >61753', 1, 'Admintrador', 'publicidade05', '5', '2023-05-19 22:07:42', 'Editou o administrador :1', NULL, NULL),
(24, 'publicidade05', 1, 'Admintrador1', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-19 22:07:52', 'Administrador logado:1', NULL, NULL),
(25, '127.0.0.1 port >61764', 1, 'Admintrador1', 'publicidade05', '5', '2023-05-19 22:08:04', 'Editou o administrador :1', NULL, NULL),
(26, 'publicidade05', 1, 'Admintrador1', 'publicidade05', 'Usuario logou no sistema do site', '2023-05-22 11:43:09', 'Administrador logado:1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

DROP TABLE IF EXISTS `unidade`;
CREATE TABLE IF NOT EXISTS `unidade` (
  `CodUnidade` int(11) NOT NULL AUTO_INCREMENT,
  `NomeUnidade` text NOT NULL,
  `EndUnidade` text NOT NULL,
  `CepUnidade` text NOT NULL,
  `telefoneUnidade` text NOT NULL,
  `telefone2Unidade` text NOT NULL,
  `bairro` text NOT NULL,
  `Fotounidade` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Responsavel` int(11) NOT NULL,
  PRIMARY KEY (`CodUnidade`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`CodUnidade`, `NomeUnidade`, `EndUnidade`, `CepUnidade`, `telefoneUnidade`, `telefone2Unidade`, `bairro`, `Fotounidade`, `status`, `dataCriado`, `Responsavel`) VALUES
(1, 'PROJAB – Projeto de Ação Social de Barueri', 'Rua Vanusa, 44, Jardim Audir, Jardim Audir, Barueri', '06433-010', '(11) 4375-4419', '(11) 4375-4419', '(11) 4375-4419', '', 1, '2022-04-29 13:22:46', 1),
(2, 'EMM Nelson Marques', 'Estrada Otacílio Alves Martins, 75 Parque Imperial, Barueri. CEP 06458-070.', '', '(11) 4191-1709 (11) 4195-4337', '', '', '', 1, '2022-07-20 13:15:03', 1),
(3, 'EMM Luzia Maria da Conceição Lima', 'Av. Barueri Mirim, 175 Jardim Belval, Barueri. CEP 06422-140. ', '', '(11) 4162-0310  (11) 4162-0332', '', '', '', 1, '2022-07-20 13:18:53', 1),
(4, 'EMM Maria do Carmo da Silva - Dona Carminha', 'Prolongamento da Rua Goiania, 299 Jardim do Líbano, Barueri. CEP 06448-130. ', '', '(11) 2680-9761', '', '', '', 1, '2022-07-20 13:19:38', 1),
(5, 'EMM Professora Maria José Damasceno Santos', 'Rua Campos Sales, 1648 - Vila Boa Vista, Barueri - SP, 06411-150 ', '', ' (11) 5199-3108 | (11) 5199-3107', '', '', '', 1, '2022-07-20 13:29:47', 1),
(6, 'EMM Aracy Martins de Lima', 'Av. Henrique Gonçalves Baptista, 457 - Jardim Belval, Barueri - SP, 06420-130 ', '', '(11) 4375-4419 ou 4375-4420', '', '', '', 1, '2022-07-20 13:30:14', 1),
(7, 'EMM Ilda Martins Holanda da Silva', 'Rua Regina, 279, Parque dos Camargos, Barueri-SP, CEP 06436-100. ', '', ' (11) 2321-2490', '', '', '', 1, '2022-07-20 13:30:44', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Fev-2024 às 00:28
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `yesweteach`
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
(1, 'administrador', '$2y$10$jwnIGYOr6rmlEwsiFQp/FOROJqbp7CDPwpUVNgMD7TwN45aF5vJVC', 1, '418.307.748-67', 'Yes, we teach!', '(11) 4400-4400', '', 'Yes, we teach!', 1, '2017-09-19 21:24:03', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

DROP TABLE IF EXISTS `depoimento`;
CREATE TABLE IF NOT EXISTS `depoimento` (
  `CodDepoimento` int(11) NOT NULL AUTO_INCREMENT,
  `NomeDepoente` text NOT NULL,
  `Depoimento` text NOT NULL,
  `Estrela` int(11) NOT NULL DEFAULT '5',
  `LocalImagem` text NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `DataCriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataAtualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CodDepoimento`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `depoimento`
--

INSERT INTO `depoimento` (`CodDepoimento`, `NomeDepoente`, `Depoimento`, `Estrela`, `LocalImagem`, `Status`, `DataCriado`, `DataAtualizado`) VALUES
(1, 'Yasmin Lanza', '\"Acredito firmemente que evolui de maneira significativa no inglês, aprendi diversas coisas nesse primeiro ano que eu nem imaginava antes, isso tudo aconteceu sempre com muito suporte de questões, dúvidas, acertos e erros abertos para que esse caminho fosse percorrido da maneira mais explicativa e cristalina possível! Métodos e materiais incríveis, professores dedicados e a motivação que é passada desde a matrícula na Yes até as aulas, para que a gente consiga aprender de verdade um novo idioma e se sentir bem e realizado com cada etapa!\"', 5, 'imgs/Depoimentos/yesweteach.jpg', 1, '2024-02-16 13:11:35', '2024-02-19 19:20:01'),
(2, 'Lohraine Fonseca', '\"A evolução do inicio até hoje é bizarra. Hoje eu já consigo formar algumas frases (poucas), mas consigo. Antes eu só entendia a tradução da palavra \"seca\", sem conseguir entender os conectores (in, on, at, the, a, an...). Confesso que pelo excesso de trabalho, nao consegui me dedicar como gostaria, mas prometo melhorar isso em 2024. Sobre vocês: SEM PALAVRAS! Incriveis demais!\"', 5, 'imgs/Depoimentos/yesweteach.jpg', 1, '2024-02-16 13:11:35', '2024-02-19 19:19:46'),
(3, 'Leonardo Lacerda', '\"As aulas na Yes foram fundamentais para que eu me sinta mais confiante ao falar inglês, meu vocabulário sempre foi voltado para temas técnicos relacionados ao meu trabalho e nas aulas da Yes eu tive a abertura de explorar inúmeras expressões sobre como me comunicar, posicionar e expressar meus pensamentos pessoais. Hoje mesmo precisei desenvolver um small talk com um colega de trabalho da Irlanda e foi muito bom perceber que consigo falar de assuntos diversos, coisa que há 6 meses parecia extremamente difícil para mim.\"', 5, 'imgs/Depoimentos/yesweteach.jpg', 1, '2024-02-16 13:11:35', '2024-02-19 19:17:52'),
(4, 'Suellen Chagas', '\"Quando comecei no mundo do inglês, me sentia perdida e incapaz, mesmo vindo de outra escola. Com a Yes além de me sentir segura em aula para errar, acertar, brincar, é nítido o meu desenvolvimento. Metodologia que acompanha o aluno, sem destruir o nosso psicológico. Eu evoluí sim, principalmente quando ouço alguma música e consigo entender o significado dela., ou assisto uma propaganda em inglês e entendo corretamente o que foi dito e fico horas pensando Finalmente está acontecendo! O inglês está chegando pra mim.\"', 5, 'imgs/Depoimentos/yesweteach.jpg', 1, '2024-02-16 13:11:35', '2024-02-19 19:32:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoessite`
--

DROP TABLE IF EXISTS `informacoessite`;
CREATE TABLE IF NOT EXISTS `informacoessite` (
  `AutorSite` text,
  `Facebook` text,
  `Instagram` text,
  `youtube` text,
  `Email` text,
  `telefone` text,
  `Whatsapp` text,
  `TituloBase` text,
  `DescricaoBase` text,
  `app_id` text,
  `BDToken` text,
  `articletag` text,
  `keywords` text,
  `TagExtrasImplementa` text,
  `ScriptExterno` text,
  `LogoMarcaDesktop` text,
  `LogoMarcaMobile` text,
  `favico` text,
  `Status` int(11) NOT NULL DEFAULT '1',
  `DataCriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataAtualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `codInformacoessite` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codInformacoessite`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `informacoessite`
--

INSERT INTO `informacoessite` (`AutorSite`, `Facebook`, `Instagram`, `youtube`, `Email`, `telefone`, `Whatsapp`, `TituloBase`, `DescricaoBase`, `app_id`, `BDToken`, `articletag`, `keywords`, `TagExtrasImplementa`, `ScriptExterno`, `LogoMarcaDesktop`, `LogoMarcaMobile`, `favico`, `Status`, `DataCriado`, `DataAtualizado`, `codInformacoessite`) VALUES
('Yes, we teach!', 'https://www.facebook.com/p/yesweteach-100068508494651/', 'https://www.instagram.com/yes.we.teach/', 'https://www.youtube.com/channel/UCV2uWVnog1PVSuzREHnn1xw', 'administrativo@yesweteach.com.br', '(11)93051-8143', '(11)93051-8143', 'Yes, we teach!', 'Transforme sua jornada educacional na Yes, we teach! Inovação no aprendizado, soluções personalizadas para integração diária. Descubra a diferença conosco!', NULL, 'IGQWRQTnBweHduRDdvOWVzVUZAYT2FuZAFdITUR6bndIeno3M1MxYVNnc0tmazhZAUTVoUG53aEZAFTDRQUk80V0VjUTQtaFNLZAlFNd0pueUpDVFhBTnE3ekg3VEZArbVp6clpKQzBuZAU5zV2lzMGEzVWJ5UUM5WTdVazQZD', NULL, NULL, NULL, NULL, 'imgs/Logo yes.png', 'imgs/Logo yes.png', 'imgs/Logo yes.png', 1, '2024-02-02 19:09:19', '2024-02-22 22:28:46', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loghistorico`
--

INSERT INTO `loghistorico` (`CodLog`, `Ip`, `CodUser`, `User`, `Pc`, `comando`, `data`, `texto`, `DadosAtualizados`, `DadosAnteriores`) VALUES
(31, 'publicidade05', 1, 'Yes, we teach!', 'publicidade05', 'Usuario logou no sistema do site', '2024-02-14 18:43:29', 'Administrador logado:1', NULL, NULL),
(32, 'publicidade05', 1, 'Yes, we teach!', 'publicidade05', 'Usuario logou no sistema do site', '2024-02-16 17:54:22', 'Administrador logado:1', NULL, NULL),
(33, 'publicidade05', 1, 'Yes, we teach!', 'publicidade05', 'Usuario logou no sistema do site', '2024-02-16 18:26:15', 'Administrador logado:1', NULL, NULL),
(30, 'publicidade05', 1, 'Yes, we teach!', 'publicidade05', 'Usuario logou no sistema do site', '2024-02-01 19:59:57', 'Administrador logado:1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prematricula`
--

DROP TABLE IF EXISTS `prematricula`;
CREATE TABLE IF NOT EXISTS `prematricula` (
  `codprematricula` int(11) NOT NULL AUTO_INCREMENT,
  `NomeCompleto` text NOT NULL,
  `Email` text NOT NULL,
  `CPF` text NOT NULL,
  `Telefone` text NOT NULL,
  `Whatsapp` text NOT NULL,
  `NivelIngles` text NOT NULL,
  `ComoConheceu` text NOT NULL,
  `ContePouco` text NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `datacriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`codprematricula`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prematricula`
--

INSERT INTO `prematricula` (`codprematricula`, `NomeCompleto`, `Email`, `CPF`, `Telefone`, `Whatsapp`, `NivelIngles`, `ComoConheceu`, `ContePouco`, `Status`, `datacriado`) VALUES
(5, 'Aparecido Celso de Souza Junior', 'celsojrbr@gmail.com', '418.307.748-67', '(11) 0000-8000', '(11) 98154-4160', '1', '1', 'Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior\r\nAparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior\r\nAparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior\r\nAparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior Aparecido Celso de Souza Junior', 1, '2024-02-15 18:32:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `CodSlide` int(11) NOT NULL AUTO_INCREMENT,
  `NomeSlide` text,
  `Titulo` text,
  `SubTitulo` text,
  `ImagemSlide` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ordenSlide` int(11) NOT NULL,
  `Link` text,
  PRIMARY KEY (`CodSlide`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slide`
--

INSERT INTO `slide` (`CodSlide`, `NomeSlide`, `Titulo`, `SubTitulo`, `ImagemSlide`, `status`, `dataCriado`, `ordenSlide`, `Link`) VALUES
(9, 'Slide2', 'Slide2', 'Slide2', 'blog-1-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(10, 'Slide2', 'Slide2', 'Slide2', 'blog-2-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(11, 'Slide2', 'Slide2', 'Slide2', 'blog-3-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(12, 'Slide2', 'Slide2', 'Slide2', 'blog-4-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(13, 'Slide2', 'Slide2', 'Slide2', 'blog-5-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(14, 'Slide2', 'Slide2', 'Slide2', 'blog-6-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(15, 'Slide2', 'Slide2', 'Slide2', 'blog-1-720x480.jpg', 1, '2024-02-06 18:19:09', 1, '#'),
(16, 'Slide2', 'Slide4', 'Slide3', '8426ff1731ff547a6a70b157a2ab801a.jpg', 0, '2024-02-21 13:22:28', 2, '#');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`CodUnidade`, `NomeUnidade`, `EndUnidade`, `CepUnidade`, `telefoneUnidade`, `telefone2Unidade`, `bairro`, `Fotounidade`, `status`, `dataCriado`, `Responsavel`) VALUES
(1, 'Yes, we teach!', 'Yes, we teach!', 'Yes, we teach!', 'Yes, we teach!', 'Yes, we teach!', 'Yes, we teach!', 'Yes, we teach!', 1, '2022-04-29 13:22:46', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

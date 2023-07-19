-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jul-2023 às 18:26
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_titulo_eleitoral`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pesquisa`
--

DROP TABLE IF EXISTS `cadastro_pesquisa`;
CREATE TABLE IF NOT EXISTS `cadastro_pesquisa` (
  `id_pesquisa` int NOT NULL AUTO_INCREMENT,
  `id_candidato` int NOT NULL,
  `id_funcao` int NOT NULL,
  `id_estado` char(2) NOT NULL,
  `id_cidade` int NOT NULL,
  `obs` varchar(150) DEFAULT NULL,
  `cpf_usuario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pesquisa`),
  KEY `id_candidato` (`id_candidato`),
  KEY `id_funcao` (`id_funcao`)
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro_pesquisa`
--

INSERT INTO `cadastro_pesquisa` (`id_pesquisa`, `id_candidato`, `id_funcao`, `id_estado`, `id_cidade`, `obs`, `cpf_usuario`) VALUES
(130, 52, 3, 'AP', 23, '', '097.641.719-74'),
(129, 37, 2, 'SP', 248, '', '097.641.719-74'),
(128, 48, 1, 'SC', 235, '', '097.641.719-74'),
(127, 47, 1, 'SC', 235, '', '581.070.450-68'),
(137, 48, 1, 'SC', 235, '', '092.504.469-50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `id_candidato` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `id_cidade` int NOT NULL,
  `id_estado` varchar(2) NOT NULL,
  `id_partido` int NOT NULL,
  `id_funcao` int DEFAULT NULL,
  PRIMARY KEY (`id_candidato`),
  KEY `id_cidade` (`id_cidade`),
  KEY `id_partido` (`id_partido`),
  KEY `id_funcao` (`id_funcao`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id_candidato`, `nome`, `dt_nascimento`, `id_cidade`, `id_estado`, `id_partido`, `id_funcao`) VALUES
(37, 'Teodósio Furtado', '1986-06-01', 248, 'SP', 9, 2),
(38, 'Maria Mariana', '1976-03-06', 244, 'SP', 9, 2),
(39, 'Paulo Ribeiro Fagundes', '1999-01-03', 243, 'SP', 7, 2),
(48, 'Bruno Berdinazzi Mezenga', '1957-07-24', 235, 'SC', 7, 1),
(47, 'Walter White', '1958-09-07', 235, 'SC', 10, 1),
(46, 'Paulo Ribeiro Fagundes', '1968-03-26', 235, 'SC', 2, 1),
(51, 'João Gomes', '1959-07-16', 20, 'AL', 2, 3),
(52, 'Nelio Alves', '1952-06-21', 23, 'AP', 3, 3),
(54, 'Rodolfo Martins', '1950-06-23', 6, 'AC', 10, 3),
(58, 'ass', '1950-11-11', 167, 'PE', 10, 1),
(59, 'augusto', '1965-11-30', 167, 'PE', 3, 1),
(60, 'a', '2023-07-06', 6, 'AC', 10, 2),
(61, 'b', '2012-10-30', 6, 'AC', 2, 2),
(62, 'Bruno Michels Alves', '2012-10-30', 61, 'DF', 10, 2),
(63, 'asta', '1960-01-01', 25, 'AP', 3, 3),
(64, 'ggg', '1980-12-31', 51, 'CE', 1, 1),
(65, 'Bruno', '2004-01-19', 262, 'TO', 8, 2),
(66, 'dsda', '2000-12-22', 52, 'CE', 1, 1),
(67, 'Bruno Michels Alves', '1963-01-01', 179, 'PI', 10, 1),
(68, 'Herbert Richards', '2001-01-01', 24, 'AP', 7, 1),
(69, 'Leandro Tomás', '1903-02-05', 11, 'AL', 9, 2),
(70, 'Beatriz', '2000-03-03', 14, 'AL', 9, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int NOT NULL,
  `nome_cidade` varchar(150) NOT NULL,
  `id_estado` char(2) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `id_estado` (`id_estado`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome_cidade`, `id_estado`) VALUES
(1, 'Rio Branco ', 'AC'),
(2, 'Cruzeiro do Sul ', 'AC'),
(3, 'Sena Madureira ', 'AC'),
(4, 'Tarauacá ', 'AC'),
(5, 'Feijó ', 'AC'),
(6, 'Brasileia ', 'AC'),
(7, 'Senador Guiomard ', 'AC'),
(8, 'Xapuri ', 'AC'),
(9, 'Capixaba ', 'AC'),
(10, 'Plácido de Castro', 'AC'),
(11, 'Maceió', 'AL'),
(12, 'Arapiraca', 'AL'),
(13, 'Rio Largo', 'AL'),
(14, 'Palmeira dos Índios', 'AL'),
(15, 'Marechal Deodoro', 'AL'),
(16, 'Penedo', 'AL'),
(17, 'Delmiro Gouveia', 'AL'),
(18, 'União dos Palmares', 'AL'),
(19, 'São Miguel dos Campos', 'AL'),
(20, 'Coruripe', 'AL'),
(21, 'Macapá', 'AP'),
(22, 'Santana', 'AP'),
(23, 'Laranjal do Jari', 'AP'),
(24, 'Oiapoque', 'AP'),
(25, 'Porto Grande', 'AP'),
(26, 'Mazagão', 'AP'),
(27, 'Tartarugalzinho', 'AP'),
(28, 'Pedra Branca do Amapari', 'AP'),
(29, 'Vitória do Jari', 'AP'),
(30, 'Amapá', 'AP'),
(31, 'Manaus', 'AM'),
(32, 'Parintins', 'AM'),
(33, 'Itacoatiara', 'AM'),
(34, 'Manacapuru', 'AM'),
(35, 'Coari', 'AM'),
(36, 'Tefé', 'AM'),
(37, 'Tabatinga', 'AM'),
(38, 'São Gabriel da Cachoeira', 'AM'),
(39, 'Maués', 'AM'),
(40, 'Humaitá', 'AM'),
(41, 'Salvador', 'BA'),
(42, 'Feira de Santana', 'BA'),
(43, 'Vitória da Conquista', 'BA'),
(44, 'Camaçari', 'BA'),
(45, 'Itabuna', 'BA'),
(46, 'Juazeiro', 'BA'),
(47, 'Ilhéus', 'BA'),
(48, 'Lauro de Freitas', 'BA'),
(49, 'Jequié', 'BA'),
(50, 'Alagoinhas', 'BA'),
(51, 'Fortaleza', 'CE'),
(52, 'Caucaia', 'CE'),
(53, 'Juazeiro do Norte', 'CE'),
(54, 'Maracanaú', 'CE'),
(55, 'Sobral', 'CE'),
(56, 'Crato', 'CE'),
(57, 'Itapipoca', 'CE'),
(58, 'Maranguape', 'CE'),
(59, 'Iguatu', 'CE'),
(60, 'Quixadá', 'CE'),
(61, 'Brasília', 'DF'),
(62, 'Ceilândia', 'DF'),
(63, 'Taguatinga', 'DF'),
(64, 'Samambaia', 'DF'),
(65, 'Sobradinho', 'DF'),
(66, 'Planaltina', 'DF'),
(67, 'Gama', 'DF'),
(68, 'Recanto das Emas', 'DF'),
(69, 'Santa Maria', 'DF'),
(70, 'Paranoá', 'DF'),
(71, 'Vitória', 'ES'),
(72, 'Vila Velha', 'ES'),
(73, 'Serra', 'ES'),
(74, 'Cariacica', 'ES'),
(75, 'Cachoeiro de Itapemirim', 'ES'),
(76, 'Linhares', 'ES'),
(77, 'São Mateus', 'ES'),
(78, 'Colatina', 'ES'),
(79, 'Guarapari', 'ES'),
(80, 'Aracruz', 'ES'),
(81, 'Goiânia', 'GO'),
(82, 'Aparecida de Goiânia', 'GO'),
(83, 'Anápolis', 'GO'),
(84, 'Rio Verde', 'GO'),
(85, 'Águas Lindas de Goiás', 'GO'),
(86, 'Luziânia', 'GO'),
(87, 'Valparaíso de Goiás', 'GO'),
(88, 'Trindade', 'GO'),
(89, 'Formosa', 'GO'),
(90, 'Novo Gama', 'GO'),
(91, 'São Luís', 'MA'),
(92, 'Imperatriz', 'MA'),
(93, 'São José de Ribamar', 'MA'),
(94, 'Timon', 'MA'),
(95, 'Caxias', 'MA'),
(96, 'Codó', 'MA'),
(97, 'Paço do Lumiar', 'MA'),
(98, 'Açailândia', 'MA'),
(99, 'Bacabal', 'MA'),
(100, 'Balsas', 'MA'),
(101, 'Cuiabá', 'MT'),
(102, 'Várzea Grande', 'MT'),
(103, 'Rondonópolis', 'MT'),
(104, 'Sinop', 'MT'),
(105, 'Tangará da Serra', 'MT'),
(106, 'Cáceres', 'MT'),
(107, 'Sorriso', 'MT'),
(108, 'Lucas do Rio Verde', 'MT'),
(109, 'Primavera do Leste', 'MT'),
(110, 'Barra do Garças', 'MT'),
(111, 'Campo Grande', 'MS'),
(112, 'Dourados', 'MS'),
(113, 'Três Lagoas', 'MS'),
(114, 'Corumbá', 'MS'),
(115, 'Ponta Porã', 'MS'),
(116, 'Campo Verde', 'MS'),
(117, 'Naviraí', 'MS'),
(118, 'Nova Andradina', 'MS'),
(119, 'Sidrolândia', 'MS'),
(120, 'Aquidauana', 'MS'),
(121, 'Belo Horizonte', 'MG'),
(122, 'Uberlândia', 'MG'),
(123, 'Contagem', 'MG'),
(124, 'Juiz de Fora', 'MG'),
(125, 'Betim', 'MG'),
(126, 'Montes Claros', 'MG'),
(127, 'Ribeirão das Neves', 'MG'),
(128, 'Uberaba', 'MG'),
(129, 'Governador Valadares', 'MG'),
(130, 'Ipatinga', 'MG'),
(131, 'Belém', 'PA'),
(132, 'Ananindeua', 'PA'),
(133, 'Santarém', 'PA'),
(134, 'Marabá', 'PA'),
(135, 'Parauapebas', 'PA'),
(136, 'Castanhal', 'PA'),
(137, 'Abaetetuba', 'PA'),
(138, 'Cametá', 'PA'),
(139, 'Marituba', 'PA'),
(140, 'Bragança', 'PA'),
(141, 'João Pessoa', 'PB'),
(142, 'Campina Grande', 'PB'),
(143, 'Santa Rita', 'PB'),
(144, 'Patos', 'PB'),
(145, 'Bayeux', 'PB'),
(146, 'Sousa', 'PB'),
(147, 'Cabedelo', 'PB'),
(148, 'Cajazeiras', 'PB'),
(149, 'Guarabira', 'PB'),
(150, 'Sapé', 'PB'),
(151, 'Curitiba', 'PR'),
(152, 'Londrina', 'PR'),
(153, 'Maringá', 'PR'),
(154, 'Ponta Grossa', 'PR'),
(155, 'Cascavel', 'PR'),
(156, 'São José dos Pinhais', 'PR'),
(157, 'Foz do Iguaçu', 'PR'),
(158, 'Colombo', 'PR'),
(159, 'Guarapuava', 'PR'),
(160, 'Paranaguá', 'PR'),
(161, 'Recife', 'PE'),
(162, 'Jaboatão dos Guararapes', 'PE'),
(163, 'Olinda', 'PE'),
(164, 'Caruaru', 'PE'),
(165, 'Petrolina', 'PE'),
(166, 'Paulista', 'PE'),
(167, 'Cabo de Santo Agostinho', 'PE'),
(168, 'Camaragibe', 'PE'),
(169, 'Garanhuns', 'PE'),
(170, 'Vitória de Santo Antão', 'PE'),
(171, 'Teresina', 'PI'),
(172, 'Parnaíba', 'PI'),
(173, 'Picos', 'PI'),
(174, 'Piripiri', 'PI'),
(175, 'Floriano', 'PI'),
(176, 'Barras', 'PI'),
(177, 'Campo Maior', 'PI'),
(178, 'União', 'PI'),
(179, 'Altos', 'PI'),
(180, 'Esperantina', 'PI'),
(181, 'Rio de Janeiro', 'RJ'),
(182, 'São Gonçalo', 'RJ'),
(183, 'Duque de Caxias', 'RJ'),
(184, 'Nova Iguaçu', 'RJ'),
(185, 'Niterói', 'RJ'),
(186, 'Belford Roxo', 'RJ'),
(187, 'Campos dos Goytacazes', 'RJ'),
(188, 'São João de Meriti', 'RJ'),
(189, 'Petrópolis', 'RJ'),
(190, 'Volta Redonda', 'RJ'),
(191, 'Natal', 'RN'),
(192, 'Mossoró', 'RN'),
(193, 'Parnamirim', 'RN'),
(194, 'São Gonçalo do Amarante', 'RN'),
(195, 'Macaíba', 'RN'),
(196, 'Ceará-Mirim', 'RN'),
(197, 'Caicó', 'RN'),
(198, 'Assu', 'RN'),
(199, 'Currais Novos', 'RN'),
(200, 'Santa Cruz', 'RN'),
(201, 'Porto Alegre', 'RS'),
(202, 'Caxias do Sul', 'RS'),
(203, 'Pelotas', 'RS'),
(204, 'Canoas', 'RS'),
(205, 'Santa Maria', 'RS'),
(206, 'Gravataí', 'RS'),
(207, 'Viamão', 'RS'),
(208, 'Novo Hamburgo', 'RS'),
(209, 'São Leopoldo', 'RS'),
(210, 'Rio Grande', 'RS'),
(211, 'Porto Velho', 'RO'),
(212, 'Ji-Paraná', 'RO'),
(213, 'Ariquemes', 'RO'),
(214, 'Vilhena', 'RO'),
(215, 'Cacoal', 'RO'),
(216, 'Rolim de Moura', 'RO'),
(217, 'Guajará-Mirim', 'RO'),
(218, 'Jaru', 'RO'),
(219, 'Ouro Preto do Oeste', 'RO'),
(220, 'Pimenta Bueno', 'RO'),
(221, 'Boa Vista', 'RR'),
(222, 'Pacaraima', 'RR'),
(223, 'Rorainópolis', 'RR'),
(224, 'Caracaraí', 'RR'),
(225, 'São João da Baliza', 'RR'),
(226, 'Bonfim', 'RR'),
(227, 'Cantá', 'RR'),
(228, 'Mucajaí', 'RR'),
(229, 'Normandia', 'RR'),
(230, 'Amajari', 'RR'),
(231, 'Florianópolis', 'SC'),
(232, 'Joinville', 'SC'),
(233, 'Blumenau', 'SC'),
(234, 'São José', 'SC'),
(235, 'Criciúma', 'SC'),
(236, 'Chapecó', 'SC'),
(237, 'Itajaí', 'SC'),
(238, 'Jaraguá do Sul', 'SC'),
(239, 'Lages', 'SC'),
(240, 'Palhoça', 'SC'),
(241, 'São Paulo', 'SP'),
(242, 'Guarulhos', 'SP'),
(243, 'Campinas', 'SP'),
(244, 'São Bernardo do Campo', 'SP'),
(245, 'Santo André', 'SP'),
(246, 'Osasco', 'SP'),
(247, 'Sorocaba', 'SP'),
(248, 'Ribeirão Preto', 'SP'),
(249, 'Santos', 'SP'),
(250, 'Mauá', 'SP'),
(251, 'Aracaju', 'SE'),
(252, 'Nossa Senhora do Socorro', 'SE'),
(253, 'São Cristóvão', 'SE'),
(254, 'Lagarto', 'SE'),
(255, 'Itabaiana', 'SE'),
(256, 'Estância', 'SE'),
(257, 'Tobias Barreto', 'SE'),
(258, 'Itabaianinha', 'SE'),
(259, 'Simão Dias', 'SE'),
(260, 'Glória', 'SE'),
(261, 'Palmas', 'TO'),
(262, 'Araguaína', 'TO'),
(263, 'Gurupi', 'TO'),
(264, 'Porto Nacional', 'TO'),
(265, 'Paraíso do Tocantins', 'TO'),
(266, 'Guaraí', 'TO'),
(267, 'Colinas do Tocantins', 'TO'),
(268, 'Formoso do Araguaia', 'TO'),
(269, 'Taguatinga', 'TO'),
(270, 'Miracema do Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` char(2) NOT NULL,
  `nome_estado` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `nome_estado`) VALUES
('AC', 'Acre'),
('AL', 'Alagoas'),
('AP', 'Amapá'),
('AM', 'Amazonas'),
('BA', 'Bahia'),
('CE', 'Ceará'),
('DF', 'Distrito Federal'),
('ES', 'Espírito Santo'),
('GO', 'Goiás'),
('MA', 'Maranhão'),
('MT', 'Mato Grosso'),
('MS', 'Mato Grosso do Sul'),
('MG', 'Minas Gerais'),
('PA', 'Pará'),
('PB', 'Paraíba'),
('PR', 'Paraná'),
('PE', 'Pernambuco'),
('PI', 'Piauí'),
('RJ', 'Rio de Janeiro'),
('RN', 'Rio Grande do Norte'),
('RS', 'Rio Grande do Sul'),
('RO', 'Rondônia'),
('RR', 'Roraima'),
('SC', 'Santa Catarina'),
('SP', 'São Paulo'),
('SE', 'Sergipe'),
('TO', 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

DROP TABLE IF EXISTS `funcao`;
CREATE TABLE IF NOT EXISTS `funcao` (
  `id_funcao` int NOT NULL,
  `nome_funcao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_funcao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id_funcao`, `nome_funcao`) VALUES
(1, 'PREFEITO'),
(2, 'GOVERNADOR'),
(3, 'PRESIDENTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partido`
--

DROP TABLE IF EXISTS `partido`;
CREATE TABLE IF NOT EXISTS `partido` (
  `id_partido` int NOT NULL,
  `nm_partido` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_partido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `partido`
--

INSERT INTO `partido` (`id_partido`, `nm_partido`) VALUES
(1, 'PPB - Partido Progressista Brasileiro'),
(2, 'FEN - Frente de Esperança Nacional'),
(3, 'LPD - Liga Popular Democrática'),
(4, 'MCR - Movimento de Construção Renovadora'),
(5, 'UPF - União Popular Federalista'),
(6, 'PML - Partido da Mobilização Liberal'),
(7, 'AVN - Aliança pela Vida Nova'),
(8, 'PRC - Partido Republicano da Cidadania'),
(9, 'PPS - Partido Popular Socialista'),
(10, 'APL - Aliança Progressista Liberal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario1`
--

DROP TABLE IF EXISTS `usuario1`;
CREATE TABLE IF NOT EXISTS `usuario1` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(150) DEFAULT NULL,
  `nome` varchar(150) NOT NULL,
  `senha_usuario` varchar(30) NOT NULL,
  `id_tipo` varchar(10) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `sexo` char(5) DEFAULT NULL,
  `id_estado` char(2) NOT NULL,
  `id_cidade` int NOT NULL,
  `nome_bairro` varchar(150) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `numero_endereco` varchar(20) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  KEY `id_cidade` (`id_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario1`
--

INSERT INTO `usuario1` (`id_usuario`, `nm_usuario`, `nome`, `senha_usuario`, `id_tipo`, `cpf`, `dt_nascimento`, `telefone`, `email`, `sexo`, `id_estado`, `id_cidade`, `nome_bairro`, `endereco`, `numero_endereco`, `complemento`) VALUES
(11, 'usuario2023', 'Bruno Michels Alves', '12345678', 'usuario', '870.467.560-66', '2004-01-19', '(48) 9 9177-8564', 'brunomichelsalves1009@gmail.com', 'Masc', 'SC', 235, 'Bruno', 'Rua Pedro Justino Sabino, 89', '89', ''),
(10, 'user_teste', 'teste', 'bruno123', 'usuario', '097.641.719-74', '2000-05-05', '(22) 2 2222-2222', '1@1.com', 'Masc', 'MA', 100, 'Cristo Redentor', 'Rua Pedro Justino Sabino', '89', 'Ao lado esquerdo da igreja Luterana'),
(8, 'bruno_michels', 'Bruno Michels Alves', '12345678', 'usuario', '092.504.469-50', '2004-01-19', '(48) 9 9177-8564', 'brunomichelsalves119@gmail.com', 'Masc', 'SC', 235, 'Cristo Redentor', 'Rua Pedro Justino Sabino', '89', ''),
(9, 'admin', 'Bruno Michels Alves', '12345678', 'ADM', '581.070.450-68', '2000-01-01', '(48) 9 9177-8564', 'brunomichelsalves1191@gmail.com', 'Masc', 'MA', 99, 'Bruno Michels Alves', 'Rua Pedro Justino Sabino', '1', 'teste'),
(7, 'erikamichels', 'érika michels alves', '09051205', 'usuario', '581.070.450-68', '2004-05-12', '', 'michels14erika@gmail.com', 'Fem', 'SC', 235, 'Cristo Redentor', 'Rua Pedro Justino Sabino', '89', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valida_cpf`
--

DROP TABLE IF EXISTS `valida_cpf`;
CREATE TABLE IF NOT EXISTS `valida_cpf` (
  `cpf` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `valida_cpf`
--

INSERT INTO `valida_cpf` (`cpf`, `status`) VALUES
('092.504.469-50', 'ATIVO'),
('581.070.450-68', 'ATIVO'),
('097.641.719-74', 'ATIVO'),
('110.112.940-95', 'INATIVO'),
('870.467.560-66', 'ATIVO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

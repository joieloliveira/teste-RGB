-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Fev-2021 às 17:05
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testergb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imgdescription`
--

DROP TABLE IF EXISTS `imgdescription`;
CREATE TABLE IF NOT EXISTS `imgdescription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imgNome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imgDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `imgdescription`
--

INSERT INTO `imgdescription` (`id`, `imgNome`, `imgDesc`) VALUES
(1, 'camera', 'Câmera: It is a long established fact that a reader will be distracted by the readable.'),
(2, 'casal', 'Casal: It is a long established fact that a reader will be distracted by the readable.'),
(3, 'Fotografo1', 'Fotografo1: It is a long established fact that a reader will be distracted by the readable.'),
(4, 'passaro', 'Passaro: It is a long established fact that a reader will be distracted by the readabl.'),
(5, 'Fotografo2', 'Fotografo2: It is a long established fact that a reader will be distracted by the readable.'),
(6, 'casalDance', 'CasalDance: It is a long established fact that a reader will be distracted by the readable.'),
(7, 'arvore', 'Arvora: It is a long established fact that a reader will be distracted by the readable.'),
(8, 'pessoas', 'Pessoas: It is a long established fact that a reader will be distracted by the readable.'),
(9, 'mulher', 'Mulher: It is a long established fact that a reader will be distracted by the readable.'),
(10, 'mar', 'Mar: It is a long established fact that a reader will be distracted by the readable.'),
(11, 'praia', 'Praia: It is a long established fact that a reader will be distracted by the readable.'),
(12, 'pingo', 'Pingo: It is a long established fact that a reader will be distracted by the readable.'),
(13, 'dedos', 'Dedos: It is a long established fact that a reader will be distracted by the readable.'),
(14, 'montanha', 'Montanha: It is a long established fact that a reader will be distracted by the readable.'),
(15, 'aranha', 'Aranha: It is a long established fact that a reader will be distracted by the readable.'),
(16, 'Cachorros', 'Cachorros: It is a long established fact that a reader will be distracted by the readable.'),
(17, 'pomar', 'Pomar: It is a long established fact that a reader will be distracted by the readable.'),
(18, 'abelha', 'Abelha: It is a long established fact that a reader will be distracted by the readable.'),
(19, 'coelhos', 'Coelhos: It is a long established fact that a reader will be distracted by the readable.'),
(20, 'guepardo', 'Guepardo: It is a long established fact that a reader will be distracted by the readable.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

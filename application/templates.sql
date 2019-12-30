-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Dez-2019 às 16:02
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `painel_client`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `header` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createdDate` datetime NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `createdUser` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `templates`
--

INSERT INTO `templates` (`header`, `content`, `type`, `status`, `createdDate`, `ID`, `createdUser`) VALUES
('teste20', 'teste20 ', 'anuncio', '', '0000-00-00 00:00:00', 22, 0),
('teste21', 'teste21 ', 'campanha', '', '0000-00-00 00:00:00', 23, 0),
('teste21', 'teste21 ', 'campanha', '', '0000-00-00 00:00:00', 24, 0),
('teste21', 'teste21 ', 'noticia', '', '0000-00-00 00:00:00', 25, 0),
('teste21', 'teste21 ', 'noticia', '', '0000-00-00 00:00:00', 26, 0),
('teste22', ' teste22', 'campanha', '', '0000-00-00 00:00:00', 27, 0),
('teste23', 'teste23 ', 'noticia', '', '0000-00-00 00:00:00', 28, 0),
('teste23', 'teste23 ', 'noticia', '', '0000-00-00 00:00:00', 29, 0),
('teste24', 'teste24 ', 'noticia', '', '0000-00-00 00:00:00', 30, 0),
('teste25', ' teste25', 'campanha', '', '0000-00-00 00:00:00', 31, 0),
('teste25', ' teste25', 'campanha', '', '0000-00-00 00:00:00', 32, 0),
('teste25', ' teste25', 'campanha', '', '0000-00-00 00:00:00', 34, 0),
('teste26', 'teste26 ', 'noticia', '', '0000-00-00 00:00:00', 36, 0),
('teste27', 'teste27 ', 'noticia', '', '0000-00-00 00:00:00', 38, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

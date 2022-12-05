
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Out-2022 às 01:48
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
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nome` text NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_val` text(6) NOT NULL,
  `prod_image` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_val`, `prod_image`) VALUES
(1, 'Sementes de Chia', 'Fonte de fibras e em contato com a água a chia forma um gel que dá aquela sensação de saciedade', '16.90 R$', 'linhaçad.png');

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_val`, `prod_image`) VALUES
(2, 'Sementes de Linhaça Marrom', 'Rica em ômega 3 e fonte de magnésio e fibras', '10.50 R$', 'linhaçad.png');

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_val`, `prod_image`) VALUES
(3, 'Sementes de Lihaça Marrom', 'Rica em ômga 3 e fonte de magnésio e fibras', '10.60 R$', 'linhaçad.png');
INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_val`, `prod_image`) VALUES
(4, 'Sementes de Lihaça Marrom', 'Rica em ômga 3 e fonte de magnésio e fibras', '10.60 R$', 'chia.png');
INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_val`, `prod_image`) VALUES
(5, 'Sementes de Lihaça Marrom', 'Rica em ômga 3 e fonte de magnésio e fibras', '10.60 R$', 'chia.png');
INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_val`, `prod_image`) VALUES
(6, 'Sementes de Lihaça Marrom', 'Rica em ômga 3 e fonte de magnésio e fibras', '10.60 R$', 'chia.png');


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `adm` BOOLEAN NOT NULL,
  `nome` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`id`,`adm`, `nome`, `email`, `pass`) VALUES
(1, 1,'Arthur', 'arthur@tui.com', '202cb962ac59075b964b07152d234b70'),
(2, 0,'Isa', 'isa@dora.com', '827ccb0eea8a706c4c34a16891f84e7b');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


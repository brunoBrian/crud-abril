-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jul-2016 às 05:04
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_abril`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `criacao` datetime NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `criacao`, `nome`, `email`, `telefone`) VALUES
(1, '2016-07-21 06:37:41', 'Bruno Brian', 'bruninho_brian@hotmail.com', '11 96269-0919'),
(2, '2016-07-21 06:37:53', 'Renato Sousa', 'renatojaca22@gmail.com', '1145454545'),
(3, '2016-07-21 06:38:41', 'Renata P Correia', 'renatojaca22@gmail.com', '11967146413');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL,
  `criacao` datetime NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `criacao`, `cliente_id`, `produto_id`) VALUES
(1, '2016-07-21 03:28:00', 2, 2),
(2, '2016-07-21 03:38:43', 0, 2),
(4, '2016-07-21 04:02:20', 4, 2),
(8, '2016-07-21 04:09:50', 4, 2),
(9, '2016-07-21 04:13:08', 4, 2),
(10, '2016-07-21 04:14:04', 4, 2),
(11, '2016-07-21 04:15:28', 4, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL,
  `criacao` datetime NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `criacao`, `nome`, `descricao`, `preco`) VALUES
(1, '2016-07-21 06:44:55', 'Celular Samsung Galaxy S7', 'Celular com tela de retina, 4.5px', 'R$3.4500,0'),
(2, '2016-07-21 06:51:41', 'PelÃ­cula protetora para celular', 'teste de descriÃ§Ã£o', 'R$15,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

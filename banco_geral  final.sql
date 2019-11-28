-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 12:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_geral`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`nome`, `telefone`, `email`, `cpf`, `endereco`) VALUES
('ZECAR', '11111111111', 'HUSTLERN@HOTMAIL.COM', '12345678998', 'rua teste 31'),
('MARCOS', '11111111111', 'marcos@marcos.com', '12345678998', 'rua teste 31'),
('MARCOS DOS SILVA', '11982599491', 'hustlerneo@hotmail.com', '12345678911', 'Alfredo soncini 190, Casa 2'),
('MARCOS DOS SANTOS SILVA2', '08305300672', 'ewigelieber@gmail.com', '21312312312', '18n, Casa 4'),
('MARCOS DOS SILVA', '11982599491', 'hustlerneo@hotmail.com', '32632932962', 'Alfredo soncini 190, Casa 2');

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome`, `email`) VALUES
(1, 'Teste', 'teste@gmail.com'),
(2, 'Fulano', 'fulano@gmail.com'),
(3, 'Edclecio', 'edc@gmail.com'),
(6, 'ZECAR', 'HUSTLERN@HOTMAIL.COM'),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, '432423432', '123@hotmail.com'),
(14, 'MARCOS DOS SILVA', 'hustlerneo@hotmail.com'),
(15, '15/10/2019', '14'),
(16, 'ricardo2', 'ricardo2@gmail.com'),
(17, 'MARCOS DOS SILVA', 'hustlerneo@hotmail.com'),
(18, 'MARCOS DOS SILVA', '12');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `nome_produto` varchar(50) DEFAULT NULL,
  `codigo_produto` int(11) NOT NULL,
  `preco` float(5,2) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `validade` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`nome_produto`, `codigo_produto`, `preco`, `categoria`, `validade`) VALUES
('Velho Barreiro', 1, 11.00, 'Bebida Alcólica', '12/12/2026'),
('coca-cola 350ml', 4, 3.50, 'refrigerante', '12/12/2020'),
('test', 1234, 1.99, 'test', '121213');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `login`, `senha`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, 'teste222', '4ew34234'),
(6, 'Gostosao', '123456'),
(7, 'testestes', '1231231412'),
(8, 'marcos1', 'marcos1'),
(9, 'marcos2', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo_produto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

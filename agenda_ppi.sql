-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Out-2017 às 01:26
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_ppi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE `amigos` (
  `codigo` smallint(6) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `aniversario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`codigo`, `nome`, `email`, `telefone`, `aniversario`) VALUES
(1, 'Carlos Alberto', 'calberto@senac.com.br', '5184074070', '1987-10-15'),
(2, 'Ana Carolina', 'anac@hotmail.com', '5199632547', '1990-05-20'),
(3, 'Bruno Henrique', 'bhenrique@senac.com.br', '5199874587', '1989-06-14'),
(4, 'Carlos Alberto', 'calberto@senac.com.br', '5199884749', '1988-04-11'),
(5, 'Bruno Tozetto', 'brunotozetto@gmail.com', '51996998987', '1990-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amigos`
--
ALTER TABLE `amigos`
  MODIFY `codigo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

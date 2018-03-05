-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Fev-2018 às 20:59
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relogio`
--
CREATE DATABASE IF NOT EXISTS `relogio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `relogio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `intercessores`
--

CREATE TABLE `intercessores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `pedido` text,
  `horario` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `intercessores`
--

INSERT INTO `intercessores` (`id`, `nome`, `telefone`, `pedido`, `horario`, `data`) VALUES
(75, 'Lucas', NULL, NULL, '6-6:3013:30-14', '2018-02-05 12:21:42'),
(77, 'Angelo', NULL, NULL, '11-11:3013:30-1417:30-18', '2018-02-05 09:58:48'),
(78, 'Marcelo', NULL, NULL, '6-6:30;17-17:30;16:30-17;', '2018-02-05 10:00:47'),
(81, 'TEste 2', NULL, NULL, '02:00-02:30;', '2018-02-06 11:31:51'),
(82, 'Leandro', NULL, NULL, '03:00-03:30;04:00-04:30;', '2018-02-06 13:50:09'),
(84, 'Teste', NULL, NULL, '00:00-00:30;', '2018-02-07 10:42:14'),
(95, '', NULL, NULL, '', '2018-02-07 17:14:09'),
(97, '', NULL, NULL, '', '2018-02-07 17:15:05'),
(107, '', NULL, NULL, '', '2018-02-07 17:23:12'),
(118, 'Lucas', NULL, NULL, '11:00-11:30;23:30-00:00;', '2018-02-08 17:25:18'),
(119, 'Lucas', NULL, NULL, '10:00-10:30;', '2018-02-14 13:52:56'),
(127, 'Lucas', NULL, NULL, '19:30-20:00;', '2018-02-22 11:57:32'),
(135, 'Lucas', NULL, NULL, '18:30-19:00;', '2018-02-22 12:49:02'),
(137, 'Lucas', NULL, NULL, '01:00-01:30;', '2018-02-22 13:08:01'),
(142, 'Lucas', NULL, NULL, '01:30-02:00;', '2018-02-22 13:33:52'),
(143, 'Lucas', NULL, NULL, '01:30-02:00;', '2018-02-22 13:35:27'),
(144, 'Lucas', NULL, NULL, '01:30-02:00;', '2018-02-22 13:38:06'),
(145, 'Lucas', NULL, NULL, '19:30-20:00;', '2018-02-22 13:45:37'),
(146, 'Lucas', NULL, NULL, '01:30-02:00;', '2018-02-22 13:49:18'),
(148, 'Lucas', NULL, NULL, '15:00-15:30;', '2018-02-22 17:28:13'),
(149, 'rodrigo eduardo', NULL, NULL, '08:00-08:30;09:00-09:30;', '2018-02-22 18:44:42'),
(150, 'Teste ', NULL, NULL, '01:30-02:00;', '2018-02-22 18:48:22'),
(151, 'Teste 2', NULL, NULL, '01:30-02:00;', '2018-02-22 18:48:33'),
(152, 'Teste 3', NULL, NULL, '01:30-02:00;', '2018-02-22 18:49:02'),
(153, 'Lucas', NULL, NULL, '19:00-19:30;', '2018-02-23 10:05:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intercessores`
--
ALTER TABLE `intercessores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intercessores`
--
ALTER TABLE `intercessores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

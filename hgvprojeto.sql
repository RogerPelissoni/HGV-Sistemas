-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jan-2022 às 04:50
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hgvprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_enderecos`
--

CREATE TABLE `tb_enderecos` (
  `id` int(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL,
  `uf` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_enderecos`
--

INSERT INTO `tb_enderecos` (`id`, `cidade`, `cep`, `uf`) VALUES
(282, 'Tapejara', 99950000, 'RS'),
(284, 'Passo Fundo', 99950000, 'RS'),
(285, 'Porto Alegre', 99950000, 'RS'),
(286, 'São Paulo', 99950000, 'SP'),
(287, 'Rio de Janeiro', 99950000, 'RJ'),
(288, 'Bahia', 99950000, 'BH'),
(289, 'Pará', 99950000, 'PA'),
(290, 'Paraíba', 99950000, 'PB'),
(291, 'Pernambuco', 99950000, 'PE'),
(292, 'Piauí', 99950000, 'PI'),
(293, 'Rio Grande do Norte', 99950000, 'RN'),
(294, 'Acre', 99950000, 'AC'),
(295, 'Amazonas', 99950000, 'AM'),
(296, 'Tapejara', 99950000, 'RS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_enderecos`
--
ALTER TABLE `tb_enderecos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_enderecos`
--
ALTER TABLE `tb_enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

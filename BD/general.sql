-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Maio-2022 às 04:18
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `general`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_post`
--

CREATE TABLE `sub_post` (
  `id_sub_post` int(11) NOT NULL,
  `img_sub_post` varchar(30) DEFAULT NULL,
  `desc_sub_post` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `desc_titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `img_post` varchar(20) DEFAULT NULL,
  `des_post` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `nm_titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(11) NOT NULL,
  `nm_login` varchar(24) NOT NULL,
  `sn_user` varchar(8) NOT NULL,
  `img_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user_login`
--

INSERT INTO `user_login` (`id_user`, `nm_login`, `sn_user`, `img_user`) VALUES
(1, 'adm', 'adm', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `sub_post`
--
ALTER TABLE `sub_post`
  ADD PRIMARY KEY (`id_sub_post`),
  ADD KEY `id_post` (`id_post`);

--
-- Índices para tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sub_post`
--
ALTER TABLE `sub_post`
  MODIFY `id_sub_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `sub_post`
--
ALTER TABLE `sub_post`
  ADD CONSTRAINT `sub_post_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `tb_post` (`id_post`);

--
-- Limitadores para a tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_login` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

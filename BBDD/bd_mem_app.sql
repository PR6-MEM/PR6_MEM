-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 03:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_mem_app`
--

CREATE DATABASE IF NOT EXISTS `bd_mem_app` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bd_mem_app`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `matricula_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(30) NOT NULL,
  `apellido1_alumno` varchar(30) NOT NULL,
  `apellido2_alumno` varchar(30) NOT NULL,
  `curso_alumno` varchar(20) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`matricula_alumno`, `nombre_alumno`, `apellido1_alumno`, `apellido2_alumno`, `curso_alumno`, `id_tipo_usuario`) VALUES
('1001489', 'Marc', 'Petit', 'Fernandez', 'Daw2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_integrante_proyecto`
--

CREATE TABLE `tbl_integrante_proyecto` (
  `id_integrante` int(11) NOT NULL,
  `matricula_alumno` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_pregunta_publico` int(11) NOT NULL,
  `id_pregunta_tribunal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notas_publico`
--

CREATE TABLE `tbl_notas_publico` (
  `id_notas_publico` int(11) NOT NULL,
  `id_pregunta_publico` int(11) NOT NULL,
  `matricula_alumno_publico` int(11) NOT NULL,
  `valor_nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_notas_tribunal`
--

CREATE TABLE `tbl_notas_tribunal` (
  `id_notas_tribunal` int(11) NOT NULL,
  `id_pregunta_tribunal` int(11) NOT NULL,
  `id_tribunal` int(11) NOT NULL,
  `valor_nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pregunta_publico`
--

CREATE TABLE `tbl_pregunta_publico` (
  `id_pregunta_publico` int(11) NOT NULL,
  `pregunta_publico` varchar(50) NOT NULL,
  `id_integrante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pregunta_tribunal`
--

CREATE TABLE `tbl_pregunta_tribunal` (
  `id_pregunta_tribunal` int(11) NOT NULL,
  `pregunta_tribunal` varchar(50) NOT NULL,
  `id_integrante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profesor`
--

CREATE TABLE `tbl_profesor` (
  `usuario_profesor` varchar(30) NOT NULL,
  `nombre_profesor` varchar(30) NOT NULL,
  `apellido1_profesor` varchar(30) NOT NULL,
  `apellido2_profesor` varchar(30) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profesor`
--

INSERT INTO `tbl_profesor` (`usuario_profesor`, `nombre_profesor`, `apellido1_profesor`, `apellido2_profesor`, `id_tipo_usuario`) VALUES
('david.marin', 'david', 'marin', 'salvador', 2),
('sergio.jimenez', 'Sergio', 'Jimenez', 'Garcia', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `titulo_proyecto` varchar(30) NOT NULL,
  `id_tutor_profesor` varchar(30) NOT NULL,
  `fecha_proyecto` date NOT NULL,
  `id_pregunta_tribunal` int(11) NOT NULL,
  `id_pregunta_publico` int(11) NOT NULL,
  `id_tribunal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tribunal`
--

CREATE TABLE `tbl_tribunal` (
  `id_tribunal` int(11) NOT NULL,
  `id_profesor` varchar(30) NOT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`matricula_alumno`);

--
-- Indexes for table `tbl_integrante_proyecto`
--
ALTER TABLE `tbl_integrante_proyecto`
  ADD PRIMARY KEY (`id_integrante`);

--
-- Indexes for table `tbl_notas_publico`
--
ALTER TABLE `tbl_notas_publico`
  ADD PRIMARY KEY (`id_notas_publico`);

--
-- Indexes for table `tbl_pregunta_publico`
--
ALTER TABLE `tbl_pregunta_publico`
  ADD PRIMARY KEY (`id_pregunta_publico`);

--
-- Indexes for table `tbl_pregunta_tribunal`
--
ALTER TABLE `tbl_pregunta_tribunal`
  ADD PRIMARY KEY (`id_pregunta_tribunal`);

--
-- Indexes for table `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  ADD PRIMARY KEY (`usuario_profesor`);

--
-- Indexes for table `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indexes for table `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indexes for table `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  ADD PRIMARY KEY (`id_tribunal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_integrante_proyecto`
--
ALTER TABLE `tbl_integrante_proyecto`
  MODIFY `id_integrante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_notas_publico`
--
ALTER TABLE `tbl_notas_publico`
  MODIFY `id_notas_publico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pregunta_publico`
--
ALTER TABLE `tbl_pregunta_publico`
  MODIFY `id_pregunta_publico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pregunta_tribunal`
--
ALTER TABLE `tbl_pregunta_tribunal`
  MODIFY `id_pregunta_tribunal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  MODIFY `id_tribunal` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `tbl_profesor` ADD `password` VARCHAR(10) NOT NULL AFTER `id_tipo_usuario`;

ALTER TABLE `tbl_alumno`
  ADD CONSTRAINT `FK_id_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tbl_tipo_usuario` (`id_tipo_usuario`);

ALTER TABLE `tbl_integrante_proyecto`
  ADD CONSTRAINT `FK_matricula_alumno` FOREIGN KEY (`matricula_alumno`) REFERENCES `tbl_alumno` (`matricula_alumno`),
  ADD CONSTRAINT `FK_id_proyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyecto` (`id_proyecto`),
  ADD CONSTRAINT `FK_pregunta_publico` FOREIGN KEY (`id_pregunta_publico`) REFERENCES `tbl_pregunta_publico` (`id_pregunta_publico`),
  ADD CONSTRAINT `FK_pregunta_tribunal` FOREIGN KEY (`id_pregunta_tribunal`) REFERENCES `tbl_pregunta_tribunal` (`id_pregunta_tribunal`);

ALTER TABLE `tbl_notas_publico`
  ADD CONSTRAINT `FK_matricula_alumno_publico` FOREIGN KEY (`matricula_alumno_publico`) REFERENCES `tbl_alumno` (`matricula_alumno`),
  ADD CONSTRAINT `FK_id_pregunta_publico` FOREIGN KEY (`id_pregunta_publico`) REFERENCES `tbl_pregunta_publico` (`id_pregunta_publico`);
  
ALTER TABLE `tbl_pregunta_publico`
  ADD CONSTRAINT `FK_id_integrante` FOREIGN KEY (`id_integrante`) REFERENCES `tbl_integrante_proyecto` (`id_integrante`);

ALTER TABLE `tbl_pregunta_tribunal`
ADD CONSTRAINT `FK_id_integrante_proyecto` FOREIGN KEY (`id_integrante`) REFERENCES `tbl_integrante_proyecto` (`id_integrante`);


ALTER TABLE `tbl_profesor`
  ADD CONSTRAINT `FK_id_tipo_usuario_profesor` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tbl_tipo_usuario` (`id_tipo_usuario`);

ALTER TABLE `tbl_proyecto`
ADD CONSTRAINT `FK_id_tutor_profesor` FOREIGN KEY (`id_tutor_profesor`) REFERENCES `tbl_profesor` (`usuario_profesor`),
ADD CONSTRAINT `FK_id_pregunta_tribunal_proyecto` FOREIGN KEY (`id_pregunta_tribunal`) REFERENCES `tbl_pregunta_tribunal` (`id_pregunta_tribunal`),
ADD CONSTRAINT `FK_id_pregunta_publico_proyecto` FOREIGN KEY (`id_pregunta_publico`) REFERENCES `tbl_pregunta_publico` (`id_pregunta_publico`),
ADD CONSTRAINT `FK_id_tribunal` FOREIGN KEY (`id_tribunal`) REFERENCES `tbl_tribunal` (`id_tribunal`);

ALTER TABLE `tbl_tribunal`
  ADD CONSTRAINT `FK_id_profe_tribunal` FOREIGN KEY (`id_profesor`) REFERENCES `tbl_profesor` (`usuario_profesor`),
  ADD CONSTRAINT `FK_proyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyecto` (`id_proyecto`);

ALTER TABLE `tbl_notas_tribunal`
  ADD CONSTRAINT `FK_id_pregunta_tribunal` FOREIGN KEY (`id_pregunta_tribunal`) REFERENCES `tbl_pregunta_tribunal` (`id_pregunta_tribunal`),
  ADD CONSTRAINT `FK_id_tribunal_notas` FOREIGN KEY (`id_tribunal`) REFERENCES `tbl_tribunal` (`id_tribunal`);

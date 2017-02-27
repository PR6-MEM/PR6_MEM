-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2017 a las 20:35:55
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_mem_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
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
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`matricula_alumno`, `nombre_alumno`, `apellido1_alumno`, `apellido2_alumno`, `curso_alumno`, `id_tipo_usuario`) VALUES
(7138, 'Miguel', 'López ', 'Galán ', 'daw2', 1),
(1001489, 'Marc', 'Petit', 'Fernandez', 'Daw2', 1),
(1025478, 'Paco', 'Paquito', '', 'ASIX', 1),
(10000585, 'Esther', 'Rovira', 'Sancho', 'Daw2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_integrante_proyecto`
--

CREATE TABLE `tbl_integrante_proyecto` (
  `id_integrante` int(11) NOT NULL,
  `matricula_alumno` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_integrante_proyecto`
--

INSERT INTO `tbl_integrante_proyecto` (`id_integrante`, `matricula_alumno`, `id_proyecto`) VALUES
(55, 7138, 1),
(56, 1001489, 1),
(57, 10000585, 1),
(58, 10000585, 2),
(59, 7138, 2),
(60, 1001489, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notas_publico`
--

CREATE TABLE `tbl_notas_publico` (
  `id_notas_publico` int(11) NOT NULL,
  `id_pregunta_publico` int(11) NOT NULL,
  `matricula_alumno_publico` int(11) NOT NULL,
  `valor_nota` int(2) NOT NULL,
  `id_integrante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notas_tribunal`
--

CREATE TABLE `tbl_notas_tribunal` (
  `id_notas_tribunal` int(11) NOT NULL,
  `id_pregunta_tribunal` int(11) NOT NULL,
  `id_tribunal` int(11) NOT NULL,
  `valor_nota` int(2) NOT NULL,
  `id_integrante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pregunta_publico`
--

CREATE TABLE `tbl_pregunta_publico` (
  `id_pregunta_publico` int(11) NOT NULL,
  `pregunta_publico` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pregunta_publico`
--

INSERT INTO `tbl_pregunta_publico` (`id_pregunta_publico`, `pregunta_publico`) VALUES
(1, 'T''ha quedat una idea clara de lla part que ha exposat?'),
(2, 'Com valores la seva expressió oral?'),
(3, 'Creus que la presentació està ben estructurada?'),
(4, 'Com valores la qualitat del power-point, flash, etc que s''ha fet servir a l''exposició'),
(5, 'T''ha quedat clar el contingut del projecte?'),
(6, 'Com valores la qualitat del projecte expossat?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pregunta_tribunal`
--

CREATE TABLE `tbl_pregunta_tribunal` (
  `id_pregunta_tribunal` int(11) NOT NULL,
  `pregunta_tribunal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pregunta_tribunal`
--

INSERT INTO `tbl_pregunta_tribunal` (`id_pregunta_tribunal`, `pregunta_tribunal`) VALUES
(1, 'Estructura de la presentació.\r\n(presentació personal, introducció, presentació del projecte, conclusions, preguntes,comiat adequat)\r\n'),
(2, 'Temps utilitzat\r\n(duració total, duració de cada part de l’exposició)\r\n'),
(3, 'Expressió oral \r\n(to de veu, claredat oral, ritme, vocabulari adequat …)\r\n'),
(4, 'Presencia adequada\r\n(presencia física, moviment corporal,etc..)\r\n'),
(5, 'Material utilitzat en l’exposició oral\r\n(PowerPoint, fotocopies, vídeos, etc...)'),
(6, 'Desenvolupament i procés del projecte'),
(7, 'Conclusions ben raonades'),
(8, 'Respostes a les preguntes del tribunal'),
(9, 'Qualitat del producte obtingut segons l''exposició.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_profesor`
--

CREATE TABLE `tbl_profesor` (
  `usuario_profesor` varchar(30) NOT NULL,
  `nombre_profesor` varchar(30) NOT NULL,
  `apellido1_profesor` varchar(30) NOT NULL,
  `apellido2_profesor` varchar(30) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_profesor`
--

INSERT INTO `tbl_profesor` (`usuario_profesor`, `nombre_profesor`, `apellido1_profesor`, `apellido2_profesor`, `id_tipo_usuario`, `password`) VALUES
('agnes.plans', 'Agnes', 'Plans', '', 2, '12345'),
('david.marin', 'David', 'Marin', 'Salvador', 2, '12345'),
('ignasi.romero', 'Ignasi', 'Romero', '', 2, '12345'),
('nuria.garres', 'Nuria', 'Garres', 'Gonzalez', 3, '12345'),
('sergio.jimenez', 'Sergio', 'Jimenez', 'Garcia', 2, '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `titulo_proyecto` varchar(30) NOT NULL,
  `id_tutor_profesor` varchar(30) NOT NULL,
  `fecha_proyecto` date NOT NULL,
  `fecha_cierre` date DEFAULT NULL,
  `proyecto_finalizado` tinyint(1) DEFAULT '0',
  `id_tribunal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_proyecto`
--

INSERT INTO `tbl_proyecto` (`id_proyecto`, `titulo_proyecto`, `id_tutor_profesor`, `fecha_proyecto`, `fecha_cierre`, `proyecto_finalizado`, `id_tribunal`) VALUES
(1, 'dsdsd', 'david.marin', '2017-02-28', '0000-00-00', NULL, 18),
(2, 'Prueba 1', 'agnes.plans', '2017-02-27', '0000-00-00', NULL, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tribunal`
--

CREATE TABLE `tbl_tribunal` (
  `id_tribunal` int(11) NOT NULL,
  `id_profesor1` varchar(30) NOT NULL,
  `id_profesor2` varchar(30) NOT NULL,
  `id_profesor3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tribunal`
--

INSERT INTO `tbl_tribunal` (`id_tribunal`, `id_profesor1`, `id_profesor2`, `id_profesor3`) VALUES
(5, 'agnes.plans', 'david.marin', 'nuria.garres'),
(6, 'agnes.plans', 'david.marin', 'nuria.garres'),
(7, 'agnes.plans', 'david.marin', 'sergio.jimenez'),
(8, 'agnes.plans', 'david.marin', 'sergio.jimenez'),
(14, 'agnes.plans', 'agnes.plans', 'agnes.plans'),
(15, 'agnes.plans', 'nuria.garres', 'sergio.jimenez'),
(16, 'agnes.plans', 'nuria.garres', 'sergio.jimenez'),
(17, 'agnes.plans', 'sergio.jimenez', 'nuria.garres'),
(18, 'agnes.plans', 'sergio.jimenez', 'nuria.garres'),
(19, 'david.marin', 'sergio.jimenez', 'nuria.garres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`matricula_alumno`),
  ADD KEY `FK_id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `tbl_integrante_proyecto`
--
ALTER TABLE `tbl_integrante_proyecto`
  ADD PRIMARY KEY (`id_integrante`),
  ADD KEY `FK_matricula_alumno` (`matricula_alumno`),
  ADD KEY `FK_id_proyecto` (`id_proyecto`);


--
-- Indices de la tabla `tbl_notas_publico`
--
ALTER TABLE `tbl_notas_publico`
  ADD PRIMARY KEY (`id_notas_publico`),
  ADD KEY `FK_matricula_alumno_publico` (`matricula_alumno_publico`),
  ADD KEY `FK_id_pregunta_publico` (`id_pregunta_publico`);

--
-- Indices de la tabla `tbl_notas_tribunal`
--
ALTER TABLE `tbl_notas_tribunal`
  ADD PRIMARY KEY (`id_notas_tribunal`),
  ADD KEY `FK_id_pregunta_tribunal` (`id_pregunta_tribunal`),
  ADD KEY `FK_id_tribunal_notas` (`id_tribunal`),
  ADD KEY `FK_id_integrante_nota_trib` (`id_integrante`);

--
-- Indices de la tabla `tbl_pregunta_publico`
--
ALTER TABLE `tbl_pregunta_publico`
  ADD PRIMARY KEY (`id_pregunta_publico`);

--
-- Indices de la tabla `tbl_pregunta_tribunal`
--
ALTER TABLE `tbl_pregunta_tribunal`
  ADD PRIMARY KEY (`id_pregunta_tribunal`);

--
-- Indices de la tabla `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  ADD PRIMARY KEY (`usuario_profesor`),
  ADD KEY `FK_id_tipo_usuario_profesor` (`id_tipo_usuario`);

--
-- Indices de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `FK_id_tutor_profesor` (`id_tutor_profesor`),
  ADD KEY `FK_id_tribunal` (`id_tribunal`);

--
-- Indices de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  ADD PRIMARY KEY (`id_tribunal`),
  ADD KEY `FK_id_profe_tribunal` (`id_profesor1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_integrante_proyecto`
--
ALTER TABLE `tbl_integrante_proyecto`
  MODIFY `id_integrante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `tbl_notas_publico`
--
ALTER TABLE `tbl_notas_publico`
  MODIFY `id_notas_publico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_notas_tribunal`
--
ALTER TABLE `tbl_notas_tribunal`
  MODIFY `id_notas_tribunal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pregunta_publico`
--
ALTER TABLE `tbl_pregunta_publico`
  MODIFY `id_pregunta_publico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_pregunta_tribunal`
--
ALTER TABLE `tbl_pregunta_tribunal`
  MODIFY `id_pregunta_tribunal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  MODIFY `id_tribunal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD CONSTRAINT `FK_id_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tbl_tipo_usuario` (`id_tipo_usuario`);

--
-- Filtros para la tabla `tbl_integrante_proyecto`
--
ALTER TABLE `tbl_integrante_proyecto`
  ADD CONSTRAINT `FK_id_proyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyecto` (`id_proyecto`),
  ADD CONSTRAINT `FK_matricula_alumno` FOREIGN KEY (`matricula_alumno`) REFERENCES `tbl_alumno` (`matricula_alumno`);
 

--
-- Filtros para la tabla `tbl_notas_publico`
--
ALTER TABLE `tbl_notas_publico`
  ADD CONSTRAINT `FK_id_pregunta_publico` FOREIGN KEY (`id_pregunta_publico`) REFERENCES `tbl_pregunta_publico` (`id_pregunta_publico`),
  ADD CONSTRAINT `FK_matricula_alumno_publico` FOREIGN KEY (`matricula_alumno_publico`) REFERENCES `tbl_alumno` (`matricula_alumno`);

--
-- Filtros para la tabla `tbl_notas_tribunal`
--
ALTER TABLE `tbl_notas_tribunal`
  ADD CONSTRAINT `FK_id_integrante_nota_trib` FOREIGN KEY (`id_integrante`) REFERENCES `tbl_integrante_proyecto` (`id_integrante`),
  ADD CONSTRAINT `FK_id_pregunta_tribunal` FOREIGN KEY (`id_pregunta_tribunal`) REFERENCES `tbl_pregunta_tribunal` (`id_pregunta_tribunal`),
  ADD CONSTRAINT `FK_id_tribunal_notas` FOREIGN KEY (`id_tribunal`) REFERENCES `tbl_tribunal` (`id_tribunal`);

--
-- Filtros para la tabla `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  ADD CONSTRAINT `FK_id_tipo_usuario_profesor` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tbl_tipo_usuario` (`id_tipo_usuario`);

--
-- Filtros para la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD CONSTRAINT `FK_id_tribunal` FOREIGN KEY (`id_tribunal`) REFERENCES `tbl_tribunal` (`id_tribunal`),
  ADD CONSTRAINT `FK_id_tutor_profesor` FOREIGN KEY (`id_tutor_profesor`) REFERENCES `tbl_profesor` (`usuario_profesor`);

--
-- Filtros para la tabla `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  ADD CONSTRAINT `FK_id_profe_tribunal` FOREIGN KEY (`id_profesor1`) REFERENCES `tbl_profesor` (`usuario_profesor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

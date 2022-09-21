-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2022 a las 16:16:01
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `periodismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editor`
--

CREATE TABLE `editor` (
  `IdEditor` int(8) NOT NULL,
  `NombreEditor` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editor`
--

INSERT INTO `editor` (`IdEditor`, `NombreEditor`) VALUES
(1, 'Alejandra Negro'),
(2, 'Carlos Saavedra'),
(3, 'Alejandro Rojas'),
(4, 'Alejandro Torrico'),
(5, 'Daniel Conde'),
(6, 'Elvis Sanchez'),
(7, 'Freddy Yauri'),
(8, 'Hector Uriarte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodismo`
--

CREATE TABLE `periodismo` (
  `Id` int(11) NOT NULL,
  `Fecha` varchar(32) DEFAULT NULL,
  `IdPresentador` int(8) DEFAULT NULL,
  `Edicion` varchar(32) DEFAULT NULL,
  `Emitido` varchar(32) DEFAULT NULL,
  `IdProductor` int(8) DEFAULT NULL,
  `Descripcion` varchar(32) DEFAULT NULL,
  `Formato` varchar(32) DEFAULT NULL,
  `Ciudad` varchar(32) DEFAULT NULL,
  `IdPeriodista` int(8) DEFAULT NULL,
  `IdEditor` int(8) DEFAULT NULL,
  `Contenido` varchar(32) DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  `Bloque` varchar(32) DEFAULT NULL,
  `mm_ss` time DEFAULT NULL,
  `Hora_Prog` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodismo`
--

INSERT INTO `periodismo` (`Id`, `Fecha`, `IdPresentador`, `Edicion`, `Emitido`, `IdProductor`, `Descripcion`, `Formato`, `Ciudad`, `IdPeriodista`, `IdEditor`, `Contenido`, `Duracion`, `Bloque`, `mm_ss`, `Hora_Prog`) VALUES
(57, '2022-09-12', 1, 'Al Dia Revista', 'Si', 1, '', 'Entrevistas', 'La Paz', 1, 1, 'Clima', '00:00:00', 'B1', '00:00:00', '00:00:00'),
(58, '2022-09-12', 6, 'Al Dia Revista', 'Si', 1, 'Reporte', 'Comercio', 'La Paz', 7, 7, 'Ciudad', '00:00:00', 'B1', '00:00:00', '00:00:00'),
(59, '2022-09-12', 1, 'Al Dia Revista', 'Si', 1, '', 'Entrevistas', 'La Paz', 5, 1, 'Actuacion', '10:16:43', 'B1', '01:30:43', '15:14:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodista`
--

CREATE TABLE `periodista` (
  `IdPeriodista` int(8) NOT NULL,
  `NombrePeriodista` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodista`
--

INSERT INTO `periodista` (`IdPeriodista`, `NombrePeriodista`) VALUES
(1, 'Alejandro Rojas'),
(2, 'Alejandro Torrico'),
(3, 'Alexandra Almendras'),
(4, 'Brenda Aleman'),
(5, 'Carlos Jimenez'),
(6, 'Carlos Lara'),
(7, 'Carlos Saavedra'),
(8, 'Charlye Suarez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentador`
--

CREATE TABLE `presentador` (
  `IdPresentador` int(11) NOT NULL,
  `NombrePresentador` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presentador`
--

INSERT INTO `presentador` (`IdPresentador`, `NombrePresentador`) VALUES
(1, 'Carlos Lara'),
(2, 'Corte Comercial'),
(3, 'Charlye Suarez'),
(4, 'Cristhian Rivero'),
(5, 'Daniel Ardiles'),
(6, 'Denisse Quiroga'),
(7, 'Edmundo Gutierrez'),
(8, 'Fabiana Castillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productor`
--

CREATE TABLE `productor` (
  `IdProductor` int(8) NOT NULL,
  `Nombre` varchar(32) NOT NULL,
  `Pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productor`
--

INSERT INTO `productor` (`IdProductor`, `Nombre`, `Pass`) VALUES
(1, 'Carlos Lara', '123456'),
(2, 'Jenny Quispe', '123456'),
(3, 'Jeysi Alanes', '123456'),
(4, 'Jhoselin Cabrera', '123456'),
(5, 'Graciela Reque', '123456'),
(6, 'Griselda Sandoval', '123456'),
(7, 'Ezequiel Serres', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`IdEditor`);

--
-- Indices de la tabla `periodismo`
--
ALTER TABLE `periodismo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdPresentador` (`IdPresentador`),
  ADD KEY `IdPeriodista` (`IdPeriodista`,`IdEditor`),
  ADD KEY `IdEditor` (`IdEditor`),
  ADD KEY `IdProductor` (`IdProductor`);

--
-- Indices de la tabla `periodista`
--
ALTER TABLE `periodista`
  ADD PRIMARY KEY (`IdPeriodista`);

--
-- Indices de la tabla `presentador`
--
ALTER TABLE `presentador`
  ADD PRIMARY KEY (`IdPresentador`);

--
-- Indices de la tabla `productor`
--
ALTER TABLE `productor`
  ADD PRIMARY KEY (`IdProductor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `editor`
--
ALTER TABLE `editor`
  MODIFY `IdEditor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `periodismo`
--
ALTER TABLE `periodismo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `periodista`
--
ALTER TABLE `periodista`
  MODIFY `IdPeriodista` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `presentador`
--
ALTER TABLE `presentador`
  MODIFY `IdPresentador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productor`
--
ALTER TABLE `productor`
  MODIFY `IdProductor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `periodismo`
--
ALTER TABLE `periodismo`
  ADD CONSTRAINT `periodismo_ibfk_1` FOREIGN KEY (`IdEditor`) REFERENCES `editor` (`IdEditor`),
  ADD CONSTRAINT `periodismo_ibfk_2` FOREIGN KEY (`IdPeriodista`) REFERENCES `periodista` (`IdPeriodista`),
  ADD CONSTRAINT `periodismo_ibfk_3` FOREIGN KEY (`IdPresentador`) REFERENCES `presentador` (`IdPresentador`),
  ADD CONSTRAINT `periodismo_ibfk_4` FOREIGN KEY (`IdProductor`) REFERENCES `productor` (`IdProductor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

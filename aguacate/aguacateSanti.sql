-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 06:01:31
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aguacate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id_autos` int(11) NOT NULL,
  `placa` varchar(20) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_autos`, `placa`, `marca`, `color`, `idCliente`) VALUES
(1, 'GZA 539', 'MAZDA', 'FSDFS', 1),
(2, 'GZA 539', 'MAZDA', 'FSDFS', 2),
(3, 'GZA 539', 'MAZDA', 'Gris', 3),
(4, 'GZA 539', 'MAZDA', 'Gris', 4),
(5, 'GZA 539', 'MAZDA', 'VERDE', 5),
(6, 'GZA 539', 'MAZDA', 'plata', 6),
(7, 'GZA 539', 'MAZDA', 'axul', 7),
(8, 'GZA 539', 'MAZDA', 'axul', 8),
(9, 'GZA 539', 'MAZDA', 'axul', 9),
(10, 'GZA 539', 'MAZDA', 'azul', 10),
(11, 'GZA 539', 'MAZDA', 'azul', 11),
(12, 'GZA 539', 'MAZDA', 'azul', 12),
(13, 'GZA 539', 'MAZDA', 'FSDFS', 13),
(14, 'GZA 539', 'MAZDA', 'FSDFS', 14),
(15, 'GZA 539', 'MAZDA', 'VERDE', 15),
(16, 'GZA 539', 'MAZDA', 'plata', 16),
(17, '3131', 'MAZDA', 'axul', 17),
(18, '1132123', 'MAZDA', 'azul', 18),
(19, 'GZA 539', '132', 'Gris', 19),
(20, 'GZA 539', 'MAZDA', 'FSDFS', 20),
(21, 'GZA 539', 'MAZDA', 'VERDE', 21),
(22, '3131', 'MAZDA', 'axul', 22),
(23, 'GZA 539', 'MAZDA', 'plata', 23),
(24, 'GZA 539', 'MAZDA', 'azul', 24),
(25, 'GZA 539', 'MAZDA', 'azul', 25),
(26, 'GZA 539', 'MAZDA', 'Gris', 26),
(27, 'GZA 539', 'MAZDA', 'FSDFS', 27),
(28, 'GZA 539', 'MAZDA', 'VERDE', 28),
(29, 'GZA 539', 'MAZDA', 'azul', 29),
(30, 'GZA 539', 'MAZDA', 'azul', 30),
(31, 'GZA 539', 'MAZDA', 'azul', 31),
(32, 'GZA 539', 'MAZDA', 'azul', 32),
(33, 'GZA 539', 'MAZDA', 'azul', 33),
(34, 'GZA 539', 'MAZDA', 'axul', 34),
(35, 'GZA 539', 'MAZDA', 'axul', 35),
(36, 'GZA 539', 'MAZDA', 'axul', 36),
(37, 'GZA 539', 'MAZDA', 'plata', 37),
(38, 'GZA 539', 'MAZDA', 'Gris', 38),
(39, '1132123', 'MAZDA', 'VERDE', 39),
(40, '1132123', 'MAZDA', 'VERDE', 40),
(41, '1132123', 'MAZDA', 'VERDE', 41),
(42, '1132123', 'MAZDA', 'VERDE', 42),
(43, 'GZA 539', 'audi', 'azul', 43),
(44, 'GZA 539', 'MAZDA', 'FSDFS', 44),
(45, 'fdasfsd', 'MAZDA', 'axul', 45),
(46, 'GZA 539', 'MAZDA', 'plata', 46),
(47, 'GZA 539', 'MAZDA', 'Gris', 47),
(48, '3131', 'MAZDA', 'VERDE', 48),
(49, 'GZA 539', 'MAZDA', 'FSDFS', 49),
(50, 'GZA 539', 'MAZDA', 'axul', 50),
(51, 'SDF', 'DSFS', 'plata', 51),
(52, 'GZA 539', 'YAMAHA', 'azul', 52),
(53, 'GZA 539', 'MAZDA', 'Gris', 53),
(54, 'GZA 539', 'safas', 'FSDFS', 54),
(55, 'GZA 539', 'MAZDA', '413', 55),
(56, 'GZA 539', 'MAZDA', 'VERDE', 56),
(57, 'SDF', 'MAZDA', 'axul', 57),
(58, 'GZA 539', 'YAMAHA', 'plata', 58),
(59, '23456', '4356', '4356', 59),
(60, 'GZA 539', 'audi', 'azul', 60),
(61, '4567', '456t7', '456', 61),
(62, 'GZA 539', 'MAZDA', 'Gris', 62),
(63, 'GZA 539', 'MAZDA', 'FSDFS', 63),
(64, 'SDF', 'MAZDA', 'asdsf', 64),
(65, 'SDF', 'MAZDA', 'asdsf', 65),
(66, 'GZA 5391234567', 'MAZDA', '12345678', 66),
(67, 'GZA 539', 'MAZDA', 'VERDE', 67),
(68, '33', 'YAMAHA', 'axul', 68),
(69, 'GZA 539', 'MAZDA', 'plata', 69),
(70, 'GZA 539', 'MAZDA', 'Gris', 70),
(71, 'GZA 539', 'MAZDA', 'azul', 71),
(72, 'GZA 539', 'MAZDA', 'FSDFS', 72),
(73, '2345', '2', 'VERDE', 73),
(74, 'GZA 539', 'MAZDA', 'axul', 74),
(75, 'GZA 539', 'MAZDA', 'plata', 75),
(76, 'SDF', 'MAZDA', 'azul', 76),
(77, 'GZA 539', 'MAZDA', 'Gris', 77),
(78, 'GZA 539', 'MAZDA', 'FSDFS', 78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `cedula`, `nombre`) VALUES
(1, 243242, 'Santiago'),
(2, 243242, 'Santiago'),
(3, 1004418388, 'Santiago'),
(4, 1004418388, 'Santiago'),
(5, 1004418388, 'Santiago'),
(6, 1004418388, 'Santiago'),
(7, 141141, 'Santiago'),
(8, 141141, 'Santiago'),
(9, 141141, 'Santiago'),
(10, 132213, 'Samuel'),
(11, 132213, 'Samuel'),
(12, 132213, 'Samuel'),
(13, 2147483647, 'Santiago'),
(14, 2147483647, 'Santiago'),
(15, 312323, 'Santiago'),
(16, 123123, 'Santiago'),
(17, 32131, 'Santiago'),
(18, 213213, 'Santiago'),
(19, 31231, 'Santiago'),
(20, 31231, 'Santiago'),
(21, 312131, '1231231'),
(22, 132313, 'Santiago'),
(23, 131231, 'Santiago'),
(24, 312131231, '13213'),
(25, 312131231, '13213'),
(26, 132123, 'Santiago'),
(27, 312312, 'Santiago'),
(28, 123123, 'Santiago'),
(29, 12312123, 'Santiago'),
(30, 12312123, 'Santiago'),
(31, 12312123, 'Santiago'),
(32, 12312123, 'Santiago'),
(33, 12312123, 'Santiago'),
(34, 1221212, 'Santiago'),
(35, 1221212, 'Santiago'),
(36, 1221212, 'Santiago'),
(37, 12121221, 'Santiago'),
(38, 1004418388, 'Santiago'),
(39, 11222, 'Santiago'),
(40, 11222, 'Santiago'),
(41, 11222, 'Santiago'),
(42, 11222, 'Santiago'),
(43, 1122121, 'Santiago'),
(44, 12155590, 'Santiago'),
(45, 34888, 'Santiago'),
(46, 231312, 'Santiago'),
(47, 1234343, 'Santiago'),
(48, 432342, 'Samuel'),
(49, 314342, 'Santiago'),
(50, 21312, 'Santiago'),
(51, 213123, 'Santiago'),
(52, 2345678, 'Santiago'),
(53, 132134, 'Santiago'),
(54, 12331113, 'Santiago'),
(55, 21343, 'Santiago'),
(56, 1312312, '12312'),
(57, 32456, 'Samuelllllllllllll'),
(58, 626156, 'erazo'),
(59, 213456, '234567'),
(60, 234567, 'Santiago'),
(61, 23456, 'Santiago'),
(62, 21345, 'Santiago'),
(63, 234567, 'Santiago'),
(64, 2345, 'Santiago'),
(65, 2345, 'Santiago'),
(66, 12345678, 'Santiago'),
(67, 234567, 'Santiago'),
(68, 3456, '23456'),
(69, 123456, 'Santiago'),
(70, 23456, '23456'),
(71, 2345, 'Samuel'),
(72, 2345, 'Santiago'),
(73, 234, '234'),
(74, 12345, 'Santiago'),
(75, 2345, '2345'),
(76, 23456, 'Santiago'),
(77, 123456, 'Santiago'),
(78, 2345, '23456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueo`
--

CREATE TABLE `parqueo` (
  `idParqueadero` int(11) NOT NULL,
  `id_piso` int(11) NOT NULL,
  `idAuto` int(11) NOT NULL,
  `fechaIngreso` datetime NOT NULL,
  `fechaSalida` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parqueo`
--

INSERT INTO `parqueo` (`idParqueadero`, `id_piso`, `idAuto`, `fechaIngreso`, `fechaSalida`) VALUES
(1, 1, 14, '2023-08-23 23:18:59', '0000-00-00 00:00:00'),
(2, 1, 15, '2023-08-23 23:19:07', '0000-00-00 00:00:00'),
(3, 1, 16, '2023-08-23 23:19:32', '0000-00-00 00:00:00'),
(4, 1, 17, '2023-08-23 23:19:41', '0000-00-00 00:00:00'),
(5, 1, 18, '2023-08-23 23:19:49', '0000-00-00 00:00:00'),
(6, 1, 19, '2023-08-23 23:20:16', '0000-00-00 00:00:00'),
(7, 1, 20, '2023-08-23 23:20:23', '0000-00-00 00:00:00'),
(8, 1, 21, '2023-08-23 23:20:30', '0000-00-00 00:00:00'),
(9, 1, 22, '2023-08-23 23:20:38', '0000-00-00 00:00:00'),
(10, 1, 23, '2023-08-23 23:20:45', '0000-00-00 00:00:00'),
(11, 1, 24, '2023-08-23 23:21:02', '0000-00-00 00:00:00'),
(12, 1, 27, '2023-08-23 23:49:17', '0000-00-00 00:00:00'),
(13, 1, 29, '2023-08-24 19:12:53', '0000-00-00 00:00:00'),
(14, 1, 30, '2023-08-24 19:33:01', '0000-00-00 00:00:00'),
(15, 1, 31, '2023-08-24 19:34:25', '0000-00-00 00:00:00'),
(16, 1, 32, '2023-08-24 19:43:19', '0000-00-00 00:00:00'),
(17, 1, 71, '2023-08-24 22:33:57', '0000-00-00 00:00:00'),
(18, 1, 72, '2023-08-24 22:48:48', '0000-00-00 00:00:00'),
(19, 3, 73, '2023-08-24 22:49:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `idPiso` int(11) NOT NULL,
  `piso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`idPiso`, `piso`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(11) NOT NULL,
  `puestos` int(11) DEFAULT NULL,
  `piso` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `puestos`, `piso`, `estado`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 3, 1, 0),
(4, 4, 1, 0),
(5, 5, 1, 0),
(6, 6, 1, 0),
(7, 7, 1, 0),
(8, 8, 1, 0),
(9, 9, 1, 0),
(10, 10, 1, 0),
(11, 1, 2, 0),
(12, 2, 2, 0),
(13, 3, 2, 0),
(14, 4, 2, 0),
(15, 5, 2, 0),
(16, 6, 2, 0),
(17, 7, 2, 0),
(18, 8, 2, 0),
(19, 9, 2, 0),
(20, 10, 2, 0),
(21, 1, 3, 0),
(22, 2, 3, 0),
(23, 3, 3, 0),
(24, 4, 3, 0),
(25, 5, 3, 0),
(26, 6, 3, 0),
(27, 7, 3, 0),
(28, 8, 3, 0),
(29, 9, 3, 0),
(30, 10, 3, 0),
(31, 1, 4, 0),
(32, 2, 4, 0),
(33, 3, 4, 0),
(34, 4, 4, 0),
(35, 5, 4, 0),
(36, 6, 4, 0),
(37, 7, 4, 0),
(38, 8, 4, 0),
(39, 9, 4, 0),
(40, 10, 4, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id_autos`),
  ADD KEY `tener6` (`idCliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Indices de la tabla `parqueo`
--
ALTER TABLE `parqueo`
  ADD PRIMARY KEY (`idParqueadero`),
  ADD KEY `tener4` (`id_piso`),
  ADD KEY `tener5` (`idAuto`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`idPiso`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tener2` (`piso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_autos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `parqueo`
--
ALTER TABLE `parqueo`
  MODIFY `idParqueadero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `tener6` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id_clientes`);

--
-- Filtros para la tabla `parqueo`
--
ALTER TABLE `parqueo`
  ADD CONSTRAINT `tener4` FOREIGN KEY (`id_Piso`) REFERENCES `puestos` (`id`),
  ADD CONSTRAINT `tener5` FOREIGN KEY (`idAuto`) REFERENCES `autos` (`id_autos`);

--
-- Filtros para la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD CONSTRAINT `tener2` FOREIGN KEY (`piso`) REFERENCES `pisos` (`idPiso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

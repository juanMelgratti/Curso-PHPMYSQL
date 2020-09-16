-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2020 a las 14:40:09
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpmysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Consulta`
--

CREATE TABLE `Consulta` (
  `ID` int NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `APELLIDO` varchar(40) NOT NULL,
  `EDAD` int NOT NULL,
  `MAIL` varchar(250) NOT NULL,
  `SUBJECT` varchar(100) NOT NULL,
  `MSG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Consulta`
--

INSERT INTO `Consulta` (`ID`, `NOMBRE`, `APELLIDO`, `EDAD`, `MAIL`, `SUBJECT`, `MSG`) VALUES
(4, 'asd', 'asd', 123, 'asaaaaaaaaaad@asd.com', 'asd', 'asd'),
(5, 'asd123', 'asd', 123, 'asaaaaaaaaaad@asd.com', 'asd', 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Consulta`
--
ALTER TABLE `Consulta`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Consulta`
--
ALTER TABLE `Consulta`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 04:04:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcontactos`
--

CREATE TABLE `tbcontactos` (
  `idcontacto` int(11) NOT NULL,
  `NombreC` varchar(50) DEFAULT NULL,
  `Edad` varchar(10) DEFAULT NULL,
  `Celular` varchar(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `FechaA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbcontactos`
--

INSERT INTO `tbcontactos` (`idcontacto`, `NombreC`, `Edad`, `Celular`, `Email`, `FechaA`) VALUES
(1, 'Brandon Hernandez', '23', '5617985853', 'branlobo_@hotmail.com', '2020-11-28 00:27:52'),
(2, 'Cristal ', '1', '5617985853', 'cristal.jan@hotmail.com', '2020-11-28 00:44:55'),
(3, 'Esperanza ', '22', '5587179394', 'espe@gmail.com', '2020-11-28 02:39:38'),
(21, 'Alonso Hernandez', '1', '5541147896', 'alonso.hernande@gmail.com', '2020-11-30 20:00:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcontactos`
--
ALTER TABLE `tbcontactos`
  ADD PRIMARY KEY (`idcontacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcontactos`
--
ALTER TABLE `tbcontactos`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

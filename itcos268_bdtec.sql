-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2021 a las 03:21:14
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itcos268_bdtec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ffinal`
--

CREATE TABLE `ffinal` (
  `IdUsuario` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apaterno` varchar(255) NOT NULL,
  `amaterno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbboletin`
--

CREATE TABLE `tbboletin` (
  `Nboletin` varchar(255) NOT NULL,
  `Foto1` varchar(255) NOT NULL,
  `Foto2` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `DescBreve` varchar(255) NOT NULL,
  `DescCompleta` varchar(255) NOT NULL,
  `FIngreso` varchar(255) NOT NULL,
  `FFinal` varchar(255) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsliders`
--

CREATE TABLE `tbsliders` (
  `Id` int(11) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `NSliders` varchar(255) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `FIngreso` varchar(255) NOT NULL,
  `FFinal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ffinal`
--
ALTER TABLE `ffinal`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Indices de la tabla `tbboletin`
--
ALTER TABLE `tbboletin`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbsliders`
--
ALTER TABLE `tbsliders`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ffinal`
--
ALTER TABLE `ffinal`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbboletin`
--
ALTER TABLE `tbboletin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbsliders`
--
ALTER TABLE `tbsliders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

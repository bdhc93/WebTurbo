-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2020 a las 03:20:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_turbo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_web`
--

CREATE TABLE `data_web` (
  `Id` int(11) NOT NULL,
  `vista` varchar(200) NOT NULL,
  `titulo_1` varchar(200) NOT NULL,
  `descripcion_1` varchar(2000) DEFAULT NULL,
  `descripcion_1_2` varchar(200) DEFAULT NULL,
  `icono_1` varchar(50) DEFAULT NULL,
  `titulo_2` varchar(200) DEFAULT NULL,
  `descripcion_2` varchar(2000) DEFAULT NULL,
  `descripcion_2_2` varchar(200) DEFAULT NULL,
  `icono_2` varchar(50) DEFAULT NULL,
  `titulo_3` varchar(200) DEFAULT NULL,
  `descripcion_3` varchar(2000) DEFAULT NULL,
  `descripcion_3_2` varchar(200) DEFAULT NULL,
  `icono_3` varchar(50) DEFAULT NULL,
  `titulo_4` varchar(200) DEFAULT NULL,
  `descripcion_4` varchar(2000) DEFAULT NULL,
  `descripcion_4_2` varchar(200) DEFAULT NULL,
  `icono_4` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `data_web`
--

INSERT INTO `data_web` (`Id`, `vista`, `titulo_1`, `descripcion_1`, `descripcion_1_2`, `icono_1`, `titulo_2`, `descripcion_2`, `descripcion_2_2`, `icono_2`, `titulo_3`, `descripcion_3`, `descripcion_3_2`, `icono_3`, `titulo_4`, `descripcion_4`, `descripcion_4_2`, `icono_4`) VALUES
(1, 'CONTACTOS', 'DIRECCIÓN', 'Jirón Miguel Iglesias N° 483-489', '', 'fa fa-map-marker', 'NÚMEROS DE PUBLICIDAD', '+51 976 387 244', '+51 976 575 551', 'fa fa-phone', 'NÚMEROS DE OFICINA', '+51 076 366 985', '+51 076 367 759', 'fa fa-phone', 'CORREOS', 'ventas@turbomix.com.pe', 'grupo@turbomix.com.pe', 'fa fa-envelope');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_programa`
--

CREATE TABLE `detalle_programa` (
  `Id` int(11) NOT NULL,
  `Id_programacion` int(11) NOT NULL,
  `Id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Id` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `lunes` tinyint(1) NOT NULL,
  `martes` tinyint(1) NOT NULL,
  `miercoles` tinyint(1) NOT NULL,
  `jueves` tinyint(1) NOT NULL,
  `viernes` tinyint(1) NOT NULL,
  `sabado` tinyint(1) NOT NULL,
  `domingo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `Id` int(11) NOT NULL,
  `empresa` varchar(20) NOT NULL,
  `locutor` varchar(60) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `genero` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE `ranking` (
  `Id` int(11) NOT NULL,
  `empresa` varchar(20) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `artista` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `url` varchar(50) NOT NULL,
  `ubicacion` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data_web`
--
ALTER TABLE `data_web`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `detalle_programa`
--
ALTER TABLE `detalle_programa`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_horario` (`Id_horario`),
  ADD KEY `Id_programacion` (`Id_programacion`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data_web`
--
ALTER TABLE `data_web`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_programa`
--
ALTER TABLE `detalle_programa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ranking`
--
ALTER TABLE `ranking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_programa`
--
ALTER TABLE `detalle_programa`
  ADD CONSTRAINT `detalle_programa_ibfk_1` FOREIGN KEY (`Id_horario`) REFERENCES `horario` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_programa_ibfk_2` FOREIGN KEY (`Id_programacion`) REFERENCES `programacion` (`Id`) ON DELETE CASCADE;


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla data_web
--

--
-- Metadatos para la tabla detalle_programa
--

--
-- Metadatos para la tabla horario
--

--
-- Metadatos para la tabla programacion
--

--
-- Metadatos para la tabla ranking
--

--
-- Metadatos para la base de datos db_turbo
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

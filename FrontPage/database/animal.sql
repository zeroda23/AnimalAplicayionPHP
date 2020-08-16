-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 00:22:20
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animal`
--
CREATE DATABASE IF NOT EXISTS `animal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `animal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `AnimalId` varchar(50) NOT NULL,
  `NombreAnimal` varchar(50) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `HabitadNatural` varchar(100) NOT NULL,
  `GrupoAnimal` varchar(10) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`AnimalId`, `NombreAnimal`, `Ubicacion`, `HabitadNatural`, `GrupoAnimal`, `Descripcion`) VALUES
('5f35a27001716', 'Gallina', 'Mexico', 'Granja pequeña', '1', 'Gallina rara que pone huevos de oro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catgrupoanimal`
--

CREATE TABLE `catgrupoanimal` (
  `GrupoId` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catgrupoanimal`
--

INSERT INTO `catgrupoanimal` (`GrupoId`, `Descripcion`) VALUES
(2, 'invertebrados'),
(1, 'vertebrados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` varchar(50) NOT NULL,
  `NombreUsuario` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `NombreUsuario`, `Password`) VALUES
('aa37885e-3ee3-488f-b3a9-ac63c335fcde', 'Leonardo', 'Pruebas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`AnimalId`),
  ADD UNIQUE KEY `NombreAnimal` (`NombreAnimal`);

--
-- Indices de la tabla `catgrupoanimal`
--
ALTER TABLE `catgrupoanimal`
  ADD PRIMARY KEY (`GrupoId`),
  ADD UNIQUE KEY `Descripcion` (`Descripcion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`),
  ADD UNIQUE KEY `NombreUsuario` (`NombreUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

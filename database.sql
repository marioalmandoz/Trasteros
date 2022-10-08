-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-09-2020 a las 16:37:17
-- Versión del servidor: 10.5.5-MariaDB-1:10.5.5+maria~focal
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Estructura de la table usuario

CREATE TABLE 'usuario'('nombre' text not null, 'apellido' text not null, 'DNI' varchar(9) PRIMARY KEY not null, 'telefono' int (9)  not null, 'fechaN' date not null, 'email' varchar(40) not null);
-- EStructura de la tabla trastero 

--CREATE TABLE 'trastero'('ID' int(10) PRIMARY KEY not null, 'nombre' varchar(20) not null, 'metrodCuadrados' int not null, 'localizacion' varchar(30) not null, 'dueño' varchar(20) not null);
---- Estructura de tabla para la tabla `trastero`
--

CREATE TABLE `trastero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `metroCadrado` int(11) NOT NULL,
  `localizacion` varchar(50) NOT NULL,
  `responsable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trastero`
--
ALTER TABLE `trastero`
  ADD PRIMARY KEY (`id`);
COMMIT;

-- Volcado de datos para la tabla `usuarios`
--

insert into 'usuario' (`nombre`, `apellido`, `DNI`, `telefono`, `fechaN`, `email`) values( 'mario', 'Almandoz', '87080965E', 876543678, 2002/11/06, 'marioalmandoz@gmail.com');


INSERT INTO `usuarios` (`id`, `nombre`) VALUES
(1, 'mikel'),
(2, 'aitor');

INSERT INTO `trastero`(`id`, `nombre`, `metroCadrado`, `localizacion`, `responsable`) VALUES (12345689,'primero',25,'bilbo','andres');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

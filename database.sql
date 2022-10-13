-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 11-10-2022 a las 19:26:56
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 8.0.19

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
-- Estructura de tabla para la tabla `Trastero`
--

CREATE TABLE `Trastero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `metroCuadrado` int(11) NOT NULL,
  `localizacion` varchar(50) NOT NULL,
  `responsable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Trastero`
--

INSERT INTO `Trastero` (`id`, `nombre`, `metroCuadrado`, `localizacion`, `responsable`) VALUES
(1, 'pon', 50, 'bilbo', 'mario'),
(2, 'pin', 36, 'barakaldo', 'juan'),
(3, 'pun', 46, 'ermua', 'pedro'),
(4, 'pan', 96, 'madrid', 'txema'),
(5, 'chui', 37, 'galda', 'mario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `telefono` int(9) NOT NULL,
  `fechaN` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`nombre`, `apellido`, `DNI`, `telefono`, `fechaN`, `email`, `clave`) VALUES
('pepe',      'pepe',   '44339206-J', 212121122, '2022-10-05', 'pepe@gmail.com', 'pepe12'),
('mario',     'mario',  '13806705-N', 562369959, '2003-02-20', 'mario@gmail.com', 'mario1'),
('Alejandro', 'Gómez',  '07254129-K', 888888888, '2022-10-08', 'alejandro@gmail.com', 'alejandro'),
('pepe',      'mono',   '44963475-Q', 562369959, '2002-02-20', 'pepe@gmail.com', 'pepe13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Trastero`
--
ALTER TABLE `Trastero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2019 a las 05:34:12
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(4) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `end` date DEFAULT NULL,
  `horaFin` time DEFAULT NULL,
  `diaEntero` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `start`, `horaInicio`, `end`, `horaFin`, `diaEntero`) VALUES
(1, 'Prueba calendario', '2019-01-03', NULL, NULL, NULL, NULL),
(11, 'feria de cali', '0000-00-00', '07:00:00', '0000-00-00', '07:00:00', NULL),
(15, 'prueba', '2019-01-09', '06:00:00', '2019-01-09', '07:00:00', NULL),
(20, 'eventosss', '0000-00-00', '07:00:00', '0000-00-00', '07:00:00', NULL),
(21, 'prueba', '2019-01-04', '07:00:00', '2019-01-04', '07:00:00', NULL),
(31, 'prueba', '2019-01-04', '05:00:00', '2019-01-04', '07:00:00', NULL),
(34, 'prueba', '2019-01-11', '07:00:00', '2019-01-11', '07:00:00', NULL),
(35, 'jefferson', '2019-01-23', '05:30:00', '2019-01-23', '07:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `fechaNacimiento`) VALUES
(9, 'juan@hotmail.com', '$2y$10$OuVrZ3AM9z26mUC2X9F36eEai3iuC1RDKHdY8ezjICz2dCzQVcZxS', 'juan perez', '2000-11-23'),
(10, 'pedro@hotmail.com', '$2y$10$OjicKAswk0AMzcm9C0R9t.Oz2cv66mJ6kV/rL1VJeaSoicxJYEwHq', 'pedro pablo', '2000-12-23'),
(11, 'jose@hotmail.com', '$2y$10$I/2zQQOuY0fDIP6D11mMte.CnD0V5dBOZ9uI7xGQE9U7wXAQ90EAS', 'jose perez', '2000-11-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2022 a las 19:17:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbtrack`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menstrual`
--

CREATE TABLE `menstrual` (
  `id` int(50) NOT NULL,
  `ultimop` date NOT NULL,
  `duracionp` int(50) NOT NULL,
  `duracionciclo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menstrual`
--

INSERT INTO `menstrual` (`id`, `ultimop`, `duracionp`, `duracionciclo`) VALUES
(1, '2022-10-14', 5, 28),
(2, '2022-10-19', 9, 27),
(3, '2022-10-12', 6, 28),
(5, '2022-10-14', 5, 28),
(6, '2022-10-18', 10, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechanac` date NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `apellido`, `fechanac`, `telefono`, `password`, `email`, `rol`) VALUES
(3, 'Francisco', 'Genere', '1996-09-15', '8298627570', '81dc9bdb52d04dc20036dbd8313ed055', 'fran_frandije@hotmail.com', 1),
(6, 'NormalUsuario', 'sin apellido', '2022-10-12', '8096587590', 'd93591bdf7860e1e4ee2fca799911215', 'usuario@gmail.com', 2),
(38, 'Kelvin2', 'Torres2', '1997-09-04', '8295228278', 'd93591bdf7860e1e4ee2fca799911215', 'levintorres19@gmail.com', 1),
(46, 'Persona', 'Apellido1', '2022-10-06', '8095725546', 'd93591bdf7860e1e4ee2fca799911215', 'persona@mail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menstrual`
--
ALTER TABLE `menstrual`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menstrual`
--
ALTER TABLE `menstrual`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

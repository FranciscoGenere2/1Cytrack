-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 15:38:46
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
  `ultimop` date DEFAULT NULL,
  `duracionp` int(50) DEFAULT NULL,
  `duracionciclo` int(50) DEFAULT NULL,
  `id_usu` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menstrual`
--

INSERT INTO `menstrual` (`id`, `ultimop`, `duracionp`, `duracionciclo`, `id_usu`) VALUES
(1, '2022-10-14', 5, 28, 1),
(2, '2022-10-19', 9, 27, 1),
(3, '2022-10-12', 6, 28, 1),
(5, '2022-10-14', 5, 28, 2),
(6, '2022-10-18', 10, 25, 10),
(7, '2022-11-08', 1, 1, 1),
(8, '0000-00-00', 1, 1, 20221108),
(9, '0000-00-00', 1, 1, NULL),
(10, '0000-00-00', 1, 1, 1223321317),
(11, NULL, 1, 1, 1223321318),
(12, NULL, 1, 1, 1223321319);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` bigint(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechanac` date NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `apellido`, `fechanac`, `telefono`, `password`, `email`, `rol`) VALUES
(1, 'Francisco                                            ', 'Genere                                            ', '2022-11-10', '809', '81dc9bdb52d04dc20036dbd8313ed055', 'fran_frandije@hotmail.com', 2),
(2, 'UsuarioNormaa                                                                                      ', 'perez                                                                                  ', '2022-11-07', '809', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario@gmail.com', 2),
(10, 'juanito                                            ', 'perez                                            ', '2022-11-08', '809', '81dc9bdb52d04dc20036dbd8313ed055', 'juan@hotmail.com', 1),
(12, 'luis', 'valenzuela', '2013-12-31', '809', '202cb962ac59075b964b07152d234b70', 'rompemata@gmail.com', 2),
(13, 'manuel', 'perez', '2013-12-25', '809', '202cb962ac59075b964b07152d234b70', 'cocote@hotmail.com', 2),
(17, 'luis', 'valenzuela', '2013-12-04', '123', '202cb962ac59075b964b07152d234b70', 'AS@G.COM', 2),
(18, 'juana', 'pereza', '2012-11-08', '809', '123', 'coco@gmail.com', 2),
(113, 'PEPE', 'GOICO', '2013-12-04', '123', '202cb962ac59075b964b07152d234b70', 'COCA@HOTMAIL.COM', 2),
(114, 'MANGO', 'BAJITO', '2013-12-24', '123', '202cb962ac59075b964b07152d234b70', 'MB@CO.COM', 2),
(1223321314, 'pancho', 'manguera', '2013-12-12', '123', '202cb962ac59075b964b07152d234b70', 'pp@pp.com', 2),
(1223321315, 'monkey', 'black', '2013-12-04', '123', '202cb962ac59075b964b07152d234b70', 'mb@mb.com', 2),
(1223321316, 'pop', 'la', '2013-12-06', '123', '202cb962ac59075b964b07152d234b70', 'popo@la.com', 2),
(1223321317, 'chikindolo', 'lapara', '2013-12-12', '123', '202cb962ac59075b964b07152d234b70', '123@f.com', 2),
(1223321318, 'luis', 'melendez', '2013-12-03', '123', '202cb962ac59075b964b07152d234b70', 'lm@gmail.com', 2),
(1223321319, 'manuela', 'mendez', '2013-12-18', '123', '202cb962ac59075b964b07152d234b70', 'mmendez@gmail.com', 2);

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `ins` AFTER INSERT ON `users` FOR EACH ROW BEGIN
declare id_user int;
set id_user = (select max(user_id) from users);
    INSERT INTO menstrual (duracionciclo, duracionp, ultimop, id_usu) VALUES (1,1,date("Y-m-d"),id_user);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `w`
--

CREATE TABLE `w` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `w`
--

INSERT INTO `w` (`id`) VALUES
(114),
(114);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1223321320;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

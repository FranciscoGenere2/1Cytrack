-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2022 a las 15:34:07
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
-- Base de datos: `cytrack`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividadsexual`
--

CREATE TABLE `actividadsexual` (
  `ide_act` int(11) NOT NULL,
  `act_sex` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `ide_alm` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `ide_fre` int(11) NOT NULL,
  `ide_met` int(11) NOT NULL,
  `ide_rep` int(11) NOT NULL,
  `ide_san` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correousuario`
--

CREATE TABLE `correousuario` (
  `ide_cor` int(11) NOT NULL,
  `cor_usu` varchar(50) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `ide_tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosovulacion`
--

CREATE TABLE `datosovulacion` (
  `ide_ovu` int(11) NOT NULL,
  `fec_ovu` date NOT NULL,
  `ide_sin` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='insersion de datos de ovulacion';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `ide_doc` int(11) NOT NULL,
  `documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='documento de identidad del usuario';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fases`
--

CREATE TABLE `fases` (
  `ide_fas` int(11) NOT NULL,
  `nom_Fas` varchar(50) NOT NULL,
  `des_fas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fasevsusuario`
--

CREATE TABLE `fasevsusuario` (
  `ide_usu` int(11) NOT NULL,
  `ide_fas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuenciaperiodo`
--

CREATE TABLE `frecuenciaperiodo` (
  `ide_fre` int(11) NOT NULL,
  `dia_per` int(11) NOT NULL,
  `fec_per` date NOT NULL,
  `dia_cic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodoanticonceptivo`
--

CREATE TABLE `metodoanticonceptivo` (
  `ide_met` int(11) NOT NULL,
  `nom_met` varchar(20) NOT NULL,
  `des_met` varchar(500) NOT NULL,
  `fre_met` int(11) NOT NULL,
  `ide_sin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `ide_not` int(11) NOT NULL,
  `des_not` varchar(500) NOT NULL,
  `fec_not` date NOT NULL,
  `ide_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prediccion`
--

CREATE TABLE `prediccion` (
  `ide_pre` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `des_pre` varchar(500) NOT NULL,
  `ide_met` int(11) NOT NULL,
  `ide_ovu` int(11) NOT NULL,
  `ide_act` int(11) NOT NULL,
  `ide_fre` int(11) NOT NULL,
  `fec_pre` date NOT NULL,
  `ide_san` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `ide_rep` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  `des_rep` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sangrado`
--

CREATE TABLE `sangrado` (
  `ide_san` int(11) NOT NULL,
  `des_san` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sintomas`
--

CREATE TABLE `sintomas` (
  `ide_sin` int(11) NOT NULL,
  `tip_sin` int(11) NOT NULL,
  `des_sin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='sintomas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sintomavsusuario`
--

CREATE TABLE `sintomavsusuario` (
  `ide_sin` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='sintomas vs usuario';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `ide_tel` int(11) NOT NULL,
  `num_tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonovscontacto`
--

CREATE TABLE `telefonovscontacto` (
  `ide_tel` int(11) NOT NULL,
  `ide_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocorreo`
--

CREATE TABLE `tipocorreo` (
  `ide_tip` int(11) NOT NULL,
  `tip_cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `est_emp` int(11) NOT NULL,
  `tip_est` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tipo de usuario (admin o normal)';

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`est_emp`, `tip_est`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ide_usu` int(11) NOT NULL,
  `usu_nom` varchar(50) NOT NULL,
  `usu_pwd` varchar(50) NOT NULL,
  `fec_nac` date NOT NULL,
  `ide_doc` int(11) DEFAULT NULL,
  `doc_usu` varchar(50) DEFAULT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `ape_usu` varchar(50) NOT NULL,
  `dir_usu` varchar(100) NOT NULL,
  `est_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla usuario';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ide_usu`, `usu_nom`, `usu_pwd`, `fec_nac`, `ide_doc`, `doc_usu`, `nom_usu`, `ape_usu`, `dir_usu`, `est_emp`) VALUES
(1, 'fgenere', '123456', '2012-10-16', 1, '0310544', 'francisco', 'genere', 'calle 10, #22, santo domingo', 1),
(3, 'walmonte', '123456', '1993-10-04', 1, '03105431088', 'wilmer', 'almonte', 'calle 5 #12, gregorio luperon', 1),
(5, 'jherrera', '123456', '1995-10-04', 1, '12344', 'josue', 'herrera', 'puerto plata', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividadsexual`
--
ALTER TABLE `actividadsexual`
  ADD PRIMARY KEY (`ide_act`);

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`ide_alm`);

--
-- Indices de la tabla `correousuario`
--
ALTER TABLE `correousuario`
  ADD PRIMARY KEY (`ide_cor`);

--
-- Indices de la tabla `datosovulacion`
--
ALTER TABLE `datosovulacion`
  ADD PRIMARY KEY (`ide_ovu`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`ide_doc`);

--
-- Indices de la tabla `fases`
--
ALTER TABLE `fases`
  ADD PRIMARY KEY (`ide_fas`);

--
-- Indices de la tabla `frecuenciaperiodo`
--
ALTER TABLE `frecuenciaperiodo`
  ADD PRIMARY KEY (`ide_fre`);

--
-- Indices de la tabla `metodoanticonceptivo`
--
ALTER TABLE `metodoanticonceptivo`
  ADD PRIMARY KEY (`ide_met`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`ide_not`);

--
-- Indices de la tabla `prediccion`
--
ALTER TABLE `prediccion`
  ADD PRIMARY KEY (`ide_pre`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`ide_rep`);

--
-- Indices de la tabla `sangrado`
--
ALTER TABLE `sangrado`
  ADD PRIMARY KEY (`ide_san`);

--
-- Indices de la tabla `sintomas`
--
ALTER TABLE `sintomas`
  ADD PRIMARY KEY (`ide_sin`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`ide_tel`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`est_emp`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ide_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividadsexual`
--
ALTER TABLE `actividadsexual`
  MODIFY `ide_act` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `ide_alm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `correousuario`
--
ALTER TABLE `correousuario`
  MODIFY `ide_cor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datosovulacion`
--
ALTER TABLE `datosovulacion`
  MODIFY `ide_ovu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `ide_doc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fases`
--
ALTER TABLE `fases`
  MODIFY `ide_fas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frecuenciaperiodo`
--
ALTER TABLE `frecuenciaperiodo`
  MODIFY `ide_fre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metodoanticonceptivo`
--
ALTER TABLE `metodoanticonceptivo`
  MODIFY `ide_met` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `ide_not` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prediccion`
--
ALTER TABLE `prediccion`
  MODIFY `ide_pre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `ide_rep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sangrado`
--
ALTER TABLE `sangrado`
  MODIFY `ide_san` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sintomas`
--
ALTER TABLE `sintomas`
  MODIFY `ide_sin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `ide_tel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `est_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ide_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

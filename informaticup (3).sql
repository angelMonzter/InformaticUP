-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2018 a las 06:41:58
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informaticup`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c-v`
--

CREATE TABLE `c-v` (
  `idc-v` int(11) NOT NULL,
  `id_curriculum` int(11) DEFAULT NULL,
  `id_vinculo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculum`
--

CREATE TABLE `curriculum` (
  `idcurriculum` int(11) NOT NULL,
  `foto` blob,
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `habilidades` text COLLATE utf8_spanish_ci,
  `perfil` text COLLATE utf8_spanish_ci,
  `educacion` text COLLATE utf8_spanish_ci,
  `experiencia` text COLLATE utf8_spanish_ci,
  `id_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idespecialidad` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idespecialidad`, `nombre`, `descripcion`) VALUES
(1, 'Programacion', 'Java, c, c++'),
(2, 'Redes', 'Configuracion VLAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idregistro` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` date DEFAULT NULL,
  `contraseña` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `especialidad` int(11) DEFAULT NULL,
  `github` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idregistro`, `nombre`, `apellido`, `correo`, `edad`, `contraseña`, `especialidad`, `github`) VALUES
(1, 'Sergio', 'Ramirez', 'checo.guitar.27@gmail.com', '1997-06-27', '123checo', 1, 'www.git.com'),
(2, 'Ani', 'gomora', 'ani@gmail.com', '1997-09-25', '12345', 1, 'CJDCYDBCBDC'),
(3, 'Angel', 'Albarran', 'angel@gmail.com', '1997-01-18', 'angel123', 1, 'www.git/angel.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculo`
--

CREATE TABLE `vinculo` (
  `idvinculo` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `c-v`
--
ALTER TABLE `c-v`
  ADD PRIMARY KEY (`idc-v`),
  ADD KEY `vin-vin` (`id_vinculo`),
  ADD KEY `vin_curri` (`id_curriculum`);

--
-- Indices de la tabla `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`idcurriculum`),
  ADD KEY `curri_reg` (`id_registro`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idespecialidad`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idregistro`),
  ADD KEY `es-reg` (`especialidad`);

--
-- Indices de la tabla `vinculo`
--
ALTER TABLE `vinculo`
  ADD PRIMARY KEY (`idvinculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `c-v`
--
ALTER TABLE `c-v`
  MODIFY `idc-v` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `idcurriculum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idespecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idregistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `vinculo`
--
ALTER TABLE `vinculo`
  MODIFY `idvinculo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `c-v`
--
ALTER TABLE `c-v`
  ADD CONSTRAINT `vin-vin` FOREIGN KEY (`id_vinculo`) REFERENCES `vinculo` (`idvinculo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vin_curri` FOREIGN KEY (`id_curriculum`) REFERENCES `curriculum` (`idcurriculum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curriculum`
--
ALTER TABLE `curriculum`
  ADD CONSTRAINT `curri_reg` FOREIGN KEY (`id_registro`) REFERENCES `registro` (`idregistro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `es-reg` FOREIGN KEY (`especialidad`) REFERENCES `especialidad` (`idespecialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2017 a las 16:27:19
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_santa_teresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anamnesis`
--

CREATE TABLE `anamnesis` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(14) NOT NULL,
  `antecedentes_patologicos` varchar(200) NOT NULL,
  `antecedentes_hospitalarios` varchar(200) NOT NULL,
  `antecedentes_alergicos` varchar(200) NOT NULL,
  `antecedentes_familiares` varchar(200) NOT NULL,
  `antecedentes_epidemiologicos` varchar(200) NOT NULL,
  `sintoma_principal` varchar(200) NOT NULL,
  `historia_enfermedad` varchar(200) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anamnesis`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `cita` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `identidad` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citas`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE `diagnosticos` (
  `id` bigint(11) NOT NULL,
  `identidad` varchar(13) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `patologico` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nutricional` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `socieconomico` varchar(201) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `inmunologico` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `etario` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `diagnosticos`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(20) NOT NULL,
  `pa` varchar(10) NOT NULL,
  `fr` varchar(10) NOT NULL,
  `temperatura` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `imc` varchar(10) NOT NULL,
  `cabeza` varchar(200) NOT NULL,
  `ojos` varchar(200) NOT NULL,
  `oidos` varchar(200) NOT NULL,
  `nariz` varchar(200) NOT NULL,
  `boca` varchar(200) NOT NULL,
  `cuello` varchar(200) NOT NULL,
  `columna` varchar(200) NOT NULL,
  `pulmones` varchar(200) NOT NULL,
  `corazon` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `genitales` varchar(200) NOT NULL,
  `extremidades` varchar(200) NOT NULL,
  `piel` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `identidad` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(39) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `escuela` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `lugar_nacimiento` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `procedencia` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `religion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fuente` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(14) NOT NULL,
  `tratamiento` varchar(200) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tratamiento`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anamnesis`
--
ALTER TABLE `anamnesis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
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
-- AUTO_INCREMENT de la tabla `anamnesis`
--
ALTER TABLE `anamnesis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

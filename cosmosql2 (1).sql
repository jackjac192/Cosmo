-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2017 a las 20:22:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cosmosql2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asegurado`
--

CREATE TABLE `asegurado` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asegurado`
--

INSERT INTO `asegurado` (`id`, `nombre`, `cedula`, `telefono`) VALUES
(13, 'Jhon Mar', '', '3128973456'),
(14, 'Gustavo', 'qwip', '31255'),
(15, 'jj', 'sss', 'kkk'),
(16, 'jj', 'sss', 'kkk'),
(17, 'NNN', 'sss', 'NN'),
(18, 'tttttt', 'sss', 'tttt'),
(19, 'weeee', 'qqq', 'weeeee'),
(20, 'ggg', '2158171642201746ThursdayFebruary1487264301', 'gg'),
(21, 'ggg', 'gg', 'gg'),
(22, 'bbb', 'bbbb', 'bbb'),
(23, 'fffff', '7931862201748SaturdayFebruary1487383747', 'fffff'),
(24, 'ANA JIMENA', '732162012201750MondayFebruary1487604727', '3156374703'),
(25, 'ANA JIMENA', '201172012201750MondayFebruary1487606480', '3156374703'),
(26, 'ANA JIMENA', '513172012201750MondayFebruary1487607185', '3156374703'),
(27, 'ANA JIMENA', '4622172012201750MondayFebruary1487607766', '3156374703'),
(28, 'ANA JIMENA', '3930172012201750MondayFebruary1487608239', '3156374703'),
(29, 'ANA JIMENA', '5934172012201750MondayFebruary1487608499', '3156374703'),
(30, 'SANDRA', '2141172012201750MondayFebruary1487608881', '3156374703'),
(31, 'Maria', '432732122201751TuesdayFebruary1487644063', '315235678'),
(32, 'Maria', '402832122201751TuesdayFebruary1487644120', '315235678'),
(33, 'Pedro Ortega', '14542122201751TuesdayFebruary1487646314', '312-452-4567'),
(34, 'rr', '532242122201751TuesdayFebruary1487647373', '3124553'),
(35, 'ddd', '403242122201751TuesdayFebruary1487647960', 'dddd'),
(36, 'Juan Cuadrado', '1939182602201756SundayFebruary1488130759', '312456980'),
(37, 'Juan Cuadrado', '1242182602201756SundayFebruary1488130932', '312456980'),
(38, 'Juan Cuadrado', '3443182602201756SundayFebruary1488131014', '312456980'),
(39, 'Juan Cuadrado', '5043182602201756SundayFebruary1488131030', '312456980'),
(40, 'Juan Cuadrado', '145182602201756SundayFebruary1488131101', '312456980'),
(41, 'Juan Cuadrado', '447182602201756SundayFebruary1488131224', '312456980'),
(42, 'Juan Cuadrado', '1649182602201756SundayFebruary1488131356', '312456980'),
(43, 'Juan Cuadrado', '3252182602201756SundayFebruary1488131552', '312456980'),
(44, 'Ricardo Riascos', '4858182602201756SundayFebruary1488131928', '321456798'),
(45, 'ssss', '2025192602201756SundayFebruary1488133520', 'sss'),
(46, 'ss', '3642192602201756SundayFebruary1488134556', 'ss'),
(47, 'ss', '2345192602201756SundayFebruary1488134723', 'ss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradora`
--

CREATE TABLE `aseguradora` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_ase` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `carateristicas` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aseguradora`
--

INSERT INTO `aseguradora` (`id`, `nombre_ase`, `carateristicas`, `descripcion`) VALUES
(1, 'Bolivar', '', ''),
(2, 'Sura', '', ''),
(3, 'Mapfre', '', ''),
(4, 'Andi', '', ''),
(5, 'Ike', '', ''),
(6, 'Axa', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ase_rama`
--

CREATE TABLE `ase_rama` (
  `id_ase` bigint(20) UNSIGNED NOT NULL,
  `id_rama` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ase_rama`
--

INSERT INTO `ase_rama` (`id_ase`, `id_rama`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(4, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id`, `cedula`, `nombre`, `telefono`, `correo`) VALUES
(18, '5050', 'Jhon Miltón', '3004351098', ''),
(24, 'PPP', 'Jackson', 'g', ''),
(29, '123', 'Sebastían Perez', '312222456', ''),
(33, '3031', 'Jhon James', '312000998', ''),
(36, '1234', 'Jhon', 'aas', '');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `planillas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `planillas` (
`expediente` varchar(50)
,`placa_grua` varchar(50)
,`nombre_funcionario` varchar(100)
,`valor_total` varchar(100)
,`as_enombre` varchar(100)
,`marca` varchar(50)
,`placa` varchar(50)
,`nombre_ase` varchar(50)
,`nombre_rama` varchar(50)
,`co_nombre` varchar(50)
,`co_cedula` varchar(50)
,`tipo_servicio` varchar(100)
,`lugar_recoge` varchar(150)
,`hora_recoge` time
,`lugar_entrega` varchar(150)
,`hora_entrega` time
,`hora_salida` time
,`km_servicio` varchar(50)
,`km_valor` varchar(300)
,`fecha` date
,`hora` time
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rama`
--

CREATE TABLE `rama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_rama` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rama`
--

INSERT INTO `rama` (`id`, `nombre_rama`, `detalles`, `descripcion`) VALUES
(1, 'Predeterminada', '', ''),
(2, 'Liberty', '', ''),
(3, 'Solidaria', '', ''),
(4, 'Chevrolet', '', ''),
(5, 'Chevistar', '', ''),
(6, 'Allianz', '', ''),
(7, 'Equidad', '', ''),
(8, 'Aig', '', ''),
(9, 'Qbe', '', ''),
(10, 'Seguros del Estado', '', ''),
(11, 'Generally', '', ''),
(12, 'Chubb Seguros', '', ''),
(13, 'Previsora', '', ''),
(14, 'Colpatria', '', ''),
(15, 'Ford', '', ''),
(16, 'Claro', '', ''),
(17, 'Renault', '', ''),
(18, 'Credibanca', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expediente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `nombre_funcionario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_aseguradora` bigint(20) UNSIGNED NOT NULL,
  `id_rama` bigint(20) UNSIGNED NOT NULL,
  `id_asegurado` bigint(20) NOT NULL,
  `id_vehiculo` bigint(20) NOT NULL,
  `lugar_recoge` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `hora_recoge` time NOT NULL,
  `hora_salida` time NOT NULL,
  `lugar_entrega` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `hora_entrega` time NOT NULL,
  `id_conductor` bigint(20) UNSIGNED NOT NULL,
  `placa_grua` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_receptor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `km_servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `km_valor` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `adicional` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `valor_total` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_servicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fallido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `expediente`, `fecha`, `hora`, `nombre_funcionario`, `id_aseguradora`, `id_rama`, `id_asegurado`, `id_vehiculo`, `lugar_recoge`, `hora_recoge`, `hora_salida`, `lugar_entrega`, `hora_entrega`, `id_conductor`, `placa_grua`, `nombre_receptor`, `km_servicio`, `km_valor`, `adicional`, `valor_total`, `tipo_servicio`, `fallido`, `observaciones`, `id_usuario`) VALUES
(53, 'HUIDF-3456', '2017-02-20', '03:25:00', 'Janier Vasquz', 5, 6, 33, 22, 'B/TURA, EN EL PORVENIR- FRENTE A LA IGLESIA DEL 14 DE JULIO CLL 6 N° 37A-73', '01:00:00', '00:00:00', 'CALI, CALLE 44 N° 4-44 BARRIO LA FLORABo', '01:00:00', 29, 'HJ47', 'Heider Roman', '100', '10', '', '', 'ninguno', 'ninguno', 'SIN LLAVES,  [2/20 11:26 PM] Fern: Yabla mandaste [2/20 11:26 PM] Fern: Siden  ponelaps [2/20 11:26 PM] Fern: Si pueden salir ponelas[2/20 11:27 PM] Fern: Pero ves que ayi puede ser una carrrta larga[2/20 11:27 PM] Fern: No creo que eo espacio nos de[2/20 11:30 PM] Fern: Dejalas sin observaciones [2', 5),
(54, '123', '2017-02-20', '19:35:00', 'jj', 2, 1, 34, 23, 'kkkk', '01:00:00', '00:00:00', 'kkkkk', '01:00:00', 24, 'isk', 'Jhon', 'jjjj', 'llll', 'jjj', 'jjj', 'jjj', 'kkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk esta es mi observación corregida					    \r\n\r\n\r\n<div style=\"border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;\">\r\n\r\n<h4>A PHP Error was encountered</h4>\r\n\r\n<p>Severity: Notice</p>\r\n<p>Message:  Undefined variable: reporte</p>\r\n<p>Filename: cpanel/reg', 5),
(60, '1123', '2017-02-26', '02:10:00', 'Falco García', 3, 1, 43, 30, 'Cali', '01:00:00', '00:00:00', 'Buga', '01:00:00', 29, 'sdfe', '', 'b', 'b', 'b', 'b', 'b', 'b', 'bbbbbbbbbbbbbbbb					     					    					    					    ', 5),
(61, '1213', '2017-02-08', '02:45:00', 'James Murillo', 1, 1, 44, 13, 'Medellin', '01:00:00', '00:00:00', 'Bogotá', '01:00:00', 24, 'dret', '', 'aa', 'sss', 'aa', 'aa', 'aa', 'aa', 'aa					    					    ', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `user_pass` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `permiso` int(11) NOT NULL DEFAULT '0',
  `activo` int(11) NOT NULL DEFAULT '0',
  `keypass` int(11) NOT NULL DEFAULT '0',
  `new_pass` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombres`, `apellidos`, `user_name`, `user_pass`, `correo`, `permiso`, `activo`, `keypass`, `new_pass`) VALUES
(5, '1008889789', 'Jackson', 'Palacios', 'jack', 'fd3a497ce0d17551e0d092a3e1c08e643740d1c6dae160b784e39f41ceb5e76346a1959fbf1a7bf5cde8b3053cebdf2fd68e27d6ff1545c7d5f74b445267e79bjDy4oUyesRbLHucPx+if1WmdgCiGng==', 'jackjac192@gmail.com', 0, 0, 0, 0),
(6, '1111747443', 'YURANIT YHOANNA', 'MURILLO MINA', 'YURANIT', '9fa1a8d25352add077323fd822be627a059b405555b04b797871499eca03434ca7c6c46be962488f8f857fd2bd887c42e3284b94b39bc4a9bd5ec30f76866e592or5XWR84VlVTp2INuMTRfiFg3amTtpK4w==', 'NANYMURILLO90187@HOTMAIL.COM', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` bigint(20) NOT NULL,
  `placa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `placa`, `marca`, `modelo`, `color`) VALUES
(13, 'ert3', 'Mazda', '2017', 'blanco'),
(14, 'qwip', 'mcns', 'lls', 'sksk'),
(15, 'sss', 'kk', 'bb', 'hh'),
(16, 'qqq', 'qq', 'qq', 'qq'),
(17, 'gg', 'g', 'gg', 'gg'),
(18, 'bbbb', 'bbbb', 'bbb', 'bbb'),
(19, 'feuw', 'akajsl', 'alksa', 'jalak'),
(20, 'JKI-879', 'NISSAN', 'MARCH', ''),
(21, 'as32', 'Mazda', '2016', 'Negro'),
(22, 'HU34', 'Chevrolt', 'Sail', 'BLANCO'),
(23, 'ffff', 'ggggg', 'jjjj', 'hhhh'),
(24, 'ddd', 'ddd', 'dd', 'dd'),
(25, 'ert3', 'q', 'q', 'q'),
(26, 'ert3', 'q', 'q', 'q'),
(27, 'ert3', 'q', 'q', 'q'),
(28, 'ert3', 'q', 'q', 'q'),
(29, 'ert3', 'q', 'q', 'q'),
(30, 'ert3d', 'q', 'q', 'q'),
(31, 'ert3d', 'q', 'q', 'q'),
(32, 'ert3', 'Mazda', 'Ati', 'verde'),
(33, 'ert3', 'rrrr', 'rrr', 'rrr'),
(34, 'ert3', 'ww', 'ww', 'ww'),
(35, 'ert3', 'ww', 'ww', 'ww'),
(36, 'ert3', 'ww', 'ww', 'ww'),
(37, 'ert3', 'ww', 'ww', 'ww'),
(38, 'ert3', 'Azul', 'Friz', 'Jejeje'),
(39, 'jjjl', 'Mazda', 'Ati', 'Rojo');

-- --------------------------------------------------------

--
-- Estructura para la vista `planillas`
--
DROP TABLE IF EXISTS `planillas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `planillas`  AS  select `reportes`.`expediente` AS `expediente`,`reportes`.`placa_grua` AS `placa_grua`,`reportes`.`nombre_funcionario` AS `nombre_funcionario`,`reportes`.`valor_total` AS `valor_total`,`asegurado`.`nombre` AS `as_enombre`,`vehiculo`.`marca` AS `marca`,`vehiculo`.`placa` AS `placa`,`aseguradora`.`nombre_ase` AS `nombre_ase`,`rama`.`nombre_rama` AS `nombre_rama`,`conductor`.`nombre` AS `co_nombre`,`conductor`.`cedula` AS `co_cedula`,`reportes`.`tipo_servicio` AS `tipo_servicio`,`reportes`.`lugar_recoge` AS `lugar_recoge`,`reportes`.`hora_recoge` AS `hora_recoge`,`reportes`.`lugar_entrega` AS `lugar_entrega`,`reportes`.`hora_entrega` AS `hora_entrega`,`reportes`.`hora_salida` AS `hora_salida`,`reportes`.`km_servicio` AS `km_servicio`,`reportes`.`km_valor` AS `km_valor`,`reportes`.`fecha` AS `fecha`,`reportes`.`hora` AS `hora` from (((((`reportes` join `aseguradora` on((`reportes`.`id_aseguradora` = `aseguradora`.`id`))) join `conductor` on((`reportes`.`id_conductor` = `conductor`.`id`))) join `rama` on((`reportes`.`id_rama` = `rama`.`id`))) join `asegurado` on((`reportes`.`id_asegurado` = `asegurado`.`id`))) join `vehiculo` on((`reportes`.`id_vehiculo` = `vehiculo`.`id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asegurado`
--
ALTER TABLE `asegurado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ase_rama`
--
ALTER TABLE `ase_rama`
  ADD PRIMARY KEY (`id_rama`,`id_ase`),
  ADD KEY `fk_ase_rama_rama1_idx` (`id_rama`),
  ADD KEY `fk_ase_rama_aseguradora1_idx` (`id_ase`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `rama`
--
ALTER TABLE `rama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `expediente_UNIQUE` (`expediente`),
  ADD KEY `fk_reportes_asegurado_idx` (`id_asegurado`),
  ADD KEY `fk_reportes_rama1_idx` (`id_rama`),
  ADD KEY `fk_reportes_aseguradora1_idx` (`id_aseguradora`),
  ADD KEY `fk_reportes_vehiculo1_idx` (`id_vehiculo`),
  ADD KEY `fk_reportes_conductor1_idx` (`id_conductor`),
  ADD KEY `fk_reportes_usuarios1_idx` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cedula_UNIQUE` (`cedula`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asegurado`
--
ALTER TABLE `asegurado`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `rama`
--
ALTER TABLE `rama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ase_rama`
--
ALTER TABLE `ase_rama`
  ADD CONSTRAINT `fk_ase_rama_rama1` FOREIGN KEY (`id_rama`) REFERENCES `rama` (`id`),
  ADD CONSTRAINT `fk_reportes_aseguradora1` FOREIGN KEY (`id_ase`) REFERENCES `aseguradora` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reportes_asegurado1` FOREIGN KEY (`id_asegurado`) REFERENCES `asegurado` (`id`),
  ADD CONSTRAINT `fk_reportes_conductor1` FOREIGN KEY (`id_conductor`) REFERENCES `conductor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_rama1` FOREIGN KEY (`id_rama`) REFERENCES `rama` (`id`),
  ADD CONSTRAINT `fk_reportes_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_reportes_vehiculo1` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

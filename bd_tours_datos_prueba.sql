-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2018 a las 04:11:49
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tour`
--
CREATE DATABASE IF NOT EXISTS `bd_tour` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_tour`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guias`
--

CREATE TABLE `guias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  `correo` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `guias`
--

INSERT INTO `guias` (`id`, `nombre`, `telefono`, `descripcion`, `correo`, `deleted_at`) VALUES
(12, 'Guia 1', '333333333', 'Duis auctor auctor libero, vitae facilisis mauris semper eget. Vivamus condimentum, augue eu maximus maximus, velit orci vehicula justo, quis tempor augue tellus semper turpis. Proin nec tincidunt arcu. Phasellus pretium lectus eu diam viverra dapibus nec porttitor velit. Duis eleifend sit amet ex non pharetra. Ut dignissim enim nec diam posuere, ut hendrerit mauris auctor. Nam efficitur vestibulum quam a molestie. Etiam suscipit pellentesque est, ultrices consectetur justo aliquet nec. Aliquam fringilla nisl eros, eleifend tristique sem luctus at. Nullam sit amet vehicula erat. Donec porttitor tortor at mauris commodo, vitae laoreet quam condimentum. Aenean iaculis orci quis magna consectetur, ac ullamcorper nunc bibendum. Cras lobortis arcu in est viverra venenatis.', 'guia1@gmail.com', NULL),
(13, 'Guia 2', '444444444', 'Duis auctor auctor libero, vitae facilisis mauris semper eget. Vivamus condimentum, augue eu maximus maximus, velit orci vehicula justo, quis tempor augue tellus semper turpis. Proin nec tincidunt arcu. Phasellus pretium lectus eu diam viverra dapibus nec porttitor velit. Duis eleifend sit amet ex non pharetra. Ut dignissim enim nec diam posuere, ut hendrerit mauris auctor. Nam efficitur vestibulum quam a molestie. Etiam suscipit pellentesque est, ultrices consectetur justo aliquet nec. Aliquam fringilla nisl eros, eleifend tristique sem luctus at. Nullam sit amet vehicula erat. Donec porttitor tortor at mauris commodo, vitae laoreet quam condimentum. Aenean iaculis orci quis magna consectetur, ac ullamcorper nunc bibendum. Cras lobortis arcu in est viverra venenatis.', 'guia2@gmail.com', NULL),
(14, 'Guia 3', '5555555555', 'Duis auctor auctor libero, vitae facilisis mauris semper eget. Vivamus condimentum, augue eu maximus maximus, velit orci vehicula justo, quis tempor augue tellus semper turpis. Proin nec tincidunt arcu. Phasellus pretium lectus eu diam viverra dapibus nec porttitor velit. Duis eleifend sit amet ex non pharetra. Ut dignissim enim nec diam posuere, ut hendrerit mauris auctor. Nam efficitur vestibulum quam a molestie. Etiam suscipit pellentesque est, ultrices consectetur justo aliquet nec. Aliquam fringilla nisl eros, eleifend tristique sem luctus at. Nullam sit amet vehicula erat. Donec porttitor tortor at mauris commodo, vitae laoreet quam condimentum. Aenean iaculis orci quis magna consectetur, ac ullamcorper nunc bibendum. Cras lobortis arcu in est viverra venenatis.', 'guia3@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idTour` int(11) NOT NULL,
  `disponibilidad` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id`, `fecha`, `idTour`, `disponibilidad`, `deleted_at`) VALUES
(4, '2018-12-11', 6, 20, NULL),
(5, '2018-12-11', 6, 20, NULL),
(6, '2018-12-11', 6, 20, NULL),
(7, '2018-12-10', 7, 10, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones_guias`
--

CREATE TABLE `sesiones_guias` (
  `idSesion` int(11) NOT NULL,
  `idGuia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesiones_guias`
--

INSERT INTO `sesiones_guias` (`idSesion`, `idGuia`) VALUES
(4, 12),
(5, 12),
(6, 13),
(7, 12),
(7, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `idUbicacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(11) NOT NULL,
  `duracion` varchar(45) NOT NULL,
  `max_personas` tinyint(4) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `imagen` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `idUbicacion`, `nombre`, `descripcion`, `precio`, `duracion`, `max_personas`, `deleted_at`, `imagen`) VALUES
(6, 7, 'Tour 1', 'Duis auctor auctor libero, vitae facilisis mauris semper eget. Vivamus condimentum, augue eu maximus maximus, velit orci vehicula justo, quis tempor augue tellus semper turpis. Proin nec tincidunt arcu. Phasellus pretium lectus eu diam viverra dapibus nec porttitor velit. Duis eleifend sit amet ex non pharetra. Ut dignissim enim nec diam posuere, ut hendrerit mauris auctor. Nam efficitur vestibulum quam a molestie. Etiam suscipit pellentesque est, ultrices consectetur justo aliquet nec. Aliquam fringilla nisl eros, eleifend tristique sem luctus at. Nullam sit amet vehicula erat. Donec porttitor tortor at mauris commodo, vitae laoreet quam condimentum. Aenean iaculis orci quis magna consectetur, ac ullamcorper nunc bibendum. Cras lobortis arcu in est viverra venenatis.', 20000, '3 Horas', 20, NULL, 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d22480000002a504c5445000000bcbcbcfffffffafafaebebebc1c1c12e2e2e606060323232a6a6a63636363b3b3baaaaaa5d5d5d37f221370000015349444154789cedcf898d023100c0c01076f9e9bfdda38928f269a6027bcc399faff13fbd3fbfbb31afb7dd210b3daebfc3efee8aa5be731cbb1b163bc6b93b61b1735c76272c767198e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf61df659cbb13163bc7b13b61b163ccfbee86a5ee73cceb6d77c5428febef70cee76b77c822efcfefee0f4c59029faccebfa00000000049454e44ae426082),
(7, 8, 'Tour 2', 'Duis auctor auctor libero, vitae facilisis mauris semper eget. Vivamus condimentum, augue eu maximus maximus, velit orci vehicula justo, quis tempor augue tellus semper turpis. Proin nec tincidunt arcu. Phasellus pretium lectus eu diam viverra dapibus nec porttitor velit. Duis eleifend sit amet ex non pharetra. Ut dignissim enim nec diam posuere, ut hendrerit mauris auctor. Nam efficitur vestibulum quam a molestie. Etiam suscipit pellentesque est, ultrices consectetur justo aliquet nec. Aliquam fringilla nisl eros, eleifend tristique sem luctus at. Nullam sit amet vehicula erat. Donec porttitor tortor at mauris commodo, vitae laoreet quam condimentum. Aenean iaculis orci quis magna consectetur, ac ullamcorper nunc bibendum. Cras lobortis arcu in est viverra venenatis.', 12000, '2 Horas', 10, NULL, 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d22480000002a504c5445000000bcbcbcfffffffafafaebebebc1c1c12e2e2e606060323232a6a6a63636363b3b3baaaaaa5d5d5d37f221370000015349444154789cedcf898d023100c0c01076f9e9bfdda38928f269a6027bcc399faff13fbd3fbfbb31afb7dd210b3daebfc3efee8aa5be731cbb1b163bc6b93b61b1735c76272c767198e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf61df659cbb13163bc7b13b61b163ccfbee86a5ee73cceb6d77c5428febef70cee76b77c822efcfefee0f4c59029faccebfa00000000049454e44ae426082),
(8, 7, 'Tour 3', 'Duis auctor auctor libero, vitae facilisis mauris semper eget. Vivamus condimentum, augue eu maximus maximus, velit orci vehicula justo, quis tempor augue tellus semper turpis. Proin nec tincidunt arcu. Phasellus pretium lectus eu diam viverra dapibus nec porttitor velit. Duis eleifend sit amet ex non pharetra. Ut dignissim enim nec diam posuere, ut hendrerit mauris auctor. Nam efficitur vestibulum quam a molestie. Etiam suscipit pellentesque est, ultrices consectetur justo aliquet nec. Aliquam fringilla nisl eros, eleifend tristique sem luctus at. Nullam sit amet vehicula erat. Donec porttitor tortor at mauris commodo, vitae laoreet quam condimentum. Aenean iaculis orci quis magna consectetur, ac ullamcorper nunc bibendum. Cras lobortis arcu in est viverra venenatis.', 15000, '3 Horas', 15, NULL, 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d22480000002a504c5445000000bcbcbcfffffffafafaebebebc1c1c12e2e2e606060323232a6a6a63636363b3b3baaaaaa5d5d5d37f221370000015349444154789cedcf898d023100c0c01076f9e9bfdda38928f269a6027bcc399faff13fbd3fbfbb31afb7dd210b3daebfc3efee8aa5be731cbb1b163bc6b93b61b1735c76272c767198e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf619fc33e877d0efb1cf639ec73d8e7b0cf61df659cbb13163bc7b13b61b163ccfbee86a5ee73cceb6d77c5428febef70cee76b77c822efcfefee0f4c59029faccebfa00000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`id`, `nombre`, `deleted_at`) VALUES
(7, 'Valparaiso', NULL),
(8, 'Viña del Mar', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre_completo` varchar(45) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `fecha_nac` datetime NOT NULL,
  `genero` char(1) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`, `nombre_completo`, `correo`, `fecha_nac`, `genero`, `tipo`, `remember_token`, `deleted_at`) VALUES
(3, 'pancho', '$2y$10$.436fDFsBGwHYwcw3wvmO.3HKrsyLRwiD12LS3hCH4bG.11YF.MAS', 'pancho skya', 'pa@gmail.com', '2018-12-26 00:00:00', 'M', 'Administrador', 'LXGTd8ZFAGVeQQP4lUlb3ZxNWrjXAHgaM3c5Wf7bScTvGB4uJS6fefzgFDNR', NULL),
(4, 'pablo', '$2y$10$A4Yf.SAxQtVJXsfTx.WFGOTmPaSNoxCXPWUmi7y7NnMe0qck.bMBu', 'pablo torres', 'pablo@gmail.com', '2018-12-12 00:00:00', 'M', 'cliente', 'Q4vUuABSCJT4N1WyNaFU8JoxtouDQ5MEumg4E4Wa3UkV6czuEEr6sR4vc3dL', NULL),
(5, 'Mahou1', '$2y$10$ZVfEqEMpdQDrYJbAmmH/3eosKMizBRnpDSY/lHcR.ZyAIDp.pCaSS', 'Ariel Rubilar', 'ariel.rubilar2@gmail.com', '1997-08-21 00:00:00', 'M', 'Administrador', 'AptFrllN1EVU52nh33qcgvKhwzYcjt97Z1BN9WKMWiQWTGQy3uKMKQYsDzrF', NULL),
(6, 'cliente', '$2y$10$cK3rn5i9EJWLUn.BIVq8a.VbiKbBjuWS8z0WzzlmUWdsR5OhWV/QS', 'cliente 1', 'cliente1@gmail.com', '1987-09-21 00:00:00', 'M', 'cliente', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_sesiones`
--

CREATE TABLE `usuarios_sesiones` (
  `idUsuario` int(11) NOT NULL,
  `idSesion` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cant_participantes` tinyint(4) NOT NULL,
  `monto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `guias`
--
ALTER TABLE `guias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sesiones_tours1_idx` (`idTour`);

--
-- Indices de la tabla `sesiones_guias`
--
ALTER TABLE `sesiones_guias`
  ADD PRIMARY KEY (`idSesion`,`idGuia`),
  ADD KEY `fk_sesiones_has_guias_guias1_idx` (`idGuia`),
  ADD KEY `fk_sesiones_has_guias_sesiones1_idx` (`idSesion`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tours_ubicacion_idx` (`idUbicacion`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_sesiones`
--
ALTER TABLE `usuarios_sesiones`
  ADD PRIMARY KEY (`idUsuario`,`idSesion`,`fecha`),
  ADD KEY `fk_usuarios_has_sesiones_sesiones1_idx` (`idSesion`),
  ADD KEY `fk_usuarios_has_sesiones_usuarios1_idx` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `guias`
--
ALTER TABLE `guias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `fk_sesiones_tours1` FOREIGN KEY (`idTour`) REFERENCES `tours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesiones_guias`
--
ALTER TABLE `sesiones_guias`
  ADD CONSTRAINT `fk_sesiones_has_guias_guias1` FOREIGN KEY (`idGuia`) REFERENCES `guias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sesiones_has_guias_sesiones1` FOREIGN KEY (`idSesion`) REFERENCES `sesiones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `fk_tours_ubicacion` FOREIGN KEY (`idUbicacion`) REFERENCES `ubicaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_sesiones`
--
ALTER TABLE `usuarios_sesiones`
  ADD CONSTRAINT `fk_usuarios_has_sesiones_sesiones1` FOREIGN KEY (`idSesion`) REFERENCES `sesiones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_sesiones_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

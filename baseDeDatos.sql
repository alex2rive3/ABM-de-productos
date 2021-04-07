-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2021 a las 17:36:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` char(20) NOT NULL,
  `descripción` char(150) NOT NULL,
  `seccion` char(60) NOT NULL,
  `subSeccion` char(60) NOT NULL,
  `marca` char(60) NOT NULL,
  `otro` char(60) NOT NULL,
  `stock` int(11) NOT NULL,
  `precioCompra` decimal(10,0) NOT NULL,
  `PrecioVenta` decimal(10,0) NOT NULL,
  `iva` tinyint(2) NOT NULL,
  `recargo` tinyint(2) NOT NULL,
  `proveedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripción`, `seccion`, `subSeccion`, `marca`, `otro`, `stock`, `precioCompra`, `PrecioVenta`, `iva`, `recargo`, `proveedores`) VALUES
(1, '85', 'Tapa Cuadril', 'CARNES', 'VACUNO', 'OCHI', 'Embasado al Vacio', 21, '35000', '50000', 10, 30, 2),
(2, '21', 'LECHE', 'LACTEOS', 'LECHES', 'Los Colonos', 'Carton', 45, '4000', '6000', 10, 50, 3),
(10, '12', 'dfgklhusadkljfhkhj', '1', '1', '2', '1', 15, '150000', '1522000', 5, 30, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `razonSocial` char(70) NOT NULL,
  `ruc` char(15) NOT NULL,
  `telefono` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `razonSocial`, `ruc`, `telefono`) VALUES
(1, 'Metalurgica san Pablo s.a', '80038522-5', '0985321654'),
(2, 'Coop. Chorttizer', '800032154-3', '09856221'),
(3, 'Coop. Colonias Unidas', '8065132154', '0652266532');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `usuario` char(50) NOT NULL,
  `contrasena` char(50) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0,
  `activo` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `usuario`, `contrasena`, `admin`, `activo`) VALUES
(1, 'Admin', 'Admin123', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedores` (`proveedores`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `proveedores` FOREIGN KEY (`proveedores`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

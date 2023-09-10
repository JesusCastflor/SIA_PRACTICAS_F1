-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2023 a las 18:53:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factura_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_articulo`
--

CREATE TABLE `mae_articulo` (
  `ID_Articulo` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT 'Articulo',
  `Stock` int(11) DEFAULT 0,
  `Precio` decimal(10,2) DEFAULT 0.00,
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_articulo`
--

INSERT INTO `mae_articulo` (`ID_Articulo`, `Nombre`, `Stock`, `Precio`, `ValueRegistro`) VALUES
(1, 'Camiseta', 20, 29.99, 1),
(2, 'Pantalón', 15, 39.99, 1),
(3, 'Vestido', 10, 49.99, 1),
(4, 'Blusa', 25, 24.99, 1),
(5, 'Sudadera', 12, 34.99, 1),
(6, 'Zapatos deportivos', 8, 59.99, 1),
(7, 'Botas de invierno', 5, 79.99, 1),
(8, 'Sandalias', 20, 39.99, 1),
(9, 'Zapatillas casuales', 18, 49.99, 1),
(10, 'Bolso de mano', 15, 39.99, 1),
(11, 'Collar de plata', 10, 49.99, 1),
(12, 'Pulsera de cuero', 20, 19.99, 1),
(13, 'Cinturón de moda', 12, 24.99, 1),
(14, 'Sombrero de paja', 8, 14.99, 1),
(15, 'Gorra de béisbol', 10, 9.99, 1),
(16, 'Sombrero de ala ancha', 5, 19.99, 1),
(17, 'Gorro de invierno', 12, 12.99, 1),
(18, 'Anillo de diamantes', 3, 199.99, 1),
(19, 'Pendientes de oro', 6, 149.99, 1),
(20, 'Collar de perlas', 4, 179.99, 1),
(21, 'Jeans', 20, 39.99, 1),
(22, 'Blazer', 8, 59.99, 1),
(23, 'Falda', 12, 24.99, 1),
(24, 'Botas de cuero', 10, 79.99, 1),
(25, 'Zapatos formales', 15, 49.99, 1),
(26, 'Bolso de viaje', 5, 59.99, 1),
(27, 'Collar de perlas', 3, 99.99, 1),
(28, 'Gorra de sol', 8, 14.99, 1),
(29, 'Sombrero de invierno', 10, 19.99, 1),
(30, 'Anillo de plata', 12, 79.99, 1),
(31, 'Polera', 18, 19.99, 1),
(32, 'Chaqueta de cuero', 5, 99.99, 1),
(33, 'Zapatillas deportivas', 10, 69.99, 1),
(34, 'Bolso de mano', 15, 49.99, 1),
(35, 'Sombrero de ala estrecha', 8, 12.99, 1),
(36, 'Pendientes de plata', 12, 29.99, 1),
(37, 'Shorts', 10, 24.99, 1),
(38, 'Sandalias de playa', 12, 29.99, 1),
(39, 'Reloj de pulsera', 5, 149.99, 1),
(40, 'Gorra de estilo urbano', 8, 9.99, 1),
(41, 'Collar de acero inoxidable', 10, 19.99, 1),
(42, 'Blusa de seda', 6, 49.99, 1),
(43, 'Camisa a cuadros', 12, 29.99, 1),
(44, 'Zapatos de vestir', 8, 79.99, 1),
(45, 'Cartera de cuero', 10, 69.99, 1),
(46, 'Sombrero fedora', 5, 24.99, 1),
(47, 'Pulsera de acero inoxidable', 12, 14.99, 1),
(48, 'Vestido de noche', 4, 89.99, 1),
(49, 'Polo', 15, 19.99, 1),
(50, 'Botas de montaña', 10, 80.99, 1),
(100, 'Camisa', 20, 15.00, 1),
(101, 'Pantalon de Tela', 10, 20.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_cliente`
--

CREATE TABLE `mae_cliente` (
  `Tipo_Documento` varchar(100) DEFAULT NULL COMMENT 'DNI, RUC, Carnet, etc',
  `ID_Cliente` int(11) NOT NULL,
  `Nombres_Apellidos` varchar(200) DEFAULT 'Cliente',
  `Email` varchar(100) DEFAULT NULL,
  `Mobile` int(9) DEFAULT NULL,
  `Direccion` varchar(200) DEFAULT NULL,
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_cliente`
--

INSERT INTO `mae_cliente` (`Tipo_Documento`, `ID_Cliente`, `Nombres_Apellidos`, `Email`, `Mobile`, `Direccion`, `ValueRegistro`) VALUES
('DNI', 12345679, 'Juan Perez', 'juan@gmail.com', 912345678, 'Lima', 1),
('DNI', 34567891, 'Mónica Ramos', 'monica@gmail.com', 923456789, 'Tumbes', 1),
('DNI', 55555555, 'Brayton Palomino', 'Brayton@gmail.com', 923537462, 'La Matarani', 1),
('DNI', 71636770, 'Johan Mamani', 'Johanjarata@gmail.com', 923537462, 'La Joya', 1),
('DNI', 87654322, 'María Torres', 'maria@gmail.com', 987654321, 'Cusco', 1),
('DNI', 90123457, 'Pedro López', 'pedro@gmail.com', 912345678, 'Juliaca', 1),
('RUC', 2147483647, 'Robert Dueñas', 'robert@gmail.com', 923537462, 'Arequipa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_metodo_pago`
--

CREATE TABLE `mae_metodo_pago` (
  `ID_ModoPago` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT 'Efectivo',
  `Descripcion` varchar(200) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo',
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_metodo_pago`
--

INSERT INTO `mae_metodo_pago` (`ID_ModoPago`, `Nombre`, `Descripcion`, `Estado`, `ValueRegistro`) VALUES
(1, 'Efectivo', 'Pago en efectivo', 'Activo', 1),
(2, 'Tarjeta de crédito', 'Pago con tarjeta de crédito', 'Activo', 1),
(3, 'Transferencia bancaria', 'Pago por transferencia bancaria', 'Inactivo', 1),
(4, 'Cheque', 'Pago con cheque', 'Activo', 1),
(5, 'PayPal', 'Pago a través de PayPal', 'Activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_puntoventa`
--

CREATE TABLE `mae_puntoventa` (
  `ID_PuntoVenta` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Direccion` varchar(200) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Horario` varchar(100) DEFAULT current_timestamp(),
  `Tipo` varchar(50) DEFAULT NULL,
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_puntoventa`
--

INSERT INTO `mae_puntoventa` (`ID_PuntoVenta`, `Nombre`, `Direccion`, `Telefono`, `Horario`, `Tipo`, `ValueRegistro`) VALUES
(1, 'Mall', 'Calle Principal 123', '123456789', '9:00 AM - 6:00 PM', 'Físico', 1),
(2, 'Tienda Centro Comercial', 'Avenida Comercial 456', '987654321', '10:00 AM - 8:00 PM', 'Físico', 1),
(3, 'Tienda Tottus.com', 'Sitio web', 'N/A', '24/7', 'Virtual', 1),
(4, 'Tienda Plaza Vea', 'Calle Secundaria 789', '555555555', '8:00 AM - 5:00 PM', 'Físico', 1),
(5, 'Tienda Ripley', 'Calle Central 456', '777777777', '9:00 AM - 7:00 PM', 'Físico', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_usuario`
--

CREATE TABLE `mae_usuario` (
  `ID_Vendedor` int(11) NOT NULL,
  `Nombres` varchar(100) DEFAULT 'Vendedor',
  `Apellidos` varchar(100) DEFAULT NULL,
  `Mobile` int(9) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Username` varchar(50) DEFAULT 'username',
  `Password` varchar(50) DEFAULT 'password',
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_usuario`
--

INSERT INTO `mae_usuario` (`ID_Vendedor`, `Nombres`, `Apellidos`, `Mobile`, `Email`, `Username`, `Password`, `ValueRegistro`) VALUES
(71636778, 'geraldyne8', 'roque8', 95655658, 'geral@gmail8', 'geral8', '1234568', 0),
(76756781, 'Jesus Alejandro', 'Castillo Flores', 92060143, 'jesusalejandrocastilloflores@gmail.com', 'JESUS', 'jesus920601243', 1),
(77777788, 'Isac', 'Jarata', 923537462, 'Johanjarata@gmail.com', 'ISAC', '123456', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trs_factura`
--

CREATE TABLE `trs_factura` (
  `ID_Factura` int(11) NOT NULL,
  `ID_Cliente` int(11) DEFAULT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID_Vendedor` int(11) DEFAULT NULL,
  `ID_PuntoVenta` int(11) DEFAULT NULL,
  `ID_ModoPago` int(11) DEFAULT NULL,
  `Monto_ImporteTotal` decimal(10,2) DEFAULT 0.00,
  `Impuesto` int(11) DEFAULT 18,
  `Impuesto_Total` decimal(10,2) DEFAULT NULL,
  `Monto_Total` decimal(10,2) DEFAULT 0.00,
  `Observaciones` varchar(200) DEFAULT NULL,
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trs_factura`
--

INSERT INTO `trs_factura` (`ID_Factura`, `ID_Cliente`, `Fecha`, `ID_Vendedor`, `ID_PuntoVenta`, `ID_ModoPago`, `Monto_ImporteTotal`, `Impuesto`, `Impuesto_Total`, `Monto_Total`, `Observaciones`, `ValueRegistro`) VALUES
(10001, 71636770, '2023-07-03 05:00:00', 77777788, 5, 5, 225.00, 18, 34.32, 259.32, 'ninguna observacion', 1),
(10002, 71636770, '2023-07-03 05:00:00', 77777788, 1, 1, 15.00, 18, 2.29, 17.29, '', 1),
(10003, 71636770, '2023-07-03 05:00:00', 77777788, 1, 4, 584.95, 18, 89.23, 674.18, '', 1),
(10004, 71636770, '2023-07-07 05:00:00', 77777788, 1, 1, 75.00, 18, 11.44, 86.44, '', 1),
(10006, 90123457, '2023-07-07 05:00:00', 77777788, 1, 1, 2886943.74, 18, 440381.24, 3327324.98, '', 1),
(10007, 71636770, '2023-07-07 05:00:00', 77777788, 3, 5, 179.98, 18, 27.44, 207.42, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trs_historial`
--

CREATE TABLE `trs_historial` (
  `ID_De_Factura` int(11) NOT NULL,
  `FechaFeactura` timestamp NOT NULL DEFAULT current_timestamp(),
  `NumeroDeDocumento` int(11) NOT NULL,
  `Nombres_Apellidos_Cliente` varchar(200) NOT NULL,
  `Monto_Total` decimal(10,2) NOT NULL,
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trs_ordenfactura`
--

CREATE TABLE `trs_ordenfactura` (
  `ID_OrdenFactura` int(11) NOT NULL,
  `ID_Factura` int(11) DEFAULT NULL,
  `ID_Articulo` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT 0,
  `Importe_Final` decimal(10,2) DEFAULT 0.00,
  `ValueRegistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trs_ordenfactura`
--

INSERT INTO `trs_ordenfactura` (`ID_OrdenFactura`, `ID_Factura`, `ID_Articulo`, `Cantidad`, `Importe_Final`, `ValueRegistro`) VALUES
(22, 10001, 100, 2, 30.00, 1),
(24, 10003, 100, 3, 45.00, 1),
(25, 10002, 100, 1, 15.00, 1),
(26, 10001, 100, 4, 60.00, 1),
(32, 10001, 101, 4, 80.00, 1),
(33, 10001, 100, 4, 60.00, 1),
(34, 10004, 100, 5, 75.00, 1),
(35, 10003, 50, 5, 404.95, 1),
(36, 10003, 48, 2, 179.98, 1),
(37, 10006, 33, 4, 279.96, 1),
(40, 10001, 27, 1, 99.99, 1),
(42, 10006, 17, 222222, 2886663.78, 1),
(43, 10007, 48, 2, 179.98, 1),
(44, 10007, 14, 5, 74.95, 1),
(48, 10004, 18, 2, 399.98, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mae_articulo`
--
ALTER TABLE `mae_articulo`
  ADD PRIMARY KEY (`ID_Articulo`);

--
-- Indices de la tabla `mae_cliente`
--
ALTER TABLE `mae_cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `mae_metodo_pago`
--
ALTER TABLE `mae_metodo_pago`
  ADD PRIMARY KEY (`ID_ModoPago`);

--
-- Indices de la tabla `mae_puntoventa`
--
ALTER TABLE `mae_puntoventa`
  ADD PRIMARY KEY (`ID_PuntoVenta`);

--
-- Indices de la tabla `mae_usuario`
--
ALTER TABLE `mae_usuario`
  ADD PRIMARY KEY (`ID_Vendedor`);

--
-- Indices de la tabla `trs_factura`
--
ALTER TABLE `trs_factura`
  ADD PRIMARY KEY (`ID_Factura`),
  ADD KEY `ID_Cliente` (`ID_Cliente`),
  ADD KEY `ID_Vendedor` (`ID_Vendedor`),
  ADD KEY `ID_PuntoVenta` (`ID_PuntoVenta`),
  ADD KEY `ID_ModoPago` (`ID_ModoPago`);

--
-- Indices de la tabla `trs_historial`
--
ALTER TABLE `trs_historial`
  ADD KEY `ID_De_Factura` (`ID_De_Factura`);

--
-- Indices de la tabla `trs_ordenfactura`
--
ALTER TABLE `trs_ordenfactura`
  ADD PRIMARY KEY (`ID_OrdenFactura`),
  ADD KEY `ID_Factura` (`ID_Factura`),
  ADD KEY `ID_Articulo` (`ID_Articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trs_ordenfactura`
--
ALTER TABLE `trs_ordenfactura`
  MODIFY `ID_OrdenFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trs_factura`
--
ALTER TABLE `trs_factura`
  ADD CONSTRAINT `trs_factura_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `mae_cliente` (`ID_Cliente`),
  ADD CONSTRAINT `trs_factura_ibfk_2` FOREIGN KEY (`ID_Vendedor`) REFERENCES `mae_usuario` (`ID_Vendedor`),
  ADD CONSTRAINT `trs_factura_ibfk_3` FOREIGN KEY (`ID_PuntoVenta`) REFERENCES `mae_puntoventa` (`ID_PuntoVenta`),
  ADD CONSTRAINT `trs_factura_ibfk_4` FOREIGN KEY (`ID_ModoPago`) REFERENCES `mae_metodo_pago` (`ID_ModoPago`);

--
-- Filtros para la tabla `trs_historial`
--
ALTER TABLE `trs_historial`
  ADD CONSTRAINT `trs_historial_ibfk_1` FOREIGN KEY (`ID_De_Factura`) REFERENCES `trs_factura` (`ID_Factura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trs_ordenfactura`
--
ALTER TABLE `trs_ordenfactura`
  ADD CONSTRAINT `trs_ordenfactura_ibfk_1` FOREIGN KEY (`ID_Factura`) REFERENCES `trs_factura` (`ID_Factura`),
  ADD CONSTRAINT `trs_ordenfactura_ibfk_2` FOREIGN KEY (`ID_Articulo`) REFERENCES `mae_articulo` (`ID_Articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

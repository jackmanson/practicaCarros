-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2015 a las 22:37:37
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `audi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_ventas`
--

CREATE TABLE IF NOT EXISTS `detalles_ventas` (
`id_details` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `detalles_ventas`
--

INSERT INTO `detalles_ventas` (`id_details`, `venta`, `fecha`, `valor`, `iva`, `total`) VALUES
(1, 19832075, '2014-12-30', 1230000000, 135647, 6474757),
(2, 1029398, '2014-12-05', 120000000, 19200000, 139200000),
(3, 10830848, '2014-12-05', 132000000, 21120000, 153120000),
(4, 102384, '2014-12-08', 82000000, 13120000, 95120000),
(5, 134648579, '2014-12-09', 92000000, 14720000, 106720000),
(6, 1092307, '2014-12-09', 89500000, 14320000, 103820000),
(7, 1023634, '2014-12-10', 89500000, 14320000, 103820000),
(8, 1084375, '2014-12-10', 89500000, 14320000, 103820000),
(10, 10283724, '2014-12-12', 73148000, 11703680, 84851680);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_cargos`
--

CREATE TABLE IF NOT EXISTS `tabla_cargos` (
  `cod_cargos` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_carro`
--

CREATE TABLE IF NOT EXISTS `tabla_carro` (
  `id_vehiculo` varchar(10) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `motor` varchar(30) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `precios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_carro`
--

INSERT INTO `tabla_carro` (`id_vehiculo`, `modelo`, `motor`, `tipo`, `precios`) VALUES
('AA3SA18', 'Audi A3 Sedan XXS', 'Ambition 1.8 TFSI ', 'Automovil', 102000000),
('AC1737FT', 'Audi A3', 'Attraction 1.2 TFSI', 'Automovil', 70418000),
('AC1G7UHW', 'Audi A5 Cabrio', '1.8 TFSI', 'Automovil', 145162000),
('AC26AUUN', 'Audi TT Coupé', '2.0 TFSI quattro S tronic', 'Coupe', 142627000),
('AC33UY6K', 'Audi Q7', 'Attraction 3.0 TFSI quattro ti', 'Camioneta', 233241000),
('AC4DE941', 'Audi A1', 'Attraction 1.4 TFSI', 'Automovil', 59514000),
('AC6XUPEB', 'Audi A6 Avant', '1.8 TFSI', 'Automovil', 141746990),
('AC9A9CZC', 'Audi A3 Sedan', 'Attraction 1.4 TFSI', 'Automovil', 85990000),
('ACAHDJPL', 'Audi A7 Sportback', '3.0 TFSI quattro S tronic', 'Automovil', 218549000),
('ACBKW1J5', 'Audi R8', '5.2 FSI quattro S tronic', 'Deportivo', 550505000),
('ACCWF9M1', 'Audi TT RS Roadster', '2.5 TFSI quattro S tronic', 'Automovil', 224724000),
('ACDCBQR5', 'Audi Q3', 'Attraction 2.0 TFSI quattro', 'Camioneta', 113600990),
('ACEA5RLH ', 'Audi A1 Sportback', 'Attraction 1.4 TFSI', 'Automovil', 73148000),
('ACF72AD3', 'Audi A6 allroad quattro', '3.0 TFSI quattro S tronic', 'Automovil', 216192000),
('ACFLR1B6', 'Audi TT RS Coupé', '2.5 TFSI quattro S tronic', 'Coupe', 206348000),
('ACFQAZ3Y', 'Audi A5 Coupe', '1.8 TFSI', 'Coupe', 121192000),
('ACGGR62B', 'Audi Q5', 'Attraction 2.0 TDI', 'Camioneta', 116583000),
('ACGSG3Q9', 'Audi A3 Sportback', 'Attraction 1.4 TFSI', 'Automovil', 83902000),
('ACGWEFDQ', 'Audi A8', '3.0 TFSI quattro tiptronic', 'Automovil', 273291000),
('ACSCBJAU', 'Audi A4 Berlina', '1.8 TFSI', 'Automovil', 98192000),
('ACSTX8AO', 'Audi R8 Spyder', '5.2 FSI quattro S tronic', 'Deportivo', 607126990),
('ACT1Y944', 'Audi A4 Avant', '1.8 TFSI', 'Automovil', 109000000),
('ACUZ3464', 'Audi A6 Berlina', '1.8 TFSI', 'Automovil', 130306000),
('ACWTPJ2U', 'Audi A5 Sportback', '1.8 TFSI', 'Automovil', 119253000),
('ACY66C6X', 'Audi TT Roadster', '2.0 TFSI quattro S tronic', 'Coupe', 162107000),
('ACZGT88X', 'Audi TTS Coupé', '2.0 TFSI quattro S tronic', 'Automovil', 181080000),
('ACZQQH8G', 'Audi S1 Sportback', '2.0 TFSI quattro', 'Automovil', 114569990),
('ACZU6GRG', 'Audi S1', '2.0 TFSI quattro', 'Automovil', 110870000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_cliente`
--

CREATE TABLE IF NOT EXISTS `tabla_cliente` (
  `ced` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_cliente`
--

INSERT INTO `tabla_cliente` (`ced`, `nombre`, `apellido`, `ciudad`, `telefono`, `direccion`, `correo`) VALUES
(10293324, 'Laura Daniela', 'Perez Garcia', 'Cali', '86326453', 'calle 43 No.54-32', 'luaras@hotmail.com'),
(12840508, 'Juan Andres', 'Perdomo', 'Neiva', '87364524', 'avenida 1 calle 32  no.34', 'juasnd@hotmail.com'),
(102807343, 'Nancy Katherine', 'Pulido', 'neiva', '311424', 'calle 34 con avenida 1 No.23-44', 'nanads23@hotmail.com'),
(1075267101, 'Juan Manuel', 'Garcia Sanchez', 'Bogota', '8764723', 'Calle 23 No. 12-3', 'juanma13@hotmail.com'),
(1075267808, 'Luis Felipe', 'Perdomo ', 'Neiva', '8765365', 'calle12 No.23-32', 'felipeperdomo32@hotmail.com'),
(1075267909, 'Diana Carolina', 'Mendez', 'Bogota', '87634274', 'calle12 No.23-32', 'diana123@hotmail.com'),
(1236475758, 'Andres Felipe', 'Sanchez', 'Bogota', '8234786', 'calle 45 panama', 'andresped@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_empleado`
--

CREATE TABLE IF NOT EXISTS `tabla_empleado` (
  `cod_empleado` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `Ciudad` varchar(25) NOT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `sede` varchar(30) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_empleado`
--

INSERT INTO `tabla_empleado` (`cod_empleado`, `nombre`, `apellido`, `cedula`, `Ciudad`, `cargo`, `sede`, `celular`, `correo`) VALUES
(10012, 'Catalina Andrea', 'Barrera Bello', 1082742453, 'Medellin', 'Asesora Comercial', 'Audi Center 101', '3178819765', 'catalinabar123@hotmail.com'),
(10021, 'Taniana Andreas', 'Perez', 1024847567, 'Medellin', 'Asesor(a) de Comercial', 'Audi City Center', '3129303423', 'andresped32@hotmail.com'),
(10023, 'Andres Pacora', 'Garcia', 10248275, 'Medellin', 'Asesor(a) de Comercial', 'Audi Exclusive Bogota', '3129303423', 'andresped32@hotmail.com'),
(10027, 'Sergio', 'Botero', 103814424, 'Bogota', 'Asesor(a) de Comercial', 'Audi Center 104', '3178837456', 'sergioBotero@hotmail.com'),
(10032, 'Tania', 'Vargas', 1008237236, 'Bogota', 'Director Comercial', 'Audi Center Bogota', '3120039494', 'taniavar123@hotmail.com'),
(10036, 'Juan Camilo', 'Blandon', 1084972453, 'Bogota', 'Asesor(a) de Comercial', 'Audi Exclusive Bogota', '3124536467', 'pecheche@hotmail.com'),
(10056, 'Sergio Andres', 'Gaspar Llanos', 1008047264, 'Bogota', 'Asesor(a) de Comercial', 'Audi Center 104', '3125336478', 'sergiogas@hotmail.com'),
(10098, 'tania katherine ', ' gongora', 102828646, 'Bogota', 'Asesor(a) de Comercial', 'Audi City Center', '3120736453', 'tania@hotmail.com'),
(10420, 'Nazly Johanna ', 'Sanchez', 1093297545, 'Bogota', 'Asesor(a) de Comercial', 'Audi City Center', '3138274423', 'Nazly3435@hotmail.com'),
(100342, 'Andres Felipe', 'Santos Da Silva', 1028495340, 'Medellin', 'Ingeniero Sistema', 'Audi Center Medelli­n', '3124098345', 'andres.silva@hotmail.com'),
(100938, 'Juan Carlos', 'Perdomo ', 1008272434, 'Bogota', 'Jefe de Taller', 'Audi Center Bogota', '3120938343', 'juane32@hotmail.com'),
(120837, 'Maria Esperanza', 'Hernandez', 1024755364, 'Bogota', 'Asesor(a) de Comercial', 'Audi City Center', '3120093837', 'mariaehernandez@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_sede`
--

CREATE TABLE IF NOT EXISTS `tabla_sede` (
  `cod_sede` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuario`
--

CREATE TABLE IF NOT EXISTS `tabla_usuario` (
`no_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `tipo_usuario` varchar(7) NOT NULL,
  `empleado` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `tabla_usuario`
--

INSERT INTO `tabla_usuario` (`no_usuario`, `usuario`, `clave`, `tipo_usuario`, `empleado`) VALUES
(3, 'sergio', '1234', 'asesor', 10027),
(4, 'administrador', 'uscosoft', 'admin', 98896674),
(9, 'taniana', 'andrea', 'asesor', 10021),
(10, 'catalina ', 'cata1234', 'asesor', 10012),
(11, 'sergio', 'gaspar', 'asesor', 10056),
(12, 'tania', 'gongora', 'asesor', 10098),
(13, 'pecheche', 'esperanzagomez', 'asesor', 10036),
(17, 'luis.silva123', 'administradorsilva', 'admin', 100342),
(19, 'felipex17', 'polo', 'admin', 10348),
(20, 'Johanna123', 'prueba123', 'asesor', 10420);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_ventas`
--

CREATE TABLE IF NOT EXISTS `tabla_ventas` (
  `id_venta` int(11) NOT NULL,
  `audi` varchar(10) NOT NULL,
  `cliente` int(11) NOT NULL,
  `vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_ventas`
--

INSERT INTO `tabla_ventas` (`id_venta`, `audi`, `cliente`, `vendedor`) VALUES
(102384, 'ACCWF9M1', 10293324, 10012),
(1023634, 'ACEA5RLH', 1075267808, 10027),
(1084375, 'AA1S14A01', 1075267808, 10021),
(1092307, 'AA1S14A01', 2147483647, 10012),
(10283724, 'ACEA5RLH', 1075267101, 10027);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
 ADD PRIMARY KEY (`id_details`,`venta`);

--
-- Indices de la tabla `tabla_carro`
--
ALTER TABLE `tabla_carro`
 ADD PRIMARY KEY (`id_vehiculo`);

--
-- Indices de la tabla `tabla_cliente`
--
ALTER TABLE `tabla_cliente`
 ADD PRIMARY KEY (`ced`);

--
-- Indices de la tabla `tabla_empleado`
--
ALTER TABLE `tabla_empleado`
 ADD PRIMARY KEY (`cod_empleado`);

--
-- Indices de la tabla `tabla_sede`
--
ALTER TABLE `tabla_sede`
 ADD PRIMARY KEY (`cod_sede`);

--
-- Indices de la tabla `tabla_usuario`
--
ALTER TABLE `tabla_usuario`
 ADD PRIMARY KEY (`no_usuario`);

--
-- Indices de la tabla `tabla_ventas`
--
ALTER TABLE `tabla_ventas`
 ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
MODIFY `id_details` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tabla_usuario`
--
ALTER TABLE `tabla_usuario`
MODIFY `no_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

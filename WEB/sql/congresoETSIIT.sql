-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2015 a las 21:36:43
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `congresoetsiit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
`idActividad` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `denominacion` varchar(50) NOT NULL,
  `FechaHora` varchar(50) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`idActividad`, `codigo`, `denominacion`, `FechaHora`, `descripcion`, `foto`, `importe`) VALUES
(1, 'alhambra', 'Visita a la Alhambra', '2 julio, 11:30', 'Es un rico complejo palaciego y fortaleza (alcazar o al-qasr) que alojaba al monarca y a la corte del Reino nazari de Granada. En 2011 se convirtio en el monumento mas visitado de Espana, recibiendo la cifra historica de 2310764 visitantes. ', './seccion/imagenes/actividades/alhambra/alhambra.jpg', 4.5),
(2, 'sierra_nevada', 'Subida a Sierra Nevada', '3 julio, 7:45', 'Situada en Andalucia, extendiendose por las provincias de Granada y Almeria. Es el macizo montanoso de mayor altitud de toda Europa occidental, despues de los Alpes. Su altitud maxima se alcanza en el pico Mulhacen, de 3.482 metros ', './seccion/imagenes/actividades/sierra_nevada/sierra_nevada.jpg', 9),
(3, 'cena_gala', 'Cena de Gala', '3 julio, 21:00', 'Cena de gala que se celebrara al terminar el congreso.', './seccion/imagenes/actividades/cena_gala/cena_gala.jpg', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE IF NOT EXISTS `cuota` (
`idCuota` int(11) NOT NULL,
  `denominacion` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuota`
--

INSERT INTO `cuota` (`idCuota`, `denominacion`, `descripcion`, `importe`) VALUES
(1, 'Estudiante', 'Cuota mínima solo para asistir al congreso.', 6),
(2, 'Investigador', 'Cuota intermedia, incluye cena de gala', 10),
(3, 'Premium', 'Cuota premium, incluye invitacion a todas la actividades y la cena de gla', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotasactividades`
--

CREATE TABLE IF NOT EXISTS `cuotasactividades` (
  `idcuota` int(11) NOT NULL,
  `idactividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuotasactividades`
--

INSERT INTO `cuotasactividades` (`idcuota`, `idactividad`) VALUES
(2, 3),
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
`idHotel` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`idHotel`, `nombre`, `foto`, `precio`) VALUES
(1, 'Nazaries', './seccion/hoteles/nazaries.jpg', 25),
(2, 'Santa Paula', './seccion/hoteles/santa_paula.jpg', 22.5),
(3, 'Granada Center', './seccion/hoteles/granada_center.jpg', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT '0',
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `Centro de trabajo` varchar(200) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `idCuota` int(11) NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `tipo`, `Nombre`, `Apellidos`, `Centro de trabajo`, `Telefono`, `Correo`, `Password`, `idCuota`, `importe`) VALUES
(1, 1, 'admin', 'admin', 'admin', 12345, 'admin@cetsiit.com', '21232f297a57a5a743894a0e4a801fc3', 1, 5),
(2, 0, 'Pablo', 'Valenzuela', 'ETSIIT', 678462574, 'pva_@jotmeil.es', 'bc9d7c51e75b3bf44497bd6c21cccd3b', 1, 14),
(3, 0, 'Timo', 'Kotipelto', 'PM', 2147483647, 'timoko@tipel.ko', '0f05e3d167ae9f1966110bed552c23a1', 2, 10),
(4, 0, 'MC Dinero', 'Aprende', 'dinero aprende', 2147483647, 'mcdinero@aprende.algo', '28f2b95533afb47cbec1d823b0f1a941', 3, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioactividad`
--

CREATE TABLE IF NOT EXISTS `usuarioactividad` (
  `idActividad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarioactividad`
--

INSERT INTO `usuarioactividad` (`idActividad`, `idUsuario`) VALUES
(2, 2),
(3, 3),
(1, 4),
(2, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariohotel`
--

CREATE TABLE IF NOT EXISTS `usuariohotel` (
`idHotel` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fechaEntrada` varchar(100) NOT NULL,
  `fechaSalida` varchar(100) NOT NULL,
  `TipoHabitacion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariohotel`
--

INSERT INTO `usuariohotel` (`idHotel`, `idUsuario`, `fechaEntrada`, `fechaSalida`, `TipoHabitacion`) VALUES
(1, 4, '25 junio', '15 julio', 'Doble'),
(3, 3, '27 junio', '5 julio', 'Doble');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
 ADD PRIMARY KEY (`idActividad`);

--
-- Indices de la tabla `cuota`
--
ALTER TABLE `cuota`
 ADD PRIMARY KEY (`idCuota`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`idHotel`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`), ADD KEY `idCuota` (`idCuota`);

--
-- Indices de la tabla `usuarioactividad`
--
ALTER TABLE `usuarioactividad`
 ADD PRIMARY KEY (`idActividad`,`idUsuario`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuariohotel`
--
ALTER TABLE `usuariohotel`
 ADD PRIMARY KEY (`idHotel`,`idUsuario`), ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
MODIFY `idCuota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
MODIFY `idHotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuariohotel`
--
ALTER TABLE `usuariohotel`
MODIFY `idHotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCuota`) REFERENCES `cuota` (`idCuota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarioactividad`
--
ALTER TABLE `usuarioactividad`
ADD CONSTRAINT `UsuarioActividad_ibfk_1` FOREIGN KEY (`idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `UsuarioActividad_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuariohotel`
--
ALTER TABLE `usuariohotel`
ADD CONSTRAINT `UsuarioHotel_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

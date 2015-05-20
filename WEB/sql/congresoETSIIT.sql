-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-05-2015 a las 16:57:00
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `congresoETSIIT`
--
CREATE DATABASE IF NOT EXISTS `congresoETSIIT` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `congresoETSIIT`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuarioActividad`
--

DROP TABLE IF EXISTS `UsuarioActividad`;
CREATE TABLE IF NOT EXISTS `UsuarioActividad` (
  `idActividad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`,`idUsuario`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuarioHotel`
--

DROP TABLE IF EXISTS `UsuarioHotel`;
CREATE TABLE IF NOT EXISTS `UsuarioHotel` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `fechaEntrada` varchar(100) NOT NULL,
  `fechaSalida` varchar(100) NOT NULL,
  `TipoHabitacion` varchar(100) NOT NULL,
  PRIMARY KEY (`idHotel`,`idUsuario`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

DROP TABLE IF EXISTS `actividad`;
CREATE TABLE IF NOT EXISTS `actividad` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(50) NOT NULL,
  `FechaHora` varchar(50) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`idActividad`, `denominacion`, `FechaHora`, `descripcion`, `foto`, `importe`) VALUES
(1, 'Visita a la Alhambra', '2 julio, 11:30', 'Es un rico complejo palaciego y fortaleza (alcázar o al-qasr ?????) que alojaba al monarca y a la corte del Reino nazarí de Granada. En 2011 se convirtió en el monumento más visitado de España, recibiendo la cifra histórica de 2310764 visitantes. ', './seccion/imagenes/actividades/alhambra/alhambra.jpg', 4.5),
(2, 'Subida a Sierra Nevada', '3 julio, 7:45', '\r\nSituada en Andalucía, extendiéndose por las provincias de Granada y Almería. Es el macizo montañoso de mayor altitud de toda Europa occidental, después de los Alpes. Su altitud máxima se alcanza en el pico Mulhacén, de 3.482 metros ', './seccion/imagenes/actividades/sierra_nevada/sierra_nevada.jpg', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

DROP TABLE IF EXISTS `cuota`;
CREATE TABLE IF NOT EXISTS `cuota` (
  `idCuota` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`idCuota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `Centro de trabajo` varchar(200) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `idCuota` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idCuota` (`idCuota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `UsuarioActividad`
--
ALTER TABLE `UsuarioActividad`
  ADD CONSTRAINT `UsuarioActividad_ibfk_1` FOREIGN KEY (`idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `UsuarioActividad_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `UsuarioHotel`
--
ALTER TABLE `UsuarioHotel`
  ADD CONSTRAINT `UsuarioHotel_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCuota`) REFERENCES `cuota` (`idCuota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2015 at 11:46 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `congresoETSIIT`
--
CREATE DATABASE IF NOT EXISTS `congresoETSIIT` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `congresoETSIIT`;

-- --------------------------------------------------------

--
-- Table structure for table `UsuarioActividad`
--

DROP TABLE IF EXISTS `UsuarioActividad`;
CREATE TABLE IF NOT EXISTS `UsuarioActividad` (
  `idActividad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`,`idUsuario`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UsuarioActividad`
--

INSERT INTO `UsuarioActividad` (`idActividad`, `idUsuario`) VALUES
(2, 1),
(3, 2),
(2, 3),
(3, 3),
(1, 4),
(2, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `UsuarioHotel`
--

DROP TABLE IF EXISTS `UsuarioHotel`;
CREATE TABLE IF NOT EXISTS `UsuarioHotel` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechaEntrada` varchar(100) NOT NULL,
  `fechaSalida` varchar(100) NOT NULL,
  `TipoHabitacion` varchar(100) NOT NULL,
  PRIMARY KEY (`idHotel`,`idUsuario`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
CREATE TABLE IF NOT EXISTS `actividad` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(100) NOT NULL,
  `denominacion` varchar(50) NOT NULL,
  `FechaHora` varchar(50) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actividad`
--

INSERT INTO `actividad` (`idActividad`, `codigo`, `denominacion`, `FechaHora`, `descripcion`, `foto`, `importe`) VALUES
(1, 'alhambra', 'Visita a la Alhambra', '2 julio, 11:30', 'Es un rico complejo palaciego y fortaleza (alcazar o al-qasr) que alojaba al monarca y a la corte del Reino nazari de Granada. En 2011 se convirtio en el monumento mas visitado de Espana, recibiendo la cifra historica de 2310764 visitantes. ', './seccion/imagenes/actividades/alhambra/alhambra.jpg', 4.5),
(2, 'sierra_nevada', 'Subida a Sierra Nevada', '3 julio, 7:45', 'Situada en Andalucia, extendiendose por las provincias de Granada y Almeria. Es el macizo montanoso de mayor altitud de toda Europa occidental, despues de los Alpes. Su altitud maxima se alcanza en el pico Mulhacen, de 3.482 metros ', './seccion/imagenes/actividades/sierra_nevada/sierra_nevada.jpg', 9),
(3, 'cena_gala', 'Cena de Gala', '3 julio, 21:00', 'Cena de gala que se celebrara al terminar el congreso.', './seccion/imagenes/actividades/cena_gala/cena_gala.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `cuota`
--

DROP TABLE IF EXISTS `cuota`;
CREATE TABLE IF NOT EXISTS `cuota` (
  `idCuota` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`idCuota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cuota`
--

INSERT INTO `cuota` (`idCuota`, `denominacion`, `descripcion`, `importe`) VALUES
(1, 'Estudiante', 'Cuota mínima solo para asistir al congreso.', 6),
(2, 'Investigador', 'Cuota intermedia, incluye cena de gala', 10),
(3, 'Premium', 'Cuota premium, incluye invitacion a todas la actividades y la cena de gla', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `Centro de trabajo` varchar(200) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `idCuota` int(11) NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idCuota` (`idCuota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Apellidos`, `Centro de trabajo`, `Telefono`, `Correo`, `Password`, `idCuota`, `importe`) VALUES
(1, 'Pablo', 'Valenzuela', 'ETSIIT', 637187471, 'pva_@jotmeil.es', 'bc9d7c51e75b3bf44497bd6c21cccd3b', 1, 14),
(2, 'George', 'Renk', 'Us Or', 98746536, 'georgo@kloo.oi', 'b37e14f04c907a77c836052c0e5a6837', 2, 10),
(3, 'Timo', 'Kotipelto', 'Jarii', 2147483647, 'timoko@tipel.to', '0f05e3d167ae9f1966110bed552c23a1', 2, 19),
(4, 'MC Dinero', 'Dinero', 'dinero', 46734225, 'dinero@aprende.algo', 'c02138b94508ec621890a1f0899c1678', 3, 20);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `UsuarioActividad`
--
ALTER TABLE `UsuarioActividad`
  ADD CONSTRAINT `UsuarioActividad_ibfk_1` FOREIGN KEY (`idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `UsuarioActividad_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `UsuarioHotel`
--
ALTER TABLE `UsuarioHotel`
  ADD CONSTRAINT `UsuarioHotel_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCuota`) REFERENCES `cuota` (`idCuota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

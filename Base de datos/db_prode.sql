-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2017 a las 14:33:00
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_prode`
--
CREATE DATABASE IF NOT EXISTS `db_prode` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_prode`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `Id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Estadio` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`Id_equipo`, `Nombre`, `Estadio`) VALUES
(1, 'River Plate', 'monumental'),
(2, 'Boca', 'bomboera'),
(3, 'Independiente', ''),
(4, 'San Lorenzo', 'gasometro'),
(5, 'Racing', 'El Cilindro'),
(6, 'Estudiantes', 'ninguno'),
(7, 'Gimnasia', ''),
(8, 'Newell`s', ''),
(9, 'Rosario Central', ''),
(10, 'Banfield', 'Monumental'),
(11, 'Lanus', 'xxxxxxxxxxxxx'),
(12, 'Belgrano de Cordoba', 'chato'),
(13, 'Defensa y Justicia', ''),
(14, 'Talleres de Cordoba', ''),
(15, 'Atletico Tucuman', ''),
(16, 'San Martin de San Juan', ''),
(17, 'Godoy Cruz', 'fdddffddfgd'),
(18, 'Olimpo', 'bahia'),
(19, 'Chacarita Juniors', ''),
(20, 'Temperley', 'cbbcvbc'),
(21, 'Huracan', ''),
(22, ' Vélez Sarsfield', ''),
(23, 'Argentinos Juniors', ''),
(24, 'Tigre', ''),
(25, 'Patronato', 'buuuuu'),
(26, 'Unión de Santa Fe', ''),
(27, 'Colon de Santa Fe', ''),
(28, 'Arsenal de Sarandí', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE IF NOT EXISTS `fecha` (
  `id_fecha` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id_fecha`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`id_fecha`, `Id_usuario`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 9),
(6, 11),
(7, 7),
(8, 15),
(9, 17),
(10, 19),
(11, 21),
(12, 23),
(13, 25),
(14, 222);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE IF NOT EXISTS `partido` (
  `Id_partido` int(4) NOT NULL AUTO_INCREMENT,
  `Id_fecha` int(2) NOT NULL,
  `Id_equipo_local` int(2) NOT NULL,
  `Id_equipo_visita` int(2) NOT NULL,
  PRIMARY KEY (`Id_partido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`Id_partido`, `Id_fecha`, `Id_equipo_local`, `Id_equipo_visita`) VALUES
(1, 1, 24, 22),
(2, 1, 10, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Nombre`, `Apellido`, `DNI`, `Email`, `Password`) VALUES
(1, 'Juan', 'Aquino', 28397996, 'juanaquino77@gmail.com', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-09-2019 a las 18:12:43
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mathlizard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `perfil` varchar(255) DEFAULT NULL,
  `rol` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `nombre`, `password`, `perfil`, `rol`) VALUES
(1, 'ivan', '1a4a11c6dc14f15917cab47dfe1238f6b97912e8f0d39e7a00d5b6c36c693aece2ed63852ce7ae769b31119420c10fd89dec1de277e31d482d11e0df62c51e18', '22284-lizard-icon.png', 'normal'),
(2, 'pokemeta', '6610871659d3490343f56d40b00748088f038876d65d9e247a97d372a70d4cdcaee2ed08ce8db427b18461f6c68d43c7d65c56797df73b8065e023c900b964c5', 'lizard-icon-simple-style-vector-9672733.jpg', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

DROP TABLE IF EXISTS `temas`;
CREATE TABLE IF NOT EXISTS `temas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `contenido` text,
  `banner` text NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `titulo`, `contenido`, `banner`, `descripcion`) VALUES
(1, 'w34trwdfgdsgvsf', 'gfbnfvgytdtrdrszedcdzersferd <br><br><img src=\"banners/ecu1.gif\" width=\"300\" height=\"500\">', 'ecu2.jpg', 'ghbnfyujyugy7uv7jgvygj'),
(3, 'Prueba', 'Dinero\n\n<h3>PRUEBA 2</h3><hr>\n\nel mundo se consume en dinero\n\n', '42614996-informaciÃ³n-icono-del-arte-lÃ­nea-de-informaciÃ³n-de-aplicaciones-y-sitios-web.jpg', 'nose');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

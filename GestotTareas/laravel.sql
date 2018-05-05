-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-03-2017 a las 15:10:30
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Henry', 'Cardoza', 'henry.avalos@udb.edu.sv', 'cardoza', '2017-03-24 15:04:46', '2017-03-24 21:04:46'),
(4, 'Jorge', 'García', 'jorge.g@gmail.com', 'jorge', '2017-03-24 20:44:25', '2017-03-24 20:44:25'),
(5, 'Valeria', 'Ramos', 'valery.ramos@gmail.com', 'valeria', '2017-03-24 20:45:18', '2017-03-24 20:45:18'),
(9, 'Hazel', 'Peña', 'hazel@gmail.com', 'hazel', '2017-03-24 21:05:17', '2017-03-24 21:05:17'),
(10, 'Anderson', 'Reyes', 'anderson@gmail.com', 'ander', '2017-03-24 21:05:43', '2017-03-24 21:05:43'),
(11, 'Cecilia', 'Guerra', 'ceci@gmail.com', 'guerra', '2017-03-24 15:06:34', '2017-03-24 21:06:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

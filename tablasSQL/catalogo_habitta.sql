-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.2
-- Tiempo de generación: 16-01-2024 a las 00:28:20
-- Versión del servidor: 11.1.2-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ccima`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_habitta`
--

CREATE TABLE `catalogo_habitta` (
  `id` int(11) NOT NULL,
  `llave` longtext DEFAULT NULL,
  `porcent1` longtext DEFAULT NULL,
  `porcent2` longtext DEFAULT NULL,
  `porcent3` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo_habitta`
--

INSERT INTO `catalogo_habitta` (`id`, `llave`, `porcent1`, `porcent2`, `porcent3`) VALUES
(1, '90ESTEPA 1', 'null', 'null', 'null'),
(2, '1PARAMO A', 'null', '0.015', 'null'),
(3, '2PARAMO A', 'null', '0.015', 'null'),
(4, '3PARAMO A', 'null', '0.015', 'null'),
(5, '4PARAMO A', 'null', '0.015', 'null'),
(6, '5PARAMO A', 'null', '0.015', 'null'),
(7, '6PARAMO A', 'null', '0.015', 'null'),
(8, '7PARAMO A', 'null', '0.015', 'null'),
(9, '8PARAMO A', 'null', '0.015', 'null'),
(10, '9PARAMO A', 'null', '0.015', 'null'),
(11, '10PARAMO A', 'null', '0.015', 'null'),
(12, '11PARAMO A', 'null', '0.015', 'null'),
(13, '12PARAMO A', 'null', '0.015', 'null'),
(14, '13PARAMO A', 'null', '0.015', 'null'),
(15, '14PARAMO A', 'null', '0.015', 'null'),
(16, '15PARAMO A', 'null', '0.015', 'null'),
(17, '16PARAMO A', 'null', '0.015', 'null'),
(18, '1PARAMO B', 'null', '0.015', 'null'),
(19, '2PARAMO B', 'null', '0.015', 'null'),
(20, '3PARAMO B', 'null', '0.015', 'null'),
(21, '4PARAMO B', 'null', '0.015', 'null'),
(22, '5PARAMO B', 'null', '0.015', 'null'),
(23, '6PARAMO B', 'null', '0.015', 'null'),
(24, '7PARAMO B', 'null', '0.015', 'null'),
(25, '8PARAMO B', 'null', '0.015', 'null'),
(26, '9PARAMO B', 'null', '0.015', 'null'),
(27, '10PARAMO B', 'null', '0.015', 'null'),
(28, '11PARAMO B', 'null', '0.015', 'null'),
(29, '12PARAMO B', 'null', '0.015', 'null'),
(30, '13PARAMO B', 'null', '0.015', 'null'),
(31, '1MANGLAR A', 'null', '0.015', 'null'),
(32, '2MANGLAR A', 'null', '0.015', 'null'),
(33, '3MANGLAR A', 'null', '0.015', 'null'),
(34, '4MANGLAR A', 'null', '0.015', 'null'),
(35, '5MANGLAR A', 'null', '0.015', 'null'),
(36, '6MANGLAR A', 'null', '0.015', 'null'),
(37, '7MANGLAR A', 'null', '0.015', 'null'),
(38, '8MANGLAR A', 'null', '0.015', 'null'),
(39, '9MANGLAR A', 'null', '0.015', 'null'),
(40, '10MANGLAR A', 'null', '0.015', 'null'),
(41, '11MANGLAR A', 'null', '0.015', 'null'),
(42, '12MANGLAR A', 'null', '0.015', 'null'),
(43, '13MANGLAR A', 'null', '0.015', 'null'),
(44, '14MANGLAR A', 'null', '0.015', 'null'),
(45, '15MANGLAR A', 'null', '0.015', 'null'),
(46, '16MANGLAR A', 'null', '0.015', 'null'),
(47, '17MANGLAR A', 'null', '0.015', 'null'),
(48, '18MANGLAR A', 'null', '0.015', 'null'),
(49, '19MANGLAR A', 'null', '0.015', 'null'),
(50, '20MANGLAR A', 'null', '0.015', 'null'),
(51, '21MANGLAR A', 'null', '0.015', 'null'),
(52, '22MANGLAR A', 'null', '0.015', 'null'),
(53, '29ESTEPA 3', '0.01', 'null', 'null');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_habitta`
--
ALTER TABLE `catalogo_habitta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_habitta`
--
ALTER TABLE `catalogo_habitta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

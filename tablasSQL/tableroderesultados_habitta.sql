-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.2
-- Tiempo de generación: 16-01-2024 a las 01:19:32
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
-- Estructura de tabla para la tabla `tableroderesultados_habitta`
--

CREATE TABLE `tableroderesultados_habitta` (
  `id` int(11) NOT NULL,
  `giro` longtext DEFAULT NULL,
  `u_totales` int(11) DEFAULT NULL,
  `u_apartadas` int(11) DEFAULT NULL,
  `u_porvender` int(11) DEFAULT NULL,
  `empty_e` longtext DEFAULT NULL,
  `u_vendidas` int(11) DEFAULT NULL,
  `u_por_cerrar` int(11) DEFAULT NULL,
  `empty_h` longtext DEFAULT NULL,
  `u_por_recuperar` int(11) DEFAULT NULL,
  `recuperados` int(11) DEFAULT NULL,
  `desarrollo` longtext DEFAULT NULL,
  `u_por_vender` int(11) DEFAULT NULL,
  `empty_f` int(11) DEFAULT NULL,
  `empty_i` int(11) DEFAULT NULL,
  `estatus` longtext DEFAULT NULL,
  `total_vencidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tableroderesultados_habitta`
--

INSERT INTO `tableroderesultados_habitta` (`id`, `giro`, `u_totales`, `u_apartadas`, `u_porvender`, `empty_e`, `u_vendidas`, `u_por_cerrar`, `empty_h`, `u_por_recuperar`, `recuperados`, `desarrollo`, `u_por_vender`, `empty_f`, `empty_i`, `estatus`, `total_vencidos`) VALUES
(1, 'HABITACIONAL', 4703, 2670, 2033, 'null', 2601, 69, 'null', 73, 110, 'null', 0, 0, 0, 'null', 0),
(2, 'COMERCIAL', 51, 49, 2, 'null', 49, 0, 'null', 1, 2, 'null', 0, 0, 0, 'null', 0),
(3, 'HABITACIONAL', 2676, 2082, 0, 'null', 2062, 20, 'null', 59, 106, 'PORTTO BLANCO CIMATARIO', 594, 0, 0, 'null', 0),
(4, 'COMERCIAL', 51, 49, 0, 'null', 49, 0, 'null', 1, 2, 'null', 2, 0, 0, 'null', 0),
(5, 'HABITACIONAL', 462, 179, 0, 'null', 170, 9, 'null', 4, 2, 'LOMAS DE PORTTO BLANCO', 283, 0, 0, 'null', 0),
(6, 'COMERCIAL', 0, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 0, 0, 0, 'null', 0),
(7, 'HABITACIONAL', 1565, 409, 0, 'null', 369, 40, 'null', 0, 2, 'PORTTO BLANCO BERNAL', 1156, 0, 0, 'null', 0),
(8, 'COMERCIAL', 0, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 0, 0, 0, 'null', 0),
(9, 'HABITACIONAL', 4703, 2670, 0, 'null', 2601, 69, 'null', 63, 110, 'TOTAL', 2033, 0, 0, 'null', 0),
(10, 'COMERCIAL', 51, 49, 0, 'null', 49, 0, 'null', 1, 2, 'TOTAL', 2, 0, 0, 'null', 0),
(11, 'ESTEPA', 105, 213, 0, 'null', 213, 0, 'null', 1, 10, 'PORTTO BLANCO CIMATARIO', -108, 0, 0, 'null', 0),
(12, 'DESIERTO', 351, 339, 0, 'null', 339, 0, 'null', 5, 14, 'null', 12, 0, 0, 'null', 0),
(13, 'TAIGA', 270, 209, 0, 'null', 208, 1, 'null', 5, 19, 'null', 61, 0, 0, 'null', 0),
(14, 'PARAMO', 386, 301, 0, 'null', 301, 0, 'null', 7, 20, 'null', 85, 0, 0, 'null', 0),
(15, 'SELVA', 429, 372, 0, 'null', 371, 1, 'null', 18, 26, 'null', 57, 0, 0, 'null', 0),
(16, 'BOSQUE', 416, 388, 0, 'null', 387, 1, 'null', 16, 11, 'null', 28, 0, 0, 'null', 0),
(17, 'LAGO', 281, 158, 0, 'null', 145, 13, 'null', 4, 3, 'null', 123, 0, 0, 'null', 0),
(18, 'ARRECIFE', 178, 2, 0, 'null', 0, 2, 'null', 0, 0, 'null', 176, 0, 0, 'null', 0),
(19, 'MANGLAR', 260, 100, 0, 'null', 98, 2, 'null', 3, 3, 'null', 160, 0, 0, 'null', 0),
(20, 'STRIP CENTER PARAMO', 29, 27, 0, 'null', 27, 0, 'null', 1, 0, 'null', 2, 0, 0, 'null', 0),
(21, 'STRIP CENTER MANGLAR', 22, 22, 0, 'null', 22, 0, 'null', 0, 0, 'null', 0, 0, 0, 'null', 0),
(22, 'ETAPA 1', 87, 85, 0, 'null', 81, 4, 'null', 0, 0, 'LOMAS DE PORTTO BLANCO', 2, 0, 0, 'null', 0),
(23, 'ETAPA 2', 75, 58, 0, 'null', 57, 1, 'null', 3, 1, 'null', 17, 0, 0, 'null', 0),
(24, 'ETAPA 3', 185, 36, 0, 'null', 32, 4, 'null', 1, 1, 'null', 149, 0, 0, 'null', 0),
(25, 'ETAPA 4', 115, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 115, 0, 0, 'null', 0),
(26, 'AMATISTA', 171, 149, 0, 'null', 142, 7, 'null', 4, 2, 'PORTTO BLANCO BERNAL', 22, 0, 0, 'null', 0),
(27, 'ZAFIRO', 202, 192, 0, 'null', 181, 11, 'null', 6, 0, 'null', 10, 0, 0, 'null', 0),
(28, 'MALAQUITA', 214, 68, 0, 'null', 46, 22, 'null', 0, 0, 'null', 146, 0, 0, 'null', 0),
(29, 'OPALO', 228, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 228, 0, 0, 'null', 0),
(30, 'TOPACIO', 259, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 259, 0, 0, 'null', 0),
(31, 'JADE', 239, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 239, 0, 0, 'null', 0),
(32, 'ONIX', 252, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 252, 0, 0, 'null', 0),
(33, 'TOTAL', 4754, 2719, 0, 'null', 2650, 69, 'null', 74, 110, 'null', 2035, 0, 0, 'null', 0),
(34, 'HABITACIONAL', 2147483647, 347146557, 0, 'null', 1612668609, 49711210, 'null', 25542756, 77655169, 'null', 536063991, 0, 0, 'null', 652290),
(35, 'COMERCIAL', 34035064, 7841444, 0, 'null', 32815384, 0, 'null', 0, 1219680, 'null', 1219680, 0, 0, 'null', 0),
(36, 'HABITACIONAL', 1588911803, 300943069, 0, 'null', 1284352403, 17676645, 'null', 20015836, 75407147, 'null', 286255451, 0, 0, 'null', 553754),
(37, 'COMERCIAL', 34035064, 7841444, 0, 'null', 32815384, 0, 'null', 0, 1219680, 'null', 1219680, 0, 0, 'null', 0),
(38, 'HABITACIONAL', 227888459, 14109157, 0, 'null', 85161224, 4942693, 'null', 1415827, 1100521, 'null', 137083918, 0, 0, 'null', 22139),
(39, 'COMERCIAL', 0, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 0, 0, 0, 'null', 0),
(40, 'HABITACIONAL', 384135471, 32094330, 0, 'null', 243154982, 27091870, 'null', 4111092, 1147500, 'null', 112724621, 0, 0, 'null', 76397),
(41, 'COMERCIAL', 0, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 0, 0, 0, 'null', 0),
(42, 'HABITACIONAL', 2147483647, 347146557, 0, 'null', 1612668609, 49711210, 'null', 25542756, 77655169, 'null', 536063991, 0, 0, 'null', 652290),
(43, 'COMERCIAL', 34035064, 7841444, 0, 'null', 32815384, 0, 'null', 0, 1219680, 'null', 1219680, 0, 0, 'null', 0),
(44, 'ESTEPA', 134329166, 36677936, 0, 'null', 125265782, 0, 'null', 350400, 5678731, 'null', 9063384, 0, 0, 'null', 5256),
(45, 'DESIERTO', 177505973, 51731861, 0, 'null', 168442292, 0, 'null', 489930, 8663446, 'null', 9063681, 0, 0, 'null', 9897),
(46, 'TAIGA', 157750790, 37566092, 0, 'null', 140123105, 1169217, 'null', 0, 18122241, 'null', 16458467, 0, 0, 'null', 0),
(47, 'PARAMO', 169747955, 41321685, 0, 'null', 162879713, 0, 'null', 3077553, 10599344, 'null', 6868242, 0, 0, 'null', 171550),
(48, 'SELVA', 310303495, 59032911, 0, 'null', 265695481, 2064844, 'null', 8583575, 17925601, 'null', 42543170, 0, 0, 'null', 184192),
(49, 'BOSQUE', 258350124, 48461566, 0, 'null', 252299091, 1038654, 'null', 5217717, 7890603, 'null', 5012379, 0, 0, 'null', 109380),
(50, 'LAGO', 171486244, 14463782, 0, 'null', 88438540, 8966103, 'null', 685511, 1912592, 'null', 73454296, 0, 0, 'null', 13848),
(51, 'ARRECIFE', 62362960, 65264, 0, 'null', 0, 1566445, 'null', 0, 0, 'null', 60796515, 0, 0, 'null', 0),
(52, 'MANGLAR', 147075093, 11621969, 0, 'null', 81208397, 2871380, 'null', 1611148, 4614587, 'null', 62995314, 0, 0, 'null', 59628),
(53, 'STRIP CENTER PARAMO', 18605605, 4224403, 0, 'null', 17385925, 0, 'null', 0, 1219680, 'null', 1219680, 0, 0, 'null', 0),
(54, 'STRIP CENTER MANGLAR', 15429458, 3617041, 0, 'null', 15429458, 0, 'null', 0, 0, 'null', 0, 0, 0, 'null', 0),
(55, 'ETAPA 1', 44424937, 7353503, 0, 'null', 40923601, 2587926, 'null', 0, 0, 'null', 913410, 0, 0, 'null', 0),
(56, 'ETAPA 2', 32791673, 4039916, 0, 'null', 24952393, 427680, 'null', 869875, 443520, 'null', 7411600, 0, 0, 'null', 13867),
(57, 'ETAPA 3', 99293523, 2715738, 0, 'null', 19285229, 1927087, 'null', 545952, 657001, 'null', 77380583, 0, 0, 'null', 8272),
(58, 'ETAPA 4', 51378324, 0, 0, 'null', 0, 0, 'null', 0, 0, 'null', 51378324, 0, 0, 'null', 0),
(59, 'AMATISTA', 120597056, 13135704, 0, 'null', 96623630, 6043074, 'null', 1501089, 1147500, 'null', 17930351, 0, 0, 'null', 30325),
(60, 'ZAFIRO', 126412163, 14846113, 0, 'null', 114514721, 6295131, 'null', 2610002, 0, 'null', 5000886, 0, 0, 'null', 46072),
(61, 'TOTAL', 1850835328, 322893671, 0, 'null', 1402329012, 22619339, 'null', 21431664, 77727349, 'null', 424559050, 0, 0, 'null', 575893);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tableroderesultados_habitta`
--
ALTER TABLE `tableroderesultados_habitta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tableroderesultados_habitta`
--
ALTER TABLE `tableroderesultados_habitta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

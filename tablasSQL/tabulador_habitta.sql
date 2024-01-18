-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.2
-- Tiempo de generación: 16-01-2024 a las 01:19:45
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
-- Estructura de tabla para la tabla `tabulador_habitta`
--

CREATE TABLE `tabulador_habitta` (
  `id` int(11) NOT NULL,
  `periodo` longtext DEFAULT NULL,
  `fecha` longtext DEFAULT NULL,
  `mensualidad` longtext DEFAULT NULL,
  `pagado` longtext DEFAULT NULL,
  `fecha_pago` longtext DEFAULT NULL,
  `interesfinanciamiento` longtext DEFAULT NULL,
  `abono_capital` longtext DEFAULT NULL,
  `saldo_final` longtext DEFAULT NULL,
  `int_gen` longtext DEFAULT NULL,
  `int_int` longtext DEFAULT NULL,
  `int_acum_mora` longtext DEFAULT NULL,
  `int_neg` longtext DEFAULT NULL,
  `int_pagado` longtext DEFAULT NULL,
  `estatus` longtext DEFAULT NULL,
  `observacion` longtext DEFAULT NULL,
  `debe_interes` longtext DEFAULT NULL,
  `indicador_fecha` longtext DEFAULT NULL,
  `porcent_int` longtext DEFAULT NULL,
  `llave2` longtext DEFAULT NULL,
  `mens_adeu` longtext DEFAULT NULL,
  `calc_sobre` longtext DEFAULT NULL,
  `monto_int_mor` longtext DEFAULT NULL,
  `suma_deuda` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabulador_habitta`
--

INSERT INTO `tabulador_habitta` (`id`, `periodo`, `fecha`, `mensualidad`, `pagado`, `fecha_pago`, `interesfinanciamiento`, `abono_capital`, `saldo_final`, `int_gen`, `int_int`, `int_acum_mora`, `int_neg`, `int_pagado`, `estatus`, `observacion`, `debe_interes`, `indicador_fecha`, `porcent_int`, `llave2`, `mens_adeu`, `calc_sobre`, `monto_int_mor`, `suma_deuda`) VALUES
(1, '1', '2020-08-01', '1752.0', '2000.0', '2020-06-17', 'null', '2000.0', '313360.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1AGOSTO 2020', 'null', 'null', 'null', '-248.0'),
(2, '2', '2020-09-01', '1752.0', '1752.0', '2020-08-03', 'null', '1752.0', '311608.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1SEPTIEMBRE 2020', 'null', 'null', 'null', 'null'),
(3, '3', '2020-10-01', '1752.0', '1752.0', '2020-10-05', 'null', '1752.0', '309856.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1OCTUBRE 2020', 'null', 'null', 'null', 'null'),
(4, '4', '2020-11-01', '1752.0', '1752.0', '2020-11-05', 'null', '1752.0', '308104.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1NOVIEMBRE 2020', 'null', 'null', 'null', 'null'),
(5, '5', '2020-12-01', '1752.0', '1752.0', '2020-12-03', 'null', '1752.0', '306352.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1DICIEMBRE 2020', 'null', 'null', 'null', 'null'),
(6, '6', '2021-01-01', '1752.0', '1752.0', '2021-01-06', 'null', '1752.0', '304600.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1ENERO 2021', 'null', 'null', 'null', 'null'),
(7, '7', '2021-02-01', '1752.0', '1750.0', '2021-02-05', 'null', '1750.0', '302850.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1FEBRERO 2021', 'null', 'null', 'null', '2.0'),
(8, '8', '2021-03-01', '1752.0', '1754.0', '2021-03-05', 'null', '1754.0', '301096.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1MARZO 2021', 'null', 'null', 'null', '-2.0'),
(9, '9', '2021-04-01', '1752.0', '1752.0', '2021-04-09', 'null', '1752.0', '299344.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1ABRIL 2021', 'null', 'null', 'null', 'null'),
(10, '10', '2021-05-01', '1752.0', '1752.0', '2021-04-09', 'null', '1752.0', '297592.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1MAYO 2021', 'null', 'null', 'null', 'null'),
(11, '11', '2021-06-01', '1752.0', '1752.0', '2021-06-10', 'null', '1752.0', '295840.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1JUNIO 2021', 'null', 'null', 'null', 'null'),
(12, '12', '2021-07-01', '1752.0', '1752.0', '2021-07-05', 'null', '1752.0', '294088.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1JULIO 2021', 'null', 'null', 'null', 'null'),
(13, '13', '2021-08-01', '1752.0', '1752.0', '2021-08-05', 'null', '1752.0', '292336.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1AGOSTO 2021', 'null', 'null', 'null', 'null'),
(14, '14', '2021-09-01', '1752.0', '1752.0', '2021-09-08', 'null', '1752.0', '290584.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1SEPTIEMBRE 2021', 'null', 'null', 'null', 'null'),
(15, '15', '2021-10-01', '1752.0', '1752.0', '2021-10-06', 'null', '1752.0', '288832.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1OCTUBRE 2021', 'null', 'null', 'null', 'null'),
(16, '16', '2021-11-01', '1752.0', '1752.0', '2021-11-08', 'null', '1752.0', '287080.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1NOVIEMBRE 2021', 'null', 'null', 'null', 'null'),
(17, '17', '2021-12-01', '1752.0', '1752.0', '2021-12-15', 'null', '1752.0', '285328.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1DICIEMBRE 2021', 'null', 'null', 'null', 'null'),
(18, '18', '2022-01-01', '1752.0', '1752.0', '2022-01-05', 'null', '1752.0', '283576.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1ENERO 2022', 'null', 'null', 'null', 'null'),
(19, '19', '2022-02-01', '1752.0', '1752.0', '2022-02-09', 'null', '1752.0', '281824.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1FEBRERO 2022', 'null', 'null', 'null', 'null'),
(20, '20', '2022-03-01', '1752.0', '1752.0', '2022-03-04', 'null', '1752.0', '280072.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1MARZO 2022', 'null', 'null', 'null', 'null'),
(21, '21', '2022-04-01', '1752.0', '1752.0', '2022-04-11', 'null', '1752.0', '278320.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1ABRIL 2022', 'null', 'null', 'null', 'null'),
(22, '22', '2022-05-01', '1752.0', '1752.0', '2022-05-03', 'null', '1752.0', '276568.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1MAYO 2022', 'null', 'null', 'null', 'null'),
(23, '23', '2022-06-01', '1752.0', '1752.0', '2022-06-13', 'null', '1752.0', '274816.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1JUNIO 2022', 'null', 'null', 'null', 'null'),
(24, '24', '2022-07-01', '1752.0', '1752.0', '2022-07-07', 'null', '1752.0', '273064.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1JULIO 2022', 'null', 'null', 'null', 'null'),
(25, '25', '2022-08-01', '1752.0', '1752.0', '2022-08-08', 'null', '1752.0', '271312.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1AGOSTO 2022', 'null', 'null', 'null', 'null'),
(26, '26', '2022-09-01', '1752.0', '1752.0', '2022-09-12', 'null', '1752.0', '269560.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1SEPTIEMBRE 2022', 'null', 'null', 'null', 'null'),
(27, '27', '2022-10-01', '1752.0', '1752.0', '2022-10-10', 'null', '1752.0', '267808.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1OCTUBRE 2022', 'null', 'null', 'null', 'null'),
(28, '28', '2022-11-01', '1752.0', '1752.0', '2022-11-08', 'null', '1752.0', '266056.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1NOVIEMBRE 2022', 'null', 'null', 'null', 'null'),
(29, '29', '2022-12-01', '1752.0', '1752.0', '2022-12-16', 'null', '1752.0', '264304.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1DICIEMBRE 2022', 'null', 'null', 'null', 'null'),
(30, '30', '2023-01-01', '1752.0', '1752.0', '2023-01-09', 'null', '1752.0', '262552.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1ENERO 2023', 'null', 'null', 'null', 'null'),
(31, '31', '2023-02-01', '1752.0', '1752.0', '2023-02-13', 'null', '1752.0', '260800.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1FEBRERO 2023', 'null', 'null', 'null', 'null'),
(32, '32', '2023-03-01', '1752.0', '1752.0', '2023-03-06', 'null', '1752.0', '259048.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1MARZO 2023', 'null', 'null', 'null', 'null'),
(33, '33', '2023-04-01', '1752.0', '1752.0', '2023-04-13', 'null', '1752.0', '257296.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1ABRIL 2023', 'null', 'null', 'null', 'null'),
(34, '34', '2023-05-01', '1752.0', '1752.0', '2023-05-12', 'null', '1752.0', '255544.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1.0', 'null', '7ESTEPA 1MAYO 2023', 'null', 'null', 'null', 'null'),
(35, '35', '2023-06-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '253792.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1JUNIO 2023', 'null', 'null', 'null', 'null'),
(36, '36', '2023-07-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '252040.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1JULIO 2023', 'null', 'null', 'null', 'null'),
(37, '37', '2023-08-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '250288.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1AGOSTO 2023', 'null', 'null', 'null', 'null'),
(38, '38', '2023-09-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '248536.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1SEPTIEMBRE 2023', 'null', 'null', 'null', 'null'),
(39, '39', '2023-10-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '246784.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1OCTUBRE 2023', 'null', 'null', 'null', 'null'),
(40, '40', '2023-11-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '245032.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1NOVIEMBRE 2023', 'null', 'null', 'null', 'null'),
(41, '41', '2023-12-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '243280.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1DICIEMBRE 2023', 'null', 'null', 'null', 'null'),
(42, '42', '2024-01-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '241528.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1ENERO 2024', 'null', 'null', 'null', 'null'),
(43, '43', '2024-02-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '239776.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1FEBRERO 2024', 'null', 'null', 'null', 'null'),
(44, '44', '2024-03-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '238024.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1MARZO 2024', 'null', 'null', 'null', 'null'),
(45, '45', '2024-04-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '236272.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1ABRIL 2024', 'null', 'null', 'null', 'null'),
(46, '46', '2024-05-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '234520.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1MAYO 2024', 'null', 'null', 'null', 'null'),
(47, '47', '2024-06-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '232768.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1JUNIO 2024', 'null', 'null', 'null', 'null'),
(48, '48', '2024-07-01', '1752.0', '1752.0', 'null', 'null', '1752.0', '231016.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '7ESTEPA 1JULIO 2024', 'null', 'null', 'null', 'null'),
(49, '49', '2024-08-01', '3163.2', '3163.2', 'null', '2310.16', '853.04', '230162.96', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1AGOSTO 2024', 'null', 'null', 'null', 'null'),
(50, '50', '2024-09-01', '3163.2', '3163.2', 'null', '2301.63', '861.57', '229301.39', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1SEPTIEMBRE 2024', 'null', 'null', 'null', 'null'),
(51, '51', '2024-10-01', '3163.2', '3163.2', 'null', '2293.01', '870.19', '228431.2', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1OCTUBRE 2024', 'null', 'null', 'null', 'null'),
(52, '52', '2024-11-01', '3163.2', '3163.2', 'null', '2284.31', '878.89', '227552.32', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1NOVIEMBRE 2024', 'null', 'null', 'null', 'null'),
(53, '53', '2024-12-01', '3163.2', '3163.2', 'null', '2275.52', '887.68', '226664.64', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1DICIEMBRE 2024', 'null', 'null', 'null', 'null'),
(54, '54', '2025-01-01', '3163.2', '3163.2', 'null', '2266.65', '896.55', '225768.09', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ENERO 2025', 'null', 'null', 'null', 'null'),
(55, '55', '2025-02-01', '3163.2', '3163.2', 'null', '2257.68', '905.52', '224862.57', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1FEBRERO 2025', 'null', 'null', 'null', 'null'),
(56, '56', '2025-03-01', '3163.2', '3163.2', 'null', '2248.63', '914.57', '223947.99', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MARZO 2025', 'null', 'null', 'null', 'null'),
(57, '57', '2025-04-01', '3163.2', '3163.2', 'null', '2239.48', '923.72', '223024.27', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ABRIL 2025', 'null', 'null', 'null', 'null'),
(58, '58', '2025-05-01', '3163.2', '3163.2', 'null', '2230.24', '932.96', '222091.31', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MAYO 2025', 'null', 'null', 'null', 'null'),
(59, '59', '2025-06-01', '3163.2', '3163.2', 'null', '2220.91', '942.29', '221149.03', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JUNIO 2025', 'null', 'null', 'null', 'null'),
(60, '60', '2025-07-01', '3163.2', '3163.2', 'null', '2211.49', '951.71', '220197.32', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JULIO 2025', 'null', 'null', 'null', 'null'),
(61, '61', '2025-08-01', '3163.2', '3163.2', 'null', '2201.97', '961.23', '219236.09', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1AGOSTO 2025', 'null', 'null', 'null', 'null'),
(62, '62', '2025-09-01', '3163.2', '3163.2', 'null', '2192.36', '970.84', '218265.25', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1SEPTIEMBRE 2025', 'null', 'null', 'null', 'null'),
(63, '63', '2025-10-01', '3163.2', '3163.2', 'null', '2182.65', '980.55', '217284.7', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1OCTUBRE 2025', 'null', 'null', 'null', 'null'),
(64, '64', '2025-11-01', '3163.2', '3163.2', 'null', '2172.85', '990.35', '216294.35', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1NOVIEMBRE 2025', 'null', 'null', 'null', 'null'),
(65, '65', '2025-12-01', '3163.2', '3163.2', 'null', '2162.94', '1000.26', '215294.09', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1DICIEMBRE 2025', 'null', 'null', 'null', 'null'),
(66, '66', '2026-01-01', '3163.2', '3163.2', 'null', '2152.94', '1010.26', '214283.84', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ENERO 2026', 'null', 'null', 'null', 'null'),
(67, '67', '2026-02-01', '3163.2', '3163.2', 'null', '2142.84', '1020.36', '213263.47', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1FEBRERO 2026', 'null', 'null', 'null', 'null'),
(68, '68', '2026-03-01', '3163.2', '3163.2', 'null', '2132.63', '1030.57', '212232.91', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MARZO 2026', 'null', 'null', 'null', 'null'),
(69, '69', '2026-04-01', '3163.2', '3163.2', 'null', '2122.33', '1040.87', '211192.04', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ABRIL 2026', 'null', 'null', 'null', 'null'),
(70, '70', '2026-05-01', '3163.2', '3163.2', 'null', '2111.92', '1051.28', '210140.76', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MAYO 2026', 'null', 'null', 'null', 'null'),
(71, '71', '2026-06-01', '3163.2', '3163.2', 'null', '2101.41', '1061.79', '209078.97', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JUNIO 2026', 'null', 'null', 'null', 'null'),
(72, '72', '2026-07-01', '3163.2', '3163.2', 'null', '2090.79', '1072.41', '208006.56', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JULIO 2026', 'null', 'null', 'null', 'null'),
(73, '73', '2026-08-01', '3163.2', '3163.2', 'null', '2080.07', '1083.13', '206923.42', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1AGOSTO 2026', 'null', 'null', 'null', 'null'),
(74, '74', '2026-09-01', '3163.2', '3163.2', 'null', '2069.23', '1093.97', '205829.46', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1SEPTIEMBRE 2026', 'null', 'null', 'null', 'null'),
(75, '75', '2026-10-01', '3163.2', '3163.2', 'null', '2058.29', '1104.91', '204724.55', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1OCTUBRE 2026', 'null', 'null', 'null', 'null'),
(76, '76', '2026-11-01', '3163.2', '3163.2', 'null', '2047.25', '1115.95', '203608.6', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1NOVIEMBRE 2026', 'null', 'null', 'null', 'null'),
(77, '77', '2026-12-01', '3163.2', '3163.2', 'null', '2036.09', '1127.11', '202481.48', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1DICIEMBRE 2026', 'null', 'null', 'null', 'null'),
(78, '78', '2027-01-01', '3163.2', '3163.2', 'null', '2024.81', '1138.39', '201343.1', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ENERO 2027', 'null', 'null', 'null', 'null'),
(79, '79', '2027-02-01', '3163.2', '3163.2', 'null', '2013.43', '1149.77', '200193.33', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1FEBRERO 2027', 'null', 'null', 'null', 'null'),
(80, '80', '2027-03-01', '3163.2', '3163.2', 'null', '2001.93', '1161.27', '199032.06', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MARZO 2027', 'null', 'null', 'null', 'null'),
(81, '81', '2027-04-01', '3163.2', '3163.2', 'null', '1990.32', '1172.88', '197859.18', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ABRIL 2027', 'null', 'null', 'null', 'null'),
(82, '82', '2027-05-01', '3163.2', '3163.2', 'null', '1978.59', '1184.61', '196674.57', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MAYO 2027', 'null', 'null', 'null', 'null'),
(83, '83', '2027-06-01', '3163.2', '3163.2', 'null', '1966.75', '1196.45', '195478.12', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JUNIO 2027', 'null', 'null', 'null', 'null'),
(84, '84', '2027-07-01', '3163.2', '3163.2', 'null', '1954.78', '1208.42', '194269.7', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JULIO 2027', 'null', 'null', 'null', 'null'),
(85, '85', '2027-08-01', '3163.2', '3163.2', 'null', '1942.7', '1220.5', '193049.2', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1AGOSTO 2027', 'null', 'null', 'null', 'null'),
(86, '86', '2027-09-01', '3163.2', '3163.2', 'null', '1930.49', '1232.71', '191816.49', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1SEPTIEMBRE 2027', 'null', 'null', 'null', 'null'),
(87, '87', '2027-10-01', '3163.2', '3163.2', 'null', '1918.16', '1245.04', '190571.45', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1OCTUBRE 2027', 'null', 'null', 'null', 'null'),
(88, '88', '2027-11-01', '3163.2', '3163.2', 'null', '1905.71', '1257.49', '189313.97', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1NOVIEMBRE 2027', 'null', 'null', 'null', 'null'),
(89, '89', '2027-12-01', '3163.2', '3163.2', 'null', '1893.14', '1270.06', '188043.91', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1DICIEMBRE 2027', 'null', 'null', 'null', 'null'),
(90, '90', '2028-01-01', '3163.2', '3163.2', 'null', '1880.44', '1282.76', '186761.15', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ENERO 2028', 'null', 'null', 'null', 'null'),
(91, '91', '2028-02-01', '3163.2', '3163.2', 'null', '1867.61', '1295.59', '185465.56', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1FEBRERO 2028', 'null', 'null', 'null', 'null'),
(92, '92', '2028-03-01', '3163.2', '3163.2', 'null', '1854.66', '1308.54', '184157.01', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MARZO 2028', 'null', 'null', 'null', 'null'),
(93, '93', '2028-04-01', '3163.2', '3163.2', 'null', '1841.57', '1321.63', '182835.38', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ABRIL 2028', 'null', 'null', 'null', 'null'),
(94, '94', '2028-05-01', '3163.2', '3163.2', 'null', '1828.35', '1334.85', '181500.54', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MAYO 2028', 'null', 'null', 'null', 'null'),
(95, '95', '2028-06-01', '3163.2', '3163.2', 'null', '1815.01', '1348.19', '180152.34', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JUNIO 2028', 'null', 'null', 'null', 'null'),
(96, '96', '2028-07-01', '3163.2', '3163.2', 'null', '1801.52', '1361.68', '178790.67', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JULIO 2028', 'null', 'null', 'null', 'null'),
(97, '97', '2028-08-01', '3163.2', '3163.2', 'null', '1787.91', '1375.29', '177415.37', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1AGOSTO 2028', 'null', 'null', 'null', 'null'),
(98, '98', '2028-09-01', '3163.2', '3163.2', 'null', '1774.15', '1389.05', '176026.33', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1SEPTIEMBRE 2028', 'null', 'null', 'null', 'null'),
(99, '99', '2028-10-01', '3163.2', '3163.2', 'null', '1760.26', '1402.94', '174623.39', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1OCTUBRE 2028', 'null', 'null', 'null', 'null'),
(100, '100', '2028-11-01', '3163.2', '3163.2', 'null', '1746.23', '1416.97', '173206.42', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1NOVIEMBRE 2028', 'null', 'null', 'null', 'null'),
(101, '101', '2028-12-01', '3163.2', '3163.2', 'null', '1732.06', '1431.14', '171775.29', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1DICIEMBRE 2028', 'null', 'null', 'null', 'null'),
(102, '102', '2029-01-01', '3163.2', '3163.2', 'null', '1717.75', '1445.45', '170329.84', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ENERO 2029', 'null', 'null', 'null', 'null'),
(103, '103', '2029-02-01', '3163.2', '3163.2', 'null', '1703.3', '1459.9', '168869.94', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1FEBRERO 2029', 'null', 'null', 'null', 'null'),
(104, '104', '2029-03-01', '3163.2', '3163.2', 'null', '1688.7', '1474.5', '167395.44', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MARZO 2029', 'null', 'null', 'null', 'null'),
(105, '105', '2029-04-01', '3163.2', '3163.2', 'null', '1673.95', '1489.25', '165906.19', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ABRIL 2029', 'null', 'null', 'null', 'null'),
(106, '106', '2029-05-01', '3163.2', '3163.2', 'null', '1659.06', '1504.14', '164402.06', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MAYO 2029', 'null', 'null', 'null', 'null'),
(107, '107', '2029-06-01', '3163.2', '3163.2', 'null', '1644.02', '1519.18', '162882.88', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JUNIO 2029', 'null', 'null', 'null', 'null'),
(108, '108', '2029-07-01', '3163.2', '3163.2', 'null', '1628.83', '1534.37', '161348.5', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JULIO 2029', 'null', 'null', 'null', 'null'),
(109, '109', '2029-08-01', '3163.2', '3163.2', 'null', '1613.49', '1549.71', '159798.79', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1AGOSTO 2029', 'null', 'null', 'null', 'null'),
(110, '110', '2029-09-01', '3163.2', '3163.2', 'null', '1597.99', '1565.21', '158233.58', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1SEPTIEMBRE 2029', 'null', 'null', 'null', 'null'),
(111, '111', '2029-10-01', '3163.2', '3163.2', 'null', '1582.34', '1580.86', '156652.71', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1OCTUBRE 2029', 'null', 'null', 'null', 'null'),
(112, '112', '2029-11-01', '3163.2', '3163.2', 'null', '1566.53', '1596.67', '155056.04', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1NOVIEMBRE 2029', 'null', 'null', 'null', 'null'),
(113, '113', '2029-12-01', '3163.2', '3163.2', 'null', '1550.56', '1612.64', '153443.4', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1DICIEMBRE 2029', 'null', 'null', 'null', 'null'),
(114, '114', '1930-01-01', '3163.2', '3163.2', 'null', '1534.43', '1628.77', '151814.64', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ENERO 2030', 'null', 'null', 'null', 'null'),
(115, '115', '1930-02-01', '3163.2', '3163.2', 'null', '1518.15', '1645.05', '150169.58', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1FEBRERO 2030', 'null', 'null', 'null', 'null'),
(116, '116', '1930-03-01', '3163.2', '3163.2', 'null', '1501.7', '1661.5', '148508.08', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MARZO 2030', 'null', 'null', 'null', 'null'),
(117, '117', '1930-04-01', '3163.2', '3163.2', 'null', '1485.08', '1678.12', '146829.96', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1ABRIL 2030', 'null', 'null', 'null', 'null'),
(118, '118', '1930-05-01', '3163.2', '3163.2', 'null', '1468.3', '1694.9', '145135.06', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1MAYO 2030', 'null', 'null', 'null', 'null'),
(119, '119', '1930-06-01', '3163.2', '3163.2', 'null', '1451.35', '1711.85', '143423.21', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JUNIO 2030', 'null', 'null', 'null', 'null'),
(120, '120', '1930-07-01', '3163.2', '3163.2', 'null', '1434.23', '1728.97', '141694.24', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.01', '7ESTEPA 1JULIO 2030', 'null', 'null', 'null', 'null'),
(121, '121', '1930-08-01', '3382.97', '3382.97', 'null', '1771.18', '1611.79', '140082.45', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1AGOSTO 2030', 'null', 'null', 'null', 'null'),
(122, '122', '1930-09-01', '3382.97', '3382.97', 'null', '1751.03', '1631.94', '138450.51', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1SEPTIEMBRE 2030', 'null', 'null', 'null', 'null'),
(123, '123', '1930-10-01', '3382.97', '3382.97', 'null', '1730.63', '1652.34', '136798.17', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1OCTUBRE 2030', 'null', 'null', 'null', 'null'),
(124, '124', '1930-11-01', '3382.97', '3382.97', 'null', '1709.98', '1672.99', '135125.18', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1NOVIEMBRE 2030', 'null', 'null', 'null', 'null'),
(125, '125', '1930-12-01', '3382.97', '3382.97', 'null', '1689.06', '1693.91', '133431.27', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1DICIEMBRE 2030', 'null', 'null', 'null', 'null'),
(126, '126', '1931-01-01', '3382.97', '3382.97', 'null', '1667.89', '1715.08', '131716.19', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ENERO 2031', 'null', 'null', 'null', 'null'),
(127, '127', '1931-02-01', '3382.97', '3382.97', 'null', '1646.45', '1736.52', '129979.68', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1FEBRERO 2031', 'null', 'null', 'null', 'null'),
(128, '128', '1931-03-01', '3382.97', '3382.97', 'null', '1624.75', '1758.22', '128221.45', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MARZO 2031', 'null', 'null', 'null', 'null'),
(129, '129', '1931-04-01', '3382.97', '3382.97', 'null', '1602.77', '1780.2', '126441.25', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ABRIL 2031', 'null', 'null', 'null', 'null'),
(130, '130', '1931-05-01', '3382.97', '3382.97', 'null', '1580.52', '1802.45', '124638.8', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MAYO 2031', 'null', 'null', 'null', 'null'),
(131, '131', '1931-06-01', '3382.97', '3382.97', 'null', '1557.98', '1824.99', '122813.81', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JUNIO 2031', 'null', 'null', 'null', 'null'),
(132, '132', '1931-07-01', '3382.97', '3382.97', 'null', '1535.17', '1847.8', '120966.01', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JULIO 2031', 'null', 'null', 'null', 'null'),
(133, '133', '1931-08-01', '3382.97', '3382.97', 'null', '1512.08', '1870.89', '119095.12', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1AGOSTO 2031', 'null', 'null', 'null', 'null'),
(134, '134', '1931-09-01', '3382.97', '3382.97', 'null', '1488.69', '1894.28', '117200.84', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1SEPTIEMBRE 2031', 'null', 'null', 'null', 'null'),
(135, '135', '1931-10-01', '3382.97', '3382.97', 'null', '1465.01', '1917.96', '115282.88', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1OCTUBRE 2031', 'null', 'null', 'null', 'null'),
(136, '136', '1931-11-01', '3382.97', '3382.97', 'null', '1441.04', '1941.93', '113340.94', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1NOVIEMBRE 2031', 'null', 'null', 'null', 'null'),
(137, '137', '1931-12-01', '3382.97', '3382.97', 'null', '1416.76', '1966.21', '111374.74', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1DICIEMBRE 2031', 'null', 'null', 'null', 'null'),
(138, '138', '1932-01-01', '3382.97', '3382.97', 'null', '1392.18', '1990.79', '109383.95', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ENERO 2032', 'null', 'null', 'null', 'null'),
(139, '139', '1932-02-01', '3382.97', '3382.97', 'null', '1367.3', '2015.67', '107368.28', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1FEBRERO 2032', 'null', 'null', 'null', 'null'),
(140, '140', '1932-03-01', '3382.97', '3382.97', 'null', '1342.1', '2040.87', '105327.41', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MARZO 2032', 'null', 'null', 'null', 'null'),
(141, '141', '1932-04-01', '3382.97', '3382.97', 'null', '1316.59', '2066.38', '103261.03', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ABRIL 2032', 'null', 'null', 'null', 'null'),
(142, '142', '1932-05-01', '3382.97', '3382.97', 'null', '1290.76', '2092.21', '101168.83', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MAYO 2032', 'null', 'null', 'null', 'null'),
(143, '143', '1932-06-01', '3382.97', '3382.97', 'null', '1264.61', '2118.36', '99050.47', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JUNIO 2032', 'null', 'null', 'null', 'null'),
(144, '144', '1932-07-01', '3382.97', '3382.97', 'null', '1238.13', '2144.84', '96905.63', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JULIO 2032', 'null', 'null', 'null', 'null'),
(145, '145', '1932-08-01', '3382.97', '3382.97', 'null', '1211.32', '2171.65', '94733.98', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1AGOSTO 2032', 'null', 'null', 'null', 'null'),
(146, '146', '1932-09-01', '3382.97', '3382.97', 'null', '1184.17', '2198.8', '92535.18', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1SEPTIEMBRE 2032', 'null', 'null', 'null', 'null'),
(147, '147', '1932-10-01', '3382.97', '3382.97', 'null', '1156.69', '2226.28', '90308.9', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1OCTUBRE 2032', 'null', 'null', 'null', 'null'),
(148, '148', '1932-11-01', '3382.97', '3382.97', 'null', '1128.86', '2254.11', '88054.8', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1NOVIEMBRE 2032', 'null', 'null', 'null', 'null'),
(149, '149', '1932-12-01', '3382.97', '3382.97', 'null', '1100.68', '2282.29', '85772.51', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1DICIEMBRE 2032', 'null', 'null', 'null', 'null'),
(150, '150', '1933-01-01', '3382.97', '3382.97', 'null', '1072.16', '2310.81', '83461.7', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ENERO 2033', 'null', 'null', 'null', 'null'),
(151, '151', '1933-02-01', '3382.97', '3382.97', 'null', '1043.27', '2339.7', '81122.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1FEBRERO 2033', 'null', 'null', 'null', 'null'),
(152, '152', '1933-03-01', '3382.97', '3382.97', 'null', '1014.02', '2368.95', '78753.05', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MARZO 2033', 'null', 'null', 'null', 'null'),
(153, '153', '1933-04-01', '3382.97', '3382.97', 'null', '984.41', '2398.56', '76354.5', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ABRIL 2033', 'null', 'null', 'null', 'null'),
(154, '154', '1933-05-01', '3382.97', '3382.97', 'null', '954.43', '2428.54', '73925.96', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MAYO 2033', 'null', 'null', 'null', 'null'),
(155, '155', '1933-06-01', '3382.97', '3382.97', 'null', '924.07', '2458.9', '71467.06', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JUNIO 2033', 'null', 'null', 'null', 'null'),
(156, '156', '1933-07-01', '3382.97', '3382.97', 'null', '893.34', '2489.63', '68977.43', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JULIO 2033', 'null', 'null', 'null', 'null'),
(157, '157', '1933-08-01', '3382.97', '3382.97', 'null', '862.22', '2520.75', '66456.68', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1AGOSTO 2033', 'null', 'null', 'null', 'null'),
(158, '158', '1933-09-01', '3382.97', '3382.97', 'null', '830.71', '2552.26', '63904.42', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1SEPTIEMBRE 2033', 'null', 'null', 'null', 'null'),
(159, '159', '1933-10-01', '3382.97', '3382.97', 'null', '798.81', '2584.16', '61320.25', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1OCTUBRE 2033', 'null', 'null', 'null', 'null'),
(160, '160', '1933-11-01', '3382.97', '3382.97', 'null', '766.5', '2616.47', '58703.78', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1NOVIEMBRE 2033', 'null', 'null', 'null', 'null'),
(161, '161', '1933-12-01', '3382.97', '3382.97', 'null', '733.8', '2649.17', '56054.61', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1DICIEMBRE 2033', 'null', 'null', 'null', 'null'),
(162, '162', '1934-01-01', '3382.97', '3382.97', 'null', '700.68', '2682.29', '53372.32', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ENERO 2034', 'null', 'null', 'null', 'null'),
(163, '163', '1934-02-01', '3382.97', '3382.97', 'null', '667.15', '2715.82', '50656.51', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1FEBRERO 2034', 'null', 'null', 'null', 'null'),
(164, '164', '1934-03-01', '3382.97', '3382.97', 'null', '633.21', '2749.76', '47906.74', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MARZO 2034', 'null', 'null', 'null', 'null'),
(165, '165', '1934-04-01', '3382.97', '3382.97', 'null', '598.83', '2784.14', '45122.61', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ABRIL 2034', 'null', 'null', 'null', 'null'),
(166, '166', '1934-05-01', '3382.97', '3382.97', 'null', '564.03', '2818.94', '42303.67', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MAYO 2034', 'null', 'null', 'null', 'null'),
(167, '167', '1934-06-01', '3382.97', '3382.97', 'null', '528.8', '2854.17', '39449.5', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JUNIO 2034', 'null', 'null', 'null', 'null'),
(168, '168', '1934-07-01', '3382.97', '3382.97', 'null', '493.12', '2889.85', '36559.65', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JULIO 2034', 'null', 'null', 'null', 'null'),
(169, '169', '1934-08-01', '3382.97', '3382.97', 'null', '457.0', '2925.97', '33633.67', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1AGOSTO 2034', 'null', 'null', 'null', 'null'),
(170, '170', '1934-09-01', '3382.97', '3382.97', 'null', '420.42', '2962.55', '30671.12', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1SEPTIEMBRE 2034', 'null', 'null', 'null', 'null'),
(171, '171', '1934-10-01', '3382.97', '3382.97', 'null', '383.39', '2999.58', '27671.54', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1OCTUBRE 2034', 'null', 'null', 'null', 'null'),
(172, '172', '1934-11-01', '3382.97', '3382.97', 'null', '345.89', '3037.08', '24634.47', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1NOVIEMBRE 2034', 'null', 'null', 'null', 'null'),
(173, '173', '1934-12-01', '3382.97', '3382.97', 'null', '307.93', '3075.04', '21559.43', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1DICIEMBRE 2034', 'null', 'null', 'null', 'null'),
(174, '174', '1935-01-01', '3382.97', '3382.97', 'null', '269.49', '3113.48', '18445.95', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ENERO 2035', 'null', 'null', 'null', 'null'),
(175, '175', '1935-02-01', '3382.97', '3382.97', 'null', '230.57', '3152.4', '15293.55', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1FEBRERO 2035', 'null', 'null', 'null', 'null'),
(176, '176', '1935-03-01', '3382.97', '3382.97', 'null', '191.17', '3191.8', '12101.75', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MARZO 2035', 'null', 'null', 'null', 'null'),
(177, '177', '1935-04-01', '3382.97', '3382.97', 'null', '151.27', '3231.7', '8870.06', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1ABRIL 2035', 'null', 'null', 'null', 'null'),
(178, '178', '1935-05-01', '3382.97', '3382.97', 'null', '110.88', '3272.09', '5597.96', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1MAYO 2035', 'null', 'null', 'null', 'null'),
(179, '179', '1935-06-01', '3382.97', '3382.97', 'null', '69.97', '3313.0', '2284.97', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JUNIO 2035', 'null', 'null', 'null', 'null'),
(180, '180', '1935-07-01', '2313.53', '2313.53', 'null', '28.56', '2284.97', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0.0125', '7ESTEPA 1JULIO 2035', 'null', 'null', 'null', 'null'),
(181, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(182, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(183, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(184, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(185, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(186, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(187, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(188, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(189, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(190, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(191, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(192, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(193, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(194, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(195, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(196, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(197, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(198, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(199, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(200, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(201, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(202, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(203, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(204, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(205, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(206, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(207, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(208, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(209, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(210, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(211, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(212, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(213, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(214, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(215, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(216, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(217, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(218, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(219, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(220, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(221, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(222, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(223, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(224, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(225, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(226, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(227, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(228, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `tabulador_habitta` (`id`, `periodo`, `fecha`, `mensualidad`, `pagado`, `fecha_pago`, `interesfinanciamiento`, `abono_capital`, `saldo_final`, `int_gen`, `int_int`, `int_acum_mora`, `int_neg`, `int_pagado`, `estatus`, `observacion`, `debe_interes`, `indicador_fecha`, `porcent_int`, `llave2`, `mens_adeu`, `calc_sobre`, `monto_int_mor`, `suma_deuda`) VALUES
(229, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(230, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(231, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(232, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(233, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(234, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(235, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(236, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(237, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(238, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(239, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(240, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(241, 'Total', 'null', 'null', 'null', 'null', 'null', '315360.0', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabulador_habitta`
--
ALTER TABLE `tabulador_habitta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabulador_habitta`
--
ALTER TABLE `tabulador_habitta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

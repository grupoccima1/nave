-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.2
-- Tiempo de generación: 18-01-2024 a las 20:34:12
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
-- Estructura de tabla para la tabla `acumuladosherpa_habitta`
--

CREATE TABLE `acumuladosherpa_habitta` (
  `id` int(11) NOT NULL,
  `llave` longtext DEFAULT NULL,
  `fecha_de_ingreso` longtext DEFAULT NULL,
  `lote` int(11) DEFAULT NULL,
  `condominio` longtext DEFAULT NULL,
  `cluster` longtext DEFAULT NULL,
  `desarrollo` longtext DEFAULT NULL,
  `puesto` longtext DEFAULT NULL,
  `comisionista` longtext DEFAULT NULL,
  `total_de_la_venta` int(11) DEFAULT NULL,
  `enganche` int(11) DEFAULT NULL,
  `p_comision` double DEFAULT NULL,
  `total_comision` double DEFAULT NULL,
  `descuento` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `a_pagar_externos` double DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `retenciones_de_iva` int(11) DEFAULT NULL,
  `retenciones_isr` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `pago` double DEFAULT NULL,
  `notas` longtext DEFAULT NULL,
  `pagado` int(11) DEFAULT NULL,
  `metodo_de_pago` longtext DEFAULT NULL,
  `fecha_pagada` longtext DEFAULT NULL,
  `nombre_correcto` longtext DEFAULT NULL,
  `semana_pagada` int(11) DEFAULT NULL,
  `semana` int(11) DEFAULT NULL,
  `x_tipo_de_regimen` longtext DEFAULT NULL,
  `cuenta` longtext DEFAULT NULL,
  `motivo_de_descuento` longtext DEFAULT NULL,
  `estatus` longtext DEFAULT NULL,
  `lote_anterior` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acumuladosherpa_habitta`
--

INSERT INTO `acumuladosherpa_habitta` (`id`, `llave`, `fecha_de_ingreso`, `lote`, `condominio`, `cluster`, `desarrollo`, `puesto`, `comisionista`, `total_de_la_venta`, `enganche`, `p_comision`, `total_comision`, `descuento`, `desc`, `a_pagar_externos`, `subtotal`, `iva`, `retenciones_de_iva`, `retenciones_isr`, `total`, `pago`, `notas`, `pagado`, `metodo_de_pago`, `fecha_pagada`, `nombre_correcto`, `semana_pagada`, `semana`, `x_tipo_de_regimen`, `cuenta`, `motivo_de_descuento`, `estatus`, `lote_anterior`) VALUES
(1, '2NAVETEC', '2020-09-28', 2, 'NAVETEC', 'null', 'NAVETEC', 'ASESOR', 'MA. DEL ROCÍO GUZMÁN ESQUEDA', 0, 0, 0, 159201.24, 'null', 'null', 159201.24, 0, 0, 0, 0, 0, 159201.24, '24DESIERTO 4', 159201, 'BONO DE TIERRA', '2020-09-28', 'MA. DEL ROCÍO GUZMÁN ESQUEDA', 40, 40, 'null', 'HSBC HABITTA 2020', 'null', 'null', 'null'),
(2, '1NAVETEC', '2021-06-25', 1, 'NAVETEC', 'null', 'NAVETEC', 'DVN', 'IMELDA BERENICE ALCIBAR HACHO', 0, 0, 0, 41104.28, 'null', 'null', 41104.28, 0, 0, 0, 0, 0, 41104.28, '80PARAMO 2', 41104, 'BONO DE TIERRA', '2021-06-25', 'IMELDA BERENICE ALCIBAR HACHO', 26, 26, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(3, '11PARAMO 3', '2021-07-20', 11, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 604800, 0, 0.005, 3024, 'null', 'null', 3024, 0, 0, 0, 0, 0, 3024, 'PRESTAMO', 3024, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(4, '26PARAMO 3', '2021-07-20', 26, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 604800, 0, 0.005, 3024, 'null', 'null', 3024, 0, 0, 0, 0, 0, 3024, 'PRESTAMO', 3024, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(5, '27PARAMO 3', '2021-07-20', 27, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 604800, 0, 0.005, 3024, 'null', 'null', 3024, 0, 0, 0, 0, 0, 3024, 'PRESTAMO', 3024, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(6, '17SABINO', '2021-07-20', 17, 'SABINO', 'null', 'VEREDAS', 'DVN', 'KARINA PAOLA GUSI TORRES', 272160, 0, 0.005, 1360.8, 'null', 'null', 1360.8, 0, 0, 0, 0, 0, 1360.8, 'PRESTAMO', 1360, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(7, '28TAIGA 2', '2021-07-20', 28, 'TAIGA', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 702052, 0, 0.005, 3510.264, 'null', 'null', 3510.264, 0, 0, 0, 0, 0, 3510.264, 'PRESTAMO', 3510, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(8, '24PARAMO 3', '2021-07-20', 24, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 604800, 0, 0.005, 3024, 'null', 'null', 3024, 0, 0, 0, 0, 0, 3024, 'PRESTAMO', 3024, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(9, '58DESIERTO 3', '2021-07-20', 58, 'DESIERTO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 1102442, 0, 0.005, 5512.21145, 'null', 'null', 5512.21145, 0, 0, 0, 0, 0, 5512.21145, 'PRESTAMO', 5512, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(10, '17TAIGA 1', '2021-07-20', 17, 'TAIGA', '1', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 534897, 0, 0.005, 2674.4896, 'null', 'null', 2674.4896, 0, 0, 0, 0, 0, 2674.4896, 'PRESTAMO', 2674, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(11, '50PARAMO 3', '2021-07-20', 50, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 537600, 0, 0.005, 2688, 'null', 'null', 2688, 0, 0, 0, 0, 0, 2688, 'PRESTAMO', 2688, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(12, '51PARAMO 3', '2021-07-20', 51, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 537600, 0, 0.005, 2688, 'null', 'null', 2688, 0, 0, 0, 0, 0, 2688, 'PRESTAMO', 2688, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(13, '92PARAMO 3', '2021-07-20', 92, 'PARAMO', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 705000, 0, 0.005, 3525, 'null', 'null', 3525, 0, 0, 0, 0, 0, 3525, 'PRESTAMO', 3525, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(14, '21PARAMO 2', '2021-07-20', 21, 'PARAMO', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 430080, 0, 0.005, 2150.4, 'null', 'null', 2150.4, 0, 0, 0, 0, 0, 2150.4, 'PRESTAMO', 2150, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(15, '5PARAMO 1', '2021-07-20', 5, 'PARAMO', '1', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 470400, 0, 0.005, 2352, 'null', 'null', 2352, 0, 0, 0, 0, 0, 2352, 'PRESTAMO', 2352, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'LIBERADO', 'null'),
(16, '39TAIGA 2', '2021-07-20', 39, 'TAIGA', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 623833, 0, 0.005, 3119.1675, 'null', 'null', 3119.1675, 0, 0, 0, 0, 0, 3119.1675, 'PRESTAMO', 3119, 'TRANSFERENCIA', '2021-04-30', 'KARINA PAOLA GUSI TORRES', 18, 30, 'null', 'EXTERNA', 'null', 'null', 'null'),
(17, '26PARAMO 3', '2021-07-20', 26, 'PARAMO', '3', 'PORTTO BLANCO', 'GERENTE', 'ALEJANDRA JIMENEZ CAMPOS', 604800, 0, 0.01, 6048, 'null', 'null', 6048, 0, 0, 0, 0, 0, 6048, '11PARAMO 3', 6048, 'BONO DE TIERRA', '2021-07-20', 'ALEJANDRA JIMENEZ GARCIA', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(18, '27PARAMO 3', '2021-07-20', 27, 'PARAMO', '3', 'PORTTO BLANCO', 'GERENTE', 'ALEJANDRA JIMENEZ CAMPOS', 604800, 0, 0.01, 6048, 'null', 'null', 6048, 0, 0, 0, 0, 0, 6048, '11PARAMO 3', 6048, 'BONO DE TIERRA', '2021-07-20', 'ALEJANDRA JIMENEZ GARCIA', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(19, '28TAIGA 2', '2021-07-20', 28, 'TAIGA', '2', 'PORTTO BLANCO', 'GERENTE', 'EDUARDO RAMÍREZ PERRUSQUIA', 702052, 0, 0.01, 7020.528, 'null', 'null', 7020.528, 0, 0, 0, 0, 0, 7020.528, '17SABINO', 7020, 'BONO DE TIERRA', '2021-07-20', 'EDUARDO RAMIREZ PERUSQUIA', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(20, '24PARAMO 3', '2021-07-20', 24, 'PARAMO', '3', 'PORTTO BLANCO', 'GERENTE', 'LILIA CRICLIVSCAIA', 604800, 0, 0.01, 6048, 'null', 'null', 6048, 0, 0, 0, 0, 0, 6048, 'null', 0, 'null', '2021-07-20', 'LILIA CRICLIVSCAIA', 0, 30, 'null', 'null', 'null', 'null', 'null'),
(21, '58DESIERTO 3', '2021-07-20', 58, 'DESIERTO', '3', 'PORTTO BLANCO', 'GERENTE', 'MARÍA ASCENCIÓN LUGO URIBE', 1102442, 0, 0.01, 11024.4229, 'null', 'null', 11024.4229, 0, 0, 0, 0, 0, 11024.4229, '92PARAMO 3', 11024, 'BONO DE TIERRA', '2021-07-20', 'MARIA ASCENCIÓN LUGO URIBE', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(22, '17TAIGA 1', '2021-07-20', 17, 'TAIGA', '1', 'PORTTO BLANCO', 'GERENTE', 'MARÍA ASCENCIÓN LUGO URIBE', 534897, 0, 0.01, 5348.9792, 'null', 'null', 5348.9792, 0, 0, 0, 0, 0, 5348.9792, '92PARAMO 3', 5348, 'BONO DE TIERRA', '2021-07-20', 'MARIA ASCENCIÓN LUGO URIBE', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(23, '50PARAMO 3', '2021-07-20', 50, 'PARAMO', '3', 'PORTTO BLANCO', 'GERENTE', 'MARÍA ASCENCIÓN LUGO URIBE', 537600, 0, 0.01, 5376, 'null', 'null', 5376, 0, 0, 0, 0, 0, 5376, '92PARAMO 3', 5376, 'BONO DE TIERRA', '2021-07-20', 'MARIA ASCENCIÓN LUGO URIBE', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(24, '51PARAMO 3', '2021-07-20', 51, 'PARAMO', '3', 'PORTTO BLANCO', 'GERENTE', 'MARÍA ASCENCIÓN LUGO URIBE', 537600, 0, 0.01, 5376, 'null', 'null', 5376, 0, 0, 0, 0, 0, 5376, '92PARAMO 3', 5376, 'BONO DE TIERRA', '2021-07-20', 'MARIA ASCENCIÓN LUGO URIBE', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(25, '21PARAMO 2', '2021-07-20', 21, 'PARAMO', '2', 'PORTTO BLANCO', 'GERENTE', 'LUIS EDUARDO NÚÑEZ SILVA', 430080, 0, 0.01, 4300.8, 'null', 'null', 4300.8, 0, 0, 0, 0, 0, 4300.8, '92 PARAMO 3', 4300, 'BONO DE TIERRA', '2021-07-20', 'LUIS EDUARDO NUÑEZ SILVA', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(26, '5PARAMO 1', '2021-07-20', 5, 'PARAMO', '1', 'PORTTO BLANCO', 'GERENTE', 'RICARGO GUZMÁN ESQUEDA', 470400, 0, 0.01, 4704, 'null', 'null', 4704, 0, 0, 0, 0, 0, 4704, '41DESIERTO 3', 4704, 'BONO DE TIERRA', '2021-07-20', 'RICARDO GUZMAN RIVERA', 30, 30, 'null', 'HSBC HABITTA 2021', 'null', 'LIBERADO', 'null'),
(27, '39TAIGA 2', '2021-07-20', 39, 'TAIGA', '2', 'PORTTO BLANCO', 'GERENTE', 'TOMÁS MURPHY', 623833, 0, 0.01, 6238.335, 'null', 'null', 6238.335, 0, 0, 0, 0, 0, 6238.335, 'null', 0, 'null', '2021-07-20', 'TOMAS MURPHY RUIZ', 0, 30, 'null', 'null', 'null', 'null', 'null'),
(28, '3BOSQUE 1', '2021-09-17', 3, 'BOSQUE', '1', 'PORTTO BLANCO', 'GERENTE', 'ALBERTO LOSADA GARCÍA', 522547, 41803, 0.01, 5225.472, 'null', 'null', 5225.472, 0, 0, 0, 0, 0, 5225.472, 'null', 0, 'null', '2021-07-20', 'ALBERTO LOSADA GARCÍA', 0, 38, 'null', 'null', 'null', 'null', 'null'),
(29, '3BOSQUE 1', '2021-09-17', 3, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'ANTONIO PEÑA QUINTANA', 522547, 41803, 0.005, 2612.736, 'null', 'null', 2612.736, 0, 0, 0, 0, 0, 2612.736, 'null', 0, 'null', '2021-07-20', 'ANTONIO PEÑA QUINTANA', 0, 38, 'null', 'null', 'null', 'null', 'null'),
(30, '3BOSQUE 1', '2021-09-17', 3, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'MARIA REMEDIOS GONZÁLEZ ARGUETA', 522547, 41803, 0.005, 2612.736, 'null', 'null', 2612.736, 0, 0, 0, 0, 0, 2612.736, 'null', 0, 'null', '2021-07-20', 'MARIA REMEDIOS GONZÁLEZ ARGUETA', 0, 38, 'null', 'null', 'null', 'null', 'null'),
(31, '3BOSQUE 1', '2021-09-17', 3, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 522547, 41803, 0.005, 2612.736, 'null', 'null', 2612.736, 0, 0, 0, 0, 0, 2612.736, 'PRESTAMO', 2612, 'TRANSFERENCIA', '2021-09-17', 'KARINA PAOLA GUSI TORRES', 38, 38, 'null', 'EXTERNA', 'null', 'null', 'null'),
(32, '38SELVA 2', '2021-09-24', 38, 'SELVA', '2', 'PORTTO BLANCO', 'GERENTE', 'ALEJANDRA JIMENEZ GARCIA', 552960, 44236, 0.01, 5529.6, 'null', 'null', 5529.6, 0, 0, 0, 0, 0, 5529.6, '11PARAMO 3', 5529, 'BONO DE TIERRA', '2021-09-24', 'ALEJANDRA JIMENEZ GARCIA', 39, 39, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(33, '38SELVA 2', '2021-09-24', 38, 'SELVA', '2', 'PORTTO BLANCO', 'DVR', 'LUIS EDUARDO NUÑEZ SILVA', 552960, 44236, 0.005, 2764.8, 'null', 'null', 2764.8, 0, 0, 0, 0, 0, 2764.8, '92PARAMO 3', 2764, 'BONO DE TIERRA', '2021-09-24', 'LUIS EDUARDO NUÑEZ SILVA', 39, 39, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(34, '38SELVA 2', '2021-09-24', 38, 'SELVA', '2', 'PORTTO BLANCO', 'DVR', 'LILIA CRICLIVSCAIA', 552960, 44236, 0.005, 2764.8, 'null', 'null', 2764.8, 0, 0, 0, 0, 0, 2764.8, 'null', 0, 'null', '2021-09-24', 'LILIA CRICLIVSCAIA', 0, 39, 'null', 'null', 'null', 'null', 'null'),
(35, '38SELVA 2', '2021-09-24', 38, 'SELVA', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 552960, 44236, 0.005, 2764.8, 'null', 'null', 2764.8, 0, 0, 0, 0, 0, 2764.8, 'PRESTAMO', 2764, 'TRANSFERENCIA', '2021-09-24', 'KARINA PAOLA GUSI TORRES', 39, 39, 'null', 'EXTERNA', 'null', 'null', 'null'),
(36, '82BOSQUE 1', '2021-10-15', 82, 'BOSQUE', '1', 'PORTTO BLANCO', 'GERENTE', 'ALINE JOYCE CHAPARRO HERRERA', 548467, 43877, 0.01, 5484.672, 'null', 'null', 5484.672, 0, 0, 0, 0, 0, 5484.672, 'null', 0, 'null', '2021-09-24', 'ALINE JOYCE CHAPARRO HERRERA', 0, 42, 'null', 'null', 'null', 'null', 'null'),
(37, '82BOSQUE 1', '2021-10-15', 82, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'GUSTAVO ALONSO VILLAGARCIA BAUTISTA', 548467, 43877, 0.005, 2742.336, 'null', 'null', 2742.336, 0, 0, 0, 0, 0, 2742.336, 'null', 0, 'null', '2021-09-24', 'GUSTAVO VILLAGARCIA', 0, 42, 'null', 'null', 'null', 'null', 'null'),
(38, '82BOSQUE 1', '2021-10-15', 82, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 548467, 43877, 0.005, 2742.336, 'null', 'null', 2742.336, 0, 0, 0, 0, 0, 2742.336, '28BOSQUE 3', 2742, 'BONO DE TIERRA', '2022-04-26', 'ALEJANDRO LEON', 18, 42, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(39, '82BOSQUE 1', '2021-10-15', 82, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 548467, 43877, 0.005, 2742.336, 'null', 'null', 2742.336, 0, 0, 0, 0, 0, 2742.336, '108LAGO 1', 2742, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 42, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(40, '80TAMUL 2', '2021-11-17', 80, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'GERENTE', 'ALEJANDRA JIMENEZ GARCIA', 357700, 0, 0.01, 3577, 'null', 'null', 3577, 0, 0, 0, 0, 0, 3577, '11PARAMO 3', 3577, 'BONO DE TIERRA', '2021-11-17', 'ALEJANDRA JIMENEZ GARCIA', 47, 47, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(41, '80TAMUL 2', '2021-11-17', 80, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'DVR', 'LUIS EDUARDO NUÑEZ SILVA', 357700, 0, 0.005, 1788.5, 'null', 'null', 1788.5, 0, 0, 0, 0, 0, 1788.5, '92PARAMO 3', 1788, 'BONO DE TIERRA', '2021-11-17', 'LUIS EDUARDO NUÑEZ SILVA', 47, 47, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(42, '80TAMUL 2', '2021-11-17', 80, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'DVR', 'LILIA CRICLIVSCAIA', 357700, 0, 0.005, 1788.5, 'null', 'null', 1788.5, 0, 0, 0, 0, 0, 1788.5, 'null', 0, 'null', '2021-11-17', 'LILIA CRICLIVSCAIA', 0, 47, 'null', 'null', 'null', 'null', 'null'),
(43, '80TAMUL 2', '2021-11-17', 80, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'DVN', 'KARINA PAOLA GUSI TORRES', 357700, 0, 0.005, 1788.5, 'null', 'null', 1788.5, 0, 0, 0, 0, 0, 1788.5, '108LAGO 1', 1788, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 47, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(44, '85TAMUL 2', '2021-11-17', 85, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'GERENTE', 'ALEJANDRA JIMENEZ GARCIA', 390474, 0, 0.01, 3904.7426, 'null', 'null', 3904.7426, 0, 0, 0, 0, 0, 3904.7426, '11PARAMO 3', 3904, 'BONO DE TIERRA', '2021-11-17', 'ALEJANDRA JIMENEZ GARCIA', 47, 47, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(45, '85TAMUL 2', '2021-11-17', 85, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'DVR', 'LUIS EDUARDO NUÑEZ SILVA', 390474, 0, 0.005, 1952.3713, 'null', 'null', 1952.3713, 0, 0, 0, 0, 0, 1952.3713, '92PARAMO 3', 1952, 'BONO DE TIERRA', '2021-11-17', 'LUIS EDUARDO NUÑEZ SILVA', 47, 47, 'null', 'HSBC HABITTA 2021', 'null', 'null', 'null'),
(46, '85TAMUL 2', '2021-11-17', 85, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'DVR', 'LILIA CRICLIVSCAIA', 390474, 0, 0.005, 1952.3713, 'null', 'null', 1952.3713, 0, 0, 0, 0, 0, 1952.3713, 'null', 0, 'null', '2021-11-17', 'LILIA CRICLIVSCAIA', 0, 47, 'null', 'null', 'null', 'null', 'null'),
(47, '85TAMUL 2', '2021-11-17', 85, 'TAMUL', '2', 'PORTTO BLANCO SLP', 'DVN', 'KARINA PAOLA GUSI TORRES', 390474, 0, 0.005, 1952.3713, 'null', 'null', 1952.3713, 0, 0, 0, 0, 0, 1952.3713, '108LAGO 1', 1952, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 47, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(48, '59SELVA 1', '2022-01-21', 59, 'SELVA', '1', 'PORTTO BLANCO', 'GERENTE', 'María Ascención Lugo Uribe', 460800, 0, 0.01, 4608, 'null', 'null', 4608, 0, 0, 0, 0, 0, 4608, '92PARAMO 3', 4608, 'BONO DE TIERRA', '2022-01-21', 'MARIA ASCENCIÓN LUGO URIBE', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(49, '59SELVA 1', '2022-01-21', 59, 'SELVA', '1', 'PORTTO BLANCO', 'DVR', 'Lilia Criclivscaia', 460800, 0, 0.005, 2304, 'null', 'null', 2304, 0, 0, 0, 0, 0, 2304, 'null', 0, 'null', '2022-01-21', 'LILIA CRICLIVSCAIA', 0, 4, 'null', 'null', 'null', 'null', 'null'),
(50, '59SELVA 1', '2022-01-21', 59, 'SELVA', '1', 'PORTTO BLANCO', 'DVR', 'Luis Eduardo Nuñez Silva', 460800, 0, 0.005, 2304, 'null', 'null', 2304, 0, 0, 0, 0, 0, 2304, '92PARAMO 3', 2304, 'BONO DE TIERRA', '2022-01-21', 'LUIS EDUARDO NUÑEZ SILVA', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(51, '59SELVA 1', '2022-01-21', 59, 'SELVA', '1', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 460800, 0, 0.005, 2304, 'null', 'null', 2304, 0, 0, 0, 0, 0, 2304, '108LAGO 1', 2304, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 4, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(52, '21SELVA 2', '2022-01-21', 21, 'SELVA', '2', 'PORTTO BLANCO', 'GERENTE', 'Luis Eduardo Nuñez Silva', 640010, 0, 0.01, 6400.10656, 'null', 'null', 6400.10656, 0, 0, 0, 0, 0, 6400.10656, '92PARAMO 3', 6400, 'BONO DE TIERRA', '2022-01-21', 'LUIS EDUARDO NUÑEZ SILVA', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(53, '21SELVA 2', '2022-01-21', 21, 'SELVA', '2', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 640010, 0, 0.005, 3200.05328, 'null', 'null', 3200.05328, 0, 0, 0, 0, 0, 3200.05328, '108LAGO 1', 3200, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 4, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(54, '83BOSQUE 1', '2022-01-21', 83, 'BOSQUE', '1', 'PORTTO BLANCO', 'GERENTE', 'María Ascención Lugo Uribe', 670507, 0, 0.01, 6705.075, 'null', 'null', 6705.075, 0, 0, 0, 0, 0, 6705.075, '92PARAMO 3', 6705, 'BONO DE TIERRA', '2022-01-21', 'MARIA ASCENCIÓN LUGO URIBE', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'CANCELADO', 'null'),
(55, '83BOSQUE 1', '2022-01-21', 83, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'Lilia Criclivscaia', 670507, 0, 0.005, 3352.5375, 'null', 'null', 3352.5375, 0, 0, 0, 0, 0, 3352.5375, 'null', 0, 'null', '2022-01-21', 'LILIA CRICLIVSCAIA', 0, 4, 'null', 'null', 'null', 'CANCELADO', 'null'),
(56, '83BOSQUE 1', '2022-01-21', 83, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'Luis Eduardo Nuñez Silva', 670507, 0, 0.005, 3352.5375, 'null', 'null', 3352.5375, 0, 0, 0, 0, 0, 3352.5375, '92PARAMO 3', 3352, 'BONO DE TIERRA', '2022-01-21', 'LUIS EDUARDO NUÑEZ SILVA', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'CANCELADO', 'null'),
(57, '83BOSQUE 1', '2022-01-21', 83, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 670507, 0, 0.005, 3352.5375, 'null', 'null', 3352.5375, 0, 0, 0, 0, 0, 3352.5375, '108LAGO 1', 3352, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 4, 'null', 'HSBC HABITTA 2022', 'null', 'CANCELADO', 'null'),
(58, '84BOSQUE 1', '2022-01-21', 84, 'BOSQUE', '1', 'PORTTO BLANCO', 'GERENTE', 'María Ascención Lugo Uribe', 634800, 0, 0.01, 6348, 'null', 'null', 6348, 0, 0, 0, 0, 0, 6348, '92PARAMO 3', 6348, 'BONO DE TIERRA', '2022-01-21', 'MARIA ASCENCIÓN LUGO URIBE', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'CANCELADO', 'null'),
(59, '84BOSQUE 1', '2022-01-21', 84, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'Lilia Criclivscaia', 634800, 0, 0.005, 3174, 'null', 'null', 3174, 0, 0, 0, 0, 0, 3174, 'null', 0, 'null', '2022-01-21', 'LILIA CRICLIVSCAIA', 0, 4, 'null', 'null', 'null', 'CANCELADO', 'null'),
(60, '84BOSQUE 1', '2022-01-21', 84, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVR', 'Luis Eduardo Nuñez Silva', 634800, 0, 0.005, 3174, 'null', 'null', 3174, 0, 0, 0, 0, 0, 3174, '92PARAMO 3', 3174, 'BONO DE TIERRA', '2022-01-21', 'LUIS EDUARDO NUÑEZ SILVA', 4, 4, 'null', 'HSBC HABITTA 2022', 'null', 'CANCELADO', 'null'),
(61, '84BOSQUE 1', '2022-01-21', 84, 'BOSQUE', '1', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 634800, 0, 0.005, 3174, 'null', 'null', 3174, 0, 0, 0, 0, 0, 3174, '108LAGO 1', 3174, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 4, 'null', 'HSBC HABITTA 2022', 'null', 'CANCELADO', 'null'),
(62, '38DESIERTO 2', '2022-02-28', 38, 'DESIERTO', '2', 'PORTTO BLANCO', 'GERENTE', 'Yesenia Rosillo Navarro ', 489930, 44539, 0.01, 4899.3006, 'null', 'null', 4899.3006, 0, 0, 0, 0, 0, 4899.3006, '56TAIGA 2', 4899, 'BONO DE TIERRA', '2022-03-16', 'YESENIA ROSILLO NAVARRO', 12, 10, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(63, '38DESIERTO 2', '2022-02-28', 38, 'DESIERTO', '2', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 489930, 44539, 0.005, 2449.6503, 'null', 'null', 2449.6503, 0, 0, 0, 0, 0, 2449.6503, '108LAGO 1', 2449, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 10, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(64, '23DESIERTO 4', '2022-02-28', 23, 'DESIERTO', '4', 'PORTTO BLANCO', 'GERENTE', 'Yesenia Rosillo Navarro ', 348279, 189425, 0.01, 3482.7931, 'null', 'null', 3482.7931, 0, 0, 0, 0, 0, 3482.7931, '56TAIGA 2', 3482, 'BONO DE TIERRA', '2022-03-16', 'YESENIA ROSILLO NAVARRO', 12, 10, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(65, '23DESIERTO 4', '2022-02-28', 23, 'DESIERTO', '4', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 348279, 189425, 0.005, 1741.39655, 'null', 'null', 1741.39655, 0, 0, 0, 0, 0, 1741.39655, '108LAGO 1', 1741, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 10, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(66, '56TAIGA 2', '2022-02-28', 56, 'TAIGA', '2', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 705532, 51208, 0.005, 3527.6632, 'null', 'null', 3527.6632, 0, 0, 0, 0, 0, 3527.6632, '108LAGO 1', 3527, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 10, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(67, '19LOMAS 1', '2022-03-11', 19, 'LOMAS', '1', 'LOMAS DE PORTTO BLANCO', 'GERENTE', 'ANTONIO PEÑA QUINTANA', 432000, 0, 0.01, 4320, 'null', 'null', 4320, 0, 0, 0, 0, 0, 4320, 'null', 0, 'null', '2022-08-11', 'ANTONIO PEÑA QUINTANA', 0, 11, 'null', 'null', 'null', 'null', 'null'),
(68, '19LOMAS 1', '2022-03-11', 19, 'LOMAS', '1', 'LOMAS DE PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON', 432000, 0, 0.01, 4320, 'null', 'null', 4320, 0, 0, 0, 0, 0, 4320, '28BOSQUE 3', 4320, 'BONO DE TIERRA', '2022-04-26', 'ALEJANDRO LEON', 18, 11, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(69, '19LOMAS 1', '2022-03-11', 19, 'LOMAS', '1', 'LOMAS DE PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 432000, 0, 0.005, 2160, 'null', 'null', 2160, 0, 0, 0, 0, 0, 2160, '108LAGO 1', 2160, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 11, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(70, '95SELVA 3', '2022-04-26', 95, 'SELVA', '3', 'PORTTO BLANCO', 'DVR', 'Lilia Criclivscaia', 588672, 0, 0.01, 5886.72, 'null', 'null', 5886.72, 0, 0, 0, 0, 0, 5886.72, 'null', 0, 'null', '2022-08-11', 'LILIA CRICLIVSCAIA', 0, 18, 'null', 'null', 'null', 'null', 'null'),
(71, '95SELVA 3', '2022-04-26', 95, 'SELVA', '3', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 588672, 0, 0.005, 2943.36, 'null', 'null', 2943.36, 0, 0, 0, 0, 0, 2943.36, '108LAGO 1', 2943, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 18, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(72, '94BOSQUE 2', '2022-04-26', 94, 'BOSQUE', '2', 'PORTTO BLANCO', 'GERENTE', 'Alberto Alejandro Zamora Orozco', 651728, 0, 0.01, 6517.28, 'null', 'null', 6517.28, 0, 0, 0, 0, 0, 6517.28, '86SELVA 2', 6517, 'BONO DE TIERRA', '2022-04-24', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 18, 18, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(73, '94BOSQUE 2', '2022-04-26', 94, 'BOSQUE', '2', 'PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON', 651728, 0, 0.01, 6517.28, 'null', 'null', 6517.28, 0, 0, 0, 0, 0, 6517.28, '28BOSQUE 3', 6517, 'BONO DE TIERRA', '2022-04-26', 'ALEJANDRO LEON', 18, 18, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(74, '94BOSQUE 2', '2022-04-26', 94, 'BOSQUE', '2', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 651728, 0, 0.005, 3258.64, 'null', 'null', 3258.64, 0, 0, 0, 0, 0, 3258.64, '108LAGO 1', 3258, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 18, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(75, '28BOSQUE 3', '2022-04-26', 28, 'BOSQUE', '3', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 645120, 0, 0.005, 3225.6, 'null', 'null', 3225.6, 0, 0, 0, 0, 0, 3225.6, '108LAGO 1', 3225, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 0, 18, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(76, '43BOSQUE 4', '2022-04-26', 43, 'BOSQUE', '4', 'PORTTO BLANCO', 'DVR', 'Lilia Criclivscaia', 810000, 0, 0.01, 8100, 'null', 'null', 8100, 0, 0, 0, 0, 0, 8100, 'null', 0, 'null', '2022-08-11', 'LILIA CRICLIVSCAIA', 0, 18, 'null', 'null', 'null', 'null', 'null'),
(77, '43BOSQUE 4', '2022-04-26', 43, 'BOSQUE', '4', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 810000, 0, 0.005, 4050, 'null', 'null', 4050, 0, 0, 0, 0, 0, 4050, '108LAGO 1', 4050, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 33, 18, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(78, '119LOMAS 2', '2022-07-08', 119, 'LOMAS', '2', 'LOMAS DE PORTTO BLANCO', 'GERENTE', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 453600, 0, 0.01, 4536, 'null', 'null', 4536, 0, 0, 0, 0, 0, 4536, '86SELVA 2', 4536, 'BONO DE TIERRA', '2022-08-11', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 33, 28, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(79, '119LOMAS 2', '2022-07-08', 119, 'LOMAS', '2', 'LOMAS DE PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 453600, 0, 0.01, 4536, 'null', 'null', 4536, 0, 0, 0, 0, 0, 4536, '28BOSQUE 3', 4536, 'BONO DE TIERRA', '2022-08-11', 'ALEJANDRO LEON', 33, 28, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(80, '119LOMAS 2', '2022-07-08', 119, 'LOMAS', '2', 'LOMAS DE PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI', 453600, 0, 0.005, 2268, 'null', 'null', 2268, 0, 0, 0, 0, 0, 2268, '108LAGO 1', 2268, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 33, 28, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(81, '84SELVA 2', '2022-07-08', 84, 'SELVA', '2', 'PORTTO BLANCO', 'GERENTE', 'SILVIA JUAREZ OLVERA', 504576, 0, 0.01, 5045.76, 'null', 'null', 5045.76, 0, 0, 0, 0, 0, 5045.76, '86SELVA 2', 5045, 'BONO DE TIERRA', '2022-08-11', 'SILVIA JUAREZ OLVERA', 33, 28, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(82, '84SELVA 2', '2022-07-08', 84, 'SELVA', '2', 'PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 504576, 0, 0.01, 5045.76, 'null', 'null', 5045.76, 0, 0, 0, 0, 0, 5045.76, '28BOSQUE 3', 5045, 'BONO DE TIERRA', '2022-08-11', 'ALEJANDRO LEON', 33, 28, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(83, '84SELVA 2', '2022-07-08', 84, 'SELVA', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI', 504576, 0, 0.005, 2522.88, 'null', 'null', 2522.88, 0, 0, 0, 0, 0, 2522.88, '108LAGO 1', 2522, 'BONO DE TIERRA', '2022-08-11', 'KARINA PAOLA GUSI TORRES', 33, 28, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(84, '9SELVA 3', '2022-09-13', 9, 'SELVA', '3', 'PORTTO BLANCO', 'GERENTE', 'Marla Janette Corzo Montes', 614400, 0, 0.01, 6144, 'null', 'null', 6144, 0, 0, 0, 0, 0, 6144, 'null', 0, 'null', '2022-08-11', 'MARLA JANETTE CORZO MONTES', 0, 38, 'null', 'null', 'null', 'null', 'null'),
(85, '9SELVA 3', '2022-09-13', 9, 'SELVA', '3', 'PORTTO BLANCO', 'DVR', 'Lilia Criclivscaia', 614400, 0, 0.005, 3072, 'null', 'null', 3072, 0, 0, 0, 0, 0, 3072, 'null', 0, 'null', '2022-08-11', 'LILIA CRICLIVSCAIA', 0, 38, 'null', 'null', 'null', 'null', 'null'),
(86, '9SELVA 3', '2022-09-13', 9, 'SELVA', '3', 'PORTTO BLANCO', 'DVR', 'Luis Eduardo Nuñez Silva', 614400, 0, 0.005, 3072, 'null', 'null', 3072, 0, 0, 0, 0, 0, 3072, 'null', 0, 'null', '2022-08-11', 'LUIS EDUARDO NUÑEZ SILVA', 0, 38, 'null', 'null', 'null', 'null', 'null'),
(87, '9SELVA 3', '2022-09-13', 9, 'SELVA', '3', 'PORTTO BLANCO', 'DVN', 'Karina Paola Gusi Torres', 614400, 0, 0.005, 3072, 'null', 'null', 3072, 0, 0, 0, 0, 0, 3072, '108LAGO 1', 3072, 'BONO DE TIERRA', '2022-10-26', 'KARINA PAOLA GUSI TORRES', 44, 38, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(88, '4SELVA 1', '2022-09-28', 4, 'SELVA', '1', 'PORTTO BLANCO', 'GERENTE', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 518400, 0, 0.01, 5184, 'null', 'null', 5184, 0, 0, 0, 0, 0, 5184, '86SELVA 2', 5184, 'BONO DE TIERRA', '2022-09-28', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 40, 40, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(89, '4SELVA 1', '2022-09-28', 4, 'SELVA', '1', 'PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 518400, 0, 0.01, 5184, 'null', 'null', 5184, 0, 0, 0, 0, 0, 5184, 'null', 0, 'null', '2022-09-28', 'ALEJANDRO LEON', 0, 40, 'null', 'null', 'null', 'LIBERADO', 'null'),
(90, '4SELVA 1', '2022-09-28', 4, 'SELVA', '1', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 518400, 0, 0.005, 2592, 'null', 'null', 2592, 0, 0, 0, 0, 0, 2592, '108LAGO 1', 2592, 'BONO DE TIERRA', '2022-10-26', 'KARINA PAOLA GUSI TORRES', 44, 40, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(91, '29BOSQUE 2', '2022-09-28', 29, 'BOSQUE', '2', 'PORTTO BLANCO', 'GERENTE', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 568720, 0, 0.01, 5687.2077, 'null', 'null', 5687.2077, 0, 0, 0, 0, 0, 5687.2077, '86SELVA 2', 5687, 'BONO DE TIERRA', '2022-09-28', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 40, 40, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(92, '29BOSQUE 2', '2022-09-28', 29, 'BOSQUE', '2', 'PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 568720, 0, 0.01, 5687.2077, 'null', 'null', 5687.2077, 0, 0, 0, 0, 0, 5687.2077, 'null', 0, 'null', '2022-09-28', 'ALEJANDRO LEON', 0, 40, 'null', 'null', 'null', 'null', 'null'),
(93, '29BOSQUE 2', '2022-09-28', 29, 'BOSQUE', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 568720, 0, 0.005, 2843.60385, 'null', 'null', 2843.60385, 0, 0, 0, 0, 0, 2843.60385, '108LAGO 1', 2843, 'BONO DE TIERRA', '2022-10-26', 'KARINA PAOLA GUSI TORRES', 44, 40, 'null', 'HSBC HABITTA 2022', 'null', 'null', 'null'),
(94, '93LOMAS 2', '2022-09-28', 93, 'LOMAS', '2', 'LOMAS DE PORTTO BLANCO', 'GERENTE', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 443520, 0, 0.01, 4435.2, 'null', 'null', 4435.2, 0, 0, 0, 0, 0, 4435.2, '86SELVA 2', 4435, 'BONO DE TIERRA', '2022-09-28', 'ALBERTO ALEJANDRO ZAMORA OROZCO', 40, 40, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(95, '93LOMAS 2', '2022-09-28', 93, 'LOMAS', '2', 'LOMAS DE PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 443520, 0, 0.01, 4435.2, 'null', 'null', 4435.2, 0, 0, 0, 0, 0, 4435.2, 'null', 0, 'null', '2022-09-28', 'ALEJANDRO LEON', 0, 40, 'null', 'null', 'null', 'LIBERADO', 'null'),
(96, '93LOMAS 2', '2022-09-28', 93, 'LOMAS', '2', 'LOMAS DE PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 443520, 0, 0.005, 2217.6, 'null', 'null', 2217.6, 0, 0, 0, 0, 0, 2217.6, '108LAGO 1', 2217, 'BONO DE TIERRA', '2022-10-26', 'KARINA PAOLA GUSI TORRES', 44, 40, 'null', 'HSBC HABITTA 2022', 'null', 'LIBERADO', 'null'),
(97, '61ZAFIRO 2', '2023-01-06', 61, 'ZAFIRO', '2', 'PORTTO BLANCO BERNAL', 'GERENTE', 'ALEJANDRA JIMENEZ GARCIA', 942807, 0, 0.01, 9428.076, 'null', 'null', 9428.076, 0, 0, 0, 0, 0, 9428.076, 'null', 9428, 'BONO DE TIERRA', '2023-01-13', 'ALEJANDRA JIMENEZ GARCIA', 2, 2, 'null', 'HSBC LOMAS HABITTA 2023', 'null', 'null', 'null'),
(98, '61ZAFIRO 2', '2023-01-06', 61, 'ZAFIRO', '2', 'PORTTO BLANCO BERNAL', 'DVR', 'LILIA CRICLIVSCAIA', 942807, 0, 0.01, 9428.076, 'null', 'null', 9428.076, 0, 0, 0, 0, 0, 9428.076, 'null', 0, 'null', '2023-01-13', 'LILIA CRICLIVSCAIA', 0, 2, 'null', 'null', 'null', 'null', 'null'),
(99, '61ZAFIRO 2', '2023-01-06', 61, 'ZAFIRO', '2', 'PORTTO BLANCO BERNAL', 'DVN', 'KARINA PAOLA GUSI TORRES', 942807, 0, 0.005, 4714.038, 'null', 'null', 4714.038, 0, 0, 0, 0, 0, 4714.038, 'null', 4714, 'BONO DE TIERRA', '2023-02-07', 'KARINA PAOLA GUSI TORRES', 6, 2, 'null', 'HSBC HABITTA 2023', 'null', 'null', 'null'),
(100, '76BOSQUE 2', '2023-01-31', 76, 'BOSQUE', '2', 'PORTTO BLANCO', 'GERENTE', 'MARIA ASCENCION LUGO URIBE', 798655, 0, 0.01, 7986.555, 'null', 'null', 7986.555, 0, 0, 0, 0, 0, 7986.555, 'null', 0, 'null', '2023-02-07', 'MARIA ASCENCIÓN LUGO URIBE', 0, 6, 'null', 'null', 'null', 'null', 'null'),
(101, '76BOSQUE 2', '2023-01-31', 76, 'BOSQUE', '2', 'PORTTO BLANCO', 'DVR', 'LILIA CRICLIVSCAIA', 798655, 0, 0.01, 7986.555, 'null', 'null', 7986.555, 0, 0, 0, 0, 0, 7986.555, 'null', 0, 'null', '2023-02-07', 'LILIA CRICLIVSCAIA', 0, 6, 'null', 'null', 'null', 'null', 'null'),
(102, '76BOSQUE 2', '2023-01-31', 76, 'BOSQUE', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 798655, 0, 0.005, 3993.2775, 'null', 'null', 3993.2775, 0, 0, 0, 0, 0, 3993.2775, 'null', 3993, 'BONO DE TIERRA', '2023-02-07', 'KARINA PAOLA GUSI TORRES', 6, 6, 'null', 'HSBC HABITTA 2023', 'null', 'null', 'null'),
(103, '86SELVA 2', '2023-01-31', 86, 'SELVA', '2', 'PORTTO BLANCO', 'DVR', 'ALEJANDRO LEON GALINDEZ', 504576, 0, 0.01, 5045.76, 'null', 'null', 5045.76, 0, 0, 0, 0, 0, 5045.76, 'null', 0, 'null', '2023-02-07', 'ALEJANDRO LEON', 0, 6, 'null', 'null', 'null', 'null', 'null'),
(104, '86SELVA 2', '2023-01-31', 86, 'SELVA', '2', 'PORTTO BLANCO', 'DVN', 'KARINA PAOLA GUSI TORRES', 504576, 0, 0.005, 2522.88, 'null', 'null', 2522.88, 0, 0, 0, 0, 0, 2522.88, 'null', 2522, 'BONO DE TIERRA', '2023-02-07', 'KARINA PAOLA GUSI TORRES', 6, 6, 'null', 'HSBC HABITTA 2023', 'null', 'null', 'null'),
(105, '45AMATISTA 1', '2023-02-10', 45, 'AMATISTA', '1', 'PORTTO BLANCO BERNAL', 'DVN', 'KARINA PAOLA GUSI TORRES', 518400, 0, 0.005, 2592, 'null', 'null', 2592, 0, 0, 0, 0, 0, 2592, 'null', 0, 'null', '2023-02-07', 'KARINA PAOLA GUSI TORRES', 0, 7, 'null', 'null', 'null', 'null', 'null');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acumuladosherpa_habitta`
--
ALTER TABLE `acumuladosherpa_habitta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acumuladosherpa_habitta`
--
ALTER TABLE `acumuladosherpa_habitta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

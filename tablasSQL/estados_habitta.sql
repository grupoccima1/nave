-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.2
-- Tiempo de generación: 16-01-2024 a las 01:17:18
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
-- Estructura de tabla para la tabla `estados_habitta`
--

CREATE TABLE `estados_habitta` (
  `id` int(11) NOT NULL,
  `source_name` longtext DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL,
  `fecha` longtext DEFAULT NULL,
  `saldo_inicial` double DEFAULT NULL,
  `mensualidad` double DEFAULT NULL,
  `pagado` int(11) DEFAULT NULL,
  `interes_financiamiento` longtext DEFAULT NULL,
  `abono_capital` int(11) DEFAULT NULL,
  `saldo_final` double DEFAULT NULL,
  `int_gen` double DEFAULT NULL,
  `int_int` longtext DEFAULT NULL,
  `int_acum_mora` double DEFAULT NULL,
  `int_neg` longtext DEFAULT NULL,
  `estatus` longtext DEFAULT NULL,
  `observacion` longtext DEFAULT NULL,
  `debe_interes` longtext DEFAULT NULL,
  `fecha_pago` longtext DEFAULT NULL,
  `indicatos_fecha` int(11) DEFAULT NULL,
  `porcent_int` longtext DEFAULT NULL,
  `llave2` longtext DEFAULT NULL,
  `mens_adeu` double DEFAULT NULL,
  `calc_sonre` double DEFAULT NULL,
  `monto_int_mor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_habitta`
--

INSERT INTO `estados_habitta` (`id`, `source_name`, `periodo`, `fecha`, `saldo_inicial`, `mensualidad`, `pagado`, `interes_financiamiento`, `abono_capital`, `saldo_final`, `int_gen`, `int_int`, `int_acum_mora`, `int_neg`, `estatus`, `observacion`, `debe_interes`, `fecha_pago`, `indicatos_fecha`, `porcent_int`, `llave2`, `mens_adeu`, `calc_sonre`, `monto_int_mor`) VALUES
(1, '81AMATISTA 1.xlsm', 1, '2022-11-01', 486000, 2700, 2700, 'NULL', 2700, 483300, 135, 'NULL', 135, 'NULL', 'NULL', 'NULL', 'SI', '2022-12-07', 1, 'NULL', '81AMATISTA 1NOVIEMBRE 2022', 2700, 2700, 135),
(2, '81AMATISTA 1.xlsm', 2, '2022-12-01', 483300, 2700, 2700, 'NULL', 2700, 480600, 276.75, '13.8375', 425.5875, 'NULL', 'NULL', 'NULL', 'SI', '2023-01-23', 1, 'NULL', '81AMATISTA 1DICIEMBRE 2022', 2700, 5535, 276.75),
(3, '81AMATISTA 1.xlsm', 6, '2023-04-01', 472500, 2700, 2700, 'NULL', 2700, 469800, 426.279375, 'NULL', 851.866875, 'NULL', 'NULL', 'NULL', 'SI', '2023-05-10', 1, 'NULL', '81AMATISTA 1ABRIL 2023', 2700, 8525.5875, 426.279375),
(4, '9TAIGA 3.xlsm', 18, '2022-07-01', 1602178.320473, 9829.38, 9830, 'NULL', 9830, 1592348.320473, 80108.91602365, 'NULL', 80108.91602365, 'NULL', 'NULL', 'NULL', 'SI', '2022-10-26', 1, 'NULL', '9TAIGA 3JULIO 2022', 9829.38, 1602178.320473, 80108.91602365),
(5, '9TAIGA 3.xlsm', 20, '2022-09-01', 1582518.320473, 9829.38, 9830, 'NULL', 9830, 1572688.320473, 83131.3618248325, 'NULL', 163240.277848483, 'NULL', 'NULL', 'NULL', 'SI', '2022-12-07', 1, 'NULL', '9TAIGA 3SEPTIEMBRE 2022', 9829.38, 1662627.23649665, 83131.3618248325),
(6, '9TAIGA 3.xlsm', 23, '2022-12-01', 1553028.320473, 9829.38, 9830, 'NULL', 9830, 1543198.320473, 85813.4299160742, 'NULL', 249053.707764557, 'NULL', 'NULL', 'NULL', 'SI', '2023-01-25', 1, 'NULL', '9TAIGA 3DICIEMBRE 2022', 9829.38, 1716268.59832148, 85813.4299160742),
(7, '9TAIGA 3.xlsm', 27, '2023-04-01', 1513708.320473, 9829.38, 9830, 'NULL', 9830, 1503878.320473, 88138.1014118779, 'NULL', 337191.809176435, 'NULL', 'NULL', 'NULL', 'SI', '2023-05-10', 1, 'NULL', '9TAIGA 3ABRIL 2023', 9829.38, 1762762.02823756, 88138.1014118779);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados_habitta`
--
ALTER TABLE `estados_habitta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados_habitta`
--
ALTER TABLE `estados_habitta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2024 a las 21:26:49
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wwwtortaza_hgadmin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_informacion`
--

CREATE TABLE `tb_informacion` (
  `id` int NOT NULL,
  `hora_atencion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `instagram` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contactanos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `eslogan` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `color_menu` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `delivery` char(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'S',
  `ecommerce` int NOT NULL,
  `horamax` time NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `mostrarprecio` int NOT NULL,
  `textoprecio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `terminos` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_informacion`
--

INSERT INTO `tb_informacion` (`id`, `hora_atencion`, `facebook`, `instagram`, `contactanos`, `eslogan`, `icono`, `color`, `color_menu`, `delivery`, `ecommerce`, `horamax`, `horainicio`, `horafin`, `mostrarprecio`, `textoprecio`, `terminos`) VALUES
(1, '9AM - 10PM', 'https://www.facebook.com/TortazaOficial', 'https://www.instagram.com/pasteleriatortaza/', 'tortaza@tortaza.com', 'La felicidad en tu casa', '', '#ffff00', '#471b1a', 'S', 0, '00:00:00', '00:00:00', '00:00:00', 0, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_informacion`
--
ALTER TABLE `tb_informacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_informacion`
--
ALTER TABLE `tb_informacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

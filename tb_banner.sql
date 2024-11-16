-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2024 a las 21:26:38
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
-- Estructura de tabla para la tabla `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int NOT NULL,
  `images` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `frase` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `images`, `frase`, `estado`) VALUES
(1, 'port.jpg\r\n', 'La felicidad en tu casa', 'X'),
(2, 'porta_person.jpg', 'la felicidad', 'A'),
(9, 'about-main.jpg', 'adasda', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

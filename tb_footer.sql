-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-11-2024 a las 12:01:09
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

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
-- Estructura de tabla para la tabla `tb_footer`
--

CREATE TABLE `tb_footer` (
  `id` int NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `info_adicional` varchar(100) NOT NULL,
  `info_adicional2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_footer`
--

INSERT INTO `tb_footer` (`id`, `descripcion`, `info_adicional`, `info_adicional2`) VALUES
(1, 'HORARIO DE ATENCION', 'LUNES - DOMINGO', '8AM - 10PM'),
(2, 'REDES SOCIALES', '', ''),
(3, 'CONTACTANOS', 'tortaza@tortaza.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_footer`
--
ALTER TABLE `tb_footer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_footer`
--
ALTER TABLE `tb_footer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

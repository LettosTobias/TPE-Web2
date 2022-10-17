-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 04:08:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe_parte1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estreno` year(4) NOT NULL,
  `valoracion` tinyint(1) NOT NULL,
  `descripcion` text NOT NULL,
  `id_genero_fk` varchar(45) NOT NULL,
  `Imagen` varchar(51) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `estreno`, `valoracion`, `descripcion`, `id_genero_fk`, `Imagen`) VALUES
(48, 'asdas', 0000, 0, 'asdas', 'Suspenso', 'img/movies/634860c4a297f.jpg'),
(50, 'asd', 0000, 1, 'asd', 'Romance', NULL),
(51, 'asd', 0000, 0, 'asda', 'Romance', NULL),
(52, '', 0000, 0, '', 'Suspenso', NULL),
(53, '', 0000, 0, '', 'Suspenso', NULL),
(55, '', 0000, 0, '', 'Suspenso', NULL),
(57, 'aaaad', 0000, 1, '', 'Ciencia Ficcion', NULL),
(60, 'asd', 0000, 0, 'asd', 'Ciencia Ficcion', NULL),
(61, 'asd', 0000, 1, 'asd', 'Ciencia Ficcion', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero_fk` (`id_genero_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_genero_fk`) REFERENCES `genero` (`genero`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

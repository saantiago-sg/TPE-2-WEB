-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2019 a las 23:00:54
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `id_club` int(11) NOT NULL,
  `nombre_club` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`id_club`, `nombre_club`) VALUES
(9, 'River'),
(12, 'Lanus'),
(13, 'Banfield'),
(14, 'Independiente'),
(19, 'Racing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `imagen` text NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `id_club`, `imagen`, `titulo`, `descripcion`, `fecha`) VALUES
(44, 12, 'noticia3', 'Lanus pierde el dt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptate. Placeat similique non at natus amet, eum laborum repellendus ex numquam nisi voluptatibus aliquam? Saepe dolore nulla nobis officiis laboriosam!', '2019-10-10'),
(46, 19, 'noticia1', 'Racing en descenso', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptate. Placeat similique non at natus amet, eum laborum repellendus ex numquam nisi voluptatibus aliquam? Saepe dolore nulla nobis officiis laboriosam!', '2019-10-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`) VALUES
(1, 'Facundo', '$2y$10$IIJr.U2OELqnMD3uOLa5u./2qJqUeHnsS4tULBoN7JGdB8AoGgX46'),
(2, 'Faacundito123', '$2y$10$0DzMRFxqkZWyVXF4u3d0SuNIDZdkk3AOu2LtXdeUEK9/sNAhKL7d.'),
(3, 'fedefuhr', '$2y$10$NjOAXyADF1M1yP7N0umrh.J//S3dK5Xia581/dIbauUpTFpVtu7yC'),
(4, 'pepe', '$2y$10$eBUQgxfKwTdH/ZhMVdGofuSFeue29q1r0Br0TuOc4Ogd8LWTpz9Nu'),
(5, 'saantiago', '$2y$10$td2F0R3ZipSW7EMACDBf2.uQ5KI.tSU3HH1uOGtPx6m3ucryChUhO'),
(6, '', '$2y$10$TiGJzM99xsRFoOYa.PGBa.huo.QVqBLiMjLKcDqADnBn8KyMcfH36'),
(7, '', '$2y$10$je6mGcFqX.taBu8GrUjJVuu6pVPJDK.s5zxlyf.4bc96ZlEcCygYe'),
(8, 'pepe', '$2y$10$RPaQdg0GAbdyPQn0Gh1BQuq0yCzFbaVXiHOQyUfO3Wpl8IiP1RLTe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id_club`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_club` (`id_club`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_club`) REFERENCES `club` (`id_club`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

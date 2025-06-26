-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2025 a las 02:11:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gonzalez_lourdes_guadalupe`
--
CREATE DATABASE IF NOT EXISTS `gonzalez_lourdes_guadalupe` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gonzalez_lourdes_guadalupe`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_usuario`
--

CREATE TABLE `info_usuario` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(15) CHARACTER SET ascii COLLATE ascii_general_nopad_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `info_usuario`
--

INSERT INTO `info_usuario` (`usuario_id`, `nombre`, `apellido`, `usuario`, `email`, `password`, `perfil_id`, `baja`) VALUES
(1, 'gonzalo', 'gonzalez', 'gonzi', 'hardcorefz@gmail.com', '$2y$10$MuQ6XBHgiqwAYXfoGOe.zOesEQbofIJFa/NtgbQ/M2dZxuY.Wc0ny', 2, 'NO'),
(2, 'vicku', 'gon', 'victoria', 'vickugon@gmail.com', '$2y$10$AhY70wU5ZGan7vNaBKYjXu/GluStMSFn3r4OhhgVH6KB8IQrGRLVu', 2, 'NO'),
(3, 'cesar', 'gutierrez', 'kayn', 'cesargutierrez@gmail.com', '$2y$10$9J8GdOF/TmyJWX2jjOLWyOXeNkedfl8kTYttYb4IPU/u98YP0saHm', 2, 'NO'),
(4, 'gonchi', 'gonchi', 'gonchi', 'gonchi@gmail.com', '$2y$10$4DRPTOazFAq0nk1cVOKV../gr8MXHKnqRqRTMh77D9sZjCkuU6.q2', 2, 'NO'),
(5, 'gonzalo', 'gonzalez', 'punchi', 'jdskjfahskldghlkg@gmail.com', '$2y$10$KBYHbCT0DSct.QjQCxfxd.iBO6tDLu7KZyaYGSNmB08W/KTX5bgN2', 2, 'NO'),
(6, 'gonzalo', 'gon2234', 'victoria2', 'vickugon123@gmail.com', '$2y$10$ODj.HXkUdyTrGY6Ur6JqLOIdQjMwCu8bdUdCxRoTKhyz/wgv/vFB2', 2, 'NO'),
(7, 'testeo', 'testeo', 'testeo123', 'testeo@gmail.com', '$2y$10$FUeq4sLBAzpOBkEIrWe1yuwSu4Tlpe9tKRUziJDkKkoTEgLFKYGZy', 2, 'NO'),
(8, 'admin', 'adminsito', 'admintesteo', 'admind@gmail.com', '$2y$10$hQWr5EZPh8ZjGFF5y4TEveOyWdT329b.9CfER/ewpLmSNpse0Ow4y', 1, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_usuario`
--
ALTER TABLE `info_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_usuario`
--
ALTER TABLE `info_usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

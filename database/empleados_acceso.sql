-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2021 a las 20:11:26
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_incidentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_acceso`
--

CREATE TABLE `empleados_acceso` (
  `id_empleado` int(7) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `area_trabajo` varchar(100) NOT NULL,
  `password_acceso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados_acceso`
--

INSERT INTO `empleados_acceso` (`id_empleado`, `nombre`, `apellidos`, `area_trabajo`, `password_acceso`) VALUES
(1, 'Manuel', 'Alcantara Ruiz', 'Software', 'accesoprimario'),
(2, 'Ericka', 'Salas Torres', 'Comunicaciones', 'accesoareab'),
(3, 'Gabrel', 'Herrera Garcia', 'Base de datos', 'accesosecundario'),
(4, 'Valeria', 'Martinez Cruz', 'Comunicaciones', 'accesoareac'),
(5, 'Angel', 'Guiterrez Parra', 'Redes y accesos', 'accesocom4'),
(6, 'Maely', 'Ramirez Saldivar', 'Comunicaciones', 'accesomedc'),
(7, 'Pablo', 'Marquez Tena', 'Software', 'accesoalt'),
(8, 'Camila', 'Olvera Quintana', 'Redes y accesos', 'accesoaread'),
(9, 'Javier', 'Mendoza Fuentes', 'Base de datos', 'accesozipb'),
(10, 'Dennys', 'Terraza Lopez', 'Redes y accesos', 'accesosupd'),
(11, 'Oscar', 'Flores Vargas', 'Software', 'accesosofa'),
(12, 'Karla', 'Mejia Estrada', 'Comunicaciones', 'accesoderivc'),
(13, 'Mauricio', 'Tovias Davalos', 'Base de datos', 'accesoreserb'),
(14, 'Janet', 'Carmona Hernandez', 'Base de datos', 'accesosoficb'),
(15, 'Carlos', 'Angeles Marquez', 'Redes y accesos', 'accesoredd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados_acceso`
--
ALTER TABLE `empleados_acceso`
  ADD PRIMARY KEY (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados_acceso`
--
ALTER TABLE `empleados_acceso`
  MODIFY `id_empleado` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

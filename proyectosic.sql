-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2024 a las 21:35:56
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
-- Base de datos: `proyectosic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(250) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Nombre_Completo` varchar(500) NOT NULL,
  `Contrasenia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `Email`, `Nombre_Completo`, `Contrasenia`) VALUES
(1, 'ariadna_sic@tesco.edu.mx', 'Vega Guereca Ariadna Odette', 'bbc7249096d785569d14fcf6db42c0d1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumno` int(250) NOT NULL,
  `Usuario` varchar(500) NOT NULL,
  `Nombre_Completo` varchar(500) NOT NULL,
  `Contrasenia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `Usuario`, `Nombre_Completo`, `Contrasenia`) VALUES
(1, '201810102', 'Vega Guereca Ariadna Odette', 'a10d1e9c022807e4ad03dc44dde518cf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answer`
--

CREATE TABLE `answer` (
  `qid` varchar(200) NOT NULL,
  `ansid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('65e89f7af25e1', '65e89f7b31b3e'),
('65e89f7c0d75f', '65e89f7c8b0f0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `idDocente` int(250) NOT NULL,
  `Usuario` varchar(500) NOT NULL,
  `Nombre_Completo` varchar(500) NOT NULL,
  `Contrasenia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`idDocente`, `Usuario`, `Nombre_Completo`, `Contrasenia`) VALUES
(1, 'AriVega', 'Vega Guereca Ariadna Odette', '8c7ea10835f2b092428477f6e239b76d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE `examenes` (
  `idExamen` int(11) NOT NULL,
  `Pregunta` int(11) NOT NULL,
  `Respuesta1` int(11) NOT NULL,
  `Respuesta2` int(11) NOT NULL,
  `Respuesta3` int(11) NOT NULL,
  `Respuesta4` int(11) NOT NULL,
  `RespuestaFinal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(110) NOT NULL,
  `level` int(110) NOT NULL,
  `sahi` int(110) NOT NULL,
  `wrong` int(110) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('', '65e89d2fadd95', 2, 1, 1, 1, '2024-03-06 18:16:22'),
('', '65e89d2fadd95', 2, 1, 1, 1, '2024-03-06 18:16:22'),
('', '65e89d2fadd95', 2, 1, 1, 1, '2024-03-06 18:16:22'),
('', '65e89d2fadd95', 2, 1, 1, 1, '2024-03-06 18:16:22'),
('', '65e89d2fadd95', 2, 1, 1, 1, '2024-03-06 18:16:22'),
('', '65e89d2fadd95', 2, 1, 1, 1, '2024-03-06 18:16:22'),
('', '65e89d2fadd95', 2, 1, 1, 0, '2024-03-06 18:16:22'),
('201810102', '65e89d2fadd95', 2, 1, 1, 0, '2024-03-06 18:20:02'),
('201810102', '65e89d2fadd95', 2, 1, 1, 0, '2024-03-06 18:20:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('65e89f7af25e1', 'Fuerza', '65e89f7b31b38'),
('65e89f7af25e1', 'Presión', '65e89f7b31b3d'),
('65e89f7af25e1', 'Transferencia de impulso', '65e89f7b31b3e'),
('65e89f7af25e1', 'Carga resistiva', '65e89f7b31b3f'),
('65e89f7c0d75f', 'Flujo turbulento', '65e89f7c8b0eb'),
('65e89f7c0d75f', 'Flujo laminar', '65e89f7c8b0f0'),
('65e89f7c0d75f', 'Fluido newtoniano', '65e89f7c8b0f1'),
('65e89f7c0d75f', 'Ninguna de las anteriores', '65e89f7c8b0f2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `eid` varchar(200) NOT NULL,
  `qid` varchar(200) NOT NULL,
  `qns` varchar(200) NOT NULL,
  `choice` int(110) NOT NULL,
  `sn` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('65e89d2fadd95', '65e89f7af25e1', 'Es la fuerza superficial ejercida por un fluido sobre las paredes del\r\nrecipiente que lo contiene.', 4, 1),
('65e89d2fadd95', '65e89f7c0d75f', 'A las velocidades bajas de un fluido, este tiende a fluir sin mezclar', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(110) NOT NULL,
  `wrong` int(110) NOT NULL,
  `total` int(110) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('65e89d2fadd95', 'Cuestionario De Prueba', 2, 2, 2, 5, 'Examen de prueba', 'Prueba 1', '2024-03-06 16:43:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(110) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('', 0, '2024-03-05 03:52:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`idDocente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `idDocente` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

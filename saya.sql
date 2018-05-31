-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2018 a las 20:37:33
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_act` int(5) NOT NULL COMMENT 'identificador actividad',
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'nombre actividad deportiva',
  `cuota` float UNSIGNED DEFAULT NULL COMMENT 'coste de la actividad',
  `restriccion` tinyint(1) NOT NULL COMMENT '0 si no tiene restriccion horaria',
  `horario` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Registro del catalogo de actividades';

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_act`, `nombre`, `cuota`, `restriccion`, `horario`) VALUES
(1, 'ntacion', 33, 0, ''),
(2, 'pilates', 33, 1, '[[[\"Lunes\"],[\"12:00\"],[\"11:00\"]]]'),
(3, 'tkd', 35, 0, ''),
(4, 'montar a caballo', 55, 1, '[[[\"Sabado\"],[\"12:00\"],[\"15:00\"]],[[\"Domingo\"],[\"12:00\"],[\"15:00\"]],[[\"Martes\"],[\"12:00\"],[\"15:00\"]]]'),
(5, 'judocaca', 33, 0, ''),
(6, 'judocaca', 33, 0, ''),
(7, 'judocaca', 33, 0, ''),
(8, 'judocaca', 33, 0, ''),
(9, 'judocaca', 33, 0, ''),
(10, 'judocaca', 33, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_socios`
--

CREATE TABLE `act_socios` (
  `id_act` int(5) NOT NULL COMMENT 'identificador actividad',
  `dni_socio` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'identificador socio',
  `f_inicio` date NOT NULL COMMENT 'fecha inicio',
  `f_fin` date NOT NULL COMMENT 'fecha fin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_staff`
--

CREATE TABLE `act_staff` (
  `id_act4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `dni_staff2` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `dni_socio` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_inscripcion` date DEFAULT NULL,
  `cuota` decimal(3,3) UNSIGNED NOT NULL,
  `corriente_pago` tinyint(1) NOT NULL,
  `uid3` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uri_foto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='datos de los socios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `dni_staff` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perfil` enum('admin','monitor','recepcion','limpieza','temporal') COLLATE utf8_unicode_ci NOT NULL,
  `uid2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foto_uri` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `uid` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'numero unique user id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='guarda los uid de las tarjetas';

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`uid`) VALUES
('010bbfba'),
('0114c1ba'),
('011cbcba'),
('0122c1ba'),
('0128bbba'),
('012ae7ba'),
('0135eaba'),
('0136dfba'),
('0138d2ba'),
('013bcdba'),
('0152f7ba'),
('0158e9ba'),
('015bfcba'),
('0163bcba'),
('016bfaba'),
('0172daba'),
('017cfaba'),
('017fb5ba'),
('0184c9ba'),
('0188ceba'),
('018aceba'),
('018fedba'),
('01b5cbba'),
('01dcf7ba'),
('01e0c1ba'),
('01e4fcba'),
('01e9bbba'),
('01efb6ba'),
('01f1b6ba'),
('1101d3ba'),
('1105bcba'),
('111bd7ba'),
('111bf5ba'),
('1122c6ba'),
('1129e6ba'),
('112db6ba'),
('1135d3ba'),
('1136e7ba'),
('1137c5ba'),
('1141daba'),
('1146eaba'),
('114eeaba'),
('114fc8ba'),
('1154f9ba'),
('1166c4ba'),
('116cc3ba'),
('1170c7ba'),
('1170d3ba'),
('1179faba'),
('1182f2ba'),
('1183eaba'),
('1185e2ba'),
('1188c2ba'),
('118ad4ba'),
('1192d6ba'),
('119fe2ba'),
('11a0dfba'),
('11b3baba'),
('11becdba'),
('11c6b8ba'),
('11c9dfba'),
('11e2caba'),
('11e7baba'),
('2103c6ba'),
('2108ccba'),
('2114baba'),
('2119d4ba'),
('2126bcba'),
('2128c2ba'),
('2129e4ba'),
('2133cbba'),
('213dc0ba'),
('2146deba'),
('2150e5ba'),
('216fc0ba'),
('2170bbba'),
('2179c4ba'),
('2182c2ba'),
('218ee0ba'),
('2193e3ba'),
('219dceba'),
('21aec4ba'),
('21b6c2ba'),
('21b9f6ba'),
('21bedcba'),
('21cce7ba'),
('21d2b4ba'),
('21d3c4ba'),
('21d4e6ba'),
('21def4ba'),
('21dfe5ba'),
('21eecbba'),
('21f1b5ba'),
('21f3deba'),
('21fef4ba'),
('312dbeba'),
('312fceba'),
('3137faba'),
('3138c0ba'),
('313cc0ba'),
('3143cbba'),
('3144bcba'),
('3146faba'),
('3156c2ba'),
('315be7ba'),
('3172e9ba'),
('317acaba'),
('317ccaba'),
('3181d8ba'),
('3185d7ba'),
('3187e7ba'),
('318dceba'),
('31a0dcba'),
('31a1f0ba'),
('31a7c0ba'),
('31b1c7ba'),
('31b5f7ba'),
('31d2ceba'),
('31d7c1ba'),
('31dbcfba'),
('31e2faba'),
('31e7baba'),
('31efdbba'),
('31f4d5ba'),
('31f7f1ba'),
('31fabbba'),
('31fcc3ba'),
('410cf7ba'),
('4116dfba'),
('4117cbba'),
('4125e3ba'),
('4130b8ba'),
('413cbcba'),
('413cd5ba'),
('4154cfba'),
('4159fbba'),
('415dd4ba'),
('415edcba'),
('4161d5ba'),
('4174beba'),
('417fe1ba'),
('4180beba'),
('4183f8ba'),
('418bf6ba'),
('418dd5ba'),
('4191e0ba'),
('41a2b6ba'),
('41a3cfba'),
('41a5e2ba'),
('41a7ccba'),
('41b7c9ba'),
('41b9c8ba'),
('41bad1ba'),
('41bfc2ba'),
('41ebcaba'),
('5106cdba'),
('5113cbba'),
('512ae8ba'),
('512bc0ba'),
('5136edba'),
('513ebeba'),
('5149d7ba'),
('5149fbba'),
('5154d9ba'),
('515ae1ba'),
('515bc6ba'),
('515cceba'),
('5164cbba'),
('5167c2ba'),
('516bf7ba'),
('516ccfba'),
('5174caba'),
('5175d2ba'),
('517aeeba'),
('517dfbba'),
('5188b9ba'),
('5194d6ba'),
('519cbfba'),
('519fbeba'),
('51a9e0ba'),
('51a9f5ba'),
('51aac4ba'),
('51abceba'),
('51c8d4ba'),
('51daebba'),
('51e4bdba'),
('51ebd7ba'),
('51eddfba'),
('6101baba'),
('610ae1ba'),
('610fc0ba'),
('611cb5ba'),
('611dc8ba'),
('6128c9ba'),
('612bc9ba'),
('612ed0ba'),
('6135d0ba'),
('613ae7ba'),
('6145fdba'),
('6147e5ba'),
('614cd8ba'),
('6156bdba'),
('615ecfba'),
('6167caba'),
('616ebaba'),
('616fdcba'),
('61707b0d'),
('6174caba'),
('6188faba'),
('618ae7ba'),
('618bd1ba'),
('6191bfba'),
('619cdbba'),
('61a7f4ba'),
('61abc0ba'),
('61b8e8ba'),
('61d5eeba'),
('61d6d3ba'),
('61d7eeba'),
('61e3bbba'),
('61e6c1ba'),
('61f1e9ba'),
('7104fbba'),
('7106c7ba'),
('7106d4ba'),
('710acbba'),
('710ccbba'),
('7110bbba'),
('7113eeba'),
('7117c2ba'),
('711fecba'),
('7120fdba'),
('7133ddba'),
('7136edba'),
('713ae2ba'),
('713befba'),
('7140beba'),
('7142b8ba'),
('714bbdba'),
('714fcaba'),
('7152eeba'),
('7153bfba'),
('715ad0ba'),
('7171dcba'),
('719ae4ba'),
('719bdbba'),
('71b0c1ba'),
('71bcbaba'),
('71bcf3ba'),
('71c6f0ba'),
('71cde3ba'),
('71cdf2ba'),
('71ebc5ba'),
('71edeeba'),
('8102baba'),
('8104d1ba'),
('8106b5ba'),
('810fc1ba'),
('8110e8ba'),
('8111d7ba'),
('8113e8ba'),
('8123eaba'),
('813dcbba'),
('813ddeba'),
('813fd5ba'),
('8144c6ba'),
('8152d8ba'),
('8152fdba'),
('8155cbba'),
('8159e3ba'),
('8166f7ba'),
('816ee6ba'),
('818cedba'),
('818ef8ba'),
('818fc9ba'),
('819aedba'),
('819dcfba'),
('81aaddba'),
('81bbbeba'),
('81c1baba'),
('81c9edba'),
('81cebdba'),
('81d3e6ba'),
('81d4ebba'),
('81dcf7ba'),
('81e5f0ba'),
('81e8cdba'),
('81ebccba'),
('81f0f1ba'),
('81f1f2ba'),
('81f2b4ba'),
('81febfba'),
('81fff0ba'),
('85d9f8c2'),
('9102c9ba'),
('912bd3ba'),
('9131c1ba'),
('9132cbba'),
('9139c4ba'),
('9148faba'),
('9161b6ba'),
('9165b6ba'),
('9165f9ba'),
('9168c5ba'),
('9169e5ba'),
('916cbcba'),
('916deeba'),
('916fb9ba'),
('9171f2ba'),
('918aebba'),
('918cc3ba'),
('919dc9ba'),
('91abc9ba'),
('91afc8ba'),
('91b4cdba'),
('91b5f2ba'),
('91bbc8ba'),
('91cfc6ba'),
('91fcd3ba'),
('91fef3ba'),
('91ffe9ba'),
('a100cdba'),
('a116f0ba'),
('a117d1ba'),
('a122f9ba'),
('a12ac9ba'),
('a141e5ba'),
('a143e0ba'),
('a149b8ba'),
('a14bcaba'),
('a150c5ba'),
('a15de2ba'),
('a161dbba'),
('a162cdba'),
('a162d7ba'),
('a165b43b'),
('a171d8ba'),
('a174e2ba'),
('a179fdba'),
('a17fc2ba'),
('a18ab5ba'),
('a1aad4ba'),
('a1adc1ba'),
('a1b3f6ba'),
('a1beeeba'),
('a1bfe9ba'),
('a1bff7ba'),
('a1c3e1ba'),
('a1c6ccba'),
('a1c8dbba'),
('a1d7f3ba'),
('a1e9d7ba'),
('a1eaefba'),
('a1eeecba'),
('a1f3d3ba'),
('a1f5ebba'),
('b100f0ba'),
('b10dbdba'),
('b11ebdba'),
('b13abcba'),
('b157c4ba'),
('b161e0ba'),
('b189c8ba'),
('b18ad7ba'),
('b192e5ba'),
('b194f1ba'),
('b19df1ba'),
('b1a7c9ba'),
('b1b9e3ba'),
('b1bdc5ba'),
('b1bdf7ba'),
('b1c0b4ba'),
('b1c2fcba'),
('b1cbf2ba'),
('b1e2c7ba'),
('b1eaf8ba'),
('b1eef2ba'),
('b1f8caba'),
('b1fbd4ba'),
('b1fdc6ba'),
('bbbbbb'),
('c103cfba'),
('c10dd5ba'),
('c10fc7ba'),
('c112d9ba'),
('c134b6ba'),
('c142c0ba'),
('c143c0ba'),
('c148cbba'),
('c14ac8ba'),
('c150e8ba'),
('c158ebba'),
('c159bcba'),
('c15ac6ba'),
('c15ed2ba'),
('c160e9ba'),
('c164c6ba'),
('c169bfba'),
('c16ddaba'),
('c177d0ba'),
('c178c0ba'),
('c17cd2ba'),
('c182e8ba'),
('c184f9ba'),
('c190daba'),
('c195fcba'),
('c1a5c3ba'),
('c1aff3ba'),
('c1bebbba'),
('c1c6e6ba'),
('c1cef7ba'),
('c1d0c3ba'),
('c1d6daba'),
('c1e4caba'),
('c1eae6ba'),
('c1f5e6ba'),
('c1f9cfba'),
('c1fab9ba'),
('c1fbc0ba'),
('c1fdc6ba'),
('d102f6ba'),
('d109fbba'),
('d10ac8ba'),
('d111f5ba'),
('d121c0ba'),
('d122f8ba'),
('d12ac1ba'),
('d13ac5ba'),
('d148faba'),
('d157caba'),
('d15af8ba'),
('d15fd7ba'),
('d166cfba'),
('d167f4ba'),
('d17ceeba'),
('d187bfba'),
('d18fddba'),
('d191caba'),
('d192edba'),
('d19af5ba'),
('d19cecba'),
('d19fb9ba'),
('d1a7eaba'),
('d1b8f4ba'),
('d1c1c5ba'),
('d1c1cdba'),
('d1dac1ba'),
('d1dde2ba'),
('d1dfd1ba'),
('d1efe3ba'),
('d1fdc1ba'),
('e104b6ba'),
('e121e5ba'),
('e122f2ba'),
('e128bdba'),
('e128d5ba'),
('e146bcba'),
('e14dcbba'),
('e15dd6ba'),
('e163baba'),
('e171b5ba'),
('e17de0ba'),
('e188d1ba'),
('e188ddba'),
('e18ac4ba'),
('e1abc0ba'),
('e1afbcba'),
('e1bfe3ba'),
('e1c8c5ba'),
('e1caeeba'),
('e1d6cdba'),
('e1d7f5ba'),
('e1dbdcba'),
('e1dbeaba'),
('e1dfd7ba'),
('e1e4eaba'),
('e1efe3ba'),
('e1f3f8ba'),
('f100bdba'),
('f106c7ba'),
('f10fc1ba'),
('f117c2ba'),
('f141ccba'),
('f149e5ba'),
('f14accba'),
('f14af7ba'),
('f150faba'),
('f159bbba'),
('f166b7ba'),
('f16eb8ba'),
('f170b5ba'),
('f170d9ba'),
('f18dbfba'),
('f19be3ba'),
('f1a7d9ba'),
('f1adc2ba'),
('f1aebeba'),
('f1b1ceba'),
('f1b2d2ba'),
('f1b5f6ba'),
('f1e9bbba'),
('f1e9d5ba'),
('f1ebf0ba'),
('f1f6e5ba'),
('f1f9bdba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `act_socios`
--
ALTER TABLE `act_socios`
  ADD PRIMARY KEY (`id_act`,`dni_socio`) USING BTREE,
  ADD KEY `id_act` (`id_act`) USING BTREE,
  ADD KEY `dni_socio` (`dni_socio`);

--
-- Indices de la tabla `act_staff`
--
ALTER TABLE `act_staff`
  ADD KEY `id_act4` (`id_act4`),
  ADD KEY `dni_staff2` (`dni_staff2`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`dni_socio`),
  ADD UNIQUE KEY `uid3` (`uid3`),
  ADD UNIQUE KEY `uri_foto` (`uri_foto`),
  ADD KEY `uid3_2` (`uid3`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`dni_staff`),
  ADD KEY `uid2` (`uid2`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_act` int(5) NOT NULL AUTO_INCREMENT COMMENT 'identificador actividad', AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `act_socios`
--
ALTER TABLE `act_socios`
  ADD CONSTRAINT `act_socios_ibfk_1` FOREIGN KEY (`dni_socio`) REFERENCES `socios` (`dni_socio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `act_socios_ibfk_2` FOREIGN KEY (`id_act`) REFERENCES `actividad` (`id_act`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

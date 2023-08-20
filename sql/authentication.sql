-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-08-2023 a las 20:52:56
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `authentication`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE IF NOT EXISTS `t_user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(150) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_fullname` varchar(80) DEFAULT NULL,
  `user_bio` varchar(150) DEFAULT NULL,
  `user_phone` int DEFAULT NULL,
  `user_url_foto` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `t_user`
--

INSERT INTO `t_user` (`user_id`, `user_email`, `user_password`, `user_fullname`, `user_bio`, `user_phone`, `user_url_foto`) VALUES
(1, 'galiano@outlook.com', '$2y$10$dtFnaQT6xMTNbywTqLYQQ.x6955KKIDQzR3CcToSm90C8cs41rYKW', 'Francesco Galiano', 'System engineer, master of ceremonies, manager, photographer, teacher & coach.', 979359258, '/data/galiano.JPG'),
(2, 'italogal@hotmail.com', '$2y$10$cfBpEB1pvpVpd/ThMUZ78OCv2wSvl.rkK127IWhZ7Pn0EUYifj/FO', 'Italo Galiano', 'Productor musical y vídeo intérprete médico', 989265765, '/data/Italo.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

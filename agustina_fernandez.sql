-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.42-0ubuntu0.18.04.1 - (Ubuntu)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para agustina_fernandez
CREATE DATABASE IF NOT EXISTS `agustina_fernandez` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agustina_fernandez`;

-- Volcando estructura para tabla agustina_fernandez.registro
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla agustina_fernandez.registro: ~7 rows (aproximadamente)
DELETE FROM `registro`;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` (`id`, `name`, `lastname`, `email`, `password`, `fecha`) VALUES
	(9, 'agustina', 'fernandez', 'agustina@gmail.com', 'agustina', '2023-08-24 21:36:52'),
	(14, 'agus', 'fernandez', 'agustinafernandez@email.com', '48657932', '2023-08-24 23:10:03'),
	(15, 'agustina', 'fernandez', 'agustina.fer91@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auqxRv7fqeDQ95K0TOkyouPuuGK0XaSYW', '2023-08-24 22:03:50'),
	(16, 'agustina', 'fernandez', 'agtina@gmaild.com', '48657921', '2023-08-24 22:56:01'),
	(18, 'mariana', 'beioffd', 'mariana@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', '2023-08-24 23:11:09'),
	(19, 'monica', 'mayo', 'monicamayo@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auzKQSi7nqbi/VL86DkFF971/AdOMP5B6', '2023-08-24 23:06:46'),
	(20, 'admin', 'admin', 'admin@admin.com', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', '2023-08-24 23:13:28');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `rubro` int(11) DEFAULT NULL,
  `precio` float(11,2) DEFAULT NULL,
  `stockMin` int(18) DEFAULT NULL,
  `fechaRepo` date DEFAULT NULL,
  `fechaRepoCocina` date DEFAULT NULL,
  `stockCocina` int(11) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `acumVend` varchar(60) DEFAULT NULL,
  `fraccion` int(11) DEFAULT NULL,
  `cantRep` int(18) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

CREATE TABLE `clientearticulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clienteId` int(11) DEFAULT NULL,
  `articuloId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clienteId` (`clienteId`),
  KEY `articuloId` (`articuloId`),
  CONSTRAINT `clientearticulo_ibfk_1` FOREIGN KEY (`clienteId`) REFERENCES `clientes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `clientearticulo_ibfk_2` FOREIGN KEY (`articuloId`) REFERENCES `articulos` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `apodo` varchar(20) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `cumulado` int(11) DEFAULT '0',
  `mesaId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `mesa_id` (`mesaId`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`mesaId`) REFERENCES `mesas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

CREATE TABLE `historialcortes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` time DEFAULT NULL,
  `cumulado` int(39) DEFAULT NULL,
  `cortar_en` int(11) DEFAULT NULL,
  `game` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billar_type` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT '1',
  `token` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `articulos` (`id`, `nombre`, `rubro`, `precio`, `stockMin`, `fechaRepo`, `fechaRepoCocina`, `stockCocina`, `existencia`, `acumVend`, `fraccion`, `cantRep`) VALUES
(6, ' Fanta', 3, 200.00, 200, '2022-08-27', '2022-08-31', 30, 100, '0', 1, 100);


INSERT INTO `clientearticulo` (`id`, `clienteId`, `articuloId`) VALUES
(113, 1, NULL);
INSERT INTO `clientearticulo` (`id`, `clienteId`, `articuloId`) VALUES
(114, 1, NULL);
INSERT INTO `clientearticulo` (`id`, `clienteId`, `articuloId`) VALUES
(115, 4, NULL);
INSERT INTO `clientearticulo` (`id`, `clienteId`, `articuloId`) VALUES
(116, 4, NULL),
(117, 4, NULL),
(118, 1, NULL),
(119, 1, NULL),
(120, 1, NULL),
(121, 12, NULL),
(122, 12, NULL),
(123, 1, NULL);

INSERT INTO `clientes` (`id`, `nombre`, `apodo`, `telefono`, `cumulado`, `mesaId`) VALUES
(1, 'Matias', 'Riva', '32131321', 250, 1);
INSERT INTO `clientes` (`id`, `nombre`, `apodo`, `telefono`, `cumulado`, `mesaId`) VALUES
(3, 'Vale', 'Comba', '32131321', 0, 2);
INSERT INTO `clientes` (`id`, `nombre`, `apodo`, `telefono`, `cumulado`, `mesaId`) VALUES
(4, 'Benja', 'Chaves', '32131321', 0, 1);
INSERT INTO `clientes` (`id`, `nombre`, `apodo`, `telefono`, `cumulado`, `mesaId`) VALUES
(5, 'Jeronimo', 'negto', '32131321', 0, 2),
(10, ' Nicolas', 'nikin', '03516640106', 0, 2),
(11, ' Vicente', 'Conrero', '3516640106', 0, 1),
(12, ' Gustavo', 'Conrero', '3516506248', 500, 1);

INSERT INTO `historialcortes` (`id`, `fecha`, `cumulado`, `cortar_en`, `game`) VALUES
(7, '10:36:00', 700, 3, '1 ');
INSERT INTO `historialcortes` (`id`, `fecha`, `cumulado`, `cortar_en`, `game`) VALUES
(8, '10:36:00', 700, 1, '1 ');
INSERT INTO `historialcortes` (`id`, `fecha`, `cumulado`, `cortar_en`, `game`) VALUES
(9, '20:45:00', 1900, 2, '2 ');
INSERT INTO `historialcortes` (`id`, `fecha`, `cumulado`, `cortar_en`, `game`) VALUES
(10, '22:10:00', 2100, 4, '2 ');

INSERT INTO `mesas` (`id`, `billar_type`) VALUES
(0, 0);
INSERT INTO `mesas` (`id`, `billar_type`) VALUES
(1, 0);
INSERT INTO `mesas` (`id`, `billar_type`) VALUES
(2, 0);
INSERT INTO `mesas` (`id`, `billar_type`) VALUES
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1);

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `admin`, `confirmado`, `token`) VALUES
(7, 'Billar_user', '', 'correo@correo.com', '$2y$10$h4MD1QEXafN3b9zvxpyd1u5xdXPv9AOhswJmaXxU6z4Hl0S502rqS', '03516640106', 0, 1, '');
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `admin`, `confirmado`, `token`) VALUES
(8, 'Billar_user', '', 'correo1@correo.com', '$2y$10$I5j03J4KZAxyIw0ImYJgK.2BOVHreIEh9fVop2AuaA6CVjf5cPI7i', '03516640106', 0, 1, '');
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `admin`, `confirmado`, `token`) VALUES
(16, ' Jeronimo', 'abdala', 'correoq@correo.com', '$2y$10$7.wNj25C2jaBz07UicAXQOMA/tGsunm1qQ.ExbIRaKUQsJSWzU5wO', '03516640106', 0, 1, '627c4e1c6bbef ');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
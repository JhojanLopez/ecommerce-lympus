-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.62 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para u228561512_wolfhunter
CREATE DATABASE IF NOT EXISTS `u228561512_wolfhunter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `u228561512_wolfhunter`;

-- Volcando estructura para tabla u228561512_wolfhunter.metodo_pago
CREATE TABLE IF NOT EXISTS `metodo_pago` (
  `codigo` bigint(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `nombre_banco` varchar(50) NOT NULL DEFAULT '',
  `numero_cuenta` bigint(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.metodo_pago: ~6 rows (aproximadamente)
DELETE FROM `metodo_pago`;
/*!40000 ALTER TABLE `metodo_pago` DISABLE KEYS */;
INSERT INTO `metodo_pago` (`codigo`, `tipo`, `nombre_banco`, `numero_cuenta`) VALUES
	(1, 'consignacion', 'EXTERNO', 1223452345);
/*!40000 ALTER TABLE `metodo_pago` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `codigo` bigint(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `existencia` bigint(11) NOT NULL,
  `precio` bigint(11) NOT NULL,
  `costo` bigint(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.productos: ~81 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`codigo`, `nombre`, `marca`, `tipo`, `existencia`, `precio`, `costo`, `descripcion`, `imagen`) VALUES
	(1, 'Celular Xiaomi Redmi Note 11 128GB', 'Xiaomi', 'Celular', 5, 799900, 750000, '\n  Tamaño de la pantalla: 6.4 pulgadas\n  Cámara posterior: 50MP (8+2+2)\n  Cámara frontal: 13MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Xiaomi/Xiaomi_Redmi_Note_11.jpg'),
	(2, 'Celular Xiaomi Redmi 9A 32GB', 'Xiaomi', 'Celular', 5, 470900, 450000, '  Tamaño de la pantalla: 6.5 pulgadas\r\n  Cámara posterior: 13MP\r\n  Cámara frontal: 5MP\r\n  Memoria interna: 32GB\r\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Xiaomi/Xiaomi_redmi_9a_grande.jpg'),
	(3, 'Celular Xiaomi Redmi 10 128gb 4ram Gris', 'Xiaomi', 'Celular', 5, 737900, 700000, '\n  Tamaño de la pantalla: 6.5 pulgadas\n  Cámara posterior: Sobre 40MP\n  Cámara frontal: 8MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Xiaomi/Xiaomi_redmi_10_grande.jpg'),
	(4, 'Celular Xiaomi 12 8GB 256 GB + Watch S1 Active', 'Xiaomi', 'Celular', 5, 4199900, 3500900, '\n  Tamaño de la pantalla: 6.3 pulgadas\n  Cámara posterior: 50MP (13MP+5MP)\n  Cámara frontal: 32MP\n  Memoria interna: 256GB\n  Batería: 4500 mAh', 'img/imgGrandes/Celulares/Xiaomi/Xiaomi_12_grande.jpg'),
	(5, 'Celular Xiaomi Redmi 10C 4GB 128GB', 'Xiaomi', 'Celular', 5, 835900, 780900, '\n  Tamaño de la pantalla: 6.7 pulgadas\n  Cámara posterior: 50MP + 2MP\n  Cámara frontal: 5MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Xiaomi/Xiaomi_Redmi_10c_grande.jpg'),
	(6, 'Celular Xiaomi Poco X3 PRO Phantom 128GB', 'Xiaomi', 'Celular', 5, 1399900, 1199900, '\n  Tamaño de la pantalla: 6.67 pulgadas\n  Cámara posterior: 48MP(8MP + 2MP + 2MP)\n  Cámara frontal: 20MP\n  Memoria interna: 128GB\n  Batería: 5160 mAh', 'img/imgGrandes/Celulares/Xiaomi/Xiaomi_poco_X3_pro_phantom_grande.jpg'),
	(7, 'Celular Motorola Moto G60S 128GB', 'Motorola', 'Celular', 5, 999900, 800900, '\n  Tamaño de la pantalla: 6.8 pulgadas\n  Cámara posterior:64MP + 8MP + 5MP + 2MP\n  Cámara frontal: 16MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Motorola/Motorola_moto_G60s_grande.jpg'),
	(8, 'Celular Motorola Moto G31 128GB', 'Motorola', 'Celular', 5, 1399900, 1200900, '\n  Tamaño de la pantalla: 6.4 pulgadas\n  Cámara posterior: 50MP + 8MP (wide & depth) + 2MP (macro)\n  Cámara frontal: 13MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Motorola/Motorola_Moto_G31_grande.jpg'),
	(9, 'Celular Motorola 4G Moto G20 128GB', 'Motorola', 'Celular', 5, 1199900, 1000900, '\n  Tamaño de la pantalla: 6.5 pulgadas\n  Cámara posterior:48MP + 8MP + 2MP + 2MP\n  Cámara frontal: 13MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Motorola/Motorola_4G_Moto_G20_grande.jpg'),
	(10, 'Celular Motorola Moto G41 128GB', 'Motorola', 'Celular', 5, 789900, 600000, '\n  Tamaño de la pantalla: 6.4 pulgadas\n  Cámara posterior: 48MP + 8MP (wide & depth) + 2MP (macro)\n  Cámara frontal: 13MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Motorola/Motorola_Moto_G41_grande.jpg'),
	(11, 'Celular Motorola Moto Edge 20 Lite 128GB', 'Motorola', 'Celular', 5, 789900, 600000, '\n  Tamaño de la pantalla: 6.7 pulgadas\n  Cámara posterior: 108MP + 8MP + 2MP\n  Cámara frontal: 32MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Motorola/Motorola_Moto_Edge_20_grande.png'),
	(13, 'Celular Motorola Edge 30 Pro 256GB', 'Motorola', 'Celular', 5, 3999900, 3799900, '\n  Tamaño de la pantalla: 6.8 pulgadas\n  Cámara posterior: 50MP + 50MP (wide & macro) + 2MP (depth)\n  Cámara frontal: 32MP\n  Memoria interna: 256GB\n  Batería: 4800 mAh', 'img/imgGrandes/Celulares/Motorola/Motorola_edge_30_pro_grande.jpg'),
	(14, 'iPhone 11 128GB', 'Apple', 'Celular', 5, 2689900, 2489900, '\n  Tamaño de la pantalla: 6.1 pulgadas\n  Cámara posterior: 12MP\n  Cámara frontal: 12MP\n  Memoria interna: 128GB\n  Núcleos del procesador: No aplica', 'img/imgGrandes/Celulares/Iphone/iPhone11_grande.png'),
	(15, 'iPhone 13 mini 128 GB', 'Apple', 'Celular', 5, 3729900, 3529900, '\n  Tamaño de la pantalla: 5.4 pulgadas\n  Cámara posterior: 12MP\n  Cámara frontal: 12MP\n  Memoria interna: 128GB\n  Núcleos del procesador: Hexa Core', 'img/imgGrandes/Celulares/Iphone/iphone_13_grande.png'),
	(16, 'iPhone 12 64GB', 'Apple', 'Celular', 5, 3599900, 3299900, '\n  Tamaño de la pantalla: 6.1 pulgadas\n  Cámara posterior: 12MP\n  Cámara frontal: 12MP\n  Memoria interna: 64GB\n  Núcleos del procesador: No aplica', 'img/imgGrandes/Celulares/Iphone/iPhone_12_grande.png'),
	(17, 'iPhone 13 Pro Max 256 GB', 'Apple', 'Celular', 5, 6389900, 6189900, '\n  Tamaño de la pantalla: 6.7 pulgadas\n  Cámara posterior: 12MP\n  Cámara frontal: 12MP\n  Memoria interna: 256GB\n  Núcleos del procesador: Hexa Core', 'img/imgGrandes/Celulares/Iphone/Iphone_13_pro_max_grande.png'),
	(18, 'iPhone SE 128GB 3ra Generación', 'Apple', 'Celular', 5, 2629900, 2429900, '\n  Tamaño de la pantalla: 6.5 pulgadas\n  Tamaño de la pantalla: 4.7 pulgadas\n  Cámara posterior: 12MP\n  Cámara frontal: 7MP\n  Memoria interna: 128GB\n  Batería: No aplica', 'img/imgGrandes/Celulares/Iphone/Iphone_SE_grande.jpg'),
	(19, 'Celular Samsung Galaxy A52 128GB', 'Samsung', 'Celular', 5, 1399900, 1199900, '\n  Tamaño de la pantalla: 6.5 pulgadas\n  Cámara posterior: 64.0MP + 12.0MP + 5.0MP + 5.0MP\n  Cámara frontal: 32MP\n  Memoria interna: 128GB\n  Batería: 4500 mAh', 'img/imgGrandes/Celulares/Samsung/Samsung_Galaxy_A52_grande.png'),
	(20, 'Celular Samsung Galaxy A33 5G 6GB 128GB', 'Samsung', 'Celular', 5, 1299900, 1099900, '\n  Cámara posterior: 48MP + 8MP + 5MP + 2MP\n  Cámara frontal: 13MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh\n  Núcleos del procesador: Octa Core', 'img/imgGrandes/Celulares/Samsung/Samsung_A33_grande.png'),
	(21, 'Celular Samsung Galaxy A23 128GB', 'Samsung', 'Celular', 5, 835900, 735900, '\n  Cámara posterior: 50MP + 8MP + 2MP\n  Cámara frontal: 8MP\n  Memoria interna: 128GB\n  Batería: 5000 mAh\n  Núcleos del procesador: Octa Core', 'img/imgGrandes/Celulares/Samsung/Samsung_Galaxy_A23_grande.png'),
	(22, 'Celular Samsung Galaxy A03 64GB', 'Samsung', 'Celular', 5, 599900, 499900, '\n  Tamaño de la pantalla: 6.5 pulgadas\n  Cámara posterior: 48.0 MP + 2.0 MP\n  Cámara frontal: 5MP\n  Memoria interna: 64GB\n  Batería: 5000 mAh', 'img/imgGrandes/Celulares/Samsung/Samsung_A03_grande.png'),
	(23, 'Celular Samsung Galaxy S20 FE 5G 128GB', 'Samsung', 'Celular', 5, 1999900, 1799900, '\n  Tamaño de la pantalla: 6.5 pulgadas\n  Cámara posterior: 12MP + 8MP + 12MP\n  Cámara frontal: 32MP\n  Memoria interna: 128GB\n  Batería: 4500 mAh', 'img/imgGrandes/Celulares/Samsung/Samsung_Galaxy_S20_FE_grande.png'),
	(24, 'Celular Samsung Galaxy S22 8GB 128GB + Buds2', 'Samsung', 'Celular', 5, 3899900, 3699900, '\n  Tamaño de la pantalla: 6.2 pulgadas\n  Cámara posterior: 50MP + 10MP + 12MP\n  Cámara frontal: 10MP\n  Memoria interna: 128GB\n  Batería: 3700 mAh', 'img/imgGrandes/Celulares/Samsung/Samsung_galaxy_S22_grande.jpg'),
	(25, 'Celular Samsung Galaxy Z Flip 3 256GB', 'Samsung', 'Celular', 5, 4299900, 4099900, '\n  Tamaño de la pantalla: 6.7 pulgadas\n  Cámara posterior: 12 MP + 12 MP\n  Cámara frontal: 10MP\n  Memoria interna: 256GB\n  Batería: 3300 mAh', 'img/imgGrandes/Celulares/Samsung/Samdung_Galaxy_Z_flip_3_grande.png'),
	(26, 'Celular Huawei Nova 9 128GB', 'Huawei', 'Celular', 5, 1899900, 1699900, '\n  Tamaño de la pantalla: 6.57 pulgadas\n  Cámara posterior:50MP + 8MP + 2MP + 2MP\n  Cámara frontal: 32MP\n  Memoria interna: 128GB\n  Batería: 4300 mAh', 'img/imgGrandes/Celulares/Huawei/Huawei_nova_9_grande.png'),
	(27, 'Celular Huawei P50 Pro 256GB', 'Huawei', 'Celular', 5, 3999900, 3799900, '\n  Tamaño de la pantalla: 6.6 pulgadas\n  Cámara posterior: 50MP + 40MP + 13MP + 64MP\n  Cámara frontal: 13MP\n  Memoria interna: 256GB\n  Batería: 4360 mAh', 'img/imgGrandes/Celulares/Huawei/Huawei_P50_pro_grande.jpg'),
	(28, 'Celular Huawei Y9A 128GB con HMS ', 'Huawei', 'Celular', 5, 1049900, 1000900, '\n  Tamaño de la pantalla: 6.6 pulgadas\n  Cámara posterior: 64M\n  Cámara frontal: 16MP\n  Memoria interna: 128GB\n  Batería: 4.300 mAh', 'img/imgGrandes/Celulares/Huawei/Huawei_Y9A_grande.jpg'),
	(29, 'Celular Huawei Nova Y70 128GB', 'Huawei', 'Celular', 5, 735900, 735900, '\n  Tamaño de la pantalla: 6.7 pulgadas\n  Cámara posterior: 48 MP  + 5 MP + 2 MP \n  Cámara frontal: 8MP\n  Memoria interna: 128GB\n  Batería: 6000 mAh', 'img/imgGrandes/Celulares/Huawei/Huawei_Nova_Y70_grande.jpg'),
	(31, 'iMac Apple Pantalla Retina 4.5K 24 Pulgadas Chip M1 8GB 256GB', 'Apple', 'Computador', 5, 7299900, 7099900, '\n  Procesador: Chip M1\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 256GB\n  Modelo tarjeta de video: No aplica\n  Resolución de la pantalla: Retina 4.5k (4480x2520)', 'img/imgGrandes/Computadores/Apple/iMac_apple_Pantalla_grande.png'),
	(32, 'Monitor Apple Studio Display Base con Inclinación Ajustable 27 Pulgadas', 'Apple', 'Computador', 5, 8199000, 8099000, '\n   Marca: Apple\n  Modelo: Studio Display\n  Tipo: Monitores digitales\n  Alto: 47.8 cm\n  Ancho: 62.3 cm', 'img/imgGrandes/Computadores/Apple/Monitor_Apple_Studio_grande.jpg'),
	(33, 'MacBook Air Chip M1 CPU 8 Núcleos GPU 7 Núcleos 256GB SSD MGND3LA/A 13 Pulgadas', 'Apple', 'Computador', 5, 5239900, 5039900, '\n  Procesador: Chip M1\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 256GB\n  Resolución de la pantalla: WQXGA (2560X1600)\n  Tamaño de la pantalla: 13 pulgadas', 'img/imgGrandes/Computadores/Apple/MacBook_Air_Chip_M1_grande.png'),
	(34, 'MacBook Pro Chip M1 CPU 8 Núcleos GPU 8 Núcleos 256GB SSD MYDA2LA/A 13 Pulgadas', 'Apple', 'Computador', 5, 5239900, 5039900, '\n  Procesador: Chip M1\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 256GB\n  Modelo tarjeta de video: CPU & GPU integrados en el Chip M1\n  Resolución de la pantalla: WQXGA (2560X1600)', 'img/imgGrandes/Computadores/Apple/MacBook_Pro_Chip M1_grande.png'),
	(35, 'Portátil Gamer HP Victus 16.1 Pulgadas Intel Core i5 8GB 512GB', 'HP', 'Computador', 5, 3499900, 3299900, '\n  Procesador	Intel Core i5\n  Memoria RAM	8GB\n  Unidad de estado sólido SSD	512GB\n  Modelo tarjeta de video	NVIDIA GEFORCE GTX 1650\n  Resolución de la pantalla	Full HD (1920x1080)\n  Tamaño de la pantalla	16.1 pulgadas', 'img/imgGrandes/Computadores/HP/Portátil_Gamer_HP_grande.jpg'),
	(36, 'Portátil HP 15.6 Pulgadas AMD Ryzen R7 16GB 512GB', 'HP', 'Computador', 5, 3249900, 3049900, '\n  Procesador: AMD RYZEN R7\n  Memoria RAM: 16GB\n  Unidad de estado sólido SSD: 512GB\n  Modelo tarjeta de video: No aplica\n  Resolución de la pantalla: WXGA (1366x768)', 'img/imgGrandes/Computadores/HP/Portátil_HP_AMD_Ryzen_grande.jpg'),
	(37, 'Computador de Escritorio All In One HP 23.8 Pulgadas AMD Ryzen R3 8GB 256GB', 'HP', 'Computador', 5, 1699900, 1499900, '\n  Procesador: AMD RYZEN R3\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 256GB\n  Modelo tarjeta de video: No aplica\n  Resolución de la pantalla: Full HD (1920x1080)', 'img/imgGrandes/Computadores/HP/Computador_All_In_One_HP_grande.png'),
	(38, 'Monitor para PC HP 21 Pulgadas', 'HP', 'Computador', 5, 699900, 599900, '\n  Marca: HP\n  Modelo: HP 22f\n  Alto: 38.1 cm\n  Ancho: 49 cm', 'img/imgGrandes/Computadores/HP/Monitor_PC_HP_grande.jpg'),
	(39, 'Portátil Gamer Lenovo 15.6 Pulgadas AMD RYZEN R7 8GB 1TB 128GB', 'Lenovo', 'Computador', 5, 4199900, 4099900, '\n  Procesador: AMD RYZEN R7\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 128GB\n  Modelo tarjeta de video: NVIDIA GEFORCE GTX 1650\n  Resolución de la pantalla: Full HD (1920x1080)', 'img/imgGrandes/Computadores/Lenovo/Portátil_Gamer_Lenovo_grande.jpg'),
	(40, 'Computador de Escritorio Lenovo AIO 3 23.8 Pulgadas AMD Athlon Silver 4GB 256GB', 'Lenovo', 'Computador', 5, 1709900, 1509900, '\n  Procesador: AMD Athlon Silver\n  Memoria RAM: 4GB\n  Unidad de estado sólido SSD: 256GB\n  Modelo tarjeta de video: No aplica\n  Resolución de la pantalla: Full HD (1920x1080)', 'img/imgGrandes/Computadores/Lenovo/Computador_Escritorio_lenovo_grande.jpg'),
	(41, 'Portátil Lenovo Notebook 14 Pulgadas Intel Core i5 16GB 256GB', 'Lenovo', 'Computador', 5, 2999900, 2799900, '\n  Procesador: Intel Core i5\n  Memoria RAM: 16GB\n  Unidad de estado sólido SSD: 256GB\n  Modelo tarjeta de video: No aplica\n  Resolución de la pantalla: HD (1280X720)', 'img/imgGrandes/Computadores/Lenovo/Portátil_Lenovo_Notebook_14_grande.jpg'),
	(42, 'Portátil Lenovo 14w G7 Amd A6-9220c, 4gb Ram, Ssd.', 'Lenovo', 'Computador', 5, 870900, 770900, '\n  Procesador: AMD A6\n  Memoria RAM: 4GB\n  Tamaño de la pantalla: 14 pulgadas\n  Disco duro HDD: 128GB\n  Unidad de estado sólido SSD: 128GB\n  Velocidad del procesador: 2', 'img/imgGrandes/Computadores/Lenovo/Portátil_Lenovo_14w_grande.png'),
	(43, 'Portátil Gamer Asus TUF F15 15.6 Pulgadas Intel Core i5 8GB 512GB', 'Asus', 'Computador', 5, 3449900, 3249900, '\n  Procesador: Intel Core i5\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 512GB\n  Modelo tarjeta de video: NVIDIA GEFORCE GTX 1650\n  Resolución de la pantalla: Full HD (1920x1080)', 'img/imgGrandes/Computadores/Asus/Portátil_Gamer_Asus_TUF_grande.jpg'),
	(44, 'Portátil Asus VivoBook 14 Pulgadas Intel Core i5 8GB 512GB', 'Asus', 'Computador', 5, 2799900, 2599900, '\n  Procesador: Intel Core i5\n  Memoria RAM: 8GB\n  Unidad de estado sólido SSD: 512GB\n  Modelo tarjeta de video: Intel Iris X Graphics\n  Resolución de la pantalla: Full HD (1920x1080)', 'img/imgGrandes/Computadores/Asus/Portátil_Asus_VivoBook_grande.png'),
	(45, 'Portátil Asus E410Ma 14" Intel Celeron 4Gb 256Ssd', 'Asus', 'Computador', 5, 980000, 880000, '\n  Procesador: Intel celeron\n  Modelo tarjeta de video: No aplica\n  Tamaño de la pantalla: 14 pulgadas\n  Disco duro HDD: No aplica\n  Unidad de estado sólido SSD: 256gb', 'img/imgGrandes/Computadores/Asus/Portátil_Asus_Intel_Celeron_grande.jpg'),
	(46, 'Monitor Asus Proart Display 27 Ips Wqhd Pa278qv', 'Asus', 'Computador', 5, 2999900, 2799900, '\n  Alto: 37,2 cm\n  Ancho: 61,5 cm\n  Profundidad: 5,1 cm\n  Peso del producto: 4.83 Kg\n Tipo de pantalla: Plana\n  Tamaño de la pantalla: 27 pulgadas', 'img/imgGrandes/Computadores/Asus/Monitor_Asus_Proart_Display_27_grande.png'),
	(48, 'Televisor LG 70 Pulgadas NANO CELL 4K Ultra HD Smart TV', 'LG', 'Televisor', 5, 3849900, 3649900, '\n  Tamaño de la pantalla: 70 pulgadas\n  Tecnología: NANO CELL\n  Modelo: 70NANO75SPA\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Lg/Televisor_LG_70_grande.jpg'),
	(49, 'Televisor LG 32 pulgadas LED HD Smart TV', 'LG', 'Televisor', 5, 1169900, 1069900, '\n  Tamaño de la pantalla: 32 pulgadas\n  Resolución: HD\n  Tecnología: LED\n  Conexión Bluetooth: Sí\n  Entradas USB: 1', 'img/imgGrandes/Televisores/Lg/Televisor_LG_32_grande.png'),
	(50, 'Televisor LG 43 Pulgadas LED 4K Ultra HD Smart TV', 'LG', 'Televisor', 5, 2029900, 1829900, '\n  Tamaño de la pantalla: 43 pulgadas\n  Tecnología: LED\n  Modelo: 43UP7500PSF\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Lg/Televisor_LG_43_grande.jpg'),
	(51, 'Televisor LG 75 Pulgadas QNED 8K Smart TV', 'LG', 'Televisor', 5, 17689900, 16689900, '\n  Tamaño de la pantalla: 75 pulgadas\n  Tecnología: QNED\n  Modelo: 75QNED99SPA\n  Tasa de refresco: 120Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Lg/Televisor_LG_75_grande.jpg'),
	(52, 'Televisor Samsung 32 pulgadas QLED Full HD Smart TV', 'Samsung', 'Televisor', 5, 1799900, 1599900, '\n  Tamaño de la pantalla: 32 pulgadas\n  Tecnología: QLED\n  Modelo: QN32LS03BBKXZL\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Samsung/Televisor_Samsung_32_grande.jpg'),
	(53, 'Televisor Samsung 55 Pulgadas NEO QLED 4K Ultra HD Smart TV', 'Samsung', 'Televisor', 5, 4619900, 4419900, '\n  Tamaño de la pantalla: 55 pulgadas\n  Tecnología: NEO QLED\n  Modelo: QN55QN85AAKXZ\n  Tasa de refresco: 120Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Samsung/Televisor_Samsung_55_grande.jpg'),
	(54, 'Televisor Samsung 43 Pulgadas Crystal UHD 4K Ultra HD Smart TV', 'Samsung', 'Televisor', 5, 1799900, 1599900, '\n  Tamaño de la pantalla: 43 pulgadas\n  Tecnología: Crystal UHD\n  Modelo: UN43BU8000KXZL\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Samsung/Televisor_Samsung_grande_43_grande.png'),
	(55, 'Televisor Samsung 65 Pulgadas QLED 4K Ultra HD Smart TV', 'Samsung', 'Televisor', 5, 3619900, 3319000, '\n  Tamaño de la pantalla: 65 pulgadas\n  Tecnología: QLED\n  Modelo: QN65Q65BAKXZL\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Samsung/Televisor_Samsung_55_grande.jpg'),
	(56, 'Televisor Xiaomi 55 Pulgadas LED 4K Ultra HD Smart TV', 'Xiaomi', 'Televisor', 5, 1899900, 1699900, '\n  Tamaño de la pantalla: 55 pulgadas\n  Tecnología: LED\n  Modelo: Mi TV P1 55 pulgadas\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Xiaomi/xiaomi_tv_55_grande.png'),
	(57, 'Televisor Xiaomi 43 Pulgadas LED 4K Ultra HD Smart TV', 'Xiaomi', 'Televisor', 5, 1399900, 1199900, '\n  Tamaño de la pantalla: 43 pulgadas\n  Tecnología: LED\n  Modelo: Mi TV P1 43 pulgadas\n  Tasa de refresco: 60Hz\n  Garantía del proveedor: 1 año', 'img/imgGrandes/Televisores/Xiaomi/xiaomi_tv_43_grande.png');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.rol: ~3 rows (aproximadamente)
DELETE FROM `rol`;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`codigo`, `nombre`) VALUES
	(1, 'administrador'),
	(2, 'almacenista'),
	(3, 'usuario_registrado');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `codigo` bigint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `tipo` varchar(25) NOT NULL,
  `precio` bigint(40) DEFAULT NULL,
  `costo` bigint(40) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.servicios: ~16 rows (aproximadamente)
DELETE FROM `servicios`;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` (`codigo`, `nombre`, `tipo`, `precio`, `costo`, `descripcion`) VALUES
	(1, 'paquete 7 dias', 'prepago', 7000, 3500, 'Minutos y SMS todo Destino ilimitados'),
	(2, 'paquete 10 dias', 'prepago', 10000, 5000, 'Minutos y SMS todo Destino ilimitados'),
	(3, 'paquete 30 dias', 'prepago', 30000, 15000, '\n Minutos y SMS todo Destino ilimitados\nIncluido WhatsApp, Twitter & Facebook'),
	(4, 'paquete 30 dias plus', 'prepago', 40000, 2000, '\n Minutos y SMS todo Destino ilimitados\r\n\n Incluido WhatsApp, Twitter & Facebook'),
	(5, 'paquete 55gb', 'postpago', 55000, 30000, '\n Minutos y mensajes ilimitados.\r\n\n Instagram, Twitter, Facebook y WhatsApp ilimitados.\r\n\n 500 minutos para llamadas a larga distancia internacional.\r\n\n Claro música, Claro video y Claro drive incluidos.'),
	(6, 'paquete 70gb', 'postpago', 65000, 40000, '\n Minutos y mensajes ilimitados.\r\n\n Instagram, Twitter, Facebook y WhatsApp ilimitados.\r\n\n 500 minutos para llamadas a larga distancia internacional.\r\n\n Claro música, Claro video y Claro drive incluidos.'),
	(7, 'paquete 80gb', 'postpago', 70000, 50000, '\n Minutos y mensajes ilimitados.\r\n\n Instagram, Twitter, Facebook y WhatsApp ilimitados.\r\n\n 500 minutos para llamadas a larga distancia internacional.\r\n\n Claro música, Claro video y Claro drive incluidos.'),
	(8, 'paquete ilimitado', 'postpago', 100000, 60000, '\n Minutos y mensajes ilimitados.\r\n\n Instagram, Twitter, Facebook y WhatsApp ilimitados.\r\n\n 500 minutos para llamadas a larga distancia internacional.\r\n\n Claro música, Claro video y Claro drive incluidos.'),
	(9, 'internet 50MB', 'internet', 60000, 30000, '50MB de internet fibra optica'),
	(10, 'internet 100MB', 'internet', 80000, 40000, '100MB de internet fibra optica'),
	(11, 'internet 150MB', 'internet', 100000, 50000, '150MB de internet fibra optica'),
	(12, 'internet 300MB', 'internet', 150000, 70000, '300MB de internet fibra optica'),
	(13, 'television 80 canales + internet 50MB', 'dobleplay', 80000, 40000, '50MB de internet fibra optica\r\n\n 80 canales de television digital'),
	(14, 'television 120 canales + internet 100MB', 'dobleplay', 100000, 50000, '100MB de internet fibra optica\r\n\n 120 canales de television digital'),
	(15, 'television satelital + internet 150MB', 'dobleplay', 120000, 60000, '150MB de internet fibra optica\r\n\n 150 canales de television satelital'),
	(16, 'television satelital + internet 300MB', 'dobleplay', 170000, 80000, '300MB de internet fibra optica\r\n\n 300 canales de television satelital');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` bigint(8) NOT NULL AUTO_INCREMENT,
  `activo` varchar(25) DEFAULT NULL,
  `nombre` varchar(25) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `contrasena` varbinary(25) NOT NULL,
  `FK_CodigoRol` int(11) DEFAULT NULL,
  `FK_metodoPago` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FK_CodigoRol` (`FK_CodigoRol`),
  KEY `FK_metodoPago` (`FK_metodoPago`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`FK_CodigoRol`) REFERENCES `rol` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`FK_metodoPago`) REFERENCES `metodo_pago` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.usuario: ~5 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`codigo`, `activo`, `nombre`, `correo`, `contrasena`, `FK_CodigoRol`, `FK_metodoPago`) VALUES
	(1, '0', 'administrador', 'a@gmail.com', _binary 0x313233, 1, NULL),
	(2, '0', 'almacenista', 'al@gmail.com', _binary 0x313233, 2, NULL),
	(3, '0', 'usuario', 'u@gmail.com', _binary 0x313233, 3, NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `codigo` bigint(11) NOT NULL AUTO_INCREMENT,
  `pago` tinyint(4) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `total_venta` varchar(25) NOT NULL,
  `ganancia_venta` varchar(25) DEFAULT NULL,
  `FK_metodoPago` bigint(11) DEFAULT NULL,
  `FK_usuario` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FK_metodoPago` (`FK_metodoPago`),
  KEY `FK_usuario` (`FK_usuario`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`FK_metodoPago`) REFERENCES `metodo_pago` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`FK_usuario`) REFERENCES `usuario` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.venta: ~44 rows (aproximadamente)
DELETE FROM `venta`;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.venta_producto
CREATE TABLE IF NOT EXISTS `venta_producto` (
  `FK_codigoVenta` bigint(11) NOT NULL,
  `FK_codigoProducto` bigint(11) NOT NULL,
  `cantidadVenta` bigint(40) DEFAULT NULL,
  `costoVenta` bigint(40) DEFAULT NULL,
  `precioVenta` bigint(40) DEFAULT NULL,
  `gananciaVenta` bigint(40) DEFAULT NULL,
  PRIMARY KEY (`FK_codigoVenta`,`FK_codigoProducto`),
  KEY `FK_codigoProducto` (`FK_codigoProducto`),
  CONSTRAINT `venta_producto_ibfk_1` FOREIGN KEY (`FK_codigoVenta`) REFERENCES `venta` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `venta_producto_ibfk_2` FOREIGN KEY (`FK_codigoProducto`) REFERENCES `productos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.venta_producto: ~21 rows (aproximadamente)
DELETE FROM `venta_producto`;
/*!40000 ALTER TABLE `venta_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta_producto` ENABLE KEYS */;

-- Volcando estructura para tabla u228561512_wolfhunter.venta_servicios
CREATE TABLE IF NOT EXISTS `venta_servicios` (
  `FK_codigoVenta` bigint(11) NOT NULL,
  `FK_codigoServicios` bigint(11) NOT NULL,
  `numero` bigint(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT '',
  PRIMARY KEY (`FK_codigoVenta`,`FK_codigoServicios`),
  KEY `FK_codigoServicios` (`FK_codigoServicios`),
  CONSTRAINT `venta_servicios_ibfk_1` FOREIGN KEY (`FK_codigoVenta`) REFERENCES `venta` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `venta_servicios_ibfk_2` FOREIGN KEY (`FK_codigoServicios`) REFERENCES `servicios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla u228561512_wolfhunter.venta_servicios: ~11 rows (aproximadamente)
DELETE FROM `venta_servicios`;
/*!40000 ALTER TABLE `venta_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta_servicios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

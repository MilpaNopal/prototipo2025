-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 00:02:03
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
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas`
--

CREATE TABLE `comidas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calorias` double NOT NULL,
  `carbohidratos` double NOT NULL,
  `proteinas` double NOT NULL,
  `grasas` double NOT NULL,
  `fibra` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comidas`
--

INSERT INTO `comidas` (`id`, `nombre`, `calorias`, `carbohidratos`, `proteinas`, `grasas`, `fibra`) VALUES
(1, 'Aceite de girasol', 884, 0, 0, 100, 0),
(2, 'Aceite de soja', 884, 0, 0, 100, 0),
(3, 'Aguacate crudo', 160, 8.53, 2, 14.66, 6.7),
(4, 'Arandanos', 57, 14.49, 0, 0.33, 2.4),
(5, 'Arroz integral', 357, 77, 7, 2, 3),
(6, 'Arroz blanco', 129, 27.99, 2.67, 0.28, 0.4),
(7, 'Atun enlatado', 198, 0, 29.13, 8.21, 0),
(8, 'Avena cruda', 379, 6.77, 13.15, 6.52, 10.1),
(9, 'Azúcar blanco', 389, 99.77, 0, 0, 0),
(10, 'Azúcar moreno', 380, 98.09, 0.12, 0, 0),
(11, 'Platano', 89, 22.6, 10.8, 0.34, 2.6),
(12, 'Brócoli cocido', 28, 5.32, 3.08, 0.12, 3),
(13, 'Cacahuates tostados', 599, 15.26, 28.03, 52.5, 9.4),
(14, 'Café capuchino', 27, 2.7, 1.68, 1.03, 0),
(15, 'Café expreso', 9, 1.67, 0.12, 0.18, 0),
(16, 'Bacalao ahumado', 108, 0, 23, 0, 0),
(17, 'Bacalao Fresco	', 76, 0, 17, 1, 0),
(18, 'Banana', 89, 22, 1, 0, 2.6),
(19, 'Batido Chocolate', 366, 77, 6, 6, 0),
(20, 'Bebida de avena con leche', 82, 15.59, 1.69, 1.57, 0.2),
(21, 'Batido de leche, embotellado, chocolate', 150, 20.36, 3.7, 6.66, 1.6),
(22, 'Bebida de horchata, hecha con agua.', 87, 20.48, 1.09, 0.11, 0.5),
(23, 'Bebida deportiva (Gatorade G)', 26, 6.43, 0, 0, 0),
(24, 'Bebida energética (Monster)', 47, 11.28, 0.47, 0, 0),
(25, 'Bebida energética sin azúcar (Red Bull)', 5, 0, 0, 0, 0),
(26, 'Berenjena cruda', 25, 5, 0, 0, 3),
(27, 'Bombones Media', 458, 66, 5, 21, 0),
(28, 'Brócoli, cocido,sin agregar grasa', 28, 5, 3, 0, 3),
(29, 'Brócoli crudo', 34, 6, 2, 0, 2),
(30, 'Burrito con carne', 242, 14, 13.03, 14.48, 1.2),
(31, 'Burrito de pollo', 242, 16.57, 16.9, 12.01, 1.4),
(32, 'Burrito, taco o quesadilla con huevo', 229, 19.69, 10.27, 11.84, 1.4),
(33, 'Café capuchino', 27, 2.7, 1.68, 1.03, 0),
(34, 'Café Instantáneo (soluble en polvo)', 100, 11, 15, 0, 0),
(35, 'Café, café con leche', 39, 5.64, 1.64, 1.08, 0),
(36, 'Calabacín', 14, 2, 0, 0.2, 0.5),
(37, 'Calamar crudo', 92, 3.08, 15.58, 1.38, 0),
(38, 'Caldo de pollo o pavo, caldo o consomé', 6, 0.44, 0.64, 0.21, 0),
(39, 'Caldo de verduras, caldo', 5, 0.93, 0.24, 0.07, 0),
(40, 'Cangrejo de mar', 124, 13.28, 19.5, 5.1, 0),
(41, 'Carne Cerdo, Grasa', 329, 0, 16, 30, 0),
(42, 'Carne Conejo', 124, 0, 16, 30, 0),
(43, 'Carne Cordero, Chuleta', 386, 0, 15, 36, 0),
(44, 'Carne Cordero, Pierna', 240, 0, 18, 19, 0),
(45, 'Carne de res, rabo de buey, cocida', 251, 0, 30.8, 13.19, 0),
(46, 'Carne Vaca, Chuleta', 290, 0, 16, 25, 0),
(47, 'Cebolla', 40, 9, 1, 0, 1),
(48, 'Cebollino crudo', 30, 4.35, 3.27, 0.75, 2.5),
(49, 'Cerdo, chicharrones, cocidos', 468, 1.7, 33.92, 35.09, 0),
(50, 'Cereal (copos de maíz de Kelloggs)', 357, 84.1, 7.5, 0.4, 3.3),
(51, 'Cereal (Crispix de Kellogg)', 378, 87.19, 6.59, 0.8, 1),
(52, 'Cereal (salvado de avena)', 395, 70.03, 9.02, 14.1, 12.7),
(53, 'Arroz crujiente', 394, 86, 6, 1, 0),
(54, 'arroz inflado', 383, 87.78, 7.01, 0.9, 1.4),
(55, 'Cerezas', 50, 12.18, 1, 0.3, 1.6),
(56, 'Ceviche', 62, 3, 10, 0, 0),
(57, 'Champiñones crudos', 22, 3.26, 3.09, 0.34, 1),
(58, 'Chocolate blanco', 539, 59, 5, 32, 0.2),
(59, 'Chocolate con leche', 550, 56, 6, 34, 0),
(60, 'Chocolate dulce u oscuro', 528, 60.18, 4.5, 33.2, 6.4),
(61, 'Chorizo', 455, 1.86, 24.01, 38.27, 0),
(62, 'Churros', 481, 49.8, 3.02, 30.58, 0.8),
(63, 'Coco fresco', 354, 15.23, 3.33, 33.49, 9),
(64, 'Coles de Bruselas, cocidas, frescas', 36, 7.06, 2.53, 0.5, 2.6),
(65, 'Coliflor cocida, fresca', 23, 4.06, 1.82, 0.45, 2.3),
(66, 'Coliflor cocida, fresca', 172, 0, 32.88, 3.5, 0),
(67, 'Crema chocolate con avellanas', 549, 60.5, 6.2, 33, 1.2),
(68, 'Croissant, chocolate', 421, 49.4, 7.4, 22.79, 3.3),
(69, 'Ensalada César de pollo o pavo lechuga, tomate, qu', 65, 2.56, 9.55, 1.88, 1.3),
(70, 'Ensalada César, con lechuga romana, sin aderezo', 71, 6, 4.77, 3.41, 2),
(71, 'Ensalada de atún con huevo', 191, 2.63, 10.53, 15.41, 0.4),
(72, 'Ensalada de atún con queso', 214, 2.8, 11.54, 17.52, 0.4),
(73, 'Espárragos cocidos', 18, 1.91, 2.93, 0.42, 1.6),
(74, 'Espárragos crudos', 20, 3.88, 2.2, 0.12, 2.1),
(75, 'Espinacas cocidas', 23, 3.39, 2.8, 0.5, 2.4),
(76, 'Filete de pollo a la parrilla', 145, 2.37, 22.24, 5.2, 0.1),
(77, 'Filete de pollo empanado', 240, 14.86, 14.62, 13.58, 1.7),
(78, 'Frambuesas, crudas', 52, 11.94, 6.98, 0.3, 2),
(79, 'Frijoles blancos sin grasa añadida en la cocción', 138, 24.95, 9.68, 0.35, 6.3),
(80, 'Frijoles blancos sin grasa añadida en la cocción', 131, 23.58, 8.81, 0.54, 8.7),
(81, 'Galleta coco', 460, 61.22, 3.02, 22.55, 5.1),
(82, 'Galleta de mantequilla', 514, 63.78, 5.37, 26.22, 1.3),
(83, 'Galleta jengibre', 514, 63.78, 5.37, 26.22, 1.3),
(84, 'Galleta, almendra', 514, 63.78, 5.37, 26.22, 1.3),
(85, 'Galleta, almendra', 514, 63.78, 5.37, 26.22, 1.3),
(86, 'Galleta, almendra', 450, 68.7, 6.2, 18.1, 2.8),
(87, 'Galleta, pasas', 401, 68, 4.1, 13.6, 1.2),
(88, 'Galletas saladas', 418, 74.05, 9.46, 8.64, 2.8),
(89, 'Ginebra', 231, 0, 0, 0, 0),
(90, 'Guisantes enlatados (conserva)', 67, 9.7, 5.6, 0.5, 3.4),
(91, 'Guisantes, cocidos, frescos, sin grasa añadida en ', 126, 18.8, 5.76, 3.47, 4),
(92, 'Habas secas', 343, 59, 23, 1.5, 4),
(93, 'Hamburguesa casera', 220, 16.76, 13.8, 10.5, 0.8),
(94, 'Harina Avena', 401, 73, 12, 9, 7),
(95, 'Harina Maíz', 422, 90, 8, 4.5, 8.5),
(96, 'Harina Trigo, Integral', 318, 66, 13, 2, 10),
(97, 'Helado', 209, 21, 4, 12, 0),
(98, 'Hígado Cerdo', 120, 1, 21, 3, 0),
(99, 'Jamón Cocido', 114, 0.4, 21, 3, 0),
(100, 'Jamón serrano', 241, 1, 31, 13, 0),
(101, 'Jamón de pavo, preenvasado o charcutería', 124, 2, 19, 3, 0),
(102, 'Jamón, ahumado o curado, enlatado', 132, 1, 17, 6, 0),
(103, 'Jugo / Zumo de apio	', 18, 4, 0.83, 0.16, 1.6),
(104, 'Jugo / Zumo de arándano, 100%	', 46, 12.2, 0.39, 0.13, 0.1),
(105, 'Jugo / Zumo de ciruela, 100%	', 71, 17.45, 0.61, 0.03, 1),
(106, 'Jugo / Zumo de coco	', 31, 2.92, 0.21, 2.08, 0),
(107, 'Jugo / Zumo de fresa, 100%	', 38, 7.8, 0.3, 0.6, 0.1),
(108, 'Jugo / Zumo de granada, 100%	', 54, 13.13, 0.15, 0.29, 0.1),
(109, 'Jugo / Zumo de lima, 100%	', 25, 8.42, 0.42, 0.07, 0.4),
(110, 'Jugo / Zumo de limón, 100%	', 22, 6.9, 0.35, 0.24, 0.3),
(111, 'Jugo / Zumo de manzana, 100%	', 46, 11.3, 0.1, 0.13, 0.2),
(112, 'Jugo / Zumo de mandarina, 100%	', 43, 10.1, 0.5, 0.2, 0.2),
(113, 'Jugo / Zumo de maracuyá, 100%	', 51, 13.6, 0.39, 0.05, 0.2),
(114, 'Jugo / Zumo de mora, 100%	', 38, 7.8, 0.3, 0.6, 0.1),
(115, 'Jugo / Zumo de naranja, 100%	', 48, 11.45, 0.68, 0.12, 0.3),
(116, 'Jugo / Zumo de papaya, 100%	', 57, 14.51, 0.17, 0.15, 0.6),
(117, 'Jugo / Zumo de piña, 100%	', 53, 12.87, 0.36, 0.12, 0.2),
(118, 'Jugo / Zumo de sandia, 100%	', 30, 7.55, 0.61, 0.15, 0.4),
(119, 'Kétchup', 131, 32, 0.4, 0, 0.7),
(120, 'Langosta, al vapor o hervida', 91, 0, 18.3, 2, 0),
(121, 'Langostino	', 93, 0, 20.1, 1.4, 0),
(122, 'Leche de arroz	', 47, 9.17, 0.28, 0.97, 0.3),
(123, 'Leche de almendras, endulzada	', 38, 6.59, 0.42, 1.4, 0.4),
(124, ' Leche de almendras, sin azúcar	', 15, 0.58, 0.59, 1.1, 0),
(125, 'Leche desnatada / descremada', 34, 4.96, 3.37, 0.08, 0),
(126, 'Leche entera', 61, 4.8, 3.15, 3.25, 0),
(127, 'Leche Entera, Polvo', 500, 37, 25, 26, 0),
(128, 'Leche evaporada entera	', 134, 10.04, 6, 7, 0),
(129, 'Lechuga cruda', 14, 2.97, 0.9, 0.14, 1.2),
(130, 'Lechuga romana cruda', 19, 3.78, 1.39, 0.27, 3.1),
(131, 'Limón crudo', 29, 9.32, 1.1, 0.3, 2.8),
(132, 'Lomo Cerdo Embuchado', 386, 0, 50, 21, 0),
(133, 'Macarrones', 370, 79, 14, 2, 3),
(134, 'Magdalena', 397, 42, 6, 23, 1),
(135, 'Maíz crudo', 86, 18.7, 3.27, 1.35, 2),
(136, 'Maíz Dulce Mazorca', 104, 19.5, 3.3, 0.78, 2.8),
(137, 'Malvavisco', 318, 81.3, 1.8, 0.2, 0.1),
(138, 'Mandarina cruda', 53, 13.34, 0.81, 0.31, 1.8),
(139, 'Mango crudo', 60, 14.98, 0.82, 0.38, 1.6),
(140, 'Manteca de cerdo', 902, 0, 0, 100, 0),
(141, 'Mantequilla', 717, 0.6, 0.85, 81.11, 0),
(142, 'Manzana cruda', 52, 13.81, 0.26, 0.17, 2.4),
(143, 'Margarina', 533, 0.86, 0.17, 59.81, 0),
(144, 'Mayonesa', 680, 0.57, 0.96, 74.85, 0),
(145, 'Mazapán', 443, 49, 9, 25, 6),
(146, 'Melocotón crudo', 39, 9.54, 0.91, 0.25, 1.5),
(147, 'Melocotón en almíbar', 84, 22, 0.4, 0, 1),
(148, 'Melón', 34, 8.16, 0.84, 0.19, 0.9),
(149, 'Membrillo (dulce de leche)', 242, 62.8, 0.14, 0.03, 0.6),
(150, 'Mermelada, conserva', 278, 68.86, 0.37, 0.07, 1.1),
(151, 'Miel', 304, 82.4, 0.3, 0, 0.2),
(152, 'Molleja, cocinada', 154, 0, 30.4, 2.7, 0),
(153, 'Moras congeladas', 64, 15.67, 1.18, 0.43, 5),
(154, 'Moras crudas', 43, 9.61, 1.39, 0.49, 5.3),
(155, 'Mortadela', 311, 3.05, 16.37, 25.39, 0),
(156, 'Mostaza', 60, 5.83, 3.74, 3.34, 34.4),
(157, 'Mousse de chocolate', 209, 16.24, 4.31, 14.97, 0.6),
(158, 'Muffin de chocolate', 390, 50, 6.39, 18.2, 1.9),
(159, 'Muslo de pollo, asado, con piel', 206, 0.12, 25.65, 11.46, 0),
(160, 'Muslo de pollo, asado, sin piel', 172, 0, 27.71, 6.76, 0),
(161, 'Nachos con queso', 343, 34.91, 4.32, 21.5, 3.2),
(162, 'Naranja', 47, 11.75, 0.94, 0.12, 2.4),
(163, 'Nueces (castellanas)', 654, 13.71, 15.23, 65.21, 6.7),
(164, 'Nueces de Brasil', 659, 11.74, 14.32, 67.1, 7.5),
(165, 'Nueces de macadamia', 716, 12.83, 7.79, 76.08, 8),
(166, 'Nueces Pacanas - Pecanas', 691, 13.68, 9.17, 71.97, 9.6),
(167, 'Nuggets de pollo', 307, 14.93, 15.92, 20.36, 0.9),
(168, 'Orejas de cerdo, cola, cabeza, hocico, partes misc', 236, 0, 26.14, 13.77, 0),
(169, 'Paella con mariscos', 142, 16.43, 8.04, 4.68, 0.8),
(170, 'Paella de carne al estilo valenciano', 270, 16.74, 21.71, 12.54, 0.5),
(171, 'Palomitas de maíz', 438, 74.18, 10.19, 11.19, 4.9),
(172, 'Palomitas de maíz, microondas', 538, 55.99, 8.69, 31.07, 10.1),
(173, 'Pan blanco', 266, 49.42, 8.83, 3.33, 2.7),
(174, 'Pan blanco, tostado', 297, 65, 10, 2, 3),
(175, 'Pan de nuez', 392, 49.72, 6.49, 19.24, 1.3),
(176, 'Pan francés o viena', 272, 51.88, 10.75, 2.42, 2.2),
(177, 'Pan integral', 252, 42.71, 12.45, 3.5, 6),
(178, 'Pan multigrano', 265, 43.34, 13.36, 4.23, 7.4),
(179, 'Pan sin gluten	', 248, 45.78, 4.31, 5.24, 4.3),
(180, 'Papaya cruda', 43, 10.82, 0.47, 0.26, 1.7),
(181, 'Pasas', 299, 79.18, 3.07, 0.46, 3.7),
(182, 'Pasta cocida', 157, 30.68, 5.76, 0.92, 1.8),
(183, 'Pasta sin gluten', 179, 38.05, 3.2, 1, 1.4),
(184, 'Patas de pollo', 215, 0.2, 19.4, 14.6, 0),
(185, 'Patata asada', 206, 46.1, 4.3, 0.1, 7.9),
(186, 'Patata hervida', 125, 20.45, 1.87, 4.19, 1.4),
(187, 'Patatas fritas', 529, 56.56, 2.92, 32.19, 8.8),
(188, 'Pepino crudo', 12, 2.16, 0.59, 0.16, 0.7),
(189, 'Patatas puré', 111, 17.69, 2.15, 3.79, 1.2),
(190, 'Pavo', 107, 0, 21.9, 2.2, 0),
(191, 'Pepino crudo', 12, 2.16, 0.59, 0.16, 0.7),
(192, 'Pera cruda', 57, 15.23, 0.36, 0.14, 3.1),
(193, 'Perejil crudo', 36, 6.33, 2.97, 0.79, 3.3),
(194, 'Perrito-Caliente Con Mostaza	', 308, 33, 11, 14, 0),
(195, 'Pez espada, al horno o a la parrilla, sin agregar ', 186, 0.1, 24.72, 8.38, 0),
(196, 'Pimiento, crudo', 24, 5.13, 0.91, 0.22, 1.8),
(197, 'Pimientos en vinagre', 40, 9.04, 0.82, 0.19, 1.6),
(198, 'Piña colada', 151, 19.5, 0.36, 2.13, 0.1),
(199, 'Piña cruda', 50, 13.12, 0.54, 0.12, 1.4),
(200, 'Piña en almíbar', 81, 21, 0.3, 0.1, 0.9),
(201, 'Piña seca', 269, 70.08, 1.51, 0.34, 3.9),
(202, 'Pipas girasol', 580, 20, 27, 43, 2.7),
(203, 'Pistachos', 572, 28.28, 21.05, 45.82, 10.3),
(204, 'Plátano crudo', 89, 22.84, 1.09, 0.33, 2.6),
(205, 'Pollo', 167, 0, 20, 9.7, 0),
(206, 'Pollo (con piel)', 298, 0, 25.73, 20.8, 0),
(207, 'Pollo o pavo agridulce', 250, 23.86, 10.1, 12.65, 1),
(208, 'Pollo, Frito Kentucky', 155, 5, 13, 9, 0),
(209, 'Pollo, Pechuga, asado', 175, 0.09, 26.37, 7.67, 0),
(210, 'Pollo, Pechugas Kentucky', 436, 34.91, 25, 22, 0),
(211, 'Postre de gelatina	62	14,19	1,22	0	0', 62, 14.19, 1.22, 0, 0),
(212, 'Pretzel', 384, 80.39, 10.04, 2.93, 3.4),
(213, 'Puerro crudo', 61, 14.15, 1.51, 0.3, 1.8),
(214, 'Pulpo hervido', 69, 1.4, 13.4, 1, 0),
(215, 'Queso americano', 307, 8.85, 16.09, 23.06, 0),
(216, 'Queso Azul', 353, 2.34, 21.4, 28.74, 0),
(217, 'Queso Babibel, tipo	', 314, 0, 23, 25, 0),
(218, 'Queso Blanco Desnatado', 68, 3, 10, 2, 0),
(219, 'Queso Burgos', 167, 3, 11, 11, 0),
(220, 'Queso Brie', 334, 0.45, 20.75, 27.68, 0),
(221, 'Queso Cabra', 250, 2, 17, 18, 0),
(222, 'Queso Camembert	', 300, 0.46, 19.8, 24.26, 0),
(223, 'Queso Cheddar', 404, 3.09, 22.87, 33.31, 0),
(224, 'Queso Chihuahua', 374, 5.56, 21.56, 29.68, 0),
(225, 'Queso Colby', 394, 2.57, 23.76, 32.11, 0),
(226, 'Queso con nueces', 424, 5.89, 17.87, 37.72, 1.5),
(227, 'Queso Cotija', 366, 3.97, 20, 30, 0),
(228, 'Queso crema	', 350, 5.52, 6.15, 34.44, 0),
(229, 'Queso de cabra', 360, 0.76, 23.52, 28.85, 0),
(230, 'Queso Emmental	', 367, 0, 27.3, 28.8, 0),
(231, 'Queso Feta	', 264, 4.09, 14.21, 21.28, 0),
(232, 'Queso Fontina	', 389, 1.55, 25.6, 31.14, 0),
(233, 'Queso Fresco (de Burgos)	', 175, 4, 15, 11, 0),
(234, 'Queso Gouda o Edam	', 357, 1.67, 24.98, 27.69, 0),
(235, 'Queso Gruyere	', 413, 0.36, 29.81, 32.24, 0),
(236, 'Queso Limburger	', 327, 0.49, 20.05, 27.25, 0),
(237, 'Queso Manchego Curado', 420, 1, 32, 32, 0),
(238, 'Queso Manchego Fresco', 333, 0, 26, 25, 0),
(239, 'Queso Manchego Semicurado', 390, 0, 29, 29, 0),
(240, 'Queso Monterey	', 373, 0.68, 24.48, 30.28, 0),
(241, 'Queso Mozzarella, Leche Entera	', 300, 2.19, 22.17, 22.35, 0),
(242, 'Queso Münster', 368, 1.12, 23.41, 30.04, 0),
(243, 'Queso parmesano, rallado seco', 420, 13.91, 28.42, 27.84, 0),
(244, 'Queso Pirineos', 355, 0, 22, 30, 0),
(245, 'Queso Porciones', 283, 1, 18, 23, 0),
(246, 'Queso Port du Salut', 356, 2.22, 24.94, 27.44, 0),
(247, 'Queso Provolone', 351, 2.14, 25.58, 26.62, 0),
(248, 'Queso Quark', 167, 3, 11, 11, 0),
(249, 'Queso Ricota', 156, 4.09, 11.32, 10.44, 10.44),
(250, 'Queso Roquefort', 353, 2.34, 21.4, 28.74, 0),
(251, 'Queso Suizo	', 393, 1.44, 26.96, 30.99, 0),
(252, 'Queso tipo Speisequark', 101, 3, 10, 5, 0),
(253, 'Quiche Lorraine Bacón-Queso', 391, 21, 15, 28, 0),
(254, 'Ratatouille', 65, 6, 1, 4.6, 1.6),
(255, 'Raviolis Tomate, Salsa	', 106, 13, 5, 4, 0),
(256, 'Refresco cola', 42, 10.36, 0, 0.25, 0),
(257, 'Refresco cola light / diet', 2, 0.29, 0.11, 0.03, 0),
(258, 'Regaliz', 375, 93.55, 0, 0.05, 0.2),
(259, 'Remolachas crudas', 43, 9.56, 1.61, 0.17, 2.8),
(260, 'Remolachas, cocidas', 44, 9.9, 1.67, 0.18, 2),
(261, 'Repollo, chino, crudo', 13, 2.18, 1.5, 0.2, 1),
(262, 'Repollo, col rizada, cocida, grasa no agregada al ', 28, 6.32, 2.07, 0.1, 3.2),
(263, 'Requesón', 143, 3.18, 10.49, 9.8, 0),
(264, 'Riñón cocido', 157, 0, 27.04, 4.61, 0),
(265, 'Rodaballo', 98, 0, 16.1, 3.6, 0),
(266, 'Sal', 0, 0, 0, 0, 0),
(267, 'Salami', 378, 0.72, 21.07, 31.65, 0),
(268, 'Salchichas Cerdo', 367, 10, 11, 32, 0),
(269, 'Salchichas Fráncfort', 274, 3, 10, 25, 0),
(270, 'Salchichón', 454, 2, 26, 38, 0),
(271, 'Salmón ahumado', 117, 0, 18.28, 4.32, 0),
(272, 'Salmón al vapor o escalfado', 160, 0, 25.78, 5.53, 0),
(273, 'Salmón crudo', 127, 0, 20.5, 4.4, 0),
(274, 'Salmonete crudo', 117, 0, 19.35, 3.79, 0),
(275, 'Salsa Boloñesa', 139, 2, 8, 11, 0),
(276, 'Salsa César', 542, 3.3, 2.17, 57.85, 0.5),
(277, 'Salsa de Ajo', 108, 7.32, 3.07, 7.42, 0.2),
(278, 'Salsa de arándano y frambuesa', 162, 41.83, 0.78, 0.22, 2),
(279, 'Salsa de barbacoa', 172, 40.77, 0.82, 0.63, 0.9),
(280, 'Salsa de cebolla', 345, 3.23, 1.86, 36.27, 0.1),
(281, 'Salsa de chocolate', 388, 65.39, 3.33, 13.06, 2),
(282, 'Salsa de cóctel', 124, 28.22, 1.36, 1.05, 1.8),
(283, 'Salsa de enchilada roja', 30, 4.87, 0.62, 0.91, 0.5),
(284, 'Salsa de enchilada, verde', 28, 5.5, 0.99, 0.59, 1.4),
(285, 'Salsa de miel y mostaza', 464, 23.33, 0.87, 40.83, 0.4),
(286, 'Salsa de queso', 160, 7.66, 3.24, 13.02, 0.3),
(287, 'Salsa de queso azul o roquefort', 484, 4.77, 1.37, 51.1, 0.4),
(288, 'Salsa de soja', 53, 4.93, 8.14, 0.57, 0.8),
(289, 'Salsa de tomate', 101, 27.4, 1.04, 0.1, 0.3),
(290, 'Salsa de yogurt', 220, 11.75, 3.45, 18.27, 0.1),
(291, 'Salsa holandesa', 504, 1.52, 4.68, 54.22, 0),
(292, 'Salsa Kétchup', 131, 32, 0.4, 0, 0.7),
(293, 'Salsa pesto', 569, 6.16, 8.51, 58.52, 1),
(294, 'Salsa rusa', 355, 31.9, 10.69, 26.18, 0.7),
(295, 'Salsa tártara', 211, 13.3, 1, 16.7, 0.5),
(296, 'Salsa teriyaki', 89, 15.56, 5.93, 0.02, 0.1),
(297, 'Salsa Tzatziki', 92, 3.95, 5.35, 6.31, 0.2),
(298, 'Salsa verde o salsa verde', 38, 6.36, 1.13, 0.89, 1.9),
(299, 'Sandía cruda', 30, 7.55, 0.61, 0.15, 0.4),
(300, 'Sardinas cocidas', 208, 0, 24.62, 11.45, 0),
(301, 'Sardinas con salsa de tomate', 185, 0.54, 20.86, 10.45, 0.1),
(302, 'Sardinas enlatadas en aceite', 208, 0, 24.62, 11.45, 0),
(303, 'Sardinas secas', 406, 0, 46.06, 23.18, 0),
(304, 'Semillas de chía', 534, 28.88, 18.29, 42.16, 27.3),
(305, 'Semillas de girasol', 582, 24.07, 19.33, 49.8, 11.1),
(306, 'Semillas de sésamo', 567, 26.04, 16.96, 48, 16.9),
(307, 'Sesos Cerdo', 132, 0, 11, 9, 0),
(308, 'Sesos Cordero', 110, 0, 10, 8, 0),
(309, 'Seven-Up, refresco', 144, 36, 0, 0, 0),
(310, 'Sidra de manzana', 46, 11.3, 0.1, 0.13, 0.2),
(311, 'Sopa agridulce', 39, 4.35, 2.28, 21.1, 0.5),
(312, 'Sorbete de cítrico', 95, 23.17, 0, 0, 0.1),
(313, 'Sorbete,. sabores', 144, 30.4, 1.5, 2, 1.3),
(314, 'Stroganoff de jamón', 130, 4.97, 7.52, 9.04, 0.7),
(315, 'Strudel de manzana', 274, 41.1, 3.3, 11.2, 2.2),
(316, 'Sushi', 93, 18.42, 2.92, 0.67, 1),
(317, 'Sushi con atún', 100, 13.39, 9.66, 0.28, 0.6),
(318, 'Sushi con salmón', 107, 13.39, 8.92, 1.74, 0.6),
(319, 'Tamarindo. crudo', 239, 62.5, 2.8, 0.6, 1.5),
(320, 'Tapioca', 359, 95, 0, 0, 0),
(321, 'Tarta Manzana Casera', 282, 43, 2, 12, 0),
(322, 'Té caliente, manzanilla', 1, 0.2, 0, 0, 0),
(323, 'Té, caliente, hoja, verde', 1, 0, 0.22, 0, 0),
(324, 'Tocino', 427, 0, 14, 41, 0),
(325, 'Toblerone. chocolate con leche con miel y turrón d', 525, 61.21, 5.71, 28.57, 2.5),
(326, 'Tomate triturado', 39, 5.5, 2.3, 0.5, 0),
(327, 'Tomates cocidos', 18, 3.99, 0.95, 0.1, 0.7),
(328, 'Tomates crudos', 18, 3.89, 0.88, 0.2, 1.2),
(329, 'Tomates rojos secos', 258, 55.76, 14.11, 2.97, 12.3),
(330, 'Tomates verdes crudos', 42, 10, 0, 0, 0),
(331, 'Tortilla de clara de huevo, revuelta o frita, hech', 119, 0.77, 11.52, 38, 0),
(332, 'Tortilla de huevo o huevo revuelto, hecho con acei', 180, 1.81, 11.16, 13.95, 0),
(333, 'Tortilla de maíz', 218, 44.64, 5.7, 2.85, 6.3),
(334, 'TWIX Barras de galletas de caramelo', 502, 64.8, 4.91, 24.85, 1.1),
(335, 'Uvas', 243, 63, 2, 0, 6),
(336, 'Yogur, griego con fruta', 106, 12.29, 7.33, 3, 0),
(337, 'Yogur, griego natural', 97, 3.98, 9, 5, 0),
(338, 'Yogur, helado, cono, sabores que no sean chocolate', 189, 31.5, 4.48, 5.38, 0.2),
(339, 'Yogurt liquido', 72, 11.81, 3.71, 1.09, 0.1),
(340, 'Yogurt, leche desnatada/descremada, fruta', 56, 7.68, 5.73, 0.18, 0),
(341, 'Yogurt, leche desnatada/descremada, natural', 87, 12.36, 3.1, 2.87, 0.1),
(342, 'Yogurt, leche entera, natural', 61, 4.66, 3.47, 3.25, 0),
(343, 'Yuca fritas', 267, 34.72, 1.24, 13.94, 1.6),
(344, 'Zanahorias crudas', 41, 9.58, 0.93, 0.24, 2.8),
(345, 'Zanahorias, cocinadas, crema', 88, 8.38, 2.08, 5.26, 1.9),
(346, 'Zanahorias, crudas, ensalada', 208, 17.17, 1.22, 15.7, 2.3),
(347, 'Zumo de lima, 100% recién exprimido', 25, 8.42, 0.42, 0.07, 0.4),
(348, 'Zumo de naranja, 100%, recién exprimido', 45, 10.4, 0.7, 0.2, 0.2),
(349, 'Zumo de pomelo, 100%, recién exprimido', 39, 9.2, 0.5, 0.1, 0.1),
(350, 'Uvas Pasas', 243, 63, 2, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Clave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `Usuario`, `Clave`) VALUES
(1, 'Marco', '598'),
(2, 'Dani', '0520'),
(9, 'Dienton', 'tr'),
(16, 'rosa', 'milpa'),
(17, 'Usuario0', '12345'),
(18, 'Usuario1', '12345'),
(19, 'usuario2', '12345'),
(20, 'usuario5', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `sexo` char(1) NOT NULL,
  `fech_nacimiento` date NOT NULL,
  `enfermedad` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id_usuario`, `nombre`, `peso`, `altura`, `sexo`, `fech_nacimiento`, `enfermedad`) VALUES
(1, '', 0, 0, '', '0000-00-00', ''),
(2, 'Daniela Santos Soriano', 60, 1.65, 'm', '2025-01-01', 'n'),
(9, '', 0, 0, '', '0000-00-00', ''),
(16, 'rosa no se que', 60, 1.6, 'm', '2025-01-02', 'n'),
(17, '', 0, 0, '', '0000-00-00', ''),
(18, '', 0, 0, '', '0000-00-00', ''),
(19, '', 0, 0, '', '0000-00-00', ''),
(20, '', 0, 0, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad`
--

CREATE TABLE `enfermedad` (
  `id_usuario` int(10) NOT NULL,
  `enfermedad` varchar(50) NOT NULL,
  `alim_res` varchar(100) NOT NULL,
  `limites` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `alimento` varchar(1000) NOT NULL,
  `Kcaloria` float NOT NULL,
  `proteina` float NOT NULL,
  `grasa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_reporte`
--

CREATE TABLE `usuario_reporte` (
  `id_usuario` int(10) NOT NULL,
  `id_reporte` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comidas`
--
ALTER TABLE `comidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `enfermedad`
--
ALTER TABLE `enfermedad`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD UNIQUE KEY `id_reporte` (`id_reporte`);

--
-- Indices de la tabla `usuario_reporte`
--
ALTER TABLE `usuario_reporte`
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comidas`
--
ALTER TABLE `comidas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `datos` (`id`);

--
-- Filtros para la tabla `usuario_reporte`
--
ALTER TABLE `usuario_reporte`
  ADD CONSTRAINT `usuario_reporte_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `detalles` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

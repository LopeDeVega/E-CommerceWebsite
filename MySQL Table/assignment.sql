-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-11-2018 a las 01:21:33
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `assignment`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`user_name`, `password`, `city`, `street`, `postcode`, `email`, `phone`) VALUES
('pepa', 'pig', 'Liverpool', 'Cornhill', 'L1', 'pepa@pig.com', '234567'),
('Asterix', 'ast', 'Galia', 'Gal', '3432', 'EQWEQ@ERWE', '23123'),
('daddy', 'pig', 'piggy', 'pepa', '3445', 'daddy@pig', '34334'),
('', '', '', '', '', '', ''),
('obelix', 'obe', 'Galia', 'Gal', '3434', 'dfd@Dfd', '30348');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `code_ID` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(40) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`code_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dishes`
--

INSERT INTO `dishes` (`code_ID`, `d_name`, `description`, `price`) VALUES
(1, 'Salmorejo', ' Starter Spanish tomato soup with Spanish ham and boiled egg', '4.20'),
(2, 'Salad', 'Starter: Salad with Tomato, Tuna, Asparagus, Onion, Romaine Lettuce and Pineapple, including our fabulous Spanish dressing on the side', '6.20'),
(3, 'Aubergine and molasses', 'Starter Delicious fried aubergine with molasses on the top', '8.90'),
(4, 'Chicken Croquets', 'Starter: 8 Chicken croquets with bechamel and nutmeg ', '9.00'),
(5, 'Cod with Tomato', 'Main: Battered cod with handmade tomato and vegetables  ', '11.00'),
(6, 'Stuffed See bass', 'Main: Delicious See Bass staffed with ham and prawns ', '10.50'),
(7, 'Salmon', 'Main: Fresh salmon served with a delicious creamy sauce and garlic', '10.50'),
(8, 'Buey', 'Main: Ox T-bone steak 24 ounces ', '25.00'),
(9, 'Sirloin Steak', 'Main Tremendous Sirloin steak with port sauce and foeu 17 ounces ', '21.00'),
(10, 'Pork Tenderloin', 'Main: Tender pork tenderloin severed with San Cayetano sauce  ', '15.00'),
(11, 'Spanish omelette', 'Main: The famous Spanish omelette (handmade )', '5.00'),
(12, 'Assortment of Dessert ', 'Dissert: A wide variate of disserts (chef’s specialty two people minimum', '11.50'),
(13, 'Assortment of Chocolate', 'Dissert: Assortment of Chocolate’s cakes (white and black) ', '7.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_Id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) DEFAULT NULL,
  `code_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
	`feedback` varchar (300),
  PRIMARY KEY (`ID`));













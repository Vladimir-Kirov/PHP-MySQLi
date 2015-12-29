-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coffeedb`
--

-- --------------------------------------------------------

--
-- Структура на таблица `coffee`
--

CREATE TABLE IF NOT EXISTS `coffee` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `roast` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `type`, `price`, `roast`, `country`, `image`, `review`) VALUES
(1, 'Cafe au Lait', 'Classic', 2.25, 'Medium', 'France', 0x496d616765732f436f666665652f436166652d41752d4c6169742e6a7067, 'A coffee beverage consisting strong or bold coffee (usually espresso) mixed with scalded milk in approximately a 1:1 ratio. Sugar or sweetener is added according to taste.'),
(2, 'CaffÃ¨ Americano', 'Espresso', 3.25, 'Medium', 'Italy', 0x496d616765732f436f666665652f63616666655f616d65726963616e6f2e6a7067, 'Similar in strength and taste to American-style brewed coffee, there are subtle differences achieved by pulling a fresh shot of espresso for the beverage base. The best way to discover these nuances, of course, is to try a cup yourself.'),
(3, 'Peppermint White Chocolate Mocha', 'Espresso', 3.25, 'Medium', 'Italy', 0x496d616765732f436f666665652f77686974652d63686f636f6c6174652d7065707065726d696e742d6d6f6368612e6a7067, 'Espresso with white chocolate and peppermint flavored syrups and steamed milk. Topped with sweetened whipped cream and dark chocolate curls.'),
(4, 'Galao', 'Latte', 4.2, 'Light', 'Portugal', 0x496d616765732f436f666665652f67616c616f5f6b61666665655f706f72747567616c2e6a7067, 'Galao is a hot drink from Portugal made of espresso and foamed milk. In all similar to cafÃ© latte or cafÃ© au lait, it comes in a tall glass with about one quarter coffee, three quarters foamed milk, as opposed to the smaller Garoto (coffee) that is served in a demitasse/espresso smaller china cup.'),
(5, 'Irish Coffee', 'Classic', 4.9, 'Medium', 'Ireland', 0x496d616765732f436f666665652f697269736820636f666665652e6a7067, 'Irish coffee is a cocktail consisting of hot coffee, Irish whiskey, and sugar, stirred, and topped with thick cream. The coffee is drunk through the cream. The original recipe explicitly uses cream that has not been whipped, although drinks made with whipped cream are often sold as "Irish coffee".');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

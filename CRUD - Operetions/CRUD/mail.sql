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
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Структура на таблица `email_users`
--

CREATE TABLE IF NOT EXISTS `email_users` (
`user_id` int(11) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `email_users`
--

INSERT INTO `email_users` (`user_id`, `username`, `email`, `phone`, `image`) VALUES
(1, 'Milen Shangov', 'milen_sh@abv.bg', '0882 871 164', 'https://scontent-vie1-1.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/168731_180056558699051_4214122_n.jpg?oh=63b92fbaa9505d71eaa95c2e45c8e86d&oe=57B3AD3B'),
(2, 'Mark Zukarburg', 'mark@akmedia.com', '0882 871 164', 'http://media.avtora.com/images/cut/660x495/articles/2015/07/44443.jpg'),
(4, 'Sarah Walkar', 'sarah@akmedia.com', '0331 2/22 50', ''),
(5, 'Vladimir Kirov', 'vladimir__kirov@abv.bg', '0896 482 336', 'https://scontent-vie1-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/317419_278801425463316_323282381_n.jpg?oh=06a9484688da632c33d9fb09929e0703&oe=5771C7A6'),
(6, 'Diana Pencheva', 'd.pencheva@is-bg.net', '0882 871 164', 'https://lh6.googleusercontent.com/-59QRT73Wo7g/AAAAAAAAAAI/AAAAAAAAFAk/wPgZf3yCecg/photo.jpg'),
(7, 'Gatakka', 'gatakka@gatakka.eu', '0876 145 151 ', 'https://softuni.bg/Files/Images/Ivan-Vankov.jpg'),
(8, 'Ilia Goranov ', 'i.goranov@is-bg.net', '096 / 394 237', 'http://www.goranovi.net/images/about_ilia.jpg'),
(9, 'Dimitar  Kirov', 'mitak_1985@abv.bg', '0896 784 556', 'https://media.licdn.com/media/p/1/005/09e/082/0f4b090.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_users`
--
ALTER TABLE `email_users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_users`
--
ALTER TABLE `email_users`
MODIFY `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2018 às 18:13
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appmasters`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) DEFAULT NULL,
  `token` char(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ramon438xavier@gmail.com', '$2y$10$QnU1TVCDu9UOnA9suzFWEeQJG9uNhswduLfabLr34nryLiGLe6HxS', '2018-09-15 16:02:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `people`
--

CREATE TABLE `people` (
  `id` int(10) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `mass` varchar(10) DEFAULT NULL,
  `hair_color` varchar(20) DEFAULT NULL,
  `skin_color` varchar(20) DEFAULT NULL,
  `eye_color` varchar(20) DEFAULT NULL,
  `birth_year` varchar(10) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `name`, `height`, `mass`, `hair_color`, `skin_color`, `eye_color`, `birth_year`, `gender`, `updated_at`, `created_at`, `url`) VALUES
(1, 'Luke Skywalker', '172', '77', 'blond', 'fair', 'blue', '19BBY', 'male', '2018-09-22 21:42:28', '2018-09-22 21:42:28', 'https://swapi.co/api/people/1/'),
(2, 'C-3PO', '167', '75', 'n/a', 'gold', 'yellow', '112BBY', 'n/a', '2018-09-22 21:42:29', '2018-09-22 21:42:29', 'https://swapi.co/api/people/2/'),
(3, 'R2-D2', '96', '32', 'n/a', 'white, blue', 'red', '33BBY', 'n/a', '2018-09-22 21:42:30', '2018-09-22 21:42:30', 'https://swapi.co/api/people/3/'),
(4, 'Darth Vader', '202', '136', 'none', 'white', 'yellow', '41.9BBY', 'male', '2018-09-22 21:42:31', '2018-09-22 21:42:31', 'https://swapi.co/api/people/4/'),
(5, 'Leia Organa', '150', '49', 'brown', 'light', 'brown', '19BBY', 'female', '2018-09-22 21:42:32', '2018-09-22 21:42:32', 'https://swapi.co/api/people/5/'),
(6, 'Owen Lars', '178', '120', 'brown, grey', 'light', 'blue', '52BBY', 'male', '2018-09-22 21:42:33', '2018-09-22 21:42:33', 'https://swapi.co/api/people/6/'),
(7, 'Beru Whitesun lars', '165', '75', 'brown', 'light', 'blue', '47BBY', 'female', '2018-09-22 21:42:34', '2018-09-22 21:42:34', 'https://swapi.co/api/people/7/'),
(8, 'R5-D4', '97', '32', 'n/a', 'white, red', 'red', 'unknown', 'n/a', '2018-09-22 21:42:35', '2018-09-22 21:42:35', 'https://swapi.co/api/people/8/'),
(9, 'Biggs Darklighter', '183', '84', 'black', 'light', 'brown', '24BBY', 'male', '2018-09-22 21:42:36', '2018-09-22 21:42:36', 'https://swapi.co/api/people/9/'),
(10, 'Obi-Wan Kenobi', '182', '77', 'auburn, white', 'fair', 'blue-gray', '57BBY', 'male', '2018-09-22 21:42:37', '2018-09-22 21:42:37', 'https://swapi.co/api/people/10/'),
(11, 'Anakin Skywalker', '188', '84', 'blond', 'fair', 'blue', '41.9BBY', 'male', '2018-09-22 21:42:38', '2018-09-22 21:42:38', 'https://swapi.co/api/people/11/'),
(12, 'Wilhuff Tarkin', '180', 'unknown', 'auburn, grey', 'fair', 'blue', '64BBY', 'male', '2018-09-22 21:42:39', '2018-09-22 21:42:39', 'https://swapi.co/api/people/12/'),
(13, 'Chewbacca', '228', '112', 'brown', 'unknown', 'blue', '200BBY', 'male', '2018-09-22 21:42:40', '2018-09-22 21:42:40', 'https://swapi.co/api/people/13/'),
(14, 'Han Solo', '180', '80', 'brown', 'fair', 'brown', '29BBY', 'male', '2018-09-22 21:42:41', '2018-09-22 21:42:41', 'https://swapi.co/api/people/14/'),
(15, 'Greedo', '173', '74', 'n/a', 'green', 'black', '44BBY', 'male', '2018-09-22 21:42:42', '2018-09-22 21:42:42', 'https://swapi.co/api/people/15/'),
(16, 'Jabba Desilijic Tiure', '175', '1,358', 'n/a', 'green-tan, brown', 'orange', '600BBY', 'hermaphrodite', '2018-09-22 21:42:43', '2018-09-22 21:42:43', 'https://swapi.co/api/people/16/'),
(17, 'Wedge Antilles', '170', '77', 'brown', 'fair', 'hazel', '21BBY', 'male', '2018-09-22 21:42:44', '2018-09-22 21:42:44', 'https://swapi.co/api/people/18/'),
(18, 'Jek Tono Porkins', '180', '110', 'brown', 'fair', 'blue', 'unknown', 'male', '2018-09-22 21:42:45', '2018-09-22 21:42:45', 'https://swapi.co/api/people/19/'),
(19, 'Yoda', '66', '17', 'white', 'green', 'brown', '896BBY', 'male', '2018-09-22 21:42:46', '2018-09-22 21:42:46', 'https://swapi.co/api/people/20/'),
(20, 'Palpatine', '170', '75', 'grey', 'pale', 'yellow', '82BBY', 'male', '2018-09-22 21:42:47', '2018-09-22 21:42:47', 'https://swapi.co/api/people/21/'),
(21, 'Boba Fett', '183', '78.2', 'black', 'fair', 'brown', '31.5BBY', 'male', '2018-09-22 21:42:48', '2018-09-22 21:42:48', 'https://swapi.co/api/people/22/'),
(22, 'IG-88', '200', '140', 'none', 'metal', 'red', '15BBY', 'none', '2018-09-22 21:42:49', '2018-09-22 21:42:49', 'https://swapi.co/api/people/23/'),
(23, 'Bossk', '190', '113', 'none', 'green', 'red', '53BBY', 'male', '2018-09-22 21:42:50', '2018-09-22 21:42:50', 'https://swapi.co/api/people/24/'),
(24, 'Lando Calrissian', '177', '79', 'black', 'dark', 'brown', '31BBY', 'male', '2018-09-22 21:42:51', '2018-09-22 21:42:51', 'https://swapi.co/api/people/25/'),
(25, 'Lobot', '175', '79', 'none', 'light', 'blue', '37BBY', 'male', '2018-09-22 21:42:52', '2018-09-22 21:42:52', 'https://swapi.co/api/people/26/'),
(26, 'Ackbar', '180', '83', 'none', 'brown mottle', 'orange', '41BBY', 'male', '2018-09-22 21:42:54', '2018-09-22 21:42:54', 'https://swapi.co/api/people/27/'),
(27, 'Mon Mothma', '150', 'unknown', 'auburn', 'fair', 'blue', '48BBY', 'female', '2018-09-22 21:42:55', '2018-09-22 21:42:55', 'https://swapi.co/api/people/28/'),
(28, 'Arvel Crynyd', 'unknown', 'unknown', 'brown', 'fair', 'brown', 'unknown', 'male', '2018-09-22 21:42:56', '2018-09-22 21:42:56', 'https://swapi.co/api/people/29/'),
(29, 'Palpatine', '170', '75', 'grey', 'pale', 'yellow', '82BBY', 'male', '2018-09-22 21:55:42', '2018-09-22 21:55:42', 'https://swapi.co/api/people/21/'),
(30, 'Boba Fett', '183', '78.2', 'black', 'fair', 'brown', '31.5BBY', 'male', '2018-09-22 21:55:43', '2018-09-22 21:55:43', 'https://swapi.co/api/people/22/'),
(31, 'IG-88', '200', '140', 'none', 'metal', 'red', '15BBY', 'none', '2018-09-22 21:55:44', '2018-09-22 21:55:44', 'https://swapi.co/api/people/23/'),
(32, 'Bossk', '190', '113', 'none', 'green', 'red', '53BBY', 'male', '2018-09-22 21:55:46', '2018-09-22 21:55:46', 'https://swapi.co/api/people/24/'),
(33, 'Lando Calrissian', '177', '79', 'black', 'dark', 'brown', '31BBY', 'male', '2018-09-22 21:55:47', '2018-09-22 21:55:47', 'https://swapi.co/api/people/25/'),
(34, 'Lobot', '175', '79', 'none', 'light', 'blue', '37BBY', 'male', '2018-09-22 21:55:48', '2018-09-22 21:55:48', 'https://swapi.co/api/people/26/'),
(35, 'Ackbar', '180', '83', 'none', 'brown mottle', 'orange', '41BBY', 'male', '2018-09-22 21:55:49', '2018-09-22 21:55:49', 'https://swapi.co/api/people/27/'),
(36, 'Mon Mothma', '150', 'unknown', 'auburn', 'fair', 'blue', '48BBY', 'female', '2018-09-22 21:55:50', '2018-09-22 21:55:50', 'https://swapi.co/api/people/28/'),
(37, 'Arvel Crynyd', 'unknown', 'unknown', 'brown', 'fair', 'brown', 'unknown', 'male', '2018-09-22 21:55:50', '2018-09-22 21:55:50', 'https://swapi.co/api/people/29/'),
(38, 'Wicket Systri Warrick', '88', '20', 'brown', 'brown', 'brown', '8BBY', 'male', '2018-09-22 21:55:52', '2018-09-22 21:55:52', 'https://swapi.co/api/people/30/'),
(39, 'Nien Nunb', '160', '68', 'none', 'grey', 'black', 'unknown', 'male', '2018-09-22 21:55:53', '2018-09-22 21:55:53', 'https://swapi.co/api/people/31/'),
(40, 'Qui-Gon Jinn', '193', '89', 'brown', 'fair', 'blue', '92BBY', 'male', '2018-09-22 21:55:54', '2018-09-22 21:55:54', 'https://swapi.co/api/people/32/'),
(41, 'Nute Gunray', '191', '90', 'none', 'mottled green', 'red', 'unknown', 'male', '2018-09-22 21:55:55', '2018-09-22 21:55:55', 'https://swapi.co/api/people/33/'),
(42, 'Finis Valorum', '170', 'unknown', 'blond', 'fair', 'blue', '91BBY', 'male', '2018-09-22 21:55:56', '2018-09-22 21:55:56', 'https://swapi.co/api/people/34/'),
(43, 'Padmé Amidala', '165', '45', 'brown', 'light', 'brown', '46BBY', 'female', '2018-09-22 21:55:57', '2018-09-22 21:55:57', 'https://swapi.co/api/people/35/'),
(44, 'Jar Jar Binks', '196', '66', 'none', 'orange', 'orange', '52BBY', 'male', '2018-09-22 21:55:58', '2018-09-22 21:55:58', 'https://swapi.co/api/people/36/'),
(45, 'Roos Tarpals', '224', '82', 'none', 'grey', 'orange', 'unknown', 'male', '2018-09-22 21:55:59', '2018-09-22 21:55:59', 'https://swapi.co/api/people/37/'),
(46, 'Rugor Nass', '206', 'unknown', 'none', 'green', 'orange', 'unknown', 'male', '2018-09-22 21:56:00', '2018-09-22 21:56:00', 'https://swapi.co/api/people/38/'),
(47, 'Ric Olié', '183', 'unknown', 'brown', 'fair', 'blue', 'unknown', 'male', '2018-09-22 21:56:01', '2018-09-22 21:56:01', 'https://swapi.co/api/people/39/'),
(48, 'Watto', '137', 'unknown', 'black', 'blue, grey', 'yellow', 'unknown', 'male', '2018-09-22 21:56:02', '2018-09-22 21:56:02', 'https://swapi.co/api/people/40/'),
(49, 'Sebulba', '112', '40', 'none', 'grey, red', 'orange', 'unknown', 'male', '2018-09-22 21:56:26', '2018-09-22 21:56:26', 'https://swapi.co/api/people/41/'),
(50, 'Quarsh Panaka', '183', 'unknown', 'black', 'dark', 'brown', '62BBY', 'male', '2018-09-22 21:56:28', '2018-09-22 21:56:28', 'https://swapi.co/api/people/42/'),
(51, 'Shmi Skywalker', '163', 'unknown', 'black', 'fair', 'brown', '72BBY', 'female', '2018-09-22 21:56:29', '2018-09-22 21:56:29', 'https://swapi.co/api/people/43/'),
(52, 'Darth Maul', '175', '80', 'none', 'red', 'yellow', '54BBY', 'male', '2018-09-22 21:56:30', '2018-09-22 21:56:30', 'https://swapi.co/api/people/44/'),
(53, 'Bib Fortuna', '180', 'unknown', 'none', 'pale', 'pink', 'unknown', 'male', '2018-09-22 21:56:31', '2018-09-22 21:56:31', 'https://swapi.co/api/people/45/'),
(54, 'Ayla Secura', '178', '55', 'none', 'blue', 'hazel', '48BBY', 'female', '2018-09-22 21:56:32', '2018-09-22 21:56:32', 'https://swapi.co/api/people/46/'),
(55, 'Ratts Tyerell', '79', '15', 'none', 'grey, blue', 'unknown', 'unknown', 'male', '2018-09-22 21:56:33', '2018-09-22 21:56:33', 'https://swapi.co/api/people/47/'),
(56, 'Dud Bolt', '94', '45', 'none', 'blue, grey', 'yellow', 'unknown', 'male', '2018-09-22 21:56:34', '2018-09-22 21:56:34', 'https://swapi.co/api/people/48/'),
(57, 'Gasgano', '122', 'unknown', 'none', 'white, blue', 'black', 'unknown', 'male', '2018-09-22 21:56:35', '2018-09-22 21:56:35', 'https://swapi.co/api/people/49/'),
(58, 'Ben Quadinaros', '163', '65', 'none', 'grey, green, yellow', 'orange', 'unknown', 'male', '2018-09-22 21:56:36', '2018-09-22 21:56:36', 'https://swapi.co/api/people/50/'),
(59, 'Mace Windu', '188', '84', 'none', 'dark', 'brown', '72BBY', 'male', '2018-09-22 21:56:37', '2018-09-22 21:56:37', 'https://swapi.co/api/people/51/'),
(60, 'Ki-Adi-Mundi', '198', '82', 'white', 'pale', 'yellow', '92BBY', 'male', '2018-09-22 21:56:38', '2018-09-22 21:56:38', 'https://swapi.co/api/people/52/'),
(61, 'Kit Fisto', '196', '87', 'none', 'green', 'black', 'unknown', 'male', '2018-09-22 21:56:39', '2018-09-22 21:56:39', 'https://swapi.co/api/people/53/'),
(62, 'Eeth Koth', '171', 'unknown', 'black', 'brown', 'brown', 'unknown', 'male', '2018-09-22 21:56:40', '2018-09-22 21:56:40', 'https://swapi.co/api/people/54/'),
(63, 'Adi Gallia', '184', '50', 'none', 'dark', 'blue', 'unknown', 'female', '2018-09-22 21:56:41', '2018-09-22 21:56:41', 'https://swapi.co/api/people/55/'),
(64, 'Saesee Tiin', '188', 'unknown', 'none', 'pale', 'orange', 'unknown', 'male', '2018-09-22 21:56:42', '2018-09-22 21:56:42', 'https://swapi.co/api/people/56/'),
(65, 'Yarael Poof', '264', 'unknown', 'none', 'white', 'yellow', 'unknown', 'male', '2018-09-22 21:56:43', '2018-09-22 21:56:43', 'https://swapi.co/api/people/57/'),
(66, 'Plo Koon', '188', '80', 'none', 'orange', 'black', '22BBY', 'male', '2018-09-22 21:56:44', '2018-09-22 21:56:44', 'https://swapi.co/api/people/58/'),
(67, 'Mas Amedda', '196', 'unknown', 'none', 'blue', 'blue', 'unknown', 'male', '2018-09-22 21:56:45', '2018-09-22 21:56:45', 'https://swapi.co/api/people/59/'),
(68, 'Gregar Typho', '185', '85', 'black', 'dark', 'brown', 'unknown', 'male', '2018-09-22 21:56:46', '2018-09-22 21:56:46', 'https://swapi.co/api/people/60/'),
(69, 'Cordé', '157', 'unknown', 'brown', 'light', 'brown', 'unknown', 'female', '2018-09-22 21:57:01', '2018-09-22 21:57:01', 'https://swapi.co/api/people/61/'),
(70, 'Cliegg Lars', '183', 'unknown', 'brown', 'fair', 'blue', '82BBY', 'male', '2018-09-22 21:57:02', '2018-09-22 21:57:02', 'https://swapi.co/api/people/62/'),
(71, 'Poggle the Lesser', '183', '80', 'none', 'green', 'yellow', 'unknown', 'male', '2018-09-22 21:57:03', '2018-09-22 21:57:03', 'https://swapi.co/api/people/63/'),
(72, 'Luminara Unduli', '170', '56.2', 'black', 'yellow', 'blue', '58BBY', 'female', '2018-09-22 21:57:04', '2018-09-22 21:57:04', 'https://swapi.co/api/people/64/'),
(73, 'Barriss Offee', '166', '50', 'black', 'yellow', 'blue', '40BBY', 'female', '2018-09-22 21:57:05', '2018-09-22 21:57:05', 'https://swapi.co/api/people/65/'),
(74, 'Dormé', '165', 'unknown', 'brown', 'light', 'brown', 'unknown', 'female', '2018-09-22 21:57:06', '2018-09-22 21:57:06', 'https://swapi.co/api/people/66/'),
(75, 'Dooku', '193', '80', 'white', 'fair', 'brown', '102BBY', 'male', '2018-09-22 21:57:07', '2018-09-22 21:57:07', 'https://swapi.co/api/people/67/'),
(76, 'Bail Prestor Organa', '191', 'unknown', 'black', 'tan', 'brown', '67BBY', 'male', '2018-09-22 21:57:08', '2018-09-22 21:57:08', 'https://swapi.co/api/people/68/'),
(77, 'Jango Fett', '183', '79', 'black', 'tan', 'brown', '66BBY', 'male', '2018-09-22 21:57:09', '2018-09-22 21:57:09', 'https://swapi.co/api/people/69/'),
(78, 'Zam Wesell', '168', '55', 'blonde', 'fair, green, yellow', 'yellow', 'unknown', 'female', '2018-09-22 21:57:10', '2018-09-22 21:57:10', 'https://swapi.co/api/people/70/'),
(79, 'Dexter Jettster', '198', '102', 'none', 'brown', 'yellow', 'unknown', 'male', '2018-09-22 21:57:11', '2018-09-22 21:57:11', 'https://swapi.co/api/people/71/'),
(80, 'Lama Su', '229', '88', 'none', 'grey', 'black', 'unknown', 'male', '2018-09-22 21:57:12', '2018-09-22 21:57:12', 'https://swapi.co/api/people/72/'),
(81, 'Taun We', '213', 'unknown', 'none', 'grey', 'black', 'unknown', 'female', '2018-09-22 21:57:13', '2018-09-22 21:57:13', 'https://swapi.co/api/people/73/'),
(82, 'Jocasta Nu', '167', 'unknown', 'white', 'fair', 'blue', 'unknown', 'female', '2018-09-22 21:57:14', '2018-09-22 21:57:14', 'https://swapi.co/api/people/74/'),
(83, 'R4-P17', '96', 'unknown', 'none', 'silver, red', 'red, blue', 'unknown', 'female', '2018-09-22 21:57:15', '2018-09-22 21:57:15', 'https://swapi.co/api/people/75/'),
(84, 'Wat Tambor', '193', '48', 'none', 'green, grey', 'unknown', 'unknown', 'male', '2018-09-22 21:57:16', '2018-09-22 21:57:16', 'https://swapi.co/api/people/76/'),
(85, 'San Hill', '191', 'unknown', 'none', 'grey', 'gold', 'unknown', 'male', '2018-09-22 21:57:17', '2018-09-22 21:57:17', 'https://swapi.co/api/people/77/'),
(86, 'Shaak Ti', '178', '57', 'none', 'red, blue, white', 'black', 'unknown', 'female', '2018-09-22 21:57:18', '2018-09-22 21:57:18', 'https://swapi.co/api/people/78/'),
(87, 'Grievous', '216', '159', 'none', 'brown, white', 'green, yellow', 'unknown', 'male', '2018-09-22 21:57:20', '2018-09-22 21:57:20', 'https://swapi.co/api/people/79/'),
(88, 'Tarfful', '234', '136', 'brown', 'brown', 'blue', 'unknown', 'male', '2018-09-22 21:57:21', '2018-09-22 21:57:21', 'https://swapi.co/api/people/80/'),
(89, 'Raymus Antilles', '188', '79', 'brown', 'light', 'brown', 'unknown', 'male', '2018-09-22 21:57:53', '2018-09-22 21:57:53', 'https://swapi.co/api/people/81/'),
(90, 'Sly Moore', '178', '48', 'none', 'pale', 'white', 'unknown', 'female', '2018-09-22 21:57:54', '2018-09-22 21:57:54', 'https://swapi.co/api/people/82/'),
(91, 'Tion Medon', '206', '80', 'none', 'grey', 'black', 'unknown', 'male', '2018-09-22 21:57:55', '2018-09-22 21:57:55', 'https://swapi.co/api/people/83/'),
(92, 'Finn', 'unknown', 'unknown', 'black', 'dark', 'dark', 'unknown', 'male', '2018-09-22 21:57:56', '2018-09-22 21:57:56', 'https://swapi.co/api/people/84/'),
(93, 'Rey', 'unknown', 'unknown', 'brown', 'light', 'hazel', 'unknown', 'female', '2018-09-22 21:57:57', '2018-09-22 21:57:57', 'https://swapi.co/api/people/85/'),
(94, 'Poe Dameron', 'unknown', 'unknown', 'brown', 'light', 'brown', 'unknown', 'male', '2018-09-22 21:57:58', '2018-09-22 21:57:58', 'https://swapi.co/api/people/86/'),
(95, 'BB8', 'unknown', 'unknown', 'none', 'none', 'black', 'unknown', 'none', '2018-09-22 21:58:00', '2018-09-22 21:58:00', 'https://swapi.co/api/people/87/'),
(96, 'Captain Phasma', 'unknown', 'unknown', 'unknown', 'unknown', 'unknown', 'unknown', 'female', '2018-09-22 21:58:01', '2018-09-22 21:58:01', 'https://swapi.co/api/people/88/'),
(97, 'Hulk Invade o Star Wars e Esmaga!', '4.63', '345.00', 'Preto', 'Verde', 'Pretos', '1965', 'Masculino', '2018-09-23 15:37:38', '2018-09-23 15:37:38', 'hulk.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` char(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(3, 'Ramon', 'ramon438xavier@gmail.com', '$2y$10$iGGNXfoP76rUao7XlkitLu/zKmnwDVg3Nupzurf9Uf7XD5hxYi43i', 'jf5vGmm5MXJ3p5chVWDFL10HSEf7Ft7OgOxGjP8kfswC1O7oUERBAkb1PwD8', '2018-09-15 01:28:43', '2018-09-15 01:28:43'),
(4, 'AppMasters', 'AppMasters@am.com', '$2y$10$gleFCLo.Sj8tyx1SdmEp2ukwlCS6oABTSmbjuc5sHPJB5BN/gY1h2', 'REvV0DavsP9DxezddQ9SxZKS0aGlmrZr72oujZbQzMsA9gNOtKykNxDf2mYd', '2018-09-17 04:07:28', '2018-09-17 04:07:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

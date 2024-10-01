-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 oct. 2024 à 09:37
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `calanques`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`) VALUES
(23, 'Johanna', 'jo@gmail.com', '$2b$10$MTNpaEyvgnQ3y7rN9GsKJ.7Yi/ePu891ENtlBHjJMHflebztEfdmG'),
(2, 'seb', 'seb@gmail.com', '$2b$10$3rWz8PJ3Sm/MzX7AaGGvCedcLkxK5DyqkE.t12BufvpLed06PGVoS'),
(3, 'Joris', 'joris@gmail.com', '$2b$10$PzVSTZ8RE27fW2ifo621g.IsPL3uOcZNoNWaq5eTS4nefSpu8WYpS'),
(4, 'Luc', 'luc@gmail.com', '$2b$10$EnYEsEDzx29stQhfhWZe1ec6R7rve4/nmvtKQbQ/0ifsTekKmfkCK'),
(29, 'toupy', 'toupy@gmail.com', '$2y$10$MyZIeLl6jW4BjCMEOjC25.LWaArTHQQL0n.QBio8JyY0QjkjObUAC'),
(24, 'Alicia', 'alicia@gmail.com', '$2b$10$r6VKjVqFNre0YI1crZTfPOl8Xcqvd7J4yawbziFRsW/45qUfcM002'),
(35, 'Bibi', 'bibi@gmail.com', '$2y$10$0ujVLBzthwYXgTf3fCDw6.ic.2QSdLGPU8SKF30B/9CqsRDzoUp1y'),
(32, 'Lily', 'lily@gmail.com', '$2y$10$lPeBioG1UzXHYiy6mMz7p.ZXqBUP5trCUFXuVgvW996zjv.rzkHBm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 22 mars 2020 à 19:11
-- Version du serveur :  5.7.26
-- Version de PHP : 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `covid`
--

-- --------------------------------------------------------

--
-- Structure de la table `responses`
--

CREATE TABLE `responses` (
  `id` int(50) NOT NULL,
  `time_submit` datetime(6) NOT NULL,
  `GeolocCiudad` varchar(50) NOT NULL,
  `GeolocDepartamento` varchar(50) NOT NULL,
  `GeolocLat` varchar(50) NOT NULL,
  `GeolocLng` varchar(50) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `inputFebre` varchar(50) NOT NULL,
  `infoFebre` varchar(50) DEFAULT NULL,
  `inputTos` varchar(50) NOT NULL,
  `infoTos` varchar(50) DEFAULT NULL,
  `inputRespirar` varchar(50) NOT NULL,
  `infoRespirar` varchar(50) DEFAULT NULL,
  `optionsContacto` varchar(50) NOT NULL,
  `infoContacto` varchar(50) DEFAULT NULL,
  `optionsNumero` varchar(50) NOT NULL,
  `inputTel` int(11) DEFAULT NULL,
  `Iniciales` varchar(50) NOT NULL,
  `inputDigestivos` varchar(50) NOT NULL,
  `infoDigestivos` varchar(50) DEFAULT NULL,
  `optionsContactoOtraPersona` varchar(50) NOT NULL,
  `inputIP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `responses`
--

INSERT INTO `responses` (`id`, `time_submit`, `GeolocCiudad`, `GeolocDepartamento`, `GeolocLat`, `GeolocLng`, `Edad`, `Genero`, `inputFebre`, `infoFebre`, `inputTos`, `infoTos`, `inputRespirar`, `infoRespirar`, `optionsContacto`, `infoContacto`, `optionsNumero`, `inputTel`, `Iniciales`, `inputDigestivos`, `infoDigestivos`, `optionsContactoOtraPersona`, `inputIP`) VALUES
(14, '2020-03-22 14:11:01.000000', 'Cuzco', 'Province de Cuzco', '-13.5206', '-71.9759', 29, 'Masculino', 'no Febre', NULL, 'tos', '1 dia', 'no dificultad a respirar', NULL, 'no', NULL, 'no', NULL, 'm.s.', 'problemas digestivos', '1 dia', 'no', '::1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 17:01:05
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `immobilier`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `cp` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'Appartement situe a 2 Rue Hercule Poirot', '2 Rue Hercule Poirot', 'Lyon', 69003, 60, 1430, 'logement1.jpg', 'vente', 'Très joli T1 meublé avec garage, en étage élevé avec ascenseur, dans une résidence récente sécurisée. Belle pièce de vie avec cuisine semi ouverte aménagée et équipée, les 2 ouvrant sur un balcon à vivre exposé plein Sud, et offrant une vue agréable et sans vis à vis. Grande salle de bains. Les charges comprennent l\'eau froide. Garage fermé en sous-sol de la résidence. Disponible toute de suite Appartement sous conditions assurance GLI (3x montant du loyer et CDI hors période d\'essai) Copropriété de 118 lots.'),
(2, 'Appartement situe a 52 Rue Des Jonquilles ', '52 Rue Des Jonquilles', 'Paris', 75010, 45, 3250, 'logement2.jpg', 'location', 'Ce beau T3/T4 de 104 m² est situé au 2-ème étage avec ascenseur, dans un bel immeuble de 1910. Le séjour et les chambres profitent de superbes cheminées, boiseries, staffs et parquets à bâtons rompus.. Le séjour plein Sud de 31 m² ouvre sur l\'entrée spacieuse qui pourra servir de salle à manger. La chambre sur cour de 19 m² est complétée par une alcôve de 4,5 m² et des grands placards. Belle cuisine équipée donnant côté cour, une buanderie, une salle de bains, un WC. Une seconde chambre de 13,2 m².\r\n\r\n'),
(3, 'Appartement situe a 35 Rue Victor Hugo', '35 Rue Victor Hugo', 'Marseille', 13348, 69, 1500, 'logement3.jpg', 'vente', 'Nous vous proposons un T3 de 66.97M² situé au 3ième étage avec ascenseur. Cet appartement se compose d\'un séjour/cuisine de 27.15M², de 2 chambres avec placards de 12.23M² et 11.50M², une salle de bains et un WC séparés. Vous disposez également d\'une loggia de 6.07M² et d\'un garage en sous-sol.\r\n\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 03:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `animation`
--

CREATE TABLE `animation` (
  `id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animation`
--

INSERT INTO `animation` (`id`, `prix`, `nom`) VALUES
(1, 15, 'test'),
(2, 18, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `animation_event`
--

CREATE TABLE `animation_event` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_animation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `decor`
--

CREATE TABLE `decor` (
  `id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decor`
--

INSERT INTO `decor` (`id`, `prix`, `nom`) VALUES
(1, 22, 'test'),
(2, 22, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `decor_event`
--

CREATE TABLE `decor_event` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_decor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gastrnomie`
--

CREATE TABLE `gastrnomie` (
  `id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gastrnomie`
--

INSERT INTO `gastrnomie` (`id`, `prix`, `nom`) VALUES
(1, 11, 'test'),
(2, 16, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `gastro_event`
--

CREATE TABLE `gastro_event` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_gastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pack`
--

CREATE TABLE `pack` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL,
  `id_decor` int(11) NOT NULL,
  `id_gastro` int(11) NOT NULL,
  `id_animation` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pack`
--

INSERT INTO `pack` (`id`, `nom`, `date_debut`, `date_fin`, `id_decor`, `id_gastro`, `id_animation`, `value`) VALUES
(0, 'Test', '03/29/2019 4:05 AM', '03/30/2019 4:05 AM', 1, 2, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `promotion_animation`
--

CREATE TABLE `promotion_animation` (
  `id` int(11) NOT NULL,
  `id_animation` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date_debut` varchar(250) NOT NULL,
  `date_fin` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion_animation`
--

INSERT INTO `promotion_animation` (`id`, `id_animation`, `value`, `date_debut`, `date_fin`, `image`) VALUES
(12, 1, 198, '03/11/2019 3:47 AM', '03/12/2019 3:47 AM', '1552187824.PNG'),
(19, 1, 19, '03/11/2019 3:47 AM', '03/12/2019 3:47 AM', '1552196817.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_decor`
--

CREATE TABLE `promotion_decor` (
  `id` int(11) NOT NULL,
  `id_decor` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date_debut` varchar(250) NOT NULL,
  `date_fin` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_gastronomie`
--

CREATE TABLE `promotion_gastronomie` (
  `id` int(11) NOT NULL,
  `id_gastro` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date_debut` varchar(250) NOT NULL,
  `date_fin` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion_gastronomie`
--

INSERT INTO `promotion_gastronomie` (`id`, `id_gastro`, `value`, `date_debut`, `date_fin`, `image`) VALUES
(1, 2, 1, '03/11/2019 3:47 AM', '03/12/2019 3:47 AM', '1552196799.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `peudo` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animation_event`
--
ALTER TABLE `animation_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_animation` (`id_animation`);

--
-- Indexes for table `decor`
--
ALTER TABLE `decor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decor_event`
--
ALTER TABLE `decor_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_decor` (`id_decor`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `gastrnomie`
--
ALTER TABLE `gastrnomie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gastro_event`
--
ALTER TABLE `gastro_event`
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_gastro` (`id_gastro`);

--
-- Indexes for table `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_animation`
--
ALTER TABLE `promotion_animation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_animation` (`id_animation`);

--
-- Indexes for table `promotion_decor`
--
ALTER TABLE `promotion_decor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_decor` (`id_decor`);

--
-- Indexes for table `promotion_gastronomie`
--
ALTER TABLE `promotion_gastronomie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotion_gastronomie_ibfk_1` (`id_gastro`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animation`
--
ALTER TABLE `animation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `animation_event`
--
ALTER TABLE `animation_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decor`
--
ALTER TABLE `decor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decor_event`
--
ALTER TABLE `decor_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gastrnomie`
--
ALTER TABLE `gastrnomie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promotion_animation`
--
ALTER TABLE `promotion_animation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `promotion_decor`
--
ALTER TABLE `promotion_decor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion_gastronomie`
--
ALTER TABLE `promotion_gastronomie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animation_event`
--
ALTER TABLE `animation_event`
  ADD CONSTRAINT `animation_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `animation_event_ibfk_2` FOREIGN KEY (`id_animation`) REFERENCES `animation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `decor_event`
--
ALTER TABLE `decor_event`
  ADD CONSTRAINT `decor_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `decor_event_ibfk_2` FOREIGN KEY (`id_decor`) REFERENCES `decor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gastro_event`
--
ALTER TABLE `gastro_event`
  ADD CONSTRAINT `gastro_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gastro_event_ibfk_2` FOREIGN KEY (`id_gastro`) REFERENCES `gastrnomie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion_animation`
--
ALTER TABLE `promotion_animation`
  ADD CONSTRAINT `promotion_animation_ibfk_1` FOREIGN KEY (`id_animation`) REFERENCES `animation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion_decor`
--
ALTER TABLE `promotion_decor`
  ADD CONSTRAINT `promotion_decor_ibfk_1` FOREIGN KEY (`id_decor`) REFERENCES `decor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion_gastronomie`
--
ALTER TABLE `promotion_gastronomie`
  ADD CONSTRAINT `promotion_gastronomie_ibfk_1` FOREIGN KEY (`id_gastro`) REFERENCES `gastrnomie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

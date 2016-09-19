-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2016 at 03:45 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventario`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCateg` int(5) NOT NULL,
  `nomCateg` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCateg`, `nomCateg`) VALUES
(1, 'Frutas'),
(3, 'Verduras'),
(4, 'Abarrotes'),
(5, 'Bebidas');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProd` int(5) NOT NULL,
  `nomProd` varchar(100) NOT NULL,
  `idCatg` int(5) NOT NULL,
  `descProd` varchar(500) NOT NULL,
  `imgProd` varchar(500) NOT NULL,
  `idUM` int(5) NOT NULL,
  `cantProd` int(10) NOT NULL,
  `precioProd` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idProd`, `nomProd`, `idCatg`, `descProd`, `imgProd`, `idUM`, `cantProd`, `precioProd`) VALUES
(13, 'Platano', 1, 'Platano porta Limon', 'platano.jpg', 1, 50, 15.5),
(14, 'Manzana', 1, 'Manzana roja', 'manzana.jpg', 1, 40, 25.9),
(15, 'Coca-Cola 600ml', 5, 'Coca cola 600ml', 'coca600.jpg', 2, 150, 12.5),
(16, 'Pure tomate', 4, 'Pure de tomate La Costeña', 'puretomate.jpg', 3, 2, 5.4),
(17, 'Lechuga', 3, 'Lechuga verde', 'lechuga.jpg', 1, 40, 8.9);

-- --------------------------------------------------------

--
-- Table structure for table `unidadmedida`
--

CREATE TABLE IF NOT EXISTS `unidadmedida` (
  `idUM` int(5) NOT NULL,
  `descUM` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unidadmedida`
--

INSERT INTO `unidadmedida` (`idUM`, `descUM`) VALUES
(1, 'Kg'),
(2, 'Pza'),
(3, 'Caja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCateg`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProd`),
  ADD KEY `idProd` (`idCatg`) USING BTREE,
  ADD KEY `idUM` (`idUM`) USING BTREE;

--
-- Indexes for table `unidadmedida`
--
ALTER TABLE `unidadmedida`
  ADD PRIMARY KEY (`idUM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCateg` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `idProd` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `idUM` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`idCatg`) REFERENCES `categoria` (`idCateg`),
  ADD CONSTRAINT `fk_unidadmedida` FOREIGN KEY (`idUM`) REFERENCES `unidadmedida` (`idUM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

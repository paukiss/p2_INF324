-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 04:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mibase`
--

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `pk_nota` int(11) NOT NULL,
  `ci` int(11) DEFAULT NULL,
  `sigla` varchar(6) DEFAULT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL,
  `nota3` int(11) DEFAULT NULL,
  `notaFinal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`pk_nota`, `ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notaFinal`) VALUES
(1, 10935816, 'INF111', 80, 71, 65, 72),
(2, 10935816, 'INF121', 90, 50, 58, 66),
(3, 10935816, 'INF131', 100, 90, 50, 80),
(4, 10935816, 'INF143', 70, 70, 70, 70),
(5, 12131415, 'MAT114', 65, 65, 65, 65),
(6, 12131415, 'MAT115', 70, 82, 70, 74),
(7, 12131415, 'MAT116', 51, 51, 51, 51),
(8, 9566435, 'MAT114', 55, 55, 55, 55),
(9, 9566435, 'MAT115', 30, 51, 75, 52),
(10, 9566435, 'MAT116', 70, 70, 70, 70),
(11, 989596, 'INF111', 68, 68, 68, 68),
(12, 989596, 'INF121', 30, 51, 75, 52),
(13, 989596, 'INF131', 80, 80, 86, 82),
(14, 989596, 'INF143', 100, 100, 100, 100),
(15, 4685426, 'EST133', 72, 72, 72, 72),
(16, 4685426, 'EST145', 30, 51, 75, 52),
(17, 4685426, 'EST155', 90, 90, 96, 92),
(18, 8546156, 'EST133', 68, 68, 68, 68),
(19, 8546156, 'EST145', 51, 80, 76, 69),
(20, 8546156, 'EST155', 80, 80, 86, 82);

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `ci` int(11) NOT NULL,
  `nombreCompleto` varchar(100) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `departamento` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`ci`, `nombreCompleto`, `fechaNacimiento`, `departamento`) VALUES
(989596, 'Daniel Sanchez', '2001-12-25', 'LP'),
(4685426, 'Sandra Ramirez', '2000-10-17', 'CB'),
(8546156, 'Juana Vargas', '1999-11-20', 'SC'),
(9566435, 'Karen Rocha', '2000-08-05', 'LP'),
(10935816, 'Sergio Alejandro Paucara Saca', '2000-11-05', 'LP'),
(12131415, 'Antonio Banderas', '1985-01-05', 'SC');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ci`, `usuario`, `password`) VALUES
(989596, 'daniel', '123456'),
(4685426, 'sandra', '123456'),
(8546156, 'juana', '123456'),
(9566435, 'karen', '123456'),
(10935816, 'sergio', '123456'),
(12131415, 'antonio', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`pk_nota`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `pk_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

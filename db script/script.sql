-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 15, 2018 at 11:26 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dondecomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`usuario`, `contrasenia`, `email`) VALUES
('kbandala', 'kbandala97', 'k.rbandala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `restaurante`
--

CREATE TABLE `restaurante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `direccion` longtext NOT NULL,
  `precio` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `comida_dia` int(11) NOT NULL,
  `comida_corrida` int(11) NOT NULL,
  `americana` int(11) NOT NULL,
  `mexicana` int(11) NOT NULL,
  `asiatica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurante`
--

INSERT INTO `restaurante` (`id`, `nombre`, `image`, `colonia`, `direccion`, `precio`, `menu`, `comida_dia`, `comida_corrida`, `americana`, `mexicana`, `asiatica`) VALUES
(1, 'Shing Long', 'shinglong2.jpg', 'Contry Tesoro', 'Av. Revolución 3448, Contry Tesoro, 64850 Monterrey, N.L.', 1, 1, 0, 0, 0, 0, 1),
(2, 'Paco\'s burros', 'pacos_PACOSBURROS.jpg', 'Tecnologico', 'Av. Luis Elizondo #150, Alta Vista, 64840 Monterrey, N.L.', 0, 1, 0, 0, 0, 1, 0),
(3, 'Combi tacos', 'combitacos.jpg', 'Tecnológico', 'Filósofos 106, Tecnológico, 64700 Monterrey, N.L.', 1, 1, 0, 0, 0, 1, 0),
(4, 'La granja de los burricos', 'la granja.jpg', 'Tecnológico', 'Filosofos #207 local 7 col. Tecnológico ', 0, 0, 1, 1, 0, 0, 0),
(5, 'Chili\'s', 'large.jpg', 'Nuevo Sur', 'Nuevvo Sur, NL', 2, 1, 0, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `votacion`
--

CREATE TABLE `votacion` (
  `restaurante_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votacion`
--

INSERT INTO `votacion` (`restaurante_id`, `total`) VALUES
(2, 1),
(3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votacion`
--
ALTER TABLE `votacion`
  ADD PRIMARY KEY (`restaurante_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `votacion`
--
ALTER TABLE `votacion`
  ADD CONSTRAINT `votacion_ibfk_1` FOREIGN KEY (`restaurante_id`) REFERENCES `restaurante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2016 at 12:18 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wca`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `idCategory` int(11) NOT NULL,
  `Category` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`idCategory`, `Category`) VALUES
(1, 'Sedan');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `idCustomers` int(11) NOT NULL,
  `Fullname` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Manufacturer`
--

CREATE TABLE `Manufacturer` (
  `idManufacturer` int(11) NOT NULL,
  `Manufacturer` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Manufacturer`
--

INSERT INTO `Manufacturer` (`idManufacturer`, `Manufacturer`) VALUES
(1, 'Audi');

-- --------------------------------------------------------

--
-- Table structure for table `Salespersons`
--

CREATE TABLE `Salespersons` (
  `idSalespersons` int(11) NOT NULL,
  `Fullname` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Shoppingcart`
--

CREATE TABLE `Shoppingcart` (
  `idShoppingcart` int(11) NOT NULL,
  `Stocknumber` int(11) NOT NULL,
  `idCustomers` int(11) NOT NULL,
  `idSalespersons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Vehiclelist`
--

CREATE TABLE `Vehiclelist` (
  `Stocknumber` int(11) NOT NULL,
  `Manufacturer` varchar(24) DEFAULT NULL,
  `Model` varchar(24) DEFAULT NULL,
  `Category` varchar(24) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Price` varchar(10) DEFAULT NULL,
  `Kilometres` varchar(10) DEFAULT NULL,
  `Colour` varchar(24) DEFAULT NULL,
  `Registration` varchar(24) DEFAULT NULL,
  `Vin` varchar(24) DEFAULT NULL,
  `Cylinders` int(11) DEFAULT NULL,
  `Fuel` varchar(24) DEFAULT NULL,
  `Transmission` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vehiclelist`
--

INSERT INTO `Vehiclelist` (`Stocknumber`, `Manufacturer`, `Model`, `Category`, `Year`, `Price`, `Kilometres`, `Colour`, `Registration`, `Vin`, `Cylinders`, `Fuel`, `Transmission`) VALUES
(1000, 'Audi', 'A4', 'Sedan', 2016, '25,000', '0', 'Black', '123456', '123456', 6, 'Petrol', 'Auto'),
(123456, 'Audi', 'Cool', 'Sedan', 1998, '123455', '1234', 'Black', '12345', '12334', 6, 'Petrol', 'Auto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `Category_UNIQUE` (`Category`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`idCustomers`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexes for table `Manufacturer`
--
ALTER TABLE `Manufacturer`
  ADD PRIMARY KEY (`idManufacturer`),
  ADD UNIQUE KEY `Manufacturer_UNIQUE` (`Manufacturer`);

--
-- Indexes for table `Salespersons`
--
ALTER TABLE `Salespersons`
  ADD PRIMARY KEY (`idSalespersons`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD UNIQUE KEY `Username_UNIQUE` (`Username`);

--
-- Indexes for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  ADD PRIMARY KEY (`idShoppingcart`,`Stocknumber`,`idCustomers`,`idSalespersons`),
  ADD KEY `Stocknumber_idx` (`Stocknumber`),
  ADD KEY `idCustomers_idx` (`idCustomers`),
  ADD KEY `idSalespersons_idx` (`idSalespersons`);

--
-- Indexes for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  ADD PRIMARY KEY (`Stocknumber`),
  ADD UNIQUE KEY `Stocknumber_UNIQUE` (`Stocknumber`),
  ADD UNIQUE KEY `Vin_UNIQUE` (`Vin`),
  ADD KEY `Category_idx` (`Category`),
  ADD KEY `Manufacturer_idx` (`Manufacturer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `idCustomers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Manufacturer`
--
ALTER TABLE `Manufacturer`
  MODIFY `idManufacturer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Salespersons`
--
ALTER TABLE `Salespersons`
  MODIFY `idSalespersons` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  MODIFY `idShoppingcart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  MODIFY `Stocknumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  ADD CONSTRAINT `Stocknumber` FOREIGN KEY (`Stocknumber`) REFERENCES `Vehiclelist` (`Stocknumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idCustomers` FOREIGN KEY (`idCustomers`) REFERENCES `Customers` (`idCustomers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idSalespersons` FOREIGN KEY (`idSalespersons`) REFERENCES `Salespersons` (`idSalespersons`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  ADD CONSTRAINT `Category` FOREIGN KEY (`Category`) REFERENCES `Category` (`Category`),
  ADD CONSTRAINT `Manufacturer` FOREIGN KEY (`Manufacturer`) REFERENCES `Manufacturer` (`Manufacturer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

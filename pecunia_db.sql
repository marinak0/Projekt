-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 08:45 AM
-- Server version: 8.0.22
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pecunia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_administratora` int NOT NULL,
  `korisnicko_ime` varchar(45) NOT NULL,
  `lozinka` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_administratora`, `korisnicko_ime`, `lozinka`) VALUES
(1, 'marina', 'fesb1234'),
(2, 'rudi', 'rudi1');

-- --------------------------------------------------------

--
-- Table structure for table `mjenjacnica`
--

CREATE TABLE `mjenjacnica` (
  `naziv_mjenjacnice` varchar(50) NOT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `telefon` varchar(45) DEFAULT NULL,
  `radno vrijeme` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mjenjacnica`
--

INSERT INTO `mjenjacnica` (`naziv_mjenjacnice`, `adresa`, `mail`, `telefon`, `radno vrijeme`) VALUES
('Pecunia', 'Put Trnoružice 60', 'pecunia@pecunia.hr', '021 834 659', '08:00-20:00');

-- --------------------------------------------------------

--
-- Table structure for table `tecajna_lista`
--

CREATE TABLE `tecajna_lista` (
  `id_liste` int NOT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tecajna_lista`
--

INSERT INTO `tecajna_lista` (`id_liste`, `datum`) VALUES
(1, '2016-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `valuta`
--

CREATE TABLE `valuta` (
  `drzava` varchar(50) NOT NULL,
  `sifra_valute` int NOT NULL,
  `valuta` varchar(45) NOT NULL,
  `jedinica` int NOT NULL DEFAULT '1',
  `kupovni_devize` decimal(7,6) NOT NULL,
  `srednji_devize` decimal(7,6) NOT NULL,
  `prodajni_devize` decimal(7,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `valuta`
--

INSERT INTO `valuta` (`drzava`, `sifra_valute`, `valuta`, `jedinica`, `kupovni_devize`, `srednji_devize`, `prodajni_devize`) VALUES
('Australija', 36, 'AUD', 1, '4.819645', '4.834147', '4.848649'),
('Kanada', 124, 'CAD', 1, '4.905766', '4.920528', '4.935290'),
('Češka', 203, 'CZK', 1, '0.288817', '0.289686', '0.290555'),
('Danska', 208, 'DKK', 1, '1.014959', '1.018013', '1.021067'),
('Mađarska', 348, 'HUF', 100, '2.098672', '2.104987', '2.111302'),
('Japan', 392, 'JPY', 100, '6.004433', '6.022500', '6.040568'),
('Norveška', 578, 'NOK', 1, '0.732488', '0.734692', '0.736896'),
('Švedska', 752, 'SEK', 1, '0.745941', '0.748186', '0.750431'),
('Švicarska', 756, 'CHF', 1, '7.014097', '7.035203', '7.056309'),
('Velika Britanija', 826, 'GBP', 1, '8.499351', '8.524926', '8.550501'),
('SAD', 840, 'USD', 1, '6.224216', '6.242945', '6.261674'),
('Bosna i Hercegovina', 977, 'BAM', 1, '3.860240', '3.871856', '3.883472'),
('EMU', 978, 'EUR', 1, '7.549974', '7.572692', '7.595410'),
('Poljska', 985, 'PLN', 1, '1.662843', '1.667847', '1.672851');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_administratora`);

--
-- Indexes for table `mjenjacnica`
--
ALTER TABLE `mjenjacnica`
  ADD PRIMARY KEY (`naziv_mjenjacnice`);

--
-- Indexes for table `tecajna_lista`
--
ALTER TABLE `tecajna_lista`
  ADD PRIMARY KEY (`id_liste`);

--
-- Indexes for table `valuta`
--
ALTER TABLE `valuta`
  ADD PRIMARY KEY (`sifra_valute`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_administratora` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Lis 2020, 22:50
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin2020`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `id` int(11) NOT NULL,
  `dataZadania` date DEFAULT NULL,
  `wpis` text DEFAULT NULL,
  `miesiac` text DEFAULT NULL,
  `rok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zadania`
--

INSERT INTO `zadania` (`id`, `dataZadania`, `wpis`, `miesiac`, `rok`) VALUES
(201, '2020-08-01', 'Remont', 'sierpien', 2020),
(202, '2020-08-02', 'Remont', 'sierpien', 2020),
(203, '2020-08-03', 'Remont', 'sierpien', 2020),
(204, '2020-08-04', 'Remont', 'sierpien', 2020),
(205, '2020-08-05', '', 'sierpien', 2020),
(206, '2020-08-06', '', 'sierpien', 2020),
(207, '2020-08-07', 'Rower', 'sierpien', 2020),
(208, '2020-08-08', 'Rower', 'sierpien', 2020),
(209, '2020-08-09', '', 'sierpien', 2020),
(210, '2020-08-10', '', 'sierpien', 2020),
(211, '2020-08-11', 'Weterynarz - Dika', 'sierpien', 2020),
(212, '2020-08-12', '', 'sierpien', 2020),
(213, '2020-08-13', 'Sopot', 'sierpien', 2020),
(214, '2020-08-14', 'Sopot', 'sierpien', 2020),
(215, '2020-08-15', '', 'sierpien', 2020),
(216, '2020-08-16', '', 'sierpien', 2020),
(217, '2020-08-17', 'Wyjazd na wakacje', 'sierpien', 2020),
(218, '2020-08-18', 'Tatry', 'sierpien', 2020),
(219, '2020-08-19', 'Tatry', 'sierpien', 2020),
(220, '2020-08-20', 'Tatry', 'sierpien', 2020),
(221, '2020-08-21', 'Tatry', 'sierpien', 2020),
(222, '2020-08-22', 'Tatry', 'sierpien', 2020),
(223, '2020-08-23', 'Tatry', 'sierpien', 2020),
(224, '2020-08-24', 'Tatry', 'sierpien', 2020),
(225, '2020-08-25', '', 'sierpien', 2020),
(226, '2020-08-26', '', 'sierpien', 2020),
(227, '2020-08-27', '', 'sierpien', 2020),
(228, '2020-08-28', '', 'sierpien', 2020),
(229, '2020-08-29', 'Weterynarz - Dika', 'sierpien', 2020),
(230, '2020-08-30', '', 'sierpien', 2020),
(231, '2020-08-31', '', 'sierpien', 2020),
(101, '2020-07-01', 'Projekt z programowania', 'lipiec', 2020),
(102, '2020-07-02', 'Projekt z programowania', 'lipiec', 2020),
(103, '2020-07-03', '', 'lipiec', 2020),
(104, '2020-07-04', '', 'lipiec', 2020),
(105, '2020-07-05', '', 'lipiec', 2020),
(106, '2020-07-06', '', 'lipiec', 2020),
(107, '2020-07-07', 'Weterynarz - Brutus', 'lipiec', 2020),
(108, '2020-07-08', '', 'lipiec', 2020),
(109, '2020-07-09', '', 'lipiec', 2020),
(110, '2020-07-10', 'Szczepienie', 'lipiec', 2020),
(111, '2020-07-11', '', 'lipiec', 2020),
(112, '2020-07-12', '', 'lipiec', 2020),
(113, '2020-07-13', '', 'lipiec', 2020),
(114, '2020-07-14', '', 'lipiec', 2020),
(115, '2020-07-15', '', 'lipiec', 2020),
(116, '2020-07-16', '', 'lipiec', 2020),
(117, '2020-07-17', '', 'lipiec', 2020),
(118, '2020-07-18', 'Wyjazd na wakacje!', 'lipiec', 2020),
(119, '2020-07-19', 'Mielno', 'lipiec', 2020),
(120, '2020-07-20', 'Mielno', 'lipiec', 2020),
(121, '2020-07-21', 'Mielno', 'lipiec', 2020),
(122, '2020-07-22', 'Mielno', 'lipiec', 2020),
(123, '2020-07-23', 'Mielno', 'lipiec', 2020),
(124, '2020-07-24', 'Mielno', 'lipiec', 2020),
(125, '2020-07-25', '', 'lipiec', 2020),
(126, '2020-07-26', '', 'lipiec', 2020),
(127, '2020-07-27', '', 'lipiec', 2020),
(128, '2020-07-28', '', 'lipiec', 2020),
(129, '2020-07-29', 'Weterynarz - Brutus', 'lipiec', 2020),
(130, '2020-07-30', 'Warszawa', 'lipiec', 2020),
(131, '2020-07-31', 'Warszawa', 'lipiec', 2020);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

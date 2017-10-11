-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Paź 2017, 19:53
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `newssystem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`CategoryID`, `Name`) VALUES
(1, 'Administrator'),
(2, 'Czytelnik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `ComentID` int(11) NOT NULL,
  `NewsID` int(11) NOT NULL,
  `Text` text COLLATE utf16_polish_ci NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`ComentID`, `NewsID`, `Text`, `Date`, `Author`) VALUES
(1, 1, 'SUPER ARTYKUŁ', '2017-10-19 05:16:15', 2),
(2, 4, 'loloo', '2017-10-10 09:10:37', 1),
(3, 9, 'asd', '2017-10-25 09:29:30', 2),
(4, 2, 'asd', '2017-10-12 06:22:22', 1),
(5, 3, 'asdddd', '2017-10-17 16:47:45', 2),
(6, 9, 'dziala', '2017-10-06 22:00:00', 2),
(7, 9, 'dgdfhgxfxgf', '2017-10-04 11:26:23', 2),
(8, 9, 'jestem bogiem', '2017-10-26 08:28:30', 1),
(9, 4, 'ddddddd', '2017-10-09 18:53:48', 1),
(22, 4, '', '0000-00-00 00:00:00', 3),
(23, 4, 'asdsa', '0000-00-00 00:00:00', 3),
(24, 4, 'sad', '2017-10-10 17:44:38', 3),
(25, 4, 'SUPER', '2017-10-10 17:44:58', 3),
(28, 3, 'sad', '2017-10-10 17:49:38', 3),
(29, 13, 'heh', '2017-10-11 14:59:48', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `likes`
--

CREATE TABLE `likes` (
  `LikeID` int(11) NOT NULL,
  `NewsID` int(11) NOT NULL,
  `is_like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `Title` varchar(250) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Text` text CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`NewsID`, `Title`, `Text`, `Date`, `Author`) VALUES
(1, 'tytul1', 'tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 tekst1 ', '2017-09-27 16:39:28', 1),
(2, 'tytul2', 'tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 tekst2 ', '2017-10-01 15:53:27', 1),
(3, 'tytul 3', 'tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 tekst 3 ', '2017-10-01 18:21:13', 1),
(4, 'tytul4', 'tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 tresc 4 ', '2017-10-01 18:32:17', 1),
(9, 'tytul5', 'tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 tresc 5 ', '2017-10-01 18:32:32', 1),
(10, 'tytul6', 'teskt 66', '2017-10-07 15:13:44', 2),
(11, 'lorem ipsu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In est nibh, tincidunt ac nunc sit amet, molestie iaculis est. Mauris id aliquam tellus, non pharetra odio. Ut ut enim aliquet, iaculis est eget, commodo felis. Aliquam at tristique diam. Nam in feugiat magna, tempus ullamcorper orci. Vivamus condimentum lobortis faucibus. Aenean mauris lectus, consectetur eget lectus eget, tempor mollis dui. Cras egestas ex sed erat ultrices mattis. Nulla mi diam, accumsan a pulvinar vel, efficitur quis odio. Nunc et quam a ante consectetur rhoncus varius pellentesque enim. Nunc auctor magna nec turpis mattis elementum a porttitor magna.\r\n\r\nSuspendisse sed libero eu est eleifend tempor id a dui. In sagittis diam at lorem venenatis, nec sodales tellus iaculis. Integer et iaculis libero. Suspendisse potenti. Ut nec efficitur ipsum. Curabitur arcu ante, molestie vitae mi ut, finibus malesuada risus. Morbi ultrices et magna id congue. Duis molestie finibus lectus ac egestas. Donec condimentum arcu eros, at commodo nulla accumsan et. Fusce et justo risus. Etiam laoreet vestibulum orci eget tincidunt. Integer sed felis auctor, bibendum sapien vehicula, facilisis nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur lobortis sit amet neque vel consectetur. Cras sodales dapibus diam at blandit.\r\n\r\nCurabitur elementum odio vitae quam tristique dignissim. Sed vel lacus mollis, iaculis enim sed, ultrices ante. Maecenas ut porta justo. Fusce varius ex non metus porta fermentum. Nam aliquam sit amet lorem non sagittis. Aenean tempor tempus varius. Integer id velit lectus. Nulla pharetra fringilla purus, sit amet sagittis nulla egestas id. Maecenas elementum rhoncus orci in semper. Cras lobortis et elit sit amet placerat. Quisque feugiat risus in nisl suscipit, tincidunt iaculis mi lacinia.\r\n\r\nSed id sollicitudin libero. Phasellus et blandit justo, id elementum turpis. Pellentesque ultrices sapien eget ante dapibus mollis. Sed sed sapien ut enim laoreet gravida. Cras orci metus, porta quis lacinia sed, venenatis vitae quam. Pellentesque blandit urna in ullamcorper ultrices. Integer sollicitudin lorem mauris. Proin feugiat dolor in enim ullamcorper, sit amet semper sem iaculis.\r\n\r\nDuis elementum ligula in velit mattis varius. Aenean malesuada vestibulum magna. Etiam pharetra erat quis nisi euismod dictum. Donec id fringilla arcu, ullamcorper tempor dui. Suspendisse augue justo, maximus vitae lorem quis, ultricies aliquet velit. Etiam non pharetra urna. Vivamus mattis felis eu nisi mattis tristique. Nam fermentum augue id nisi maximus, auctor tincidunt dolor volutpat. Aliquam sem felis, sollicitudin a eros vitae, maximus efficitur diam.', '2017-10-07 18:10:07', 1),
(13, 'tytul 7', 'tresc 7', '2017-10-11 16:59:11', 1),
(15, 'tytul 8', 'tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 tekst 8 ', '2017-10-11 17:09:44', 2),
(16, 'tytul 9', 'tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 tekst 9 ', '2017-10-11 17:10:46', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `Firstname` varchar(25) COLLATE utf16_polish_ci NOT NULL,
  `Surname` varchar(25) COLLATE utf16_polish_ci NOT NULL,
  `Nick` varchar(25) COLLATE utf16_polish_ci NOT NULL,
  `Passwd` varchar(25) COLLATE utf16_polish_ci NOT NULL,
  `Category` int(11) NOT NULL,
  `Ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userID`, `Firstname`, `Surname`, `Nick`, `Passwd`, `Category`, `Ban`) VALUES
(1, 'Piotr', 'Sułkowski', 'piter292922', 'lellel', 1, 0),
(2, 'Hohol', 'Lololol', 'admin', 'admin', 1, 0),
(3, 'Grzesiek', 'Ociepka', 'user1', 'user1', 2, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ComentID`),
  ADD KEY `Author` (`Author`),
  ADD KEY `NewsID` (`NewsID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `NewsID` (`NewsID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`),
  ADD KEY `AutorID` (`Author`),
  ADD KEY `Autor` (`Author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `Category` (`Category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `ComentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT dla tabeli `likes`
--
ALTER TABLE `likes`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`NewsID`) REFERENCES `news` (`NewsID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`Author`) REFERENCES `users` (`userID`);

--
-- Ograniczenia dla tabeli `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`NewsID`) REFERENCES `news` (`NewsID`);

--
-- Ograniczenia dla tabeli `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `users` (`userID`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `category` (`CategoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

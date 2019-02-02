-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 02 2019 г., 17:43
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `usersgroup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `userservis`
--

CREATE TABLE `userservis` (
  `id` int(11) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `surname` varchar(70) DEFAULT NULL,
  `years` varchar(20) NOT NULL DEFAULT '1',
  `genus` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userservis`
--

INSERT INTO `userservis` (`id`, `name`, `surname`, `years`, `genus`, `email`, `password`, `repassword`) VALUES
(1, 'Alexander', 'Moskov', '24', 'male', 'alexss09@gmail.com', '123', '123'),
(3, 'Anna', 'Panratova', '25', 'V', 'svetamos1@gmail.com', '', 'qwert'),
(10, 'Agatha', 'MacDonald', '45', 'v', 'svetamos1@gmail.com', '', '222'),
(11, 'Albert', 'Oâ€™Connor', '46', 'm', 'svetmos1@gmail.com', '', '22254'),
(12, 'Adam', 'Gordon', '34', 'm', 'svetmgggos1@gmail.com', '', '237');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `userservis`
--
ALTER TABLE `userservis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `userservis`
--
ALTER TABLE `userservis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

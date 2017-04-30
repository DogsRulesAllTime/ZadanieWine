-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 30 2017 г., 18:00
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uchet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `payment`
--

CREATE TABLE `payment` (
  `id_pay` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `month` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payment`
--

INSERT INTO `payment` (`id_pay`, `user`, `money`, `month`) VALUES
(1, 1, 10, '2017-01-01'),
(2, 1, 11, '2017-02-01'),
(3, 1, 12, '2017-03-01'),
(4, 1, 13, '2017-04-01'),
(5, 1, 14, '2017-05-01'),
(6, 1, 15, '2017-06-01'),
(7, 1, 16, '2017-07-01'),
(8, 1, 17, '2017-08-01'),
(9, 1, 18, '2017-09-01'),
(10, 1, 19, '2017-10-01'),
(11, 2, 20, '2017-01-01'),
(12, 2, 21, '2017-02-01'),
(13, 2, 22, '2017-03-01'),
(14, 2, 23, '2017-04-01'),
(15, 2, 24, '2017-05-01'),
(16, 2, 25, '2017-06-01'),
(17, 2, 26, '2017-07-01'),
(18, 2, 17, '2017-08-01'),
(19, 2, 28, '2017-09-01'),
(20, 2, 29, '2017-10-01');

-- --------------------------------------------------------

--
-- Структура таблицы `professions`
--

CREATE TABLE `professions` (
  `id_prof` int(11) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `professions`
--

INSERT INTO `professions` (`id_prof`, `profession`) VALUES
(1, 'Buhgalter'),
(2, 'Courier'),
(3, 'Manager');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `prof` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id_user`, `name`, `surname`, `prof`, `photo`) VALUES
(1, 'ivan', 'ivanq', 1, '/img/1.jpg'),
(2, 'pavel', 'pavelq', 2, '/img/2.jpg'),
(3, 'ivan', 'ivanw', 1, '/img/3.jpg'),
(4, 'pavel', 'pavelv', 2, '/img/4.jpg'),
(5, 'maria', 'mariaa', 2, '/img/5.jpg'),
(6, 'elena', 'elenk', 3, '/img/6.jpg'),
(7, 'roma', 'roman', 1, '/img/1.jpg'),
(8, 'nicolay', 'kolya', 3, '/img/2.jpg'),
(9, 'anton', 'tony', 2, '/img/3.jpg'),
(10, 'masha', 'bensh', 2, '/img/4.jpg'),
(11, 'helen', 'forn', 3, '/img/5.jpg'),
(12, 'rick', 'astley', 1, '/img/6.jpg'),
(13, 'meme', 'memes', 3, '/img/1.jpg'),
(14, 'stop', 'it', 3, '/img/2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_pay`),
  ADD KEY `id_pay` (`id_pay`),
  ADD KEY `id_pay_2` (`id_pay`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id_prof`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `id_prof_2` (`id_prof`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `payment`
--
ALTER TABLE `payment`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `professions`
--
ALTER TABLE `professions`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

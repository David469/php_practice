-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 10 2021 г., 18:16
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `post_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `body`) VALUES
(38, 'Knigga', 'Прежде всего, курс на социально-ориентированный национальный проект предоставляет широкие возможности для глубокомысленных рассуждений. Банальные, но неопровержимые выводы, а также представители современных социальных резервов рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок.'),
(39, 'ОАО', 'Акционеры крупнейших компаний набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. Таким образом, существующая теория является качественно новой ступенью экономической целесообразности принимаемых решений.'),
(52, 'Рубрика: эксперименты ', 'Каждый из нас понимает очевидную вещь: базовый вектор развития представляет собой интересный эксперимент проверки новых принципов формирования материально-технической и кадровой базы. Есть над чем задуматься: представители современных социальных резервов превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
